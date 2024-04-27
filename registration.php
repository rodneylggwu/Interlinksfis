<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="interlink.css">
    <title>Registration</title>
</head>
<body>

<?php 
      
      
      $servername = "localhost";
      $username = "rodney";
      $password = "Kourtney!23";
      $dbname = "Interlink";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
      }

      if (mysqli_ping($conn)){
       
      }
      else {
        echo "Error: ".mysqli_error($conn);
      }



    ?>

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
                <a href="contact.html" class="nav-link" style="color: whitesmoke;" >Contact Us</a>
              </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="login.html" style="color: whitesmoke;">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: whitesmoke;">Logout</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
    
    <form class="mt-5" action="registration.php" method="post">
        <div class="m-3">
            <label for="email" class="form-label" >Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Only .edu university email" required>
        </div>
        <div class="m-3">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name" required>
        </div>
        <div class="m-3">
            <label>Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
        </div>
    
        <div class="m-3">
            <label>Select your Country of Origin</label><br>
            <select name="Country" required>
                <?php
                  $Countries = mysqli_query($conn, "SELECT CountryName FROM Country_T ORDER BY CountryName");
                  while ($row = mysqli_fetch_array($Countries)) {
                    echo "<option value = '".$row['CountryName']."'".">".$row['CountryName']."</option>";
                  }
                ?>
            </select>
        </div>
    
        <div class="m-3">
            <label>Select your Preferred Language</label><br>
            <select name="LanguagePreference" required >
            <?php
                  $languages = mysqli_query($conn, "SELECT DISTINCT LanguagePreference FROM User_T"); 
                  while ($row = mysqli_fetch_array($languages)) {
                      echo "<option value='".$row['LanguagePreference']."'".">".$row['LanguagePreference']."</option>";
                  };
                ?>
          </select>
        </div>
    
        <div class="m-3">
            <label>Enter Your Desired Password</label>
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Desired Password Here" required>
        </div>
        <div class="m-3">
            <label>Confirm Password</label>
            <input type="password" name="password2" class="form-control" id="pwd" placeholder="Ensure Password matches" required>
        </div>
    
        <div class="m-5 text-center">
            <input type="submit" name="submit" value="Submit">
        </div>
    
    </form>

    <div class="row">
      <div class="text-center">
      <?php
      
      if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $sql = "SELECT UniversityEmail FROM User_T WHERE UniversityEmail = '$email'";
        $emailresult = mysqli_query($conn, $sql);
        $number = mysqli_num_rows($emailresult);
        $emailcheck = mysqli_fetch_array($emailresult);
        if ($number > 0){
          if ($emailcheck['UniversityEmail'] == $email){
          echo "<br>"."<p style = 'color: red;'>".$emailcheck['UniversityEmail']." already exists.  Please choose a different email."."<br>"."If you are the owner of this email address, please reset your password"."</p>";
          }
        } else{
          $checks = 1;
        };

        $password1 = $_POST['password'];
        $password2 = $_POST['password2'];
        if ($password1 != $password2){
          echo "<br>"."<p style='color:red;'>"."Your passwords do not match"."<p>";
        }
        else {
          $checks++;
        };
      };
      
      if($checks > 1){
        
        //get the entries of all of the forms input
        //finish adding sql that adds record to database
        //double check
        
         
      };


    ?>
      </div>
    </div>


    </div>
        
    <div class="col-md-2"></div>
    
    </div>
    </div>

    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>