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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.css" />
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

    body {
      background-color: #eee
    }

    #chatbox {
      display: none;
      position: fixed;
      bottom: 70px;
      right: 15px;
      width: 500px;
      max-height: 400px;
      background-color: white;
      border: 1px solid #ced4da;
      border-radius: 5px;
      overflow-y: auto;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
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
                <a class="nav-link home active text-light " aria-current="page" href="dashboard.php" style="background: #FF970A;">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link faculty" aria-current="page" href="searchmarketprice.php">
                  <span data-feather="search"></span>
                  Search Market Price
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link faculty" aria-current="page" href="allmarketprice.php">
                  <span data-feather="dollar-sign"></span>
                  All Market Prices
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link faculty" aria-current="page" href="weatherreport.php">
                  <span data-feather="wind"></span>
                  Weather Report
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link farmer" aria-current="page" href="logout.php">
                  <span data-feather="log-out"></span>
                  Sign Out
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link farmer" aria-current="page">
                  <div id="google_translate_element"></div>
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h3 lead">Dashboard</h1>
          </div>
          <?php
          if (isset($_SESSION["delete"])) {
            if ($_SESSION["delete"] == "success") {
          ?>
              <div class="alert alert-success alert-dismissible fade show mt-2 text-capitalize" role="alert">
                <strong>Farmer Deleted Successfully</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
            } else if ($_SESSION["delete"] == "failed") {
            ?>
              <div class="alert alert-danger alert-dismissible fade show mt-2 text-capitalize" role="alert">
                <strong> Delete Failed</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php
            }
            unset($_SESSION["delete"]);
          }
          ?>



          <form id="form" name="form" method="POST" action="farmerdelete.php" class="text-center" enctype="multipart/form-data">
            <h4 class="h4 text-center mb-4">Schemes Notifications For You</h4>
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered shadow-sm align-middle">
                <thead class=" bg-gradient text-white" style="background: #FF970A;">
                  <tr class="text-center">
                    <th>Scheme Id</th>
                    <th>Scheme Name</th>
                    <th>Scheme Type</th>
                    <th>Description</th>
                    <th>Scheme For</th>
                    <th>View Scheme</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $crop = $_SESSION['Crop'];
                  $query = "select * from govtsch22_schemes where crop like '%$crop%' or crop='all'";

                  $result = mysqli_query($link, $query);

                  while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $sname = $row['sname'];
                    $stype = $row['stype'];
                    $descr = $row['descr'];
                    $crop = $row['crop'];
                    $surl = $row['surl'];

                    echo '<tr class="text-center">';
                    echo '<td>' . $id . '</td>';
                    echo '<td>' . $sname . '</td>';
                    echo '<td>' . $stype . '</td>';
                    echo '<td>' . $descr . '</td>';
                    echo '<td>' . $crop . '</td>';
                    echo '<td><a href="' . $surl . '">Apply For Scheme</a></td>';
                    echo '</tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </form>

          <div class="my-5">
            <hr>
          </div>

          <div class="my-1"></div>
        </main>

      </div>
    </div>

    <div id="chatbox">
      <div class="d-flex justify-content-between text-white" style="background-color: #FF970A;">
        <div class="h5 my-3 ms-3">ChatBox</div>
      </div>
      <form id="chatContent" class="p-3" style="max-height: 250px; 
      overflow-y: auto;">
        <div class="card">
          <div class="card-body">
            <div class="row gy-4 chatrow">
              <div class="col-md-12 chatcolumn">
                <h5 class="d-flex fs-7 gap-3 align-items-center">
                  <i class="fa-solid fa-robot"></i>
                  <span class="text-wrap d-inline-block" style="max-width: 370px;">
                  Hi, How can I help you today?
                </span>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="input-group mb-3 p-3">
        <input type="text" id="reply" name="reply" class="form-control shadow-none" placeholder="Type your message..." style="border: 1px solid #FF970A;" form="chatContent">
        <button id="sendbut" class="btn shadow-none text-white" style="background: #FF970A;" type="button" form="chatContent">Send</button>
      </div>
    </div>

    <button id="openChat" class="btn text-white rounded-pill position-fixed bottom-0 end-0 m-3 shadow-none" type="button" style="text-shadow: 1px 1px 1px gray; background: #FF970A;"> <i class="fa-solid fa-robot"></i> Chat</button>

    <!-- <div class="wrapper flex-grow-1"></div>
<footer style="background:#eef2f3;" class="shadow">
  <p class="font-weight-bold text-center pt-1">© <script>document.write(new Date().getFullYear());</script> BLOOD BANK</p>
  </footer> -->

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        includedLanguages: 'hi,kn,te,en'
      }, 'google_translate_element');
    }
  </script>

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
    $(function() {

      $('#openChat').click(function() {
        $('#chatbox').fadeToggle();
      });

      $("#chatContent").on("submit", function(e) {
        event.preventDefault();
        var reply = $("#reply").val()
        $(".chatrow").append('<div class="col-md-12 chatcolumn"><h5 class="d-flex fs-7 gap-3 align-items-center"><i class="fa-solid fa-user"></i><span class="text-wrap d-inline-block" style="max-width: 375px;">' + reply + '</span></h5></div>');
        $("#reply").val('');
        $.ajax({
          type: 'POST',
          url: 'bot.php',
          data: {
            reply: reply
          },
          dataType: 'text',
          cache: false,
          success: function(response) {
            debugger
            $(".chatrow").append('<div class="col-md-12 chatcolumn"><h5 class="d-flex fs-7 gap-3 align-items-center"><i class="fa-solid fa-robot"></i><span class="text-wrap d-inline-block" style="max-width: 375px;">' + response + '</span></h5></div>');
            $('#chatContent').scrollTop($('#chatContent')[0].scrollHeight);
          }
        });
      });

    });
  </script>


  <script>
    (function() {
      'use strict'

      feather.replace()


    })()
  </script>
</body>

</html>