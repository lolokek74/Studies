<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница регистрации</title>
</head>
<body>
<form action="{{ route('register') }}" method="POST">
    @if(session()->has('success'))
        <h3>Операция регистрации успешно выполнена !</h3>
        @endif
        @csrf
        <input type="text" name="name" placeholder="Ваше имя:"><br>
        @error('name')<p>{{ $message }}</p>@enderror
        <input type="email" name="email" placeholder="Ваша почта:"><br>
        @error('email')<p>{{ $message }}</p>@enderror
        <input type="password" name="password" placeholder="Ваш пароль:"><br>
        @error('password')<p>{{ $message }}</p>@enderror
        <input type="password" name="password_confirmation" placeholder="Ваш пароль повторно:"><br>
        @error('password')<p>{{ $message }}</p>@enderror
        <input type="submit" value="Регистрация">
</form>
</body>
</html>
