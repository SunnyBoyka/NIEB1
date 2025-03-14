<?php
session_start();

// require "config/database.php";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>Home</title>

    <style>
  
    </style>

</head>

<body style="background-color:#ffccff">
        <div class="min-vh-100 d-flex flex-column bg-image">
        <nav class="navbar navbar-light shadow-sm mb-2" style="background: #FF970A;">
            <div class="container-fluid">
                <span class="lead text-light fw-bold">E-Notifier</span>
                <a class="ms-auto btn btn-outline-light border" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu" style="border-color: #FF970A;">
                    <span class="navbar-toggler-icon"></span>
                </a>
            </div>
            <div class="offcanvas offcanvas-end shadow-sm" data-bs-scroll="true" tabindex="-1" id="menu" aria-labelledby="menuLabel">
                <div class="offcanvas-header" style="background: #FF970A;">
                    <h5 class="offcanvas-title lead fw-bold ms-auto text-light" id="menuLabel">MENU</h5>
                    <button type="button" class="btn-close border text-reset btn-outline-light" data-bs-dismiss="offcanvas" aria-label="Close" style="border-color: #FF970A;"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav text-center lead fw-bold">
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="./admin/login.php">Admin Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="./Farmer/login.php">Farmer Login/Register</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="./ngo/login.php">NGO Login/Register</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="contactus.php">Contact Us</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="aboutus.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		
		 <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
		 
		 
		<h1 style="text-align:center">ABOUT US</h1><br><br><br>
		<p style="font-family:Brush Script MT; font-size:35px; text-align:justify;">Hi, thanks for choosing us!! Success is all about taking new initiatives. We came up with this idea to provide a helping hand to the Non Government Organizations(NGOs) as many are not getting donations in big terms. In India, NGOs play an important role as it works with main objective of benefitting the society at large, which may include eradicating poverty, providing food, education, medical support, sustainable development, protection of environment at large.
With the thought that Companies can help NGOs in large scale by doing charity as per the CSR rule implemented by Government,
Our portal provides Companies an opportunity to abide by the CSR rule and also help NGOs receive large donations. We strive to keep Our portal free of costs and easily accessible to both Companies and NGOs.</p>
<br/>

			 

</div>
</div>



</body>

</html>