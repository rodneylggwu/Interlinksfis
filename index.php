<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylinterlinkesheet" href=".css">
    <title>Interlink</title>
</head>
<body style="padding-bottom: 100px;">

<?php
  include 'navbar.php';
?>

<br>
<br>
<section id="homepage" class="about" style="padding-left: 30px;">
    <h2>Welcome to Interlink</h2>
    <p>Your global community with opportunities, connections, and resources just for you. Let's embark on this journey together.</p>

</section>

<section class="services-section" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="container">

        <div class="community">
            <img class="service-image" src="images/community.jpg" alt="Your Community" style="width: 25%; height: auto; padding-top:20px;">
            <div class="community-info">
                <h4 style="padding: 20px;">Your Community</h4>
                <p>Your personalized guide to local treasures and resources. Dive into a wealth of information about places such as restaurants, grocery stores, and other resources in your chosen community. Discover hidden gems, essential services, and unlock the essence of your chosen locale.</p>
                <div class="text-center">
                    <button class="btn btn-primary"><a href="yourcommunity.php" style="color: whitesmoke; text-decoration: none;">Learn More</a></button>
                </div>
            </div>

        </div>

        <div class="events">
            <img class="service-image" src="images/events.jpg" alt="Events" style="width: 25%; height: auto; padding-top:50px;">
            <div class="service-info">
                <h4 style="padding: 20px;">Events</h4>
                <p>Your hub for cultural happenings on and near campus. Stay connected with a collection of events celebrating diversity and cultural richness. From festivals to exhibitions, immerse yourself in vibrant experiences that bring your community to life. </p>
                <div class="text-center">
                    <button class="btn btn-primary"><a href="events.php" style="color: whitesmoke; text-decoration: none;">Learn More</a></button>
                </div>
            </div>
        </div>
        
    </div>
</section>

<?php
  include 'footer.php';
?>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
