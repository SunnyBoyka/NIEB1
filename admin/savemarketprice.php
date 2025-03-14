<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = trim($_POST["cropname"]);
    $price = trim($_POST["price"]);

        $query = "select * from govtsch22_market_price where cropname = '$name'";

        $result = mysqli_query($link,$query);

        if(mysqli_num_rows($result) > 0)
        {
            $_SESSION["exists"] = "success";
            echo"<script> location.replace('addmarketprice.php') </script>";
        }
        else
        {
            $query = "insert into govtsch22_market_price (cropname,cropprice) values('$name','$price')";

            if(mysqli_query($link,$query))
            {
                $_SESSION["add"] = "success";
                echo"<script> location.replace('addmarketprice.php') </script>";
    
            }
            else         
            {
                $_SESSION["add"] = "failed";
                echo"<script> location.replace('addmarketprice.php') </script>";
            }
        }

    

        mysqli_close($link);
}
