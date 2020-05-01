<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
   public function store(Request $request, $id) {
       
       \Auth::user()->add($id);
       return back();
   }
   
   public function destroy($id)
   {
       \Auth::user()->unadd($id);
       return back();
   }
   
       public function show($id)
    {
        $user = User::find($id);
        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'microposts' => $microposts,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
  
}


