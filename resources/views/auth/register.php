<?php
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
    <title>Register - Dean Tech</title>
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
            padding: 20px 0;
        }
        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 500px;
            width: 100%;
            margin: 20px;
        }
        .register-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .register-body { padding: 2rem; }
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
        .btn-register {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
        }
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
            color: white;
        }
        .alert { border-radius: 10px; border: none; }
        .login-link { text-align: center; margin-top: 1.5rem; }
        .login-link a { color: #667eea; font-weight: 600; text-decoration: none; }
        .login-link a:hover { text-decoration: underline; }
        .company-logo {
            width: 60px; height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
        }
        .required-field::after { content: " *"; color: red; }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <div class="company-logo"><i class="fas fa-code"></i></div>
            <h1>Dean Tech</h1>
            <p>Create Your Account</p>
        </div>
        <div class="register-body">
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
                    Please fix the errors below.
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo $baseUrl; ?>/register">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="form-floating">
                    <input type="text" class="form-control <?php echo $errors->has('name') ? 'is-invalid' : ''; ?>"
                           id="name" name="name" placeholder="Full Name" value="<?php echo htmlspecialchars(old('name') ?? ''); ?>" required>
                    <label for="name" class="required-field"><i class="fas fa-user me-2"></i>Full Name</label>
                    <?php if ($errors->has('name')): ?>
                        <div class="invalid-feedback"><?php echo htmlspecialchars($errors->first('name')); ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control <?php echo $errors->has('email') ? 'is-invalid' : ''; ?>"
                           id="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars(old('email') ?? ''); ?>" required>
                    <label for="email" class="required-field"><i class="fas fa-envelope me-2"></i>Email Address</label>
                    <?php if ($errors->has('email')): ?>
                        <div class="invalid-feedback"><?php echo htmlspecialchars($errors->first('email')); ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-floating">
                    <input type="tel" class="form-control <?php echo $errors->has('phone') ? 'is-invalid' : ''; ?>"
                           id="phone" name="phone" placeholder="Phone Number" value="<?php echo htmlspecialchars(old('phone') ?? ''); ?>">
                    <label for="phone"><i class="fas fa-phone me-2"></i>Phone Number</label>
                    <?php if ($errors->has('phone')): ?>
                        <div class="invalid-feedback"><?php echo htmlspecialchars($errors->first('phone')); ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control <?php echo $errors->has('password') ? 'is-invalid' : ''; ?>"
                           id="password" name="password" placeholder="Password" required>
                    <label for="password" class="required-field"><i class="fas fa-lock me-2"></i>Password</label>
                    <?php if ($errors->has('password')): ?>
                        <div class="invalid-feedback"><?php echo htmlspecialchars($errors->first('password')); ?></div>
                    <?php endif; ?>
                    <div class="form-text text-muted small mt-1">
                        <i class="fas fa-info-circle me-1"></i>
                        Must be at least 8 characters with uppercase, lowercase, number, and special character.
                    </div>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control"
                           id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                    <label for="password_confirmation" class="required-field"><i class="fas fa-lock me-2"></i>Confirm Password</label>
                </div>

                <button type="submit" class="btn btn-register">
                    <i class="fas fa-user-plus me-2"></i>Create Account
                </button>
            </form>

            <div class="login-link">
                <p class="mb-0">Already have an account?
                    <a href="<?php echo $baseUrl; ?>/login">Sign In here</a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
