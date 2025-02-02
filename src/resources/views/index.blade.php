<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <style>

    </style>
</head>

<body>
    <h1>{{ $content }}</h1>

    @if (session('middleTest'))
        <h2>{{session('middleTest')}}</h2>
    @else
        <h2>まだフラッシュデータがありません</h2>
    @endif

    <form action="/" method="POST">
        @csrf
        <input type="text" name="content">
        <input type="submit">
    </form>
    <table>
        <tr>
            <th>名前</th>
        </tr>
        @foreach ($name as $n)
            <tr>
                <td>
                    {{ $n->name }}
                </td>
                <td>
                    {{$n->getDetail()}}
                </td>
            </tr>
        @endforeach
        <br>
    </table>
    <form action="/logout" method="post">
        @csrf
        <button>ログアウト</button>
    </form>
</body>

</html>
