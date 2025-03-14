<?php
session_start();

require "../config/database.php";

if (!isset($_SESSION["Farmer"])) {
  echo "<script> location.replace('login.php') </script>";
}
// $username = $_SESSION["username"];
// $usergender = $_SESSION["usergender"];

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Dashboard">
  <meta name="author" content="Intrella">
  <meta name="generator" content="Intrella">
  <title>Dashboard</title>



  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body {
      font-size: .875rem;
    }

    .bg-cover {
      background-size: cover !important;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /*
 * Sidebar
 */

    .sidebar {
      position: fixed;
      top: 0;
      /* rtl:raw:
  right: 0;
  */
      bottom: 0;
      /* rtl:remove */
      left: 0;
      z-index: 100;
      /* Behind the navbar */
      padding: 48px 0 0;
      /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
      .sidebar {
        top: 5rem;
      }
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #727272;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*
 * Navbar
 */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>

<body>

  <div class="d-flex flex-column min-vh-100 bg-cover" style="background:#eef2f3;">

    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background: #FF970A;">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center fw-bold" href="../index.php">E-Notifier</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <input class="form-control bg-success w-100" type="text"  aria-label="Search" disabled> -->
      <div class="form-control w-100" style="background: #FF970A;"></div>
      <ul class="navbar-nav px-3">
      </ul>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light home active " aria-current="page" href="makedonation.php"  style="background: #FF970A;">
                  <span data-feather="user-plus"></span>
                  Make Donation
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link faculty" aria-current="page" href="totdonation.php">
                  <span data-feather="users"></span>
                  Heighest Donations
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link faculty" aria-current="page" href="feedback.php">
                  <span data-feather="users"></span>
                  Feedback
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link Farmer" aria-current="page" href="viewfeedback.php">
                  <span data-feather="users"></span>
                View Feedback
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link farmer" aria-current="page" href="logout.php">
                  <span data-feather="log-out"></span>
                  Sign Out
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h3 lead">Donation Page</h1>
          </div>
         
          <h2>Donation Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
          <form id="form" name="form" method="GET" action="savedondata.php" class="text-center" >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $_SESSION["compname"];?>" readonly>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $_SESSION["Farmer"];?>" readonly>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Farmer Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Farmer City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="number" id="zip" name="zip" required  placeholder="zipcode">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name on card">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" required pattern="[0-9]{4}" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required  placeholder="352">
              </div>
              <div class="col-50">
                <label for="cvv">Amount</label>
                <input type="text" id="amt" name="amt" required  placeholder="0000000">
              </div>
              <div class="col-50">
                <label for="ngo">NGO</label>
				<select id="ngo" name="ngo" style=" width: 100%; margin-bottom: 20px;  padding: 12px;  border: 1px solid #ccc;  border-radius: 3px;">
					<option>Select NGO</option>
					  <?php
                                // $email = $_SESSION['user_email'];
                                $query = "select govtsch22_ngoname from govtsch22_ngo";

                                $result = mysqli_query($link, $query);

                                while ($row = mysqli_fetch_array($result)) {
									?>
					<option><?php echo $row['govtsch22_ngoname']; ?></option>
					<?php
								}?>
				</select>
              </div>
            </div>
          </div>
          
        </div>
        <label>
        <input type="submit" onclick="return Validation()" value="Make Donation" class="btn">
      </form>
    </div>
  </div>

</div>

</body>

          <div class="my-5"><hr></div>

          <?php
          if (isset($_SESSION["delete2"])) 
          {
            if ($_SESSION["delete2"] == "success") 
            {
          ?>
              <div class="alert alert-success alert-dismissible fade show mt-2 text-capitalize" role="alert">
                <strong>Deleted Successfully</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
            } 
            else if ($_SESSION["delete2"] == "failed") 
            {
            ?>
              <div class="alert alert-danger alert-dismissible fade show mt-2 text-capitalize" role="alert">
                <strong> Delete Failed</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php
            }
            unset($_SESSION["delete2"]);
          }
          ?>


          <div class="my-1"></div>
        </main>

      </div>
    </div>


    <!-- <div class="wrapper flex-grow-1"></div>
<footer style="background:#eef2f3;" class="shadow">
  <p class="font-weight-bold text-center pt-1">© <script>document.write(new Date().getFullYear());</script> BLOOD BANK</p>
  </footer> -->

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

  <script>
    // function previewFile(input) {
    //   debugger;
    //   var file = $("#getFile").get(0).files[0];

    //   if (file) {
    //     var reader = new FileReader();

    //     reader.onload = function() {
    //       $("#previewImg").attr("src", reader.result);
    //       $("#previewImg").addClass("img-thumbnail");
    //       $("#previewImg").show();
    //     }

    //     reader.readAsDataURL(file);
    //   }
    // }
   $(document).ready(function () {
        $("#ccnum").change(function () {
            var ccnumval = document.getElementById('ccnum').value;
            var ccnumval1 = /^[0-9]{4}[-][0-9]{4}[-][0-9]{4}[-][0-9]{4}$/;
           if(!ccnumval1.test(ccnumval) || ccnum == '')
                {
                alert('Please enter valid Credit card number.');
				 $("#ccnum").focus();
                return false;
            }
        });
		$("#zip").change(function () {
            var zipval = document.getElementById('zip').value;
            var zipval1 = /^[0-9]+$/;
           if(!zipval1.test(zipval) || zip == '')
                {
                alert('Please enter valid Zip code.');
				 $("#zip").focus();
                return false;
            }
        });
		$("#cvv").change(function () {
            var cvvval = document.getElementById('cvv').value;
            var cvvval1 = /^[0-9]{3}$/;
           if(!cvvval1.test(cvvval) || cvv == '')
                {
                alert('Please enter valid cvv.');
				 $("#cvv").focus();
                return false;
            }
        });
		$("#amt").change(function () {
            var amtval = document.getElementById('amt').value;
            var amtval1 = /^[0-9]+$/;
           if(!amtval1.test(amtval) || amt == '')
                {
                alert('Please enter amt code.');
				 $("#amt").focus();
                return false;
            }
        });
		
		$("#expyear").change(function () {
            var expyearval = document.getElementById('expyear').value;
            var expyearval1 = /^[0-9]{4}$/;
           if(!expyearval1.test(expyearval) || expyear == '')
                {
                alert('Please enter valid year.');
				 $("#expyear").focus();
                return false;
            }
        });
		
    });
	
	 function Validation() {
		 var flag = true;

         var ccnumval = document.getElementById('ccnum').value;
            var ccnumval1 = /^[0-9]{4}[-][0-9]{4}[-][0-9]{4}[-][0-9]{4}$/;
           if(!ccnumval1.test(ccnumval) || ccnum == '')
                {
                alert('Please enter valid Credit card number.');
				 $("#ccnum").focus();
                flag = false;
             return flag;
         }
         else {
             flag = true;
         }
		 
		  
		 var city = document.getElementById('city').value;
            var citypat = /^[a-zA-Z]+$/;
           if(!citypat.test(city) || city == '')
                {
                alert('Please enter valid city.');
				 $("#city").focus();
                flag = false;
             return flag;
         }
         else {
             flag = true;
         }
		
		 
		  
		 var state = document.getElementById('state').value;
            var statepat = /^[a-zA-Z]+$/;
           if(!statepat.test(state) || state == '')
                {
                alert('Please enter valid state.');
				 $("#state").focus();
                flag = false;
             return flag;
         }
         else {
             flag = true;
         }
		
		 
		 var zipval = document.getElementById('zip').value;
            var zipval1 = /^[0-9]+$/;
           if(!zipval1.test(zipval) || zip == '')
                {
                alert('Please enter valid Zip code.');
				 $("#zip").focus();
                flag = false;
             return flag;
         }
         else {
             flag = true;
         }
		

			var cvvval = document.getElementById('cvv').value;
            var cvvval1 = /^[0-9]{3}$/;
           if(!cvvval1.test(cvvval) || cvv == '')
                {
                alert('Please enter valid cvv.');
				 $("#cvv").focus();
                flag = false;
             return flag;
         }
         else {
             flag = true;
         }

		 
		 var amtval = document.getElementById('amt').value;
            var amtval1 = /^[0-9]+$/;
           if(!amtval1.test(amtval) || amt == '')
                {
                alert('Please enter amt code.');
				 $("#amt").focus();
               flag = false;
             return flag;
         }
         else {
             flag = true;
         }
		 
		  var expyearval = document.getElementById('expyear').value;
            var expyearval1 = /^[0-9]{4}$/;
           if(!expyearval1.test(expyearval) || expyear == '')
                {
                alert('Please enter valid year.');
				 $("#expyear").focus();
                flag = false;
             return flag;
         }
         else {
             flag = true;
         }
		 
        

         return flag;
	 }
  </script>


  <script>
    (function() {
      'use strict'

      feather.replace()


    })()
  </script>
</body>

</html>