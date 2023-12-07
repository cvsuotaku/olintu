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

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Topic</th>
            <th>Score</th>
            <th>Percentage</th>
            <th>Taxonomy Level</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grades as $grade)
            <tr>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->topic }}</td>
                <td>{{ $grade->score }}</td>
                <td>{{ $grade->percentage }}</td>
                <td>{{ $grade->taxonomy_level }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

        

        
    </section>
