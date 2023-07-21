<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Quiz;
use App\Models\Totalmarks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{

    public function setquizview()
    {
        $course = Course::latest()->get();
        return view('admin.addquiz', \compact('course'));
    }

    public function addquiz(Request $request)
    {
        $exam = new Exam();
        $exam->title = $request->title;
        $exam->course_id = $request->course_id;
        $exam->save();
        $id = $exam->id;

        return redirect()->route('admin.setquestion.view', \compact('exam'))->with('success', 'Quiz set successfully!');
    }

    public function setquestionsview(Exam $exam)
    {
        $id = $exam->id;
        return view('admin.questions', \compact('id'));
    }

    public function addQuestion(Request $request)
    {

        $validatedData = $request->validate([
            'exam_id' => 'required|integer',
            'question' => 'required|string',
            'options' => 'required|array',
            'options.*' => 'required|string',
            'correct_option' => 'required|integer',
        ]);

        $question = Quiz::create([
            'question' => $validatedData['question'],
            'exam_id' => $validatedData['exam_id'],
            'options' => json_encode($validatedData['options']),
            'correct_option' => $validatedData['correct_option'],
        ]);

        return redirect()->back()->with('success', 'Question added successfully.');
    }

    public function userquizview()
    {
        $quiz = Exam::latest()->get();
        return view('user.quiz', \compact('quiz'));
    }

    public function userquestionsview(Exam $exam)
    {
        $userId = Auth::user()->id;
        $id = $exam->id;
        $existingAttempt = Totalmarks::where('user_id', $userId)
            ->where('quiz_id', $id)
            ->first();

        if ($existingAttempt) {
            // Redirect the user or display an error message indicating that they have already attempted the quiz
            return redirect()->back()->with('success', 'Question added successfully.');
        }

        $questions = Quiz::where('exam_id', $exam->id)->get()->all();
        foreach ($questions as $question) {
            $question->options = json_decode($question->options, true);
        }


        return view('user.questions', \compact('questions', 'id'));
    }

    public function submit(Request $request)
    {
        $answers = $request->input('answers');
        $score = '0';

        foreach ($answers as $questionId => $selectedOption) {
            $question = Quiz::find($questionId);
            if ($question && $question->correct_option == $selectedOption) {
                $score++;
            }
        }

        // Store the total marks for the user
        $userScore = new Totalmarks();
        $userScore->user_id = Auth::user()->id; // Assuming you have authentication in place
        $userScore->quiz_id = $request->quiz_id;
        $userScore->mark = $score;
        $userScore->save();

        return redirect()->back()->with('success', 'Quiz completed.');
    }
}
