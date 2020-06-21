<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>速習laravel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <table class="table">
  <tr>
    <th>No.</th>
    <th>書名</th>
    <th>価格</th>
    <th>出版社</th>
    <th>刊行日</th>
  </tr>
  @foreach ($records as $id => $record)
  <tr>
    <td>{{$id + 1}}</td>
    <td>{{$record->title}}</td>
    <td>{{$record->price}}円</td>
    <td>{{$record->publisher}}</td>
    <td>{{$record->published}}</td>
  </tr>
  @endforeach
  </table>
</body>
</html>