<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Kids Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #0b1c45; height: 100vh; display: flex; align-items: center; font-family: 'Poppins', sans-serif; }
        .login-card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .btn-login { background: #ffc107; font-weight: bold; width: 100%; border-radius: 25px; border: none; padding: 10px; }
        .btn-login:hover { background: #e0a800; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login-card">
                    <h3 class="text-center mb-4" style="color: #0b1c45;">Admin Login</h3>
                    
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('admin.login.submit') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required placeholder="Enter Username">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required placeholder="Enter Password">
    </div>
    <button type="submit" class="btn btn-login">Login</button>
</form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>