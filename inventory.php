<?php

  //template.php
  //This a template for pages in Project4.

?>

<!doctype html>
<html lang="en">

  <head>

		<title>Project 4 - Inventory</title>
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
      <h1>Project 4 Inventory</h1>
    </div>

    <div class="text-center" style="background: lightgrey">

    </div>

    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Picture</th>
          <th>Name</th>
          <th>Price</th>
          <th> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>picture</td>
          <td>Potato</td>
          <td>$2.99</td>
          <td><button class="btn btn-primary center-block">Add to cart</button></td>
        </tr>
        <!---
        <?php
          //Maaz: fill in the query below to select your inventory table
          //Brooks: configure the buttons however you like to have them add that particular product to the cart.
    			$query = mysqli_query($link, "SELECT * FROM  `maaz_inventory_table`");
    			while ($row = mysqli_fetch_array($query))
    			{
    			?>
            <tr>
              <th scope="row"><?= $row['l_itemNo'] ?></th>
              <td><?= $row['l_itemLINKtoPicture'] ?></td>
              <td><?= $row['l_itemName'] ?></td>
              <td>$<?= $row['l_itemPrice'] ?>.99</td>
              <td><button class="btn btn-primary center-block">Add to cart</button></td>
    			<?php
    			}
    		?>
        --->
      </tbody>
    </table>


    <?php
      include "components/footer.php";
    ?>
  </body>

</html>
