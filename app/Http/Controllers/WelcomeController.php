<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;

use App\Team;
use App\Service;
use App\About;



class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    public function index(){
        
           $portfolios=Portfolio::all();
           $teams=Team::all();
           $services=Service::all();
           $abouts=About::all();
  
         
   
           


        return view('welcome',compact('portfolios','teams','services','abouts'));
           
    }
    

}
