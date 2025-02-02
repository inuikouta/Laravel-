<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>ログイン画面</h2>
    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" placeholder="メール"><br>
        <input type="password" name="password" placeholder="パスワード">
        <button>ログイン</button>
    </form>
    <a href="/register">新規登録</a>
</body>
</html>