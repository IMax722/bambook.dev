<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\DB;


class Newscontroller extends Controller
{
    public function index()
    {
        
        return $this->Getnewest();
        return $this->Getpopular();   
        
    }
    
    public function Getpopular()
    {
        $populars = DB::table('news')->orderBy('requests', 'desk')->get();   
        foreach ($populars as $popular) {
            echo $popular->body;
        }
        
        
    }
    
    public function Getnewest()
    {
        $newests = DB::table('news')
        ->orderBy('created_at', 'desc')
        ->get();
        foreach ($newests as $newest) {
            echo $newest->body;
        }
        foreach ($newests as $newest) {
            echo $newest->created_at;

        }
    }    
    
    
    
    //protected function getList(string $orderField,
    //string $orderPosition = 'DESC') {
        //  return $this->orderBy(
            //    $orderField, 
            //  $orderPosition);
            //}
            
            // public function getNew() { 
                // return $this->getList('upload_date', 'DESC','body'); 
                // }
                // public function getPopular() {
                    //return $this->getList('views', 'DESC','body');
                    // }
                    
                    
                    
                }
            