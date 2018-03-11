<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        return $this->Getnewest();
               $this->Getpopular();
                 
        
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
   
    
    public static function Getnewsid($id = 'id')
    {
        $newsshow = News::where('id',1)
            ->first();
        echo $newsshow;
        
    }
                    
    }
            