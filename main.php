<?php

  //main.php
  //This is the main landing page for Project4.
?>

<!doctype html>
<html lang="en">

  <head>

		<title>Project 4 - Main Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </head>

  <body class="col-sm-8 col-sm-offset-2">
      <div class="jumbotron jumbotron-fluid bg-info text-white text-center" style="background:skyblue">
          <div class="container"> 
              <h1 class="display-3">Panther Travel </h1>
      <?php
        include "components/navbar.php";
      ?>
          </div>
    <div class="page-header">
      
    </div>

    <div class="" style="background: lightgrey">
      <div class="col" style="">
        <br>
        
              <nav class="nav justify-content-center nav-pills nav-fill flex-column flex-sm-row ">

        <a class="flex-lg-fill text-lg-center nav-link active" href="inventory.php">Inventory</a>
        <a class="flex-lg-fill text-lg-center nav-link active" href="viewcart.php">View Cart</a>
        <a class="flex-lg-fill text-lg-center nav-link active" href="profile.php">My Profile</a>
              </nav>
      </div>
    </div>
          
          <!--Container row for cards.  4 cards were created to inform user about
      booking, parking info, car rental info, and signing up to become a new 
      travel agent-->
      <div class="container">
          <div class="row">
          <div class="col-md-6 col-lg-3">
              <div class="card">
                  <img src="/img/Agent.jpeg" class="card-im-top img-fluid"/>
                  <div class="card-block">
                      <h3 class="card-title">New Travel Agent</h3>
                      <p>Aiming high has never been more fun.  Become a travel agent and go as high as you want to go.</p>
                  </div>
              </div>
      </div>
          
          
      
      
          
          <div class="col-md-6 col-lg-3">
              <div class="card">
                  <img src="/img/NYC.jpeg" class="card-im-top img-fluid"/>
                  <div class="card-block">
                      <h3 class="card-title">Travel</h3>
                      <p>Want to catch that broadway show in NYC, or hit the beach in the MIA.  Book now to getaway for some fun.</p>
                  </div>
              </div>
      </div>
          
      
      
          
          <div class="col-md-6 col-lg-3">
              <div class="card">
                  <img src="/img/Car.jpeg" class="card-im-top img-fluid"/>
                  <div class="card-block">
                      <h3 class="card-title">Car Rentals</h3>
                      <p>Rent a convertible on South Beach, or an Suv for route 66 for a cheap rate. 
                      </p>
                  </div>
              </div>
      </div>
          
      
      
          <div class="col-md-6 col-lg-3">
              <div class="card">
                  <img src="/img/parking.jpeg" class="card-im-top img-fluid"/>
                  <div class="card-block">
                      <h3 class="card-title">Parking</h3>
                      <p>We got you covered for parking.  We will take care of your parking reservation.</p>
                  </div>
              </div>
      </div>
          </div>
          </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>

    <?php
      include "components/footer.php";
    ?>
  </body>

</html>