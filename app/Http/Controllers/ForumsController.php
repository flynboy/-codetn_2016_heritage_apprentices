<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\club;

use App\subject;

use App\interest;

use App\profile;

class ForumsController extends Controller{
  public function algebra(){
    $students = profile::where('subjects', 'LIKE', '%algebra%')->get();
    
    return view('forumPages/algebra',['students'=>$students]);
  }
  
  public function algebracp(){
    $students = profile::where('subjects', 'LIKE', '%algebra CP%')->get();
    
    return view('forumPages/algebracp',['students'=>$students]);
  }
  
  public function pre_calculus(){
    $students = profile::where('subjects', 'LIKE', '%pre-calculus%')->get();
    
    return view('forumPages/pre_calculus',['students'=>$students]);
  }
  
  public function trigonometry(){
    $students = profile::where('subjects', 'LIKE', '%trigonometry%')->get();
    
    return view('forumPages/trigonometry',['students'=>$students]);
  }
  
  public function geometry(){
    $students = profile::where('subjects', 'LIKE', '%geometry%')->get();
    
    return view('forumPages/geometry',['students'=>$students]);
  }
  
  public function bridgemath(){
    $students = profile::where('subjects', 'LIKE', '%bridge math%')->get();
    
    return view('forumPages/bridgemath',['students'=>$students]);
  }
  
  public function apcalculus(){
    $students = profile::where('subjects', 'LIKE', '%ap calculus%')->get();
    
    return view('forumPages/apcalculus',['students'=>$students]);
  }
  
  public function english1(){
    $students = profile::where('subjects', 'LIKE', '%english%')->get();
    
    return view('forumPages/english1',['students'=>$students]);
  }
  
  public function english2(){
    $students = profile::where('subjects', 'LIKE', '%english%')->get();
    
    return view('forumPages/english2',['students'=>$students]);
  }
  
  public function english3(){
    $students = profile::where('subjects', 'LIKE', '%english%')->get();
    
    return view('forumPages/english3',['students'=>$students]);
  }
  
  public function english4(){
    $students = profile::where('subjects', 'LIKE', '%english%')->get();
    
    return view('forumPages/english4',['students'=>$students]);
  }
  
  public function honorsenglish(){
    $students = profile::where('subjects', 'LIKE', '%honors english%')->get();
    
    return view('forumPages/honorsenglish',['students'=>$students]);
  }
  
  public function chemistry(){
    $students = profile::where('subjects', 'LIKE', '%chemistry%')->get();
    
    return view('forumPages/chemistry',['students'=>$students]);
  }
  
  public function physics(){
    $students = profile::where('subjects', 'LIKE', '%physics%')->get();
    
    return view('forumPages/physics',['students'=>$students]);
  }
  
  public function biology(){
    $students = profile::where('subjects', 'LIKE', '%biology%')->get();
    
    return view('forumPages/biology',['students'=>$students]);
  }
  
  public function environmentalscience(){
    $students = profile::where('subjects', 'LIKE', '%environmentalscience%')->get();
    
    return view('forumPages/environmentalscience',['students'=>$students]);
  }
  
  public function honorschem(){
    $students = profile::where('subjects', 'LIKE', '%honors chemistry%')->get();
    
    return view('forumPages/honorschem',['students'=>$students]);
  }
  
  public function computerapps(){
    $students = profile::where('subjects', 'LIKE', '%computer apps%')->get();
    
    return view('forumPages/computerapps',['students'=>$students]);
  }
  
  public function infotech(){
    $students = profile::where('subjects', 'LIKE', '%info tech foundations%')->get();
    
    return view('forumPages/infotech',['students'=>$students]);
  }
  
  public function dd123(){
    $students = profile::where('subjects', 'LIKE', '%digital arts%')->get();
    
    return view('forumPages/dd123',['students'=>$students]);
  }
  
  public function wd123(){
    $students = profile::where('subjects', 'LIKE', '%web design%')->get();
    
    return view('forumPages/wd123',['students'=>$students]);
  }
  
  public function programmingandlogic(){
    $students = profile::where('subjects', 'LIKE', '%programming and logic%')->get();
    
    return view('forumPages/programmingandlogic',['students'=>$students]);
  }
  
  public function worldhistory(){
    $students = profile::where('subjects', 'LIKE', '%history%')->get();
    
    return view('forumPages/worldhistory',['students'=>$students]);
  }
  
  public function ushistory(){
    $students = profile::where('subjects', 'LIKE', '%history%')->get();
    
    return view('forumPages/ushistory',['students'=>$students]);
  }
  
  public function economics(){
    $students = profile::where('subjects', 'LIKE', '%economics%')->get();
    
    return view('forumPages/economics',['students'=>$students]);
  }
  
  public function govandciv(){
    $students = profile::where('subjects', 'LIKE', '%government%')->get();
    
    return view('forumPages/govandciv',['students'=>$students]);
  }
  
  public function businesscom(){
    $students = profile::where('subjects', 'LIKE', '%buisness comm.%')->get();
    
    return view('forumPages/businesscom',['students'=>$students]);
  }
  
  public function humangeo(){
    $students = profile::where('subjects', 'LIKE', '%human geography%')->get();
    
    return view('forumPages/humangeo',['students'=>$students]);
  }
}
