<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>グループ所属確認</h1>
    <table border="10px">
        @foreach ($content as $item)
        <tr>
            <th>{{$item->name}}</th>
            <td>
                @if ($item->books != null)
                @foreach ($item->books as $it)
                    <p>{{$it->title}}</p>
                @endforeach
                @else
                <h1>ないです</h1>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/">戻る</a>
</body>
</html>