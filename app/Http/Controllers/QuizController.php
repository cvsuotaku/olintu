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

    public function calculateTaxonomyLevel($percentage)
    {
        if ($percentage <= 30) {
            return 'Remember';
        } elseif ($percentage <= 50) {
            return 'Understand';
        } elseif ($percentage <= 70) {
            return 'Apply';
        } elseif ($percentage <= 90) {
            return 'Analyze';
        } elseif ($percentage <= 95) {
            return 'Evaluate';
        } else {
            return 'Create';
        }
    }

    public function gradeQuiz(Request $request)
    {
        try {
            $answers = $request->input('selectedAnswers');
            $questions = $request->input('questions');
            $indexCounter = 0;
            $gradeCounter = 0;

            foreach ($questions as $question) {
                if (!empty($question) && isset($answers[$indexCounter])) {
                    if ($question['answer'] == $answers[$indexCounter]) {
                        $gradeCounter++;
                    }
                }
                $indexCounter++;
            }

            $percentage = ($gradeCounter / count($questions)) * 75;
            $taxonomyLevel = $this->calculateTaxonomyLevel($percentage);

            // Generate a new Grade ID
            $gradeId = (string) Str::uuid();

            $grade = new Grade([
                'GRADE_ID' => $gradeId,
                'STUDENT_ID' => (string) Str::uuid(),
                'TOPIC' => $questions[0]['topic'],
                'SCORE' => $gradeCounter . ' out of ' . count($questions),
                'PERCENTAGE' => $percentage,
                'TAXONOMY_LEVEL' => $taxonomyLevel,
            ]);

            $grade->save();

            Session::put('grade', $gradeId);

            // Pass taxonomy level to the view
            return response()->json(['success' => true, 'message' => $gradeId, 'taxonomyLevel' => $taxonomyLevel]);
        } catch (\Exception $e) {
            // Log or dd() the exception message to see what's going wrong
            Log::error($e->getMessage());
            // Handle the error appropriately, redirect or display an error message
            return response()->json(['success' => false, 'message' => 'An error occurred while grading the quiz.']);
        }
    }

}
