@extends('layouts.app')
@section('title', 'OLINTU - Dashboard')
@section('content')
<section class="bg-gray-100 mx-auto md:h-screen">

    <!-- Navigation -->
    <nav class="bg-primary-600 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">OLINTU Dashboard</h1>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8 px-6 py-8 mx-auto md:h-screen lg:py-0">

        <!-- Topics Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Topics</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Topic Card -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold mb-2">Php</h3>
                    <p class="text-gray-600">Experience empowerment and career growth through innovative skill-building, Learn PHP now.</p>
                    <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">View Details</a>
                </div>
                <!-- Repeat for other topics -->
            </div>
        </section>

        <!-- Rooms Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Manage Rooms</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold mb-2">Create Room</h3>
                    <p class="text-gray-600">Study and learn new things.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold mb-2">Join Room</h3>
                    <p class="text-gray-600">Collaborate with your classmates and teacher.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold mb-2">Edit Room</h3>
                    <p class="text-gray-600">Update access and add new contents.</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold mb-4">Active Room(s)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold mb-2">Room A</h3>
                    <p class="text-gray-600">Description of Room A.</p>
                    <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">View Details</a>
                </div>
            </div>
        </section>
    </div>

</section>
@endsection