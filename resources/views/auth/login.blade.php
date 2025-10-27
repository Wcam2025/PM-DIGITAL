<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PM DIGITAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #004aad, #00b4d8);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div class="login-card">
    <h4 class="text-center mb-4">PM DIGITAL</h4>
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember">Lembrar-me</label>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
</div>
</body>
</html>
