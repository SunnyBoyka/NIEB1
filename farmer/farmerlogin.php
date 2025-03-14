<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

		
		$query="select * from govtsch22_farmer where govtsch22_farmemail='$email' and govtsch22_farmpswd='$password'";
		
		$result=mysqli_query($link,$query);
		
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if($count>0)
		{
			$query1="select * from govtsch22_farmer where govtsch22_farmemail='$email' and govtsch22_farmpswd='$password'";
		
		$result1=mysqli_query($link,$query1);
		
		$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
			
			$_SESSION['Farmer']=$row1['govtsch22_farmemail'];;
			$_SESSION['Farmername']=$row1['govtsch22_farmname'];;
			$_SESSION['Crop']=$row1['govtsch22_farmcrops'];;
			// echo $_SESSION['uname'];
			echo "<script>window.location='dashboard.php';</script>";
		}
		else
		{
			echo "<script>
			alert('Please create an account');
		window.location='register.php';
		</script>";
		}
}
