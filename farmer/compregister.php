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
    $crops = trim($_POST["crops"]);
    $place = trim($_POST["place"]);
    $district = trim($_POST["district"]);
    $taluk = trim($_POST["taluk"]);
    $land = trim($_POST["land"]);
    $typeofland = trim($_POST["typeofland"]);

        $query = "insert into govtsch22_Farmer values('','$name','$ctype','$fid','$phone','$email','$password','$crops','$place','$district','$taluk','$land','$typeofland')";

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
