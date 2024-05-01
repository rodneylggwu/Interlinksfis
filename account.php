<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="interlink.css">
    <title>Account</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" style="color: whitesmoke;">Interlink</a>
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
                  <a class="nav-link" aria-current="page" href="account.php" style="color: whitesmoke;">Account</a>
                </li>
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

    
<?php
session_start();
include 'navbar.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  include 'pleaselogin.php';
  exit;
}

$servername = "localhost";
$username = "rodneylg";
$password = "Kourtney!23";
$dbname = "Interlink";
//$port = 3306;

$uname = $_SESSION['UniversityEmail'];

$conn = new mysqli($servername, $username, $password, $dbname);//, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM User_T WHERE UniversityEmail = ?");
if ($stmt === false) {
  die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $uname);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

$conn->close();
?>

<div class="container-fluid" style="margin-left: 5%; margin-top: 5%;">
  <h3>User Information</h3>
  <p>Name: <span><?php echo $_SESSION['FirstName']; ?></span> <span><?php echo $_SESSION['LastName']; ?></span></p>
  <p>Country: <?php echo $_SESSION['CountryName']; ?></p>
</div> 
</div> 

<?php
  include 'footer.php';
?>
</body>
</html>