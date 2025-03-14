<?php
require "../config/database.php";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      /*
      $uname = mysqli_real_escape_string($db,$_POST['uname']);
      $pswd = mysqli_real_escape_string($db,$_POST['pswd']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $ph = mysqli_real_escape_string($db,$_POST['ph']);  
      $ut = mysqli_real_escape_string($db,$_POST['ut']); 
      
	*/	
	  $sql ="";
	  
	  $feedback=$_GET['feedback'];
	  $em=$_SESSION['Farmer'];
			$fid="Feed".mt_rand(100000, 999999);
$sql=  "Insert into govtsch22_feedback(fid,feedback,email) values ('$fid','$feedback','$em')";
	
      $result = mysqli_query($link,$sql);
	  
    echo "<script type='text/javascript'>alert('Feedback has been sent successfully');</script>";
    echo "<script type='text/javascript'>window.location='feedback.php';</script>";
     
   }
?>