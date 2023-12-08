@extends('layouts.app')
@section('title', 'OLINTU - Your Records')
@section('content')<!-- resources/views/records.php -->
<!-- Navigation -->
<nav class="p-4 text-white" style="background-color: #2E6D32;">

    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold">Records</h1>
    </div>
</nav>
<button class="text-black px-2 py-1 my-2 mx-auto block rounded shadow" style="margin-left: 1rem; background-color: #C8E6C9 ">
    <a href="dashboard">
        back
    </a>
</button>
<section class="mb-8">
    <!-- resources/views/records/show.blade.php -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                    {{$grade['TAXONOMY_LEVEL']}}% </b>
                    </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</section>