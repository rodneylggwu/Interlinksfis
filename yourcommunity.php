<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="interlink.css">
    <title>Your Community</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" style="color: whitesmoke;">InterlinkSFIS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="academicadvising.html" style="color: whitesmoke;">Academic Advising</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="events.php" style="color: whitesmoke;">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="yourcommunity.php" style="color: whitesmoke;">Your Community</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transportation.html" style="color: whitesmoke;">Transportation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="healthcare.html" style="color: whitesmoke;">HealthCare</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link" style="color: whitesmoke;" >Contact Us</a>
              </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="login.php" style="color: whitesmoke;">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php" style="color: whitesmoke;">Logout</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br>
      
     <?php
     if ($_SESSION['loggedin'] == true){
      if ($_SESSION['CountryName'] == "Afghanistan"){
        include 'welcomebanner.php';
        include 'afghanistan.php';
      }
      elseif($_SESSION['CountryName'] == "Nigeria"){
        include 'welcomebanner.php';
        include 'nigeria.php';
      }
      elseif($_SESSION['CountryName'] == "Ethiopia"){
        include 'welcomebanner.php';
        include 'ethiopia.php';
      }
      else{
        include 'welcomebanner.php';
        include 'futurecountrysupport.php';
      };
     }
     else{
       include 'pleaselogin.php';
     };
     ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>