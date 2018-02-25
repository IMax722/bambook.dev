<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Mainpagecontroller extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();

        return view('layouts.index', ['users' => $users]);
    }



}

