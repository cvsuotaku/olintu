<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Quiz extends Component
{
    public $question ;
    public $answer = [];
    public function mount($questions){
        $this->question = $questions;
    }
    public function render()
    {
        // dd($this->question);
        return view('livewire.quiz',['questions'=>$this->question]);
    }
    public function send_answer(){
        $validator = Validator::make(
            ['answer'=>$this->answer],
            ['answer'=>"required"],

        )->validate();
        dd($this->answer);  
    }
}
