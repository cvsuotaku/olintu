<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    protected $topicContent;


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
