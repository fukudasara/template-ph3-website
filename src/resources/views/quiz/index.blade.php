<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
@if (session("success"))
    <div class="alert alert-danger">
        {{ session("success") }}
    </div>
@endif
  <h1>クイズ一覧</h1>
  @foreach ($quizzes as $quiz)
  <a href="{{ route('quiz.show',['quizId'=> $quiz->id]); }}">{{$quiz->name}}</a>
  @endforeach
</body>
</html>
