<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ro'yxatdan o'tish</title>
</head>

<body>
    <h1>Ro'yxatdan o'tish</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ism" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Parol" required>
        <input type="password" name="password_confirmation" placeholder="Parolni tasdiqlash" required>
        <button type="submit">Ro'yxatdan o'tish</button>
    </form>
    <a href="{{ route('login') }}">Login sahifasi</a>
</body>

</html>