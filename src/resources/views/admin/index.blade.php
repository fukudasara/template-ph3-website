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
    <h2>{{ session("success") }}</h2>
  </div>
  @endif
  <h1 class="text-2xl font-bold">管理者画面にようこそ！</h1>
  <h1 class="text-xl text-blue-600">クイズ一覧</h1>
  <a href="{{ route('admin.create'); }}" class="w-56 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">クイズタイトルを新規作成</a><br>

  @foreach ($quizzes as $quiz)
  @if($quiz->deleted_at !== null)
    <a href="{{ route('admin.edit',['quizId'=> $quiz->id]); }}" class="leading-10 text-red-500">{{$quiz->name}}</a><br>
    <button disabled class="bg-gray-500 text-white font-bold py-2 px-4 rounded">このクイズは削除済みだよ</button><br>
  @else
  <a href="{{ route('admin.edit',['quizId'=> $quiz->id]); }}" class="leading-10">{{$quiz->name}}</a>
  <form method="post" action="{{ route('admin.destroy',['quizId'=> $quiz->id]); }}" class="mb-4" ><br>
  @csrf
  @method('delete')
    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">このクイズを削除</button>
  </form><br>
  @endif

  @endforeach

  <p>{{ $quizzes->links() }}</p>
</body>

</html>