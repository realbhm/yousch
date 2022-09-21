<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Staff;
use App\Models\Campus;
use App\Models\Classe;
use App\Models\Unit;
use App\Models\Subject;
use App\Models\User;
use App\Models\Course;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // count all students
        $student_count=Student::all()->count('id');
        // count all staffs
        $staff_count=Staff::all()->count('id');
         // count campus
        $campus_count=Campus::all()->count('id');
        // count campus
        $classe_count=Classe::all()->count('id');
        // count count
        $course_count=Course::all()->count('id');
        // users count
        $users_count=User::all()->count('id');
         // unit count
        $unit_count=Unit::all()->count('id');
         // subject count
        $subject_count=Subject::all()->count('id');
        return view('home',compact('student_count','staff_count','campus_count','classe_count','course_count','users_count','unit_count','subject_count'));
    }

    /**
     * Show the application settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function settings()
    {
        return view('settings.index');
    }
}
