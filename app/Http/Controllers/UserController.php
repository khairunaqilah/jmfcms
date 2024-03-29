<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Guardian;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::User()->role =='admin'){
        $user = User::paginate(10);
        }
        elseif(Auth::User()->role =='guardian'){
            $user = User::all()->where('role','=','teacher');
            }
        return view('users.index',compact('user'));
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {        
        $request->validate([
            'role' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string', 'max:255'],
        ]);
  
        // $request->password = md5($request->password);
        // dd($request->name);
        // User::create($request->all());
        
        User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number
        ]);
        // DB::table('users')->where('id', $request->id)->update([
        //     'role'=> $request->role,
        //     'name'=> $request->name,
        //     'email'=> $request->email, 
        //     'password'=> $request->password,
        //     'phone_number' => $request->phone_number,
        // ]);
   
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }

    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
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
        $guardian= DB::table('users')//join
        ->join('guardians','guardians.user_id','=','users.id')
        ->where('users.id',$user->id)
        ->select('users.id as id','users.name as name','users.email as email', 'users.password as password','guardians.address as address')
         ->get();
         //->toSql();
         //dd($guardian);
         
        return view('users.show',compact('user','teacher','guardian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $teacher= DB::table('users')//join
        ->join('teachers','teachers.user_id','=','users.id')
        ->select('users.id as id','users.name as name','users.email as email', 'users.password as password','teachers.qualification as qualification')
        ->where('users.id','=',$user->id)->get();

        $guardian= DB::table('users')//join
        ->join('guardians','guardians.user_id','=','users.id')
        ->select('users.id as id','users.name as name','users.email as email', 'users.password as password','guardians.address as address')
        ->where('users.id','=',$user->id)->get();
    return view('users.edit',compact('user','teacher','guardian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
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
        else if ($user->role=='guardian'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone_number = $request->phone_number;
            $user->save();

            
            $guardian = new Guardian;
            $guardian->address= $request->address;
            $guardian->user_id= $user->id; //panggil id user
            $guardian->save();
        }
        else if ($user->role=='admin'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone_number = $request->phone_number;
            $user->save();

            
          
        }
        return redirect('users/'.$user->id.'');
                        
    }
    public function sendEmail(Request $request)
    {
        foreach ($users as $key => $user) 
        $users = User:: whereIn("id",$request->ids)->get();
       
            Mail::to($user->email)->send(new NewMail($user));
        
            dd("success");
            return response()->json([ 'success'=>'Send email successfully']);
    
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

