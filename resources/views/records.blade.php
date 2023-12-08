@extends('layouts.app')
@section('title', 'OLINTU - Your Records')
@section('content')<!-- resources/views/records.php -->
<!-- Navigation -->
<nav class="p-4 text-white" style="background-color: #2E6D32;">

    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold">Records</h1>
    </div>
</nav>
<section class="mb-8">
    <div class="container px-5 py-20 mx-auto  items-center text-center">
        <button type="submit" style="float: left;" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-700 hover:bg-green-800 dark:focus:ring-primary-800">
            <a href="{{route('student.dashboard')}}" >
                Back
            </a>
        </button>
        <div class="flex flex-wrap w-full mb-10 flex-col">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Record:</h1>
        </div>
        
        <div class="relative overflow-x-auto mb-10">
            <table class="w-full text-sm text-left text-center rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Topic
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Score
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Percentage
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Taxonomy Level
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $grade) <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$grade['TOPIC']}}
                        </th>
                        <td class="px-6 py-4">
                            {{$grade['SCORE']}} </b>
                        </td>
                        <td class="px-6 py-4">
                            {{$grade['PERCENTAGE']}}% </b>
                        </td>
                        <td class="px-6 py-4">
                            {{$grade['TAXONOMY_LEVEL']}}</b>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</section>