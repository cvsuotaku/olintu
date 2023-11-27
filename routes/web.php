<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'viewLogin'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::view('/guest', 'dashboard')->name('guest');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::group(['middleware' => 'auth.student'], function() {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});
Route::view('/topic', [TopicController::class, 'topic'])->name('topic');
Route::view('/contact', 'contact')->name('contact');
Route::get('/open-topic/{value}', [TopicController::class, 'openTopic'])->name('open.topic');
Route::view('/topic_one', 'topic_one')->name('topic_one');
Route::view('/topic_two', 'topic_two')->name('topic_two');