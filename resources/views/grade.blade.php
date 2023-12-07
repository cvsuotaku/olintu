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
                            {{$answer[$i]}} : <b> {{$question[$i]['option_'.strtolower($question[$i]['answer'])]}} </b>
                        </td>
                        <td class="px-6 py-4">
                            {{$question[$i]['answer']}}
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed text-lg">Education is the passport to the future.</p>
                    <span class="inline-block h-1 w-10 rounded bg-green-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Malcolm X</h2>
                    <h4 class="sm:text-2xl text-l font-medium title-font mb-2 mt-10 text-gray-900">You can now close this window.</h4>
                    <button id="next-btn" onclick="closeWindow();" class="w-40 ml-4 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">Close Window</button>

                </div>
            </div>
        </section>
    </div>
    <script>
        function closeWindow() {
            window.location.href = "dashboard";
        }
    </script>
</section>
@endsection