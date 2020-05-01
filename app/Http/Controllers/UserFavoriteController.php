<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserFavoriteController extends Controller
{
    
        public function store(Request $request, $id)
    {
        \Auth::user()->add($id);
        

        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->delete($id);
        return back();
    }
}

