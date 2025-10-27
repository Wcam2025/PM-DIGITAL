<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PM DIGITAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    <h2>Bem-vindo, {{ $user->name }}!</h2>
    <p class="text-muted">Você está logado na plataforma PM DIGITAL.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger mt-3">Sair</button>
    </form>
</div>
</body>
</html>
