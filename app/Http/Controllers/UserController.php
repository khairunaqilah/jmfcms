<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
       
        return view('users.index');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $teacher= DB::table('users')//join
            ->join('teachers','teachers.user_id','=','users.id')
            ->where('users.id',$user->id)
            ->select('users.id as id','users.name as name','users.email as email', 'users.password as password','teachers.qualification as qualification')
             ->get();
            //->toSql();
            // dd($teacher);
        return view('users.show',compact('user','teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $teacher= DB::table('users')//join
        ->join('teachers','teachers.user_id','=','users.id')
        ->select('users.id as id','users.name as name','users.email as email', 'users.password as password','teachers.qualification as qualification')
        ->where('users.id','=',$user->id)->get();
    return view('users.edit',compact('user','teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($teacher = Teacher::where("user_id",$user->id)->first());
        $request->validate([
            // 'role'=>'required',
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'phone_number'=>'required',
        ]);
        if($user->role=='teacher'){
  
        
            //2nd cara
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone_number = $request->phone_number;
            $user->save();

            
            $teacher = new Teacher;
            $teacher->qualification= $request->qualification;
            $teacher->user_id= $user->id; //panggil id user
            $teacher->save();
        
        }
        return redirect('users/'.$user->id.'');
                        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

       return redirect()->route('login')
       ->with('success');
    }
}

