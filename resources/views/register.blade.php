<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre" required><br>
        <input type="email" name="email" placeholder="Correo electrónico" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
