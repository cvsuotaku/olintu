@extends('layouts.app')
@section('title', 'OLINTU - Settings')
@section('content')
<section class="text-gray-600 body-font">
    <!-- Navigation -->
    <nav class="p-4 text-white" style="background-color: #2E6D32;">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">OLINTU - Grade</h1>
        </div>
    </nav>
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Your Grade is:</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
                Topic {{ $grade->TOPIC }} - Score {{$grade->SCORE}}
                <br>
                PERCENT {{$grade->PERCENTAGE}}%
                <br>
                Bloom's Taxonomy Level: {{ $grade->TAXONOMY_LEVEL }}

            </p>
        </div>

        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">"Education is the passport to the future." - Malcolm X</h1>
        </div>
    <a href="{{ route('guest')}}">back</a>

    </div>
</section>
@endsection

