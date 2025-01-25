<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::controller(StudentController::class)->group(function(){
    Route::get('student/send-data', 'send_data')->name('student.send.data');
});


Route::controller(TeacherController::class)->group(function(){
    Route::get('teacher/send-data', 'send_data')->name('teacher.send.data');
});

