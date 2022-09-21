<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\AssiduitesController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UnitsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Units ROUTES
Route::resource('units', UnitsController::class);

// Staff ROUTES
Route::resource('staffs', StaffController::class);

// Campus ROUTES
Route::resource('campus', CampusController::class);

// Classes ROUTES
Route::resource('classes', ClassesController::class);

// Courses ROUTES
Route::resource('courses', CoursesController::class);

// Subjects ROUTES
Route::resource('subjects', SubjectsController::class);

// Assiduite ROUTES
Route::resource('assiduites', AssiduitesController::class);
Route::post('assiduites/find/students/', [App\Http\Controllers\AssiduitesController::class, 'find'])->name('findStudentsA');

//Tickets ROUTES
Route::resource('plannings', PlanningsController::class);

//Tickets ROUTES
Route::resource('tickets', TicketsController::class);
Route::post('reply/tickets/', [App\Http\Controllers\TicketsController::class, 'reply'])->name('reply');

//Marks ROUTES
Route::resource('marks', MarksController::class);

//USER ROUTES
Route::resource('users', UsersController::class);
Route::get('delete/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('del_user');

//STUDENTS ROUTES
Route::resource('students', StudentController::class);
Route::get('students/{id}/delete', [App\Http\Controllers\StudentController::class, 'destroy'])->name('del_student');
Route::patch('/users/update/{id}', [App\Http\Controllers\StudentController::class, 'updateUser'])->name('userUpdate');

//NOTES ROUTES
Route::resource('notes', NotesController::class);
Route::post('notes/find/students/', [App\Http\Controllers\NotesController::class, 'find'])->name('findStudents');
Route::get('notes/bulletin/{id}', [App\Http\Controllers\NotesController::class, 'print'])->name('printNotes');

//SETTINGS ROUTES
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');
