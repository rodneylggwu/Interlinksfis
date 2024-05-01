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

$conn = new mysqli($servername, $username, $password, $dbname/*, $port*/);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM User_T WHERE UniversityEmail = ?");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("i", $uname);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt = $conn->prepare("SELECT Event_T.* FROM Event_T JOIN UserEvent_T ON Event_T.EventID = UserEvent_T.EventID WHERE UserEvent_T.UniversityEmail = ?");
$stmt->bind_param("i", $_SESSION['UniversityEmail']);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<h3>" . $row['EventName'] . "</h3>";
}

$conn->close();


?>

<div class="container-fluid">
<h3>User Information</h3>
<p>Name: <span><?php echo $_SESSION['FirstName']; ?></span> <span><?php echo $_SESSION['LastName']; ?></span></p>
<p>Country: <?php echo $_SESSION['CountryName']; ?></p>



</div> 

<?php
  include 'footer.php';
?>
</body>
</html>