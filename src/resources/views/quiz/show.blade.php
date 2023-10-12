<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
@if (session("success"))
    <div class="alert alert-danger">
        {{ session("success") }}
    </div>
@endif
  <h1>クイズ{{$quiz->id}}</h1>
  <p>{{$quiz->name}}</p>

  <a href="#modal" class="block w-fit">このクイズを削除</a>
<div id="modal" class="hidden target:block">
    <div class="block w-full h-full bg-black/70 absolute top-0 left-0">
    <a href="#" class="block w-full h-full cursor-default"></a>
        <div class="px-20 py-20 w-3/4 mx-auto mt-20 relative -top-full bg-white h-[300px] rounded-lg">
          <p>本当にこのクイズを削除しますか？</p>
            <form method="POST" action="{{ route('quiz.delete', ['quizId' => $quiz->id]) }}" >
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-4">はい！！！！</button>
            </form>
        </div>
    </div>
</div>



  @foreach($quiz->questions as $question)
  <div class="mt-4 p-8 bg-white w-full rounded-2xl">
    <a href="{{ route('quiz.detail',['quizId'=> $quiz->id ,'questionId'=> $question->id]); }}">
      {{$question->text}}
    </a>
    <hr class="w-full">
    <p class="mt-4 p-4">
      {{$question->supplement}}
    </p>
    @foreach($question->choices as $choice)
      <p>{{$choice->text}}</p>
    @endforeach
  </div>
  <button>削除</button>
  <form method="GET" action="{{ route('quiz.edit', ['quizId' => $quiz->id, 'questionId' => $question->id]) }}">
    @csrf
    <button type="submit">編集</button>
  </form>

  <form method="GET" action="{{ route('quiz.detail', ['quizId' => $quiz->id, 'questionId' => $question->id]) }}">
    @csrf
    <button type="submit">詳細</button>
  </form>

  @endforeach
</body>
</html>