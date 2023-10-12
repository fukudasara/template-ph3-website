<?php

namespace App\Http\Controllers;

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
        $quizzes = Quiz::paginate(20);
        return view('admin.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

        session()->flash('message', '更新しました');
        return redirect()->route('admin.index', ['quizId' => $quizId])->with('success', '更新しましたwww');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
