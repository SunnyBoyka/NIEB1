<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = trim($_POST["cropname"]);
    $price = trim($_POST["price"]);

      
            $query = "update govtsch22_market_price set cropprice = '$price' where cropname = '$name'";

            if(mysqli_query($link,$query))
            {
                $_SESSION["add"] = "success";
                echo"<script> location.replace('managemarketprice.php') </script>";
    
            }
            else         
            {
                $_SESSION["add"] = "failed";
                echo"<script> location.replace('managemarketprice.php') </script>";
            }

    

        mysqli_close($link);
}
