<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>クイズ新規作成ページへようこそ！</h1>
    <div class="container">
        <h1>クイズを新規作成する</h1>
        
        <form method="POST" action="{{ route('admin.store') }}">
            @csrf <!-- CSRFトークンを含める -->

            <div class="form-group">
                <label for="name">クイズタイトル</label>
                <input type="text" class="form-control" id="title" name="newQuiz" required placeholder="パンダクイズ">
            </div>
            <div class="form-group">
                <label for="name">設問</label>
                <input type="text" class="form-control" id="title" name="newQuestion" required placeholder="パンダのしっぽは何色でしょう？">
            </div>
            <div class="form-group">
                <label for="name">補足情報</label>
                <input type="text" class="form-control" id="title" name="newSupplement" required placeholder="パンダの尻尾は丸いよ">
            </div>
            <div class="form-group">
                <label for="name">選択肢1</label>
                <input type="text" class="form-control" id="title" name="newChoice1" required placeholder="白色">
            </div>
            <div class="form-group">
                <label for="name">選択肢1の正誤</label>
                <select class="form-control" id="title" name="isCorrect1" required placeholder="白色">
                  <option value="1">正解</option>
                  <option value="0">間違い</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">選択肢2</label>
                <input type="text" class="form-control" id="title" name="newChoice2" required placeholder="黒色">
            </div>
            <div class="form-group">
                <label for="name">選択肢2の正誤</label>
                <select class="form-control" id="title" name="isCorrect2" required placeholder="白色">
                  <option value="1">正解</option>
                  <option value="0">間違い</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">選択肢3</label>
                <input type="text" class="form-control" id="title" name="newChoice3" required placeholder="紫色">
            </div>
            <div class="form-group">
                <label for="name">選択肢3の正誤</label>
                <select class="form-control" id="title" name="isCorrect3" required placeholder="白色">
                  <option value="1">正解</option>
                  <option value="0">間違い</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">画像</label>
                <input type="text" class="form-control" id="title" name="newImage" required placeholder="/image/sample.jpg">
            </div>
            <button type="submit" class="btn btn-primary">Create Quiz</button>
        </form>
    </div>


</body>
</html>