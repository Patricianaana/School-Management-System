<?php

use App\Http\Controllers\classController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

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

//for dashboard
Route::get('/', function () 
{
    return view('index');
});
//for students
Route::get('users', function()
{
    return view('studentList');
});
Route::get('addData', function()
{
    return view('addStudent');
});

//for courses
Route::get('subjects', function()
{
    return view('coursesList');
});
Route::get('addNew',function()
{
    return view('addCourse');
});

//for classes
Route::get('class', function()
{
    return view('classesList');
});
Route::get('addInput', function()
{
    return view('addClass');
});
Route::get('details', function()
{
    return view('viewClass');
});

//For exams grade setup
Route::get('exam', function()
{
    return view('examSetup');
});
Route::get('grading',function()
{
    return view('gradeList');

});

//for Exams
Route::get('exams', function()
{
    return view('examinationList');
});
Route::get('addExamination', function()
{
    return view('addExams');
});

//For Records
Route::get('records', function()
{
    return view('RecordList');
});
Route::get('addRec', function()
{
    return view('addRecord');
});

//for students
Route::post('users',[SchoolController::class,'addStudent']);
Route::get('users',[SchoolController::class,'showStudent']);
Route::get('/search',[SchoolController::class,'searchStudent']);
Route::get('delete/{id}',[SchoolController::class,'deleteStudent']);
Route::get('edit/{id}',[SchoolController::class,'editStudent']);
Route::post('/edit',[SchoolController::class,'updateStudent']);

//for Courses
Route::get('subjects',[courseController::class,'showCourses']);
Route::post('subjects',[courseController::class,'addCourses']);
Route::get('/search1',[courseController::class,'searchCourse']);
Route::get('delete1/{id}',[courseController::class,'deleteCourse']);
Route::get('edit1/{id}',[courseController::class,'editCourse']);
Route::post('/edit1',[courseController::class,'updateCourse']);

//for Classes
Route::get('class',[classController::class,'showClasses']);
Route::post('class',[classController::class,'addClasses']);
Route::get('edit2/{id}',[classController::class,'editClasses']);
Route::post('/edit2', [classController::class,'updateClasses']);
Route::get('delete2{id}',[classController::class,'deleteClasses']);
Route::get('/search2', [classController::class,'searchClasses']);
Route::get('view/{id}',[classController::class,'viewClasses']);

//for exams grade setup
Route::post('exam',[ExaminationController::class, 'addsetUp']);
Route::get('grading',[ExaminationController::class, 'viewGrades']);
Route::get('delete4{id}',[ExaminationController::class, 'deleteGrades']);
Route::get('edit4/{id}',[ExaminationController::class, 'editGrades']);
Route::post('/edit4',[ExaminationController::class, 'updateGrades']);

//for Exams
Route::get('exams',[ExamsController::class, 'viewExams']);
Route::post('exams',[ExamsController::class, 'createExams']);
Route::get('delete5{id}',[ExamsController::class, 'deleteExams']);
Route::get('edit5/{id}', [ExamsController::class, 'editExams']);
Route::post('/edit5',[ExamsController::class, 'updateExams']);
Route::get('view3/{id}',[ExamsController::class, 'viewRecords']);
Route::get('records',[ExamsController::class, 'viewRecords']);
Route::post('records',[ExamsController::class, 'addRecords']);
Route::get('delete6{id}',[ExamsController::class, 'deleteRecs']);




