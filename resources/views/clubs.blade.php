@extends('layouts.app')

@section('content')
  <div>
      <h1 class = "clubsh">Clubs</h1>
      
      <table class='ctable'>
        <tr>
          <th class='center'>Club Name</th>
          <th class = 'center'>Club Sponsor</th>
          <th class = 'center'>Room</th>
          <th class = 'center'>Meeting Time</th>
        </tr>
        
      <?php
      foreach ($clubs as $thing) {
        ?>
      <tr>
        <td><?php echo $thing->name; ?></td>
        <td><?php echo $thing->teacher_name; ?></td>
        <td><?php echo $thing->room; ?></td>
        <td><?php echo $thing->meeting_time; ?></td>
      </tr>
      <?php } ?>
      </table> 
          
      <h1 class = "subjectsh">Subjects</h1>
      
      <p style = 'text-align: center; font-size: 20px; color: ;'>Note: The teachers names, in the subjects table is in last First initial.</p>
      
      <table class = "stable">
        <tr>
          <th class = 'center'>Name</th>
          <th class = 'center'>Teacher</th>
          <th class = 'center'>Room</th>
        </tr>
        
      <?php
      foreach ($subjects as $thing) {
        ?>
      <tr>
        <td><?php echo $thing->name; ?></td>
        <td><?php echo $thing->teacher_name; ?></td>
        <td><?php echo $thing->room; ?></td>
      </tr>
      <?php } ?>
      </table>  
    
  </div>
@endsection
