<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TopicController extends Controller
{
    protected $topicContent;
    protected $dashboardTopic;
    protected $userAttributesJson;
    protected $isStudent = false;

    public function openDashboardTopic($value)
    {
        $dashboardTopic = ['selectedTopic' => $value];
        $isStudent  = Session::get('user') != null;
        if ($isStudent) {
            $userAttributesJson = json_encode(Session::get('user', []));
            return view('topic', compact('dashboardTopic', 'userAttributesJson', 'isStudent'));
        } else {
            return view('topic', compact('dashboardTopic','isStudent'));
        }
    }


    public function openTopic($value)
    {
        switch ($value) {
            case 1:
                return view('topic_one');
                break;
            case 2:
                return view('topic_two');
                break;
            case 3:
                return view('topic_three');
                break;
            case 4:
                return view('topic_four');
                break;
            case 5:
                return view('topic_five');
                break;
            case 6:
                return view('topic_six');
                break;
            case 7:
                return view('topic_seven');
                break;
            case 8:
                return view('topic_eight');
                break;
            default:
                return view('topic_one');
                break;
        }
    }
}
