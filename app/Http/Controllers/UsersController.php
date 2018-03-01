<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(Request $request){
        trigger_error($request->url());
        return view('users.create');
    }
}
