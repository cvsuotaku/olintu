@extends('layouts.topic_content')
@section('content')
<nav class="p-4 text-white" style="background-color: #2E6D32;">
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold">{{$lesson->title}}</h1>
    </div>
</nav>
<section class="mb-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @foreach($lesson->question as $component)
            @switch($component->type)
                @case('multiple')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <p class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                            {{$component->question}}
                        </p>
             
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">     {{$component->answer}}
                            </label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                SHuitzuz
                            </label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 
                                Phytonista
                            </label>
                        </div>            
                    </div>                            
                    @break
                @case('identification')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <p class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                            {{$component->question}}
                        </p>
                        <input type="text" name="answer" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xx-xx-xx" required value="">
                    </div> 
                    @break
                @case('fill')
                    <div class="flex flex-wrap w-full mb-10 flex-col">
                        <p class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                            {{$component->question}}
                        </p>
                        <input type="text" name="answer" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xx-xx-xx" required value="">
                    </div> 
                    @break
                @case('code')
                    <div class="demo-code ">
                        <p class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                            {{$component->question}}
                        </p>
                        <input type="text" name="answer" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xx-xx-xx" required value="">
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
        <div class="flex flex-wrap w-full mb-10 flex-col">
            <a href="{{ route('ide', ['topic' => 1, 'exercise' => 1]) }}" target="_blank">
                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </a>                    
        </div>
    </div>
</section>

