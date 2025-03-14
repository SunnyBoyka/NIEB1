<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

        $sql = 'SELECT govtsch22_admin_name FROM govtsch22_admin WHERE govtsch22_admin_email = ? AND govtsch22_admin_password = ?';
		if($email=="admin@gmail.com" && $password=="admin@123")
	{
                $_SESSION["admin"] = $email;
                $_SESSION["adminname"] = "admin";
                echo"<script> location.replace('dashboard.php') </script>";
            } 
            else 
            {
                $_SESSION["login"] = "failed";
                echo"<script> location.replace('login.php') </script>";
            }
        
        mysqli_stmt_close($stmt);
        mysqli_close($link);
}
