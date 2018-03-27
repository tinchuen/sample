<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(Request $request){
        //var_dump($request->url());
        $arr = ['name'=>'tian','age'=>18];
        echo $arr['addr'];
        return view('users.create');
    }
}
