<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

use Illuminate\Support\Facades\Storage;
class AboutController extends Controller

  {
    
        public function show(){
          $abouts = About::all();
           return view('about.viewabout', compact('abouts'));
        }
     
  //function edit
        public function edit($id){
           $abouts = About::find($id);
          return view('about.editabout', compact('abouts'));
   }
    
  //function create
        public function create(){
           
         return view('about.addabout');
 }
        public function update($id){
          $about =About::find($id);
          //On ecrase la donnee que lon a recuperer
          //cibler les colonnes en question
        
          $about->date_about=request('date_about');
          $about->titre_about=request('titre_about');
          $about->desc_about=request('desc_about');
          $about->img_about=request('img_about');

          $about->save();
          return redirect()->route('abouts');
    


 }

 
      public function store(Request $request){
        $about = new About();
        $about->date_about=request('date_about');
        $about->titre_about=request('titre_about');
        $about->desc_about=request('desc_about');
        $about->img_about=request('img_about');
         
        
     //  $img= $request->file('image');
        
        
    //   $path=Storage::disk('public')->put('',$img);
       // $about->img_path=$path;
        
        $about-> save();
     //il renvoie vers une redirection vers la route de portfolio
     //portfolio cest une route 
      return redirect()->route('abouts');
   }
    
 
 public function destroy($id) {
        $about = About::find($id);
        $about->delete();

        return redirect()->back();

  
}

    }
