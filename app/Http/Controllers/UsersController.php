<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        
        $users = User::orderBy('id', 'desc')->paginate(10);
        
        return view('users.index', [ 
            'users' => $users,]);
    }
    
    public function show($id){
        
        $user = User::find($id);
        
        
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
