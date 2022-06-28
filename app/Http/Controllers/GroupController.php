<?php

namespace App\Http\Controllers;

use App\Group;
use App\Subject;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use DB;

class GroupController extends Controller
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
        $group = Group::all()
        ->where('teacher_id', auth()->user()->id)
        ;
  
        return view('groups.index',compact('group'));
        /*return view('groups.index',compact('groups'));<--- ini saja yg qila letak dlm create function utk DB*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::pluck('name', 'id');
       
        return view('groups.create',compact('subjects'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Group::create([
            'name' => $request->name,
            'subject_id' => $request->subject_id,
            'teacher_id' => auth()->user()->id,
        ]);



         /* 
       cara db
       $subject = DB::table('subjects')
        ->select('id')
        ->where('id','=', $request->subject_id)->first();
        dd($subject);
        
        DB::table('groups')-> insert([
            
            'id' =>$request->id,
            'name' => $request->name,
            'subject_id' => $subject->id,
            'teacher_id' => auth()->user()->id,
        ]);*/ 
        
        
   
        return redirect()->route('groups.index')
                        ->with('success','Group created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('groups.show',compact('subjects','group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $subjects = Subject::pluck('name', 'id');

        return view('groups.edit',compact( 'subjects', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        

        $group->update($request->all());

        return redirect()->route('groups.index')
                        ->with('success','Groups updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();

       return redirect()->route('groups.index')
       ->with('success','Group deleted successfully');
    }
}
