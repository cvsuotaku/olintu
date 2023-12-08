<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Grade;

class DashboardController extends Controller
{
    protected $grade;

    public function validateSession()
    {
        if (Session::get('user') != null) {
            return redirect()->route('student.dashboard');
        } else {
            return redirect()->route('guest');
        }
    }


    public function getAllTopicProgress()
    {
        $isStudent  = Session::get('user') != null;
        if ($isStudent) {
            $this->grade = Grade::getByStudentId(Session::get('user', [])['STUDENT_ID']);
            $currentProgress =  [
                $this->getTProgress(1),
                $this->getTProgress(2),
                $this->getTProgress(3),
                $this->getTProgress(4),
                $this->getTProgress(5),
                $this->getTProgress(6),
                $this->getTProgress(7),
                $this->getTProgress(8),
            ];

            // Initialize counters
            $passedCount = 0;
            $failedCount = 0;
            $notStartedCount = 0;

            // Iterate through the topics and tally the counts
            foreach ($currentProgress as $progress) {
                switch ($progress) {
                    case 'Passed':
                        $passedCount++;
                        break;
                    case 'Failed':
                        $failedCount++;
                        break;
                    case 'Not Started':
                        $notStartedCount++;
                        break;
                        // Handle other statuses if needed
                }
            }

            return response()->json(['success' => true, 'result' => [
                'progress' => $currentProgress,
                'todo' => $notStartedCount, 'ongoing' => $failedCount, 'done' => $passedCount
            ], 'isStudent' => $isStudent]);
        } else {
            return response()->json(['success' => true, 'result' => [], 'isStudent' => $isStudent]);
        }
    }

    public function getTProgress($topic)
    {
        $this->grade = Grade::getByStudentId(Session::get('user', [])['STUDENT_ID']);
        $topicProgress = collect($this->grade)->isEmpty() ? false : collect($this->grade)->contains(function ($g) use ($topic) {
            return $g['TOPIC'] ==
                $topic &&
                $g['PERCENTAGE'] >= 80;
        });
        if (!$topicProgress) {
            $isFailed = collect($this->grade)->isEmpty() ? false : collect($this->grade)->contains(function ($g) use ($topic) {
                return $g['TOPIC'] == $topic;
            });
            if ($isFailed) {
                return 'Failed';
            } else {
                return 'Not Started';
            }
        } else {
            return 'Passed';
        }
    }
}
