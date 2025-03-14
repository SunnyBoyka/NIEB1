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
	  $date = date('d-m-y');
	  $ngo=$_GET['ngo'];
	  $amt=$_GET['amt'];
	  $em=$_SESSION['Farmer'];
			$tid="Tran".mt_rand(100000, 999999);
$sql=  "Insert into govtsch22_donations(dated,ngo,tranid,payvendor,amt,stat,donatedby) values ('$date','$ngo','$tid','Online','$amt','Success', '$em')";
	
      $result = mysqli_query($link,$sql);
	  
    echo "<script type='text/javascript'>alert('Donation has been done successfully');</script>";
    echo "<script type='text/javascript'>window.location='dashboard.php';</script>";
     
   }
?>