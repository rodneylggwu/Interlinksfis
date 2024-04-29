<?php
  session_start();

  $servername = "localhost";
  $username = "rodneylg";
  $password = "Kourtney!23";
  $dbname = "Interlink";

?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="interlink.css">
    <title>Events</title>  
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">


      <?php

    $fname = ucfirst($_SESSION['FirstName']);
    $countrycode = $_SESSION['CountryCode'];


    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM `Event_T` WHERE CountryID = $countrycode";
    $query = mysqli_query($conn, $sql);
    $no = mysqli_num_rows($query);

     if ($_SESSION['loggedin'] == true){
        
        if ($no > 0){
          echo "<h5 class='text-start'>"."$fname, here are events happening in your area:"."</h5><br><hr>";
          while ($row = mysqli_fetch_array($query)){
            echo "<h4 class='text-start'>".$row['EventName']."</h4>";
            $starttime = $row['EventDateStart'];
            $endtime = $row['EventDateStop'];
            echo "<p class='text-start'>".date('n/j/Y g:i A', strtotime($starttime))." - ".date('n/j/Y g:i A', strtotime($endtime))."</p>";
            
            echo "<address class='text-start'>".$row['EventAddress']."<br>".$row['EventCity']." ".$row['EventState']." ".$row['EventZip']."</address>";
            echo "<p class='text-start'>".$row['EventDescription']."</p><hr>";
          };
          
          include 'createEvent.php';



        }
        else{
          echo "<h3 class='text-start'>"."$fname, there are no events in your area"."</h3><br>";
          include 'createEvent.php';
        };
        


     }
     else{
       include 'pleaselogin.php';
     };
     ?>

</div>
<div class="col-md-1"></div>




</div>
</div>

<?php

     if (isset($_POST['submit'])) {
      $eventName = $_POST['eventname'];

      $eventDateStart = $_POST['EventDateStart'];
      $eventDateStop = $_POST['EventDateStop'];
      
      $eventDateStart = date("Y-m-d H:i:s", strtotime($eventDateStart));
      $eventDateStop = date("Y-m-d H:i:s", strtotime($eventDateStop));

      echo $eventDateStart."<br>";
      echo $eventDateStop;


      $description = $_POST['Description'];
      $eventAddress = $_POST['EventAddress'];
      $eventCity = $_POST['EventCity'];
      $eventState = $_POST['EventState'];
      $eventZip = $_POST['EventZip'];


      $newsql = "INSERT INTO Event_T (EventName, EventDateStart, EventDateStop, EventDescription, EventAddress, EventCity, EventState, EventZip,  CountryID) 
        VALUES ('$eventName', '$eventDateStart', '$eventDateStop','$description', '$eventAddress', '$eventCity', '$eventState', '$eventZip','$countrycode')";

      if ($conn->query($newsql) === TRUE){
        echo "success";
        echo "<script type='text/javascript'>window.location.href = 'events.php'</script>";
      }
      else {
        echo "Error: interlink".$newsql."<br>".$conn->error;
      };

     };

?>
      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>