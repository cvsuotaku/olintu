<?php

namespace App\Http\Controllers;

use App\Models\lessoComponent;
use Illuminate\Http\Request;
use App\Models\lsesson;
use App\Models\question;
use Storage;
class lessonManagement extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lessons = lsesson::get();
        return view('lessonManagement',['lessons'=>$lessons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id = null)
    {
        $lesson = lsesson::where('lessonId',$id)->with(['component'])->first();        
        // dd($lesson);
        
        return view('webbuilder',['lesson'=>$lesson]);
    }
    public function storeComponent( $id = null, Request $request){

        $request->validate([
            'type' => ['required'],
            'data' => ['required', 'string'],
        ]);
        $input = $request->all();
        lessoComponent::create([
            'lessonId'=>$id,
            'type'=>$input['type'],
            'data'=>$input['data'],  
        ]);
        return redirect()->back()->with(['success'=>'The component have been save successfully']);
    }

    public function createCode($id = null, Request $request){
        $request->validate([
            'title' => ['required'],
            'code' => ['required', 'string'],
        ]);
        $input = $request->all();
        $format_title = str_replace(' ','_',$input['title']);
        lessoComponent::create([
            'lessonId'=>$id,
            'type'=>'code',
            'data'=>$format_title,  
        ]);

        // editing for creating txt file
        Storage::put($format_title.'.txt', $input['code']);
        return redirect()->back()->with(['success'=>'The component have been save successfully']);
    }
    public function update_lesson_name($id = null , Request $request){
        $lesson = lsesson::where('lessonId',$id)->with(['component'])->first(); 
        $request->validate([
            'lesson' => ['required', 'string', 'max:255'],
        ]);
        $input = $request->all();
        $lesson->title = $input['lesson'];
        $lesson->save();
        return redirect()->back()->with(['success'=>'The Lesson Name have been update successfully']);

    }

    public function update_component($id = null , Request $request){
        $request->validate([
            'type' => ['required'],
            'data' => ['required', 'string'],
        ]);
        $input = $request->all();
        $component = lessoComponent::where('component_id',$id)->first(); 
        $component->type = $input['type'];
        $component->data = $input['data'];
        $component->save();
        return redirect()->back()->with(['success'=>'The Component have been update successfully']);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function delete_component($id = null){
        $component = lessoComponent::where('component_id',$id)->first(); 
        $component->delete();
        return redirect()->back()->with(['success'=>'The component have been deleted successfully']);
    }
    public function storeLesson(Request $request){
        $request->validate([
            'lesson' => ['required', 'string', 'max:255'],
            'summary' => ['required', 'string'],

        ]);
        $input = $request->all();
        lsesson::create([
            'title'=>$input['lesson'],
            'summary'=>$input['summary']

        ]);
        return redirect()->route('lesson_managementss')->with(['success'=>'The Lesson have been save successfully']);

    }
    public function store(Request $request)
    {
        //
    }
    public function storeQuestion($id = null , Request $request){
        $request->validate([
            'type'=> ['required'],
            'question'=> ['required', 'string', 'max:255'],
            'answer'=> ['required', 'string', 'max:255'],
        ]);
        $input = $request->all();
        question::create([
            'lessonId'=>$id,
            'type'=>$input['type'],
            'question'=>$input['question'],
            'answer'=>$input['answer']
        ]);
        return redirect()->back()->with(['success'=>'The Question have been save successfully']);
    
    }


    public function updateQuestion($id = null , Request $request){
        $request->validate([
            'type'=> ['required'],
            'question'=> ['required', 'string', 'max:255'],
            'answer'=> ['required', 'string', 'max:255'],
        ]);
        $input = $request->all();
        $question = question::where('question_id',$id)->first();
        $question->type = $input['type'];
        $question->question = $input['question'];
        $question->answer = $input['answer'];
        $question->save();
        return redirect()->back()->with(['success'=>'The Question have been update successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lesson = lsesson::where('lessonId',$id)->with(['component','question'])->first();        
        return view('lessonViewer',['lesson'=>$lesson]);
    }

    public function showQuestion($id){
        $lesson = lsesson::where('lessonId',$id)->with(['question'])->first();        
        // dd($answer1);
        // $questions = question::getByLessonId(1)->map->getAttributes()->shuffle()->all();
        $questions = question::where('lessonid',1)->get();
        $shufle_question = $questions->shuffle();        
        $answer = $questions->pluck('answer');
        $questions->map(function($question){
            if($question->type == "multiple"){
                return $question->answer = array([$question->answer,'fake_answ',"fake"]);
            }
        });
        // dd($answer);
        // return view('questionViewer',['lesson's=>$lesson,'questions'=>$shufle_question,"answer"=>$answer ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    }
    public function destroyLesson($id = null){

        $lesson = lsesson::where('lessonId',$id)->first();
        $lesson->delete();
        return redirect()->back()->with(['successdelete'=>'The Lesson Info have been deleted successfully']);
    }
}
