<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>{{$quiz->name}}</h1>
  
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>

  <form method="post" action="{{route('admin.update',['quizId' => $quiz->id])}}">
    @foreach ($quiz->questions as $question)
    <div class="mt-4 p-8 bg-white w-full rounded-2xl">
      @csrf
      @method('patch')
      <input type="text" name="text[{{$question->id}}]" value="{{$question->text}}">
      <hr class="w-full">
      <input type="text" name="supplement[{{$question->id}}]" value="{{$question->supplement}}">
      @foreach($question->choices as $choice)
      <input type="text" name="choice[{{$question->id}}][{{$choice->id}}]" value="{{$choice->text}}">
      @endforeach
    </div>
    @endforeach
    <button>送信</button>
  </form>
</body>
</html>