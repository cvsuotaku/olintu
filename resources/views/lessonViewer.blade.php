@extends('layouts.topic_content')
@section('content')
<nav class="p-4 text-white" style="background-color: #2E6D32;">
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold">{{$lesson->title}}</h1>
    </div>
</nav>
<section class="mb-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div>
            <br>
            <button type="submit" style="float: left;" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-700 hover:bg-green-800 dark:focus:ring-primary-800">
                <a href="{{route('student.dashboard')}}" >
                    Back
                </a>
            </button>
        </div>
        @foreach($lesson->component as $component)
            @switch($component->type)
                @case('h1')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                            {{$component->data}}
                        </h1>
                    </div>                            
                    @break
                @case('span')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <span class="font-small  mb-2 text-gray-900">
                            {{$component->data}}
                        </span>
                    </div> 
                    @break
                @case('paragraph')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <p class="font-small  mb-2 text-gray-900">
                            {{$component->data}}
                        </p>
                    </div> 
                    @break
                @case('code_snipet')
                    <div class="demo-code ">
                        <code>
                            {{$component->data}}
                        </code>
                    </div>
                    @break
                @case('code')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <a href="{{ route('ide', ['title' => $component->data]) }}" target="_blank">
                            <button class="run-button">try this code</button>
                        </a>
                    </div>
                    @break
                @case('note')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <p class="lead">
                            {{$component->data}}
                        </p>
                    </div> 
                    @break
                @default                    
            @endswitch
            @if (session('success'))
                <span class="text-sm text-red-500" >
                    {{ session('success') }}
                </span>
            @endif
        @endforeach
        @if(count($lesson->question)>0)
        <div class="flex flex-wrap w-full mb-10 flex-col">
            <a href="{{ URL('question_id/'.$lesson->lessonId) }}" target="_blank">
                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Quiz Here !!!!!!!!</button>
            </a>                    
        </div>
        @endif
    </div>
</section>

