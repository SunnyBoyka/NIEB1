<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

        $sql = 'SELECT govtsch22_ngoname FROM govtsch22_ngo WHERE govtsch22_ngoemail = ? AND govtsch22_ngopswd = ?';

        if ($stmt = mysqli_prepare($link, $sql)) 
        {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);

            mysqli_stmt_execute($stmt);

            mysqli_stmt_store_result($stmt);
			echo mysqli_stmt_num_rows($stmt);
            if (mysqli_stmt_num_rows($stmt) > 0) 
            {
                mysqli_stmt_bind_result($stmt, $name);
                mysqli_stmt_fetch($stmt);
                $_SESSION["ngo"] = $email;
                $_SESSION["ngoname"] = $name;
                echo"<script> location.replace('dashboard.php') </script>";
            } 
            else 
            {
                $_SESSION["login"] = "failed";
                echo"<script> location.replace('login.php') </script>";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
}
