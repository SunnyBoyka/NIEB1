<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = trim($_POST["name"]);
    $ctype = trim($_POST["ctype"]);
    $email = trim($_POST["email"]);
    $fid = trim($_POST["fid"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]);

        $query = "insert into govtsch22_ngo values('','$name','$ctype','$fid','$phone','$email','$password')";

        if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('register.php') </script>";

        }
        else         
        {
            $_SESSION["add"] = "failed";
            echo"<script> location.replace('register.php') </script>";
        }

        

        mysqli_close($link);
}
