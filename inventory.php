<?php session_start();?>
<?php
include 'header.php';
 include_once 'DBconnect.php';
 $result = mysqli_query($conn, "SELECT * FROM INVENTORY");
 if($_SESSION['user'] == 'admin')
 {
		$result2 = mysqli_query($conn, "SELECT * FROM ORDERS");
 }

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
          <td>Flight Number</td>
          <td>Seat Number</td>
          <td>Available</td>
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

		<h2> Inventory</h2>
		<br>
		<div class="invTable">
		<table>

        </tr>
        <?php
			while($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$res['FlightNumber']."</td>";
				echo "<td>".$res['SeatNumber']."</td>";
				if($res['Available'] == 1)
				{
					echo "<td>True</td>";
				}
				else
				{
					echo "<td>False</td>";
				}
			}
        ?>
		</table>
		<?php
			if($_SESSION['user'] == 'admin')
			{
				echo '<h2> Orders</h2>
						<br>
						<div class="invTable">
						<table>
							<td>Order Number</td>
							<td>Username</td>
							<td>Parking</td>
							<td>Flight Number</td>
							<td>Seat Number</td>
							<td>Rental Car</td>
							<td>Flight Info</td>
							<td>Date Ordered</td>
						</tr>';
				while($res2 = mysqli_fetch_array($result2)) {
					echo "<tr>";
					echo "<td>".$res2['OrderNumber']."</td>";
					echo "<td>".$res2['Username']."</td>";
					echo "<td>".$res2['Parking']."</td>";
					echo "<td>".$res2['FlightNumber']."</td>";
					echo "<td>".$res2['SeatNumber']."</td>";
					echo "<td>".$res2['RentalCar']."</td>";
					echo "<td>".$res2['FlightInfo']."</td>";
					echo "<td>".$res2['DateofOrder']."</td>";
				}
				echo '</table>';

			}
		?>
		</div>
    <?php
        include "components/footer.php";
      ?>
    </body>
</html>
