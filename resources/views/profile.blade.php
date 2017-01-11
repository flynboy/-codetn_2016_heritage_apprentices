@extends('layouts.app')

@section('content')

<!-- Post a status -->


  <div class="profile">
    <div class = "col-md-3 col-xs-3" style="background-color: #b7babf; border-radius: 5px;  ">
      <h1 class = "profileH">Your Profile:</h1>
      <div>
        <img src = "{{ secure_asset('images/profileImages/red.jpg')}}" style = 'display: block; margin: auto; width:200px; height: 200px'>
      </div>
      
      <center>
        <h4 style = 'text-decoration: underline; font-weight: bold;'>First Name:</h4>
        <p><?php echo $profile->user_first_name; ?></p>
        
        <h4 style = 'text-decoration: underline; font-weight: bold;'>Last Name: </h4>
        <p><?php echo $profile->user_last_name; ?></p>
        
        <h4 style = 'text-decoration: underline; font-weight: bold;'>Grade: </h4>
        <p><?php echo $profile->user_grade; ?></p>
        
        <h4 style = 'text-decoration: underline; font-weight: bold;'>Age: </h4>
        <p><?php echo $profile->user_age; ?></p>
        
        <h4 style = 'text-decoration: underline; font-weight: bold;'>Gender: </h4>
        <p><?php echo $profile->user_gender; ?></p>
        
        <br>
        
        <p ><a href = "{{ secure_url('/edit_profile') }}" style="font-size: 120%">Edit profile</a></p>
      </center>
      
    </div>
    
    <div class = "col-md-3 col-xs-4" style="outline: #b7babf 5px solid; text-align: center; postion: absolute; border-radius: 5px; margin-left: 20px; padding: 10px 0px;">
      <p class = "name2">Hobbies & Interests: </p>
      
      <p style = 'font-weight: bold;'>Subjects:</p>
      <?php
        $subjects = explode(",", $profile->subjects);
        foreach($subjects as $thing) {
      ?>
      <p><?php echo $thing; ?></p>
      <?php } ?>
      
      <br>
      
      <p style = 'font-weight: bold;'>Sports:</p>
      
      <?php
        $sports = explode(",", $profile->sports);
        foreach($sports as $thing) {
      ?>
      <p><?php echo $thing; ?></p>
      <?php } ?>
      
      <br>
      
      <p style = 'font-weight: bold;'>Arts:</p>
      
      <?php
        $arts = explode(",", $profile->arts);
        foreach($arts as $thing) {
      ?>
      <p><?php echo $thing; ?></p>
      <?php } ?>
    </div>
    
    <div class = "col-md-3 col-xs-4" style="outline: #b7babf 5px solid; text-align: center; postion: absolute; border-radius: 5px; margin-left: 30px;">
      <p class = "name4">Clubs: </p>
      
      <?php
        $clubs = explode(",", $profile->clubs);
        foreach($clubs as $thing) {
      ?>
      <p><?php echo $thing; ?></p>
      <?php } ?>
      
    </div>
  </div>
@endsection
