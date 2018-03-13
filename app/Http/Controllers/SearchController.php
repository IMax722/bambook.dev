<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NewsController;
use App\News;

class SearchController extends NewsController
{
    public function index()
    {

        return view('news.main');

    }
}
