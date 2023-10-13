<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function delete(string $quizId)
    {
        $quiz=Quiz::find($quizId);
        $quiz->delete();
        return redirect()->route('quiz.index')->with('success', '削除しましたwww');

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $quizId)
    {
        // $quiz = Quiz::findOrFail($id);
        $quiz = Quiz::with('questions')->find($quizId);
        return view('quiz.show', compact('quiz'));
    }

    public function detail(string $quizId,$questionId)
    {   
        $quiz = Quiz::with('questions')->find($quizId);
        if(!$quiz->questions->contains('id', $questionId)){
            abort(404);
        }
        $question = Question::with('choices')->find($questionId);
        return view('quiz.detail', compact('quiz','question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $quizId,$questionId)
    {
        $quiz = Quiz::with('questions')->find($quizId);
        if(!$quiz->questions->contains('id', $questionId)){
            abort(404);
        }
        $question = Question::with('choices')->find($questionId);
        // $quiz = Quiz::findOrFail($quizId);
        return view('quiz.edit', compact('quiz', 'question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $quizId,$questionId)
    {
        $quizId = intval($quizId);

        $validated = $request->validate([
            'text' =>'required|max:60',
        ]);
        $validated['user_id'] = auth()->id();

        // $quiz = Quiz::findOrFail($quizId);

        $question = Question::with('choices')->find($questionId);
        $question->update($validated);

        // session()->flash('message', '更新しました');
        return redirect()->route('quiz.show', ['quizId' => $quizId])->with('success', '更新しましたwww');

        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
