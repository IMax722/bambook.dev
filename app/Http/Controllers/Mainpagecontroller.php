<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mainpagecontroller extends Controller
{

public function getname()
{

    $users = DB::table('users')->get();

    return view ('user.index'. ['users' => $users]);

}

public function view()
{

    return view('hello');
    return getname();

}



}
