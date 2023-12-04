<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\IdeController;
use App\Http\Controllers\QuizController;
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
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::view('/guest', 'dashboard')->name('guest');
Route::get('/dashboard', [DashboardController::class, 'validateSession'])->name('dashboard');
Route::group(['middleware' => 'auth.student'], function() {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::view('/settings', 'settings')->name('settings');
});
Route::view('/topic', [TopicController::class, 'topic'])->name('topic');
Route::get('/topic/{value}', [TopicController::class, 'openDashboardTopic'])->name('dashboard.topic');
Route::view('/about', 'about')->name('about');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/contact', 'contact')->name('contact');
Route::get('/open-topic/{value}', [TopicController::class, 'openTopic'])->name('open.topic');
Route::view('/topic_one', 'topic_one')->name('topic_one');
Route::view('/topic_two', 'topic_two')->name('topic_two');
Route::view('/topic_three', 'topic_three')->name('topic_three');
Route::view('/topic_four', 'topic_four')->name('topic_four');
Route::view('/topic_five', 'topic_five')->name('topic_five');
Route::view('/topic_six', 'topic_six')->name('topic_six');
Route::view('/topic_seven', 'topic_seven')->name('topic_seven');
Route::view('/topic_eight', 'topic_eight')->name('topic_eight');
Route::get('/ide', [IdeController::class, 'loadCode'])->name('ide');
Route::get('/quiz', [QuizController::class, 'loadQuiz'])->name('quiz');
Route::post('/quiz', [QuizController::class, 'gradeQuiz'])->name('quiz.grade');
Route::get('/grade',[GradeController::class, 'loadGrade'])->name('grade.student');