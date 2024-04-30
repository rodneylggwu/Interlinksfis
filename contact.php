<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="interlink.css">
    <title>Contact</title>
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
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h2 class="text-center">Contact Us</h2>
          <form action="contact.php" method="post">
            <div class="my-3">
              <label class="form-label" for="Name">Name</label>
              <input type="text" name="contactname" class="form-control" required>
            </div>
            <div class="my-3">
              <label class="form-label" for="Email">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="my-3">
              <label class="form-label" for="message">Message</label>
              <textarea class="form-control" rows="3" name="message"></textarea>
            </div>
            <div class="text-center">
            <button class="btn btn-primary my-3" type="submit" name="submit" value="submit">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

    
    <?php
    if (isset($_POST['submit'])) {
    $contactname = $_POST['contactname'];
    $contactemail = $_POST['email'];
    $contactmessage = $_POST['message'];
    
    $to = 'ekilkeary@gwu.edu';
    $subject = 'New message from ' . $contactname;
    $message = 'Name: ' . $contactname . "\r\n" .
    'Email: ' . $contactemail . "\r\n" .
    'Message: ' . $contactmessage;
    $headers = 'From: ' . $contactemail;
    
    if (mail($to, $subject, $message, $headers)) {
    echo "<h5 class='text-center' style = 'color: green;'>Your message has been sent. We will respond as soon as possible.</h5>";
    } else {
    echo "<h5 class='text-center' style = 'color: red;'>There was a problem sending your message. Please try again later.</h5>";
    }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>