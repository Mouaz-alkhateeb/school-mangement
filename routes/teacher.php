<?php

use App\Http\Controllers\Teachers\dashboard\ProfileController;
use App\Http\Controllers\Teachers\dashboard\QuestionController;
use App\Http\Controllers\Teachers\dashboard\QuizzController;
use App\Http\Controllers\Teachers\dashboard\StudentController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:teacher']
    ],
    function () {

        //==============================dashboard============================
        Route::get('/teacher/dashboard', function () {

            $ids = Teacher::findorFail(auth()->user()->id)->Sections()->pluck('section_id');
            $data['count_sections'] = $ids->count();
            $data['count_students'] = \App\Models\Student::whereIn('section_id', $ids)->count();
            return view('pages.Teachers.dashboard.dashboard', $data);
        });

        Route::get('student', [StudentController::class, 'index'])->name('student.index');
        Route::get('section', [StudentController::class, 'sections'])->name('section');
        Route::post('attendance', [StudentController::class, 'attendance'])->name('attendance');

        Route::get('attendance_report', [StudentController::class, 'attendanceReport'])->name('attendance.report');
        Route::post('attendance_report', [StudentController::class, 'attendanceSearch'])->name('attendance.search');

        Route::resource('quizzes', QuizzController::class);

        Route::resource('questions', QuestionController::class);

        Route::get('profile', [ProfileController::class, 'index'])->name('profile.show');
        Route::post('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');




        Route::get('student_quizze/{id}', [QuizzController::class, 'student_quizze'])->name('student.quizze');
        Route::post('repeat_quizze', [QuizzController::class, 'repeat_quizze'])->name('repeat.quizze');
    }
);
