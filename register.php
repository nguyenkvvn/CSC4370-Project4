<?php

  //register.php
  //This is the account registration page for the project.


?>

<!doctype html>
<html lang="en">

  <head>

		<title>Project 4 - Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </head>

  <body class="col-sm-8 col-sm-offset-2">
      <?php
        include "components/navbar.php";
      ?>
      <div class="text-center" style="padding:50px 0">

      	<div class="login-form-1">
          <div class="logo">P4eCS - Register Account</div>
          <br>
      		<form id="login-form" class="text-left">
      			<div class="main-login-form">
      				<div class="login-group">
      					<div class="form-group">
      						<label for="lbl_username" class="sr-only">Username</label>
      						<input type="text" class="form-control" id="s_username" name="s_username" placeholder="username">
      					</div>
      					<div class="form-group">
      						<label for="lbl_password" class="sr-only">Password</label>
      						<input type="password" class="form-control" id="s_password" name="s_password" placeholder="password">
      					</div>
                <div class="form-group">
      						<label for="lbl_password" class="sr-only">Confirm Password</label>
      						<input type="password" class="form-control" id="s_passwordConfirm" name="s_passwordConfirm" placeholder="confirm password">
      					</div>
                <div class="form-group">
      						<label for="lbl_username" class="sr-only">Email</label>
      						<input type="text" class="form-control" id="s_email" name="s_email" placeholder="yourname@email.com">
      					</div>
      				</div>
      			</div>
      		<button type="submit" class="btn btn-primary center-block">Register</button>
      	</div>
          </form>
    </div>

    <?php
      include "components/footer.php";
    ?>
  </body>

</html>
