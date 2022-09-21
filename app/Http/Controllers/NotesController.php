<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Staff;
use App\Models\Campus;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if the user is a staff 
        if (Auth::user()->type=="Staff") {
            $campuses=Campus::all();
            $classes=Classe::all();
            $courses=Course::all();
            
           return view('notes.index',compact('campuses', 'classes', 'courses'));
        }
        // if the user is a student
        else {
            $email=Auth::user()->email;

            $student=Student::where('student_email', 'like', '%'.$email.'%')->first();
            $staffs=Staff::all();
            // get all the subjects of the classe
            $subjects = Subject::where('class_id', '=', $student->class->id)->get();
            // get all subjects and units
            $units = DB::select("SELECT subjects.subject_name, units.unit_code, count(subjects.id) as num FROM `subjects` inner join units ON subjects.unit_id=units.id GROUP by units.unit_code");
            // get all the notes
            $notes=Note::all();
    
            return view('notes.create',compact('student','subjects','units','staffs','notes'));
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {  
        // init
        $campuses=Campus::all();
        $classes=Classe::all();
        $courses=Course::all();

        $students=Student::where('campus_id', '=', $request->campus_id)
                        ->where('course_id', '=', $request->course_id)
                        ->where('class_id', '=', $request->class_id)
                        ->get();


       return view('notes.index',compact('campuses', 'classes', 'courses','students'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $request->validate([
            'subject_id' => 'required',
            'staff_id' => 'required',
        ]);
        $form = array(
            'student_id' => $request->student_id,
            'subject_id' => $request->subject_id,
            'staff_id' => $request->staff_id,
            'note' => $request->note,
        );
         $check = Note::where('student_id','like','%'.$request->student_id.'%')
                        ->where('subject_id', 'like', '%'.$request->subject_id.'%')
                        ->get();
      
        // if the mark already exist show error message
        if (sizeof($check) > 0) {
            return back()->with('error', 'La note avait déjà été entrée, veuillez la modifier');
        }
        // save the mark in the db
        $res=Note::create($form);
        if ($res) {
            # send mail to the student
        }
        $student=Student::whereId($request->student_id)->first();
        // get all the subjects of the classe
        $subjects = Subject::where('class_id', '=', $student->class->id)->get();

        return back()->with('success', 'La note a été sauvegardée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::whereId($id)->first();
        $staffs=Staff::all();
        // get all the subjects of the classe
        $subjects = Subject::where('class_id', '=', $student->class->id)->get();
        // get all subjects and units
        $units = DB::select("SELECT subjects.subject_name, units.unit_code, count(subjects.id) as num FROM `subjects` inner join units ON subjects.unit_id=units.id GROUP by units.unit_code");
        // get all the notes
        $notes=Note::all();

        return view('notes.create',compact('student','subjects','units','staffs','notes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update the mark
        Note::whereId($request->note_id)->update(["note"=>$request->newMark]);
        return back()->with('success', 'La note a été modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // update the mark
         Note::whereId($id)->delete();
         return back()->with('success', 'La note a été supprimée avec succès');
    }

    public function print($id)
    {
        return view('notes.print');
    }
}
