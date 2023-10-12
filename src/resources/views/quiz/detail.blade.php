<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>1問ずつ表示する個別ページだよ</h1>
  <p>{{$question->text}}</p>
  <p class="mt-4 p-4">
      {{$question->supplement}}
    </p>
    <hr class="w-full">
  @foreach($question->choices as $choice)
  <div class="mt-4 p-8 bg-white w-full rounded-2xl">
      <p>{{$choice->text}}</p>
  </div>
  @endforeach
</body>
</html>