<div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
      <?php
        $fname = ucfirst($_SESSION['FirstName']);
        $lname = ucfirst($_SESSION['LastName']);
        echo "<h3 class='text-start'>Hi $fname $lname</h3>";
      ?>
      </div>
      <div class="col-md-1"></div>
      </div>
      </div>