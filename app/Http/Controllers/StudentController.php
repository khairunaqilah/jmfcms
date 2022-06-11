<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
//use App\Guardian;
use App\Subject;
use Illuminate\Http\Request;
use Carbon\Carbon;
//use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $table = Student::with( 'subjects')
        ->where('guardian_id', auth()->user()->id)
        
        ->get();

        return view('students.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    
        $subjects = Subject::pluck('name', 'id');
        

        return view('students.create', compact('subjects' ));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Student::create([
            'name' => $request->name,
            'email' =>$request->email,
            'nric' =>$request->nric,
            'dob' =>$request->dob,
            'school' =>$request->school,
            'gender' =>$request->gender,
            'race'=>$request->race,
            'subject_id' => $request->subject_id,
            'guardian_id' => auth()->user()->id,
            

        ]);
        
  
        
   
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $request->dob;
            $age = Carbon::parse($request->dob)->diff(Carbon::now())->y;

            dd($age. " Years"); // To check result
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $subjects = Subject::pluck('name', 'id');

        return view('students.edit',compact( 'subjects'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        
  
        $student->update($request->all());
  
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
       ->with('success','Student deleted successfully');
    }
}
