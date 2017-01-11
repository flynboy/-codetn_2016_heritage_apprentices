@extends('layouts.app')

@section('content')

  <div>
    <h1 class = "interest">Change Your Profile</h1>
    
    <div class = "col-md-4 col-xs-6" style = 'border: 2px solid #ff3333;'>
      
      <h3 style = 'text-decoration: underline; text-align: center;'>Basic Information</h3>
      
      <center>
      <div>
        <form  method = 'post'>
          
          <?php echo Form::token();  ?>
          
          <br>
          
          <label for = 'user_first_name'>First Name: </label>
          <br>
          
          <input type = 'text' id = 'user_first_name' name = 'user_first_name' placeholder = 'First Name' value='<?php echo $profile->user_first_name; ?>'>
          
          <br>
          <br>
          
          <label for = 'user_last_name'>Last Name: </label>
          <br>
          <input type = 'text' id = 'user_last_name' name = 'user_last_name' placeholder = 'Last Name' value='<?php echo $profile->user_last_name; ?>'>
          
          <br>
          <br>
          
          <label for = 'user_grade'>Grade: </label>
          <br>
          <input type = 'text' id = 'user_grade' name = 'user_grade' placeholder = 'Grade' value='<?php echo $profile->user_grade; ?>'>
          
          <br>
          <br>
          
          <label for = 'user_age'>Age: </label>
          <br>
          <input type = 'text' id = 'user_age' name = 'user_age' placeholder = 'Age' value='<?php echo $profile->user_age; ?>'>
          
          <br>
          <br>
          
          <label for = 'user_gender'>Gender: </label>
          <br>
          <input type = 'text' id = 'user_gender' name = 'user_gender' placeholder = 'Gender' value='<?php echo $profile->user_gender; ?>'>
          
          <br>
          <br>
          
          <!--
          <label for = 'user_profile_picture'>Profile Picture: </label>
          <br>
          <input type = 'text' id = 'user_profile_picture' name = 'user_profile_picture' placeholder = 'Add photo URL'/>
          -->
          <br>
          <br>
          <br>
          
          <button type = 'submit'>Save Changes</button>
          
          <br>
          <br>
        <br>
        
      </div>
      </center>
    </div>
    
    <div class = "col-md-4 col-xs-6" style = 'border: 2px solid #ff3333;'>
      <h3 style = 'text-decoration: underline; text-align: center;'>Clubs</h3>
      
      <div>
        
        <?php 
          $all_clubs = [
            'AFJROTC','Anime','Beta','Book','Computer','DECA','Ecology',
            'FBLA','FCCLA','Forenics','Gay-Straight','FFA','Shooting',
            'STEM','World Explorers','HOSA','Key','Foreign Language',
            'Honors Scoiety','Prom Committee','Skills USA',
            'Student Council','Democrats'
          ];
          
          foreach($all_clubs as $clu) {
        ?>
        <input type = 'checkbox' name = 'clubs[]' value = '<?php echo $clu; ?>' <?php if (strpos($profile->clubs, $clu) !== false) { echo 'checked';} ?> /> <?php echo $clu; ?><br>
        <?php } ?>
        
      </div>
    </div>
    
    <div class = "col-md-4 col-xs-6" style = 'border: 2px solid #ff3333;'>
      <h3 style = 'text-decoration: underline; text-align: center;'>Interests\Hobbies</h3>
      
      <div>
        <div class = 'col-md-6 col-xs-6'>
          <p>Sports: </p>
          
          <div style = 'margin-left: 15px;'>
            <?php 
              $all_sports = [
                'Baseball','Basketball','Football','Soccer','Tennis','Cheerleading',
                'Wrestling','Golf','Shooting','Bowling','Marching Band'
              ];
              
              foreach($all_sports as $sp) {
            ?>
            <input type = 'checkbox' name = 'sports[]' value = '<?php echo $sp; ?>' <?php if (strpos($profile->sports, $sp) !== false) { echo 'checked';} ?> /> <?php echo $sp; ?><br>
            <?php } ?>
            
          </div>
          
          <br>
          
          <p>Arts: </p>
          
          <div style = 'margin-left: 15px;'>
            
            <?php 
              $all_arts = [
                'Music','Chorus','Art','Band','Theatre'
              ];
              
              foreach ($all_arts as $art) {
            ?>
            <input type = 'checkbox' name = 'arts[]'  value = '<?php echo $art; ?>' <?php if (strpos($profile->arts, $art) !== false) { echo 'checked';} ?> /> <?php echo $art; ?><br>
            <?php } ?>
          </div>
          
          <br>
          
        </div>
        
        <div class = 'col-md-6 col-xs-6'>
          <p>Subjects</p>
          
          <div style = 'margin-left: 15px;'>
              <?php
                $all_subjects = [
                  'Algebra','Algebra CP','Trigonometry','Pre-calculus','Geometry',
                  'Ecology','Biology','Chemistry','Physics','Cont Reading',
                  'Language Arts','History','Geography','Bridge Math','WEB Design',
                  'Programming and Logic','Digital Arts','Cosmotology', 'Buisness Comm.',
                  'AP Calculus', 'English', 'Honors English', 'Computer Apps', 
                  'Environmental Science', 'Honors Chemistry', 'Info Tech Foundations', 
                  'Human Grography'
                ];
                foreach($all_subjects as $subj) {
              ?>
                <input type = 'checkbox' name = 'subjects[]' value = '<?php echo $subj; ?>' <?php if (strpos($profile->subjects, $subj) !== false) { echo 'checked';} ?> /> <?php echo $subj; ?><br>
              <?php }  ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  $username="flynboy";
  $password="";
  $database="c9";
  $servername="localhost";
  $con=mysqli_connect($servername,$username,$password);
  mysqli_select_db($con, $database);// or die("");
  $query="SELECT * FROM clubs";
  //$result=mysqli_query($query);
  //$num=mysql_numrows($result);
  mysqli_close($con);
?>

@endsection
