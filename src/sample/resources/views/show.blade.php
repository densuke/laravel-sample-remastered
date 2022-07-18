<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ詳細</title>
</head>
<body>
{{ $memo->text }}
<br>
<a href="{{ route('memo.delete', ['id' => $memo->id]) }}">削除</a>
<a href={{ route('memo.list')}}>一覧に戻る</a>
</body>
</html>
