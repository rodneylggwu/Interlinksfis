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
    <?php
      include 'navbar.php';
    ?>

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
              <textarea class="form-control" rows="3" name="message" required></textarea>
            </div>
            <div class="text-center">
            <button class="btn btn-primary my-3" type="submit" name="submit" value="submit">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>
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
                    echo "<h5 class='text-center' style = 'color: green;'>Your message has been sent.  We will respond as soon as possible.</h5>";
                } else {
                    echo "<h5 class='text-center' style = 'color: red;'>There was a problem sending your message. Please try again later.</h5>";
                }
            }
            ?>



<?php
  include 'footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>