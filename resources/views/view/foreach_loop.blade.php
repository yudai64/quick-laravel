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
      <th>値</th>
      <th>index</th>
      <th>iteration</th>
      <th>count</th>
      <th>first</th>
      <th>last</th>
      <th>even</th>
      <th>odd</th>
      <th>depth</th>
    </tr>
    @foreach($weeks as $week)
    @continue($loop->odd)
    <tr>
      <td>{{ $week }}</td>
      <td>{{ $loop->index }}</td>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $loop->count }}</td>
      <td>{{ $loop->first }}</td>
      <td>{{ $loop->last }}</td>
      <td>{{ $loop->even }}</td>
      <td>{{ $loop->odd }}</td>
      <td>{{ $loop->depth }}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
