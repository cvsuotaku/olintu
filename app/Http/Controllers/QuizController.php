<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Log;
use App\Models\Grade;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function loadQuiz(Request $request)
    {
        $topic = $request->input('topic');
        $questions = Quiz::getByTopic($topic)->map->getAttributes()->shuffle()->all();
        return view('quiz', compact('questions'));
    }

    public function gradeQuiz(Request $request)
    {
        $answers = $request->input('selectedAnswers');
        $questions = $request->input('questions');
        $indexCounter = 0;
        $gradeCounter = 0;
        foreach ($questions as $question) {

            // Do something with the question and its matching answer

            if ($question['answer'] == $answers[$indexCounter]) {
                $gradeCounter++;
                Log::info("Question: {$question['question']}, Answer: {$answers[$indexCounter]} is correct");
            } else {
                Log::info("Question: {$question['question']}, Answer: {$answers[$indexCounter]} is wrong");
            }
            $indexCounter++;
        }
        $percentage = ($gradeCounter / count($questions)) * 100;

        try {
            $gradeId = (string) Str::uuid();
            $grade = new Grade([
                'GRADE_ID' => $gradeId,
                'STUDENT_ID' => (string) Str::uuid(),
                'TOPIC' => $questions[0]['topic'],
                'SCORE' => $gradeCounter . ' out of ' . count($questions),
                'PERCENTAGE' => $percentage
            ]);
            $grade->save();
        } catch (\Exception $e) {
            // Log or dd() the exception message to see what's going wrong
            Log::error($e->getMessage());
        }
        Session::put('grade', $gradeId);
        return response()->json(['success' => true, 'message' => $gradeId]);
    }
}
