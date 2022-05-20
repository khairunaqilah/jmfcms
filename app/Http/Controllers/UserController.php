<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function show(User $user)
    {
        
    }
}
