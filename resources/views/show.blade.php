<!-- resources/views/records/show.blade.php -->

@extends('layouts.app') <!-- Assuming you have a master layout -->

@section('content')
    <h1>Your Records</h1>

    @if(count($grades) > 0)
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
    @else
        <p>No records found.</p>
    @endif
@endsection
