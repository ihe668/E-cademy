<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function setquizview()
    {
        return view('admin.quiz');
    }

    public function addQuestion(Request $request)
    {

        $validatedData = $request->validate([
            'question' => 'required|string',
            'options' => 'required|array',
            'options.*' => 'required|string',
            'correct_option' => 'required|integer',
        ]);

        $question = Quiz::create([
            'question' => $validatedData['question'],
            'options' => json_encode($validatedData['options']),
            'correct_option' => $validatedData['correct_option'],
        ]);

        return redirect()->back()->with('success', 'Question added successfully.');
    }

    // Other controller methods...
}
