<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-2xl font-bold">管理者画面にようこそ！</h1>
  <h1 class="text-xl text-blue-600">クイズ一覧</h1>
  @foreach ($quizzes as $quiz)
  <a href="{{ route('admin.edit',['quizId'=> $quiz->id]); }}" class="leading-10">{{$quiz->name}}</a><br>
  @endforeach
  <p>{{ $quizzes->links() }}</p>
</body>
</html>