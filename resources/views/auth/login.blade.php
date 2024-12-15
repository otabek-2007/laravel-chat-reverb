<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kirish</title>
</head>

<body>
    <h1>Kirish</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Parol" required>
        <button type="submit">Kirish</button>
    </form>
    <a href="{{ route('register') }}">Ro'yxatdan o'tish</a>
</body>

</html>