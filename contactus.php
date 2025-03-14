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

<body style="background-color:#b3ffff">
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
                            <a class="nav-link w-75 mx-auto" href="./Farmer/login.php">Farmer Login</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="./ngo/login.php">NGO Login</a>
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
			<h1 style="text-align:center">CONTACT US</h1><br><br><br>
			<h3 style="font-family:courier;">For hassle free service, contact our support team at :<br> <br>
				Phone: 1234556677<br>
				Email-Id: compngo@gmail.com<br><br>
				Do follow us on social media to support us:-<br><br>
				Instagram Id: compngo_123<br>
				Twitter Id: compngo123<br><br>
				Visit us for more help: 
				#332, ABC block, XYZ layout, Mysuru, Karnataka, India.</h3>
							
<br/>

			 

</div>
</div>



</body>

</html>