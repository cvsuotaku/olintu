@extends('layouts.topic_content')
@section('content')
<nav class="p-4 text-white" style="background-color: #2E6D32;">
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold">{{$lesson->title}}</h1>
    </div>
</nav>
<section class="mb-8">
    <livewire:quiz :questions="$questions" :answer="$answer">
    {{-- @livewire('quiz',['questions'=>$questions]) --}}
 </section>

