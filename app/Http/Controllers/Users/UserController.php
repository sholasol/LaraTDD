<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', ['users' =>$users]);
    }

    public function create(){
        return view('users.create');
    }

    public function createUser(Request $request){

    }
}