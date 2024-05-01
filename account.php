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