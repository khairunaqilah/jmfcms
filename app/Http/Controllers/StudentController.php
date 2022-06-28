<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Guardian;
use App\Subject;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;

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
        if(Auth::User()->role =='guardian'){
            $student = Student::all()
            ->where('guardian_id', auth()->user()->id);}
            /*->orderBy('day_id', 'asc')
            ->orderBy('time_from', 'asc')
            ->get();*/
            else if(Auth::User()->role =='admin'){
                $student = Student::all();
            }
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
       // $group = Group::find([4,5]);
       //$student->groups()->attach($group);
        $groups = Group::latest()->get();
        //$student->groups()->attach($group); this is for bridge table for students can join many group

        return view('students.index', compact('subjects','groups' ));
        
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
       /* $request->dob;
            $age = Carbon::parse($request->dob)->diff(Carbon::now())->y;

            dd($age. " Years"); // To check result*/
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit( $student)
    {
        $students = DB::table('students')
            ->where('id', '=', $student)->get();

        return view('students.edit',compact( 'students'));

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
