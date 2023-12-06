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
        <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Your Grade is:</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
                <b>Topic {{ $grade->TOPIC }}</b> - Score {{$grade->SCORE}}
                <br>
                <b>PERCENT:</b> {{$grade->PERCENTAGE}}%
                <br>
                <b>Bloom's Taxonomy Level:</b> {{ $grade->TAXONOMY_LEVEL }}

            </p>
        </div>



        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Question
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correct Answer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Answer
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($question); $i++) <tr class="{{ $question[$i]['answer'] === $answer[$i] ? 'bg-green-100' : 'bg-red-100' }} border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$question[$i]['question']}}
                        </th>
                        <td class="px-6 py-4">
                            {{$answer[$i]}}
                        </td>
                        <td class="px-6 py-4">
                            {{$question[$i]['answer']}}
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>


        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center pt-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">"Education is the passport to the future." - Malcolm X</h1>
            <h4 class="sm:text-2xl text-l font-medium title-font mb-2 mt-10 text-gray-900">You can now close this window.</h4>
            <button id="next-btn" onclick="closeWindow();" class="w-40 ml-4 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">Close Window</button>

        </div>

    </div>
    <script>
        function closeWindow() {
            window.close();
        }
    </script>
</section>
@endsection