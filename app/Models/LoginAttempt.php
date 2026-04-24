<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginAttempt extends Model
{
    protected $fillable = [
        'ip_address',
        'username',
        'attempts',
        'locked_until',
    ];

    protected $casts = [
        'locked_until' => 'datetime',
        'attempts' => 'integer',
    ];

    /**
     * Check if the given IP is currently locked out.
     */
    public static function isLocked(string $ipAddress): bool
    {
        $attempt = self::where('ip_address', $ipAddress)
            ->where('locked_until', '>', now())
            ->first();

        return $attempt !== null;
    }

    /**
     * Get remaining lockout time in seconds.
     */
    public static function lockoutSeconds(string $ipAddress): int
    {
        $attempt = self::where('ip_address', $ipAddress)
            ->where('locked_until', '>', now())
            ->first();

        return $attempt ? now()->diffInSeconds($attempt->locked_until) : 0;
    }

    /**
     * Record a failed login attempt.
     */
    public static function recordAttempt(string $ipAddress, ?string $username = null): void
    {
        $attempt = self::firstOrCreate(
            ['ip_address' => $ipAddress],
            ['attempts' => 0, 'username' => $username]
        );

        $attempt->increment('attempts');
        $attempt->username = $username;

        // Lock after 5 failed attempts for 15 minutes
        if ($attempt->attempts >= 5) {
            $attempt->locked_until = now()->addMinutes(15);
        }

        $attempt->save();
    }

    /**
     * Clear login attempts for an IP.
     */
    public static function clearAttempts(string $ipAddress): void
    {
        self::where('ip_address', $ipAddress)->delete();
    }
}
