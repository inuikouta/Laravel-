<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>新規登録</h2>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" style="margin-bottom: 10px"  value="{{ old('name') }}"/><br>
        <input type="email" name="email" style="margin-bottom: 10px" value="{{ old('email') }}"/>
        @error('email')
        {{ $message }}
        @enderror
        <br>
        <input type="password" name="password" style="margin-bottom: 10px">
        @error('password')
        {{ $message }}
        @enderror
        <br>
        <input type="password" name="password_confirmation" style="margin-bottom: 10px">
        @error('password_confirmation')
        {{ $message }}
        @enderror
        <button>登録</button>
    </form>
    <a href="./login">ログイン</a>
</body>
</html>