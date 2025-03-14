<?php
session_start();

// require "config/database.php";

if (isset($_SESSION["Farmer"])) {
    echo "<script> location.replace('dashboard.php') </script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" />

    <title>Farmer Register</title>

    <style>
        .bg-image {
            background: url("../images/bg.jpg");
            background-blend-mode: luminosity;
            background-size: cover;
            background-color: antiquewhite;
        }
    </style>

</head>

<body>
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
                            <a class="nav-link w-75 mx-auto" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light w-75 mx-auto" href="register.php" style="background: #FF970A;">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto"> 
                               <div id="google_translate_element"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
          if (isset($_SESSION["add"])) {
            if ($_SESSION["add"] == "success") {
          ?>
          <div class="row g-0 justify-content-center">
              <div class="alert col-sm-6 alert-success alert-dismissible fade show mt-2" role="alert">
                <strong>Farmer registered successfully!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
            <?php
            } else if ($_SESSION["add"] == "failed") {
            ?>
            <div class="row g-0 justify-content-center">
              <div class="alert col-sm-6  alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong>Farmer Adding Failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              </div>
            <?php
            }
            ?>
          <?php
            unset($_SESSION["add"]);
          }
          ?>
        <div class="card text-center col-11 col-sm-6 m-auto shadow py-4 border-warning">
            <!-- <div class="card-header bg-danger border border-danger">
            </div> -->
            <div class="card-body my-3">
                <h5 class="card-title text-uppercase lead mb-4 pb-1">Farmer Registration</h5>
                <form id="login" method="post" action="compregister.php">
                    <div class="row justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    <input type="text" class="form-control" name="name" id="name" aria-label="Name" placeholder="Farmer Name" pattern="[A-Za-z ]{3,30}" title="min 3 chars - max 30 chars" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-warehouse"></i></span>
                                    <select id="ctype" name="ctype" class="form-control" required>
                                        <option>Select Farming Type</option>
                                        <option>Own Farming</option>
                                        <option>Rental Farming</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                                    <input type="text" name="fid" id="fid" class="form-control" placeholder="Farmer Id (eg : Far123)" required>
                                </div>
                            </div>
							
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="phone" id="phone" class="form-control" aria-label="Phone Number" placeholder="Phone Number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                                    <input type="text" class="form-control" name="email" id="email" aria-label="Email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-seedling"></i></span>
                                    <textarea class="form-control" name="crops" id="crops" aria-label="crops" placeholder="Crops Grown" rows="1" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" aria-label="Password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" aria-label="Password" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" name="place" id="place" class="form-control" aria-label="Place" placeholder="Place" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" name="district" id="district" class="form-control" aria-label="District" placeholder="District" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" name="taluk" id="taluk" class="form-control" aria-label="Taluk" placeholder="Taluk" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-mountain"></i></span>
                                    <input type="number" min="1" name="land" id="land" class="form-control" aria-label="Land (in acres)" placeholder="Land (in acres)" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-water"></i></span>
                                    <select id="typeofland" name="typeofland" class="form-control" required>
                                        <option>Select Land Type</option>
                                        <option>Irrigated</option>
                                        <option>Non Irrigated</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-12">
                                <div class="d-grid mt-3 mb-1">
                                    <button class="btn text-white" style="background: #FF970A;" type="submit" onclick="return Validate()" >Create Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="card-footer bg-danger border border-danger">
            </div> -->
        </div>
        <div class="my-1"></div>

    </div>


    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            includedLanguages: 'hi,kn,te,en'
        }, 'google_translate_element');
    }
</script>


    <script>
        
 $(document).ready(function () {
        $("#email").change(function () {
            var emailval = document.getElementById('email').value;
            var emailval1 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
           if(!emailval1.test(emailval) || email == '')
                {
                alert('Please enter a valid email id.');
				 $("#email").focus();
                return false;
            }
        });
		$("#phone").change(function () {
            var phoneval = document.getElementById('phone').value;
            var phoneval1 = /^(6|7|8|9)[0-9]{9}$/;
           if(!phoneval1.test(phoneval) || phone == '')
                {
                alert('Please enter a valid phone number.');
				 $("#phone").focus();
                return false;
            }
        });
		$("#fid").change(function () {
            var fidval = document.getElementById('fid').value;
            var fidval1 = /^(Far)([0-9]{1,3})$/;
           if(!fidval1.test(fidval) || fid == '')
                {
                alert('Please enter valid Farmer id.');
				 $("#fid").focus();
                return false;
            }
        });
		$("#password").change(function () {
            var passwordval = document.getElementById('password').value;
            var passwordval1 = /^[0-9a-zA-Z!@#$%^&*]{8}$/;
           if(!passwordval1.test(passwordval) || password == '')
                {
                alert('Please enter 8 character password.');
				 $("#password").focus();
                return false;
            }
        });

		
    });
      
    </script>
<script>
    function Validate() {
        debugger;
         var flag = true;

         var unamer = document.getElementById('name').value;
         var intRegexunamer = /^[A-Za-z0-9 ]+$/;
         if (!intRegexunamer.test(unamer)) {
             alert('Please enter a valid Farmer name.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }

         var namer = document.getElementById('fid').value;
         var intRegexnamer  = /^(Far)([0-9]{1,3})$/;
         if (!intRegexnamer.test(namer)) {
             alert('Please enter a valid id.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }


         var phone = document.getElementById('phone').value;
         var intRegex = /^(7|8|9)[0-9]{9}$/;
         if (!intRegex.test(phone)) {
             alert('Please enter a valid phone number.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }


         var email = document.getElementById('email').value;
         var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         if (!emailReg.test(email) || email == '') {
             alert('Please enter a valid email id.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }



         var pswd = document.getElementById('password').value;
         var pswdPattern =  /^[0-9a-zA-Z!@#$%^&*]{8}$/;
         if (!pswdPattern.test(pswd)) {
             alert('Please enter 8 characters password.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }


		var cpswd = document.getElementById('confirmpassword').value;
		 if(pswd!=cpswd)
		 {
             alert('Password & Confirm Password mismatch');
             flag = false;
             return flag;
		 }
         else if (!pswdPattern.test(pswd)) {
             alert('Please enter 8 characters confirmpassword.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }



         return flag;
    }
</script>
</body>

</html>