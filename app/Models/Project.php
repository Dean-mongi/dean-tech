<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'technologies',
        'client_id',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}