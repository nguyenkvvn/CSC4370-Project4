<?php

  //profile.php
  //Shows the user's open orders.

  //Brooks/Maaz: Disregard the AHREF on the order no#. Clicking on the order no# to view the order contents is not within the scope of the assighment.

  //Brooks: A nice touch to the page title would be to put the user's name in the title, kinda like "Brooks's Profile". I left some sample code in for you.

?>

<!doctype html>
<html lang="en">

  <head>

		<title>Project 4 - <?php /*echo $SESSION_name;*/ ?>'s' Profile</title>
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

    <div class="page-header">
      <h1><?php /*echo $SESSION_name;*/ ?>'s' Profile</h1>
    </div>

    <div class="text-center" style="background: lightgrey">
      <table class="table">
        <thead>
          <tr>
            <th>Order#</th>
            <th>Time</th>
            <th>Items</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="">10000</a></th>
            <td>2:00pm 1/1/2017</td>
            <td>4</td>
            <td>Processing</td>
          </tr><!---
          <?php
            //Brooks: This page is similar to the inventory page. Configure the page however you like to pull tthe user's orders. I left a sample query for you to filter orders by User's ID.
      			$query = mysqli_query($link, "SELECT * FROM ORDERS WHERE `user ID matches OrderID's user that checked it out`");
      			while ($row = mysqli_fetch_array($query))
      			{
      			?>
              <tr>
                <th scope="row"><?= $row['l_orderNo'] ?></th>
                <td><?= $row['t_time'] ?></td>
                <td><?= $row['l_itemCount'] ?></td>
                <td>$<?= $row['s_status'] ?>.99</td>
      			<?php
      			}
      		?>--->
        </tbody>
        <button type="submit" class="btn btn-primary center-block">Proceed to checkout</button>
      </table>
    </div>

    <?php
      include "components/footer.php";
    ?>
  </body>

</html>
