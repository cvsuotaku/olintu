<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Quiz extends Component
{
    public $question ;
    public $u_answer = [];
    public $answers;
    public function mount($questions,$answer){
        $this->question = $questions;
        $this->answers = $answer;
    }
    public function render()
    {
        // dd($this->question->pluck(function($question){
        //     if($question)
        //     return 
        // }));
        // dd($this->answers);
        return view('livewire.quiz',['questions'=>$this->question]);
    }
    public function send_answer(){
        $validator = Validator::make(
            ['u_answer'=>$this->u_answer],
            ['u_answer'=>"required"],
        )->validate();
        dd( $this->answers);
        $result = array_intersect($this->u_answer, $this->answers);
        dd($result);  
    }
}
