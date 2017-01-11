<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\club;

use App\subject;

use App\interest;

use App\profile;

use Auth;

class StaticPagesController extends Controller{
  public function welcome(){
    return view('welcome');
  }
  
  public function profile(){
    $id = Auth::user()->id;
    
    $flight = profile::where('user_id', $id)->first();
    
    return view('profile', ['profile'=>profile::where('user_id', $id)->first()]);
  }
  
  public function change(){
    return view('change');
  }
  
  public function contact(){
    return view('contact');
  }
  
  public function clubs(){
    return view('clubs', ['clubs'=>club::All(), 'subjects'=>subject::ALL()]);
  }
  
  public function edit_profile(){
     $id = Auth::user()->id;
     $profile = profile::where('user_id', $id)->first();
     
     if($profile == NULL){
       profile::create(array(
          'user_first_name', 'user_last_name', 'user_grade', 'user_age', 'user_gender', 'subjects', 'clubs', 'sports', 'arts', 'user_id'
        )
      );
     }
    
    return view('edit_profile',['profile'=>$profile]);
  }
  
  public function edit_profile_save(Request $request){
    
    //Gets user id
    $id = Auth::user()->id;
    
    $flight = profile::where('user_id', $id)->first();
    
    if($flight == NULL){
      profile::create(array(
          'user_first_name'=>$request->input('user_first_name'),
          'user_last_name'=>$request->input('user_last_name'),
          'user_grade'=>$request->input('user_grade'),
          'user_age'=>$request->input('user_age'),
          'user_gender'=>$request->input('user_gender'),
          'subjects' => implode(",", $request->input('subjects')),
          'clubs' => implode(",", $request->input('clubs')),
          'sports' => implode(",", $request->input('sports')),
          'arts' => implode(",", $request->input('arts')),
          'user_id'=>$id
        )
      ); 
    }else{
      
      $flight->user_first_name = $request->input('user_first_name');
      $flight->user_last_name = $request->input('user_last_name');
      $flight->user_grade = $request->input('user_grade');
      $flight->user_age = $request->input('user_age');
      $flight->user_gender = $request->input('user_gender');
      
      $flight->subjects = implode(",", $request->input('subjects'));
      $flight->clubs = implode(",", $request->input('clubs'));
      $flight->sports = implode(",", $request->input('sports'));
      $flight->arts = implode(",", $request->input('arts'));
      
      $flight->save();
    }
      
    return redirect()->action('StaticPagesController@edit_profile');
  }
  
  public function forum(){
    return view('forum');
  }
  
  public function help(){
    return view('help');
  }
}

