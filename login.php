<?php
  session_start();
  if ($_SESSION['loggedin'] == true){
    echo "<script type='text/javascript'>window.location.href = 'yourcommunity.php'</script>";
  };
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="interlink.css">
    <title>Login</title>
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

      <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4 mx-auto d-flex justify-content-center align-items-center" style="height: 750px;" >
                    <form action="login.php" method="post">
                        <h1 class="h2 mb-3 text-primary text-center" style="font-family: 'Playfair Display', serif;">Welcome to InterlikSFIS</h1>
        
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Input Email Here">
                            <label for="floatingInput">Email address</label>
                        </div>
        
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me">Remember me
                            </label>
                        </div>
                        
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        
                        <div class="row">
                            <label class="mt-4 text-center"><a class="text-center"  href="registration.php">Register for an Account Here</a></label>
                        </div>
                        <br>
        <?php
        
        $servername = "localhost";
        $username = "rodneylg";
        $password = "Kourtney!23";
        $dbname = "Interlink";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $uname = $_POST['email'];
        $pword = $_POST['password'];

        $sql = "SELECT * FROM User_T WHERE UniversityEmail = '$uname'";
        $query = mysqli_query($conn, $sql);
        $no = mysqli_num_rows($query);

        if ($no > 0){
            $data = mysqli_fetch_array($query);
            if ($data['UserPassword'] == $pword){
                
                echo "login successful"."<br>";
                echo $data['CountryName'];
                session_start();
                $_SESSION['CountryName'] = $data['CountryName'];
                $_SESSION['FirstName'] = $data['FirstName'];
                $_SESSION['LastName'] = $data['LastName'];
                $_SESSION['loggedin'] = true;

                $countryname = $_SESSION['CountryName'];
                $getcountrycode = mysqli_query($conn, "SELECT * FROM `Country_T` WHERE CountryName = '$countryname'");
                $countryinfo = mysqli_fetch_array($getcountrycode);
                $_SESSION['CountryCode'] =  $countryinfo['CountryID'];
                echo "<script type='text/javascript'>window.location.href = 'yourcommunity.php'</script>";



            }
            else{
              
              echo "<h5 class='text-center' style='color: red'>Your Username or Password is Incorrect<br>Please Try again</h5>";
            };
            
            
        };

        ?>
                    </form>
                    
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>


        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>