<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <p>{{$quiz->name}}</p>
</body>
<h1>クイズ{{$quiz->id}}</h1>
  <p>{{$quiz->name}}</p>

  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>

  <div class="mt-4 p-8 bg-white w-full rounded-2xl">

  </div>
</html>