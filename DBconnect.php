<?
$conn = mysql_connect("codd.gsu","mshah15","mshah15", "mshah15");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mshah15", $conn);
?>