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
    <?php
      include 'navbar.php';
    ?>
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

     <?php
      include 'footer.php';
     ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>