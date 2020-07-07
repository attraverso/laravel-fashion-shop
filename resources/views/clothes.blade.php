<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=@fore, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>ID</th>
      <th>internal code</th>
      <th>season</th>
      <th>collection</th>
    </tr>
    @foreach ($clothes as $clothing_item)
        <tr>
          <td>{{ $clothing_item -> id }}</td>
          <td>{{ $clothing_item -> internal_code }}</td>
          <td>{{ $clothing_item -> season }}</td>
          <td>{{ $clothing_item -> collection }}</td>
        </tr>
    @endforeach
  </table>
</body>
</html>