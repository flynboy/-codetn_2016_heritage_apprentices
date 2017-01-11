@extends('layouts.app')

@section('content')
 
<p style="text-shadow:1px 1px 1px rgba(255,136,117,1);font-weight:bold;color:#000000;letter-spacing:1pt;word-spacing:0pt;font-size:27px;text-align:center;font-family:arial, helvetica, sans-serif;line-height:1;">Students Available to Help:</p>

<center>
	<?php
    	foreach($students as $student) {
 	?>
    	<p style = 'font-size: 150%;'><strong><?php echo $student->user_first_name . ' ' . $student-> user_last_name . ' ' . $student->  user_grade . 'th grade'; ?></strong></p>
 	<?php } ?>
</center>
@endsection
