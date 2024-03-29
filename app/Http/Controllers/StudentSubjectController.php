<?php

namespace App\Http\Controllers;

use App\StudentSubject;
use App\Student;
use App\Subject;
use App\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class StudentSubjectController extends Controller
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
        $student_subject = StudentSubject::all();
        
    }
        elseif(Auth::User()->role =='admin'){
            $student_subject = StudentSubject::all();
            

        
        }
        
        else if(Auth::User()->role =='teacher'){
            $student_subject = StudentSubject::all()
            ->where('group_id','=',null);
        }
        return view('students_subjects.index',compact('student_subject'));
    }

    public function listSubject($id){
        $student_subject = StudentSubject::where('student_id',$id)->get();
        return view('students_subjects.index',compact('student_subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::pluck('name', 'id');
        $students = Student::where('guardian_id',Auth::User()->id)->pluck('name', 'id');
       
        return view('students_subjects.create',compact('subjects','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        StudentSubject::create([
           
            'student_id' => $request->student_id,
            'subject_id' => $request->subject_id,
            
        ]);

        return redirect()->route('students_subjects.listSubject',$request->student_id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function show(StudentSubject $studentSubject)
    {
        return view('students_subjects.show', compact('studentSubject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $studentSubject = DB::table('students_subjects')
            ->where('id', '=', $id)->get();
            
            $groups = Group::where("teacher_id",Auth::User()->id)->pluck('name', 'id');
            $subjects = Subject::pluck('name', 'id');
            $students = Subject::pluck('name', 'id');

        return view('students_subjects.edit',compact( 'groups','subjects','students','studentSubject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if(Auth::User()->role =='teacher'){

            DB::table('students_subjects')->where('id', $id)->update([
                'group_id' => $req->group_id,
            ]);
        }
        else if(Auth::User()->role =='guardian'){
            $studentSubject=StudentSubject::all()->where('id',  $id)->update([

                'subject_id' => $req->subject_id,
            ]);
        }

        
        return back()
            ->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy( $studentSubject)
    {
        $stu_sub = StudentSubject::find($studentSubject);
 
        $stu_sub->delete();
        return back()
            ->with('success', 'Successfully drop subject');
    }

    public function list(StudentSubject $studentSubject)
    {
        if(Auth::User()->role =='guardian'){
            $student_subject = StudentSubject::all();
            
    
           
        }
            elseif(Auth::User()->role =='admin'){
                $student_subject = StudentSubject::all();
                
    
            
            }
            
            else if(Auth::User()->role =='teacher'){
                $student_subject = StudentSubject::all();
                
            }
            return view('students_subjects.list',compact('student_subject'));
    }
}
