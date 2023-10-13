<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::withTrashed()->paginate(20);
        return view('admin.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーション：フォームデータの検証
        $request->validate([
            'newQuiz' => 'required|string|max:199', // タイトルは必須で最大199文字まで
        ]);

        $quizCreate = Quiz::create([
            'name' => $request->post('newQuiz'),
        ]);
        $lastInsertQuizID = $quizCreate->id;

        $questionCreate = Question::create([
            'image' => $request->post('newImage'),
            'text' => $request->post('newQuestion'),
            'supplement' => $request->post('newSupplement'),
            'quiz_id' => $lastInsertQuizID,
        ]);

        $lastInsertQuestionID = $questionCreate->id;

        $choiceCreate = Choice::create([
            'text' => $request->post('newChoice1'),
            'is_correct' => $request->post('isCorrect1'),
            'question_id' => $lastInsertQuestionID,
        ]);
        $choiceCreate = Choice::create([
            'text' => $request->post('newChoice2'),
            'is_correct' => $request->post('isCorrect2'),
            'question_id' => $lastInsertQuestionID,
        ]);
        $choiceCreate  = Choice::create([
            'text' =>$request->post( 'newChoice3'),
            'is_correct' => $request->post('isCorrect3'),
            'question_id' => $lastInsertQuestionID,
        ]);



        // クイズモデルを作成してデータをセット
        $quiz = new Quiz;
        $quiz->name = $request->input('newQuiz');

        $question = new Question;
        $question->text = $request->input('newQuestion');

        $choice = new Choice;
        $choice->text = $request->input('newChoice');


        // クイズを保存
        // $quiz->save();
        // $question->save();
        // $choice->save();

        // リダイレクトまたはレスポンスを返す
        return redirect()->route('admin.index')->with('success', 'クイズが作成されましてよ！！');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $quizId)
    {
        $quiz = Quiz::with('questions')->find($quizId);
        // $quiz = Quiz::findOrFail($quizId);
        return view('admin.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $quizId,)
    {
        $quizId = intval($quizId);

        $validated = $request->validate([
            'text' => 'required|max:60',
        ]);
        $validated['user_id'] = auth()->id();

        $texts = $request->input('text');
        $supplements = $request->input('supplement');
        $choices = $request->input('choice');
        // $quiz = Quiz::findOrFail($quizId);
        foreach ($texts as $key => $text) {
            $question = Question::with('choices')->find($key);
            $question->update([
                'text' => $text,
                'supplement' => $supplements[$key],
            ]);
            foreach ($choices[$key] as $index => $choice) {
                Choice::find($index)->update(['text' => $choice]);
            };
        };

        return redirect()->route('admin.index', ['quizId' => $quizId])->with('success', '更新しましたwww');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $quizId)
    {
        $quiz = Quiz::find($quizId);
        $quiz->delete();
        return redirect()->route('admin.index')->with('success', '削除しちゃったお');
    }
}
