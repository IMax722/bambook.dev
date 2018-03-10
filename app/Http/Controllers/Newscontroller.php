<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\DB;
use App\News;

class Newscontroller extends Controller
{
    public function index()
    {
                $this->Getpopular();
        return $this->Getnewest();
                 
        
    }
    
    public function Getpopular()
    {
        $populars = News::select()
        ->orderby('requests','desk')
        ->get();
        foreach ($populars as $popular) {
            echo $popular->body;
        }
        foreach ($populars as $popular) {
            echo $popular->created_at;
        }
        
        
    }
    
    public function Getnewest()
    {
        $newests = News::select()
        ->orderBy('created_at', 'desc')
        ->get();
        foreach ($newests as $newest) {
            echo $newest->body;
        }
        foreach ($newests as $newest) {
            echo $newest->created_at;

        }
    }    
    
    public function Getnewsid()
    {
        $newsid = News::where('id')
        ->get();
        echo $newsid;
        if(!$newsid == null){
            return response ('not found', 404);
        else
            return response ('')
        }
    }
                    
    }
            