<?php
// Auth pages don't use the main layout - standalone pages
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptDir = dirname($_SERVER['SCRIPT_NAME'] ?? '/');
$baseUrl = rtrim($scriptDir, '/');
if ($baseUrl === '' || $baseUrl === '\\' || $baseUrl === '/') $baseUrl = '';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Dean Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            margin: 20px;
        }
        .login-left {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .login-left h1 { font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); }
        .login-left p { font-size: 1.1rem; opacity: 0.9; line-height: 1.6; }
        .login-right { padding: 3rem; background: white; }
        .login-header { text-align: center; margin-bottom: 2rem; }
        .login-header h2 { color: #333; font-weight: 600; margin-bottom: 0.5rem; }
        .login-header p { color: #666; margin-bottom: 0; }
        .form-floating { margin-bottom: 1.5rem; }
        .form-floating > label { padding: 1rem 0.75rem; }
        .form-floating > .form-control {
            padding: 1rem 0.75rem;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .form-floating > .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            width: 100%;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
            color: white;
        }
        .alert { border-radius: 10px; border: none; }
        .company-logo {
            width: 80px; height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }
        .feature-item { display: flex; align-items: center; margin-bottom: 1rem; }
        .feature-item i { margin-right: 1rem; color: #ffd700; }
        @media (max-width: 768px) {
            .login-container { flex-direction: column; }
            .login-left { padding: 2rem 1.5rem; }
            .login-right { padding: 2rem 1.5rem; }
        }
    </style>
</head>
<body>
    <div class="login-container d-flex">
        <div class="login-left col-md-6">
            <div class="company-logo"><i class="fas fa-code"></i></div>
            <h1>Dean Tech</h1>
            <p>Professional IT Solutions for Tanzanian Businesses</p>
            <div class="features mt-4">
                <div class="feature-item"><i class="fas fa-check-circle"></i><span>Custom Software Development</span></div>
                <div class="feature-item"><i class="fas fa-check-circle"></i><span>Network Administration</span></div>
                <div class="feature-item"><i class="fas fa-check-circle"></i><span>Mobile App Development</span></div>
                <div class="feature-item"><i class="fas fa-check-circle"></i><span>24/7 Technical Support</span></div>
            </div>
        </div>
        <div class="login-right col-md-6">
            <div class="login-header">
                <h2>Welcome Back</h2>
                <p>Please sign in to your admin account</p>
            </div>

            <?php if (session('status')): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i>
                    <?php echo htmlspecialchars(session('status')); ?>
                </div>
            <?php endif; ?>

            <?php if (session('error')): ?>
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <?php echo htmlspecialchars(session('error')); ?>
                </div>
            <?php endif; ?>

            <?php if ($errors->any()): ?>
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <?php echo htmlspecialchars($errors->first()); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo $baseUrl; ?>/login">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="form-floating">
                    <select class="form-select" id="role" name="role" required>
                        <option value="">Choose Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    <label for="role"><i class="fas fa-user-tag me-2"></i>Role</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Email or Username" required>
                    <label for="username"><i class="fas fa-user me-2"></i>Email or Username</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                </div>

                <button type="submit" class="btn btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                </button>
            </form>

            <div class="text-center mt-4">
                <small class="text-muted"><i class="fas fa-shield-alt me-1"></i>Secure admin access only</small>
            </div>
            <div class="text-center mt-3">
                <p class="mb-0 text-muted">Don't have an account?
                    <a href="<?php echo $baseUrl; ?>/register" class="text-decoration-none"><strong>Register here</strong></a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
