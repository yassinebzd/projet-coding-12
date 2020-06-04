<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller

  {
    
        public function show(){
          $teams = Team::all();
           return view('team.viewteam', compact('teams'));
        }
     
  //function edit
        public function edit($id){
           $teams = Team::find($id);
          return view('team.editteam', compact('teams'));
   }
    
  //function create
        public function create(){
           
         return view('team.addteam');
 }
        public function update($id){
          $team =Team::find($id);
          //On ecrase la donnee que lon a recuperer
          //cibler les colonnes en question
          $team->img_name=request('img_name');
          $team->img_desc=request('img_desc');
          $team->img_path=request('img_path');

          $team->save();
          return redirect()->route('teams');
    


 }

 
      public function store(Request $request){
        $team = new Team();
        $team->img_name=$request->input('img_name');
        $team->img_desc=$request->input('img_desc');

        $img= $request->file('image');
        
        
        $path=Storage::disk('public')->put('',$img);
        $team->img_path=$path;
        
        $team-> save();
     //il renvoie vers une redirection vers la route de portfolio
     //portfolio cest une route 
      return redirect()->route('teams');
   }
    
 
 public function destroy($id) {
        $team = Team::find($id);
        $team->delete();

        return redirect()->back();

  
}

    }
