<?php

$host = "localhost"; 
$user = "mshah15"; 
$pass = "mshah15"; 
$db = "mshah15"; 

function execute_query($query) {

    $r = mysql_query($query);

    if (!$r) {
        echo "Cannot execute query: $query\n";
        trigger_error(mysql_error()); 
    } else {
        echo "Query: $query executed\n"; 
    }
}

$r = mysql_connect($host, $user, $pass);

if (!$r) {
    echo "Could not connect to server\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Connection established\n"; 
}

$r2 = mysql_select_db($db);

if (!$r2) {
    echo "Cannot select database\n";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Database selected\n";
}

$query = "DROP TABLE IF EXISTS CUSTOMERS"; 
execute_query($query);

$query = "CREATE TABLE CUSTOMERS(
		Id            INT    NOT NULL AUTO_INCREMENT,
		Username      TEXT, 
		Password      TEXT,
		Email         TEXT   NOT NULL,
		Firstname     TEXT   NOT NULL, 
		Lastname      TEXT   NOT NULL, 
		StreetAddress TEXT, 
		City          TEXT, 
		State         TEXT, 
		Zipcode       INT,
		PRIMARY KEY (Id)        ) ENGINE=InnoDB";
execute_query($query);

$query = "SELECT Firstname, Lastname, Email From CUSTOMERS";
$rs = mysql_query($query);

if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Query: $query executed\n";
	
$cname1 = mysql_fetch_field($rs, 4);
$cname2 = mysql_fetch_field($rs, 5);
$cname3 = mysql_fetch_field($rs, 3);

printf("%15s %15s %15n", $cname1->name, $cname2->name, 
    $cname3->name);
	
$nrows = mysql_num_rows($rs);

for ($i = 0; $i < $nrows; $i++) {
    $row = mysql_fetch_row($rs);
    echo $row[0];
    echo " ";
    echo $row[1];
    echo " ";
    echo $row[1];
    echo "\n";
}


$query = "DROP TABLE IF EXISTS INVENTORY";
execute_query($query);

$query = "CREATE TABLE INVENTORY(
		ProductNumber INT          NOT NULL AUTO_INCREMENT,
		ProductType   TEXT         NOT NULL,
		Product		  TEXT         NOT NULL,
		ProductTier   TEXT         NOT NULL,
		SeatNumber    TEXT,
		Price         DOUBLE(6,2)  NOT NULL,
		Available     INT          NOT NULL,
		Days          INT,
		PRIMARY KEY (ProductNumber) ) ENGINE = InnoDB";
execute_query($query);

$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, SeatNumber, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Copenhagen.", "Economy", "C21", 699.99, 80)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, SeatNumber, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Copenhagen.", "First Class", "A5", 999.99, 20)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, SeatNumber, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Jakarta.", "Economy", "D3", 799.99, 160)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, SeatNumber, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Jakarta.", "First Class", "A1", 1199.99, 40)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, SeatNumber, Price, Stock) VALUES("Flight","Delta Airlines, Atlanta to Denver.", "Economy", "B87", 349.99, 120)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, SeatNumber, Price, Stock) VALUES("Flight","Delta Airlines, Atlanta to Denver.", "First Class", "A12", 599.99, 30)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Volkswagon Jetta", "Compact", 89.99, 3, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Honda Pilot", "SUV", 109.99, 2, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Chevrolet Camaro", "Midsize", 100.99, 1, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Cadillac XTS", "Luxury", 139.99, 3, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Parking Fee", "Airport Parking", "Regular", 49.99, 250, 5)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Parking Fee", "Airport Parking", "VIP", 99.99, 50, 5)";
execute_query($query);

$query = "SELECT * From INVENTORY";
$rs = mysql_query($query);

if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Query: $query executed\n";
	
$query = "SHOW COLUMNS FROM INVENTORY";
$rs = mysql_query($query);
	
$nrows = mysql_num_rows($rs);

for ($i = 0; $i < $nrows; $i++) {
    $row = mysql_fetch_row($rs);
    echo $row[0];
    echo " ";
    echo $row[1];
    echo " ";
    echo $row[1];
    echo "\n";
}


$query = "DROP TABLE IF EXISTS ORDERS";
execute_query($query);

$query = "CREATE TABLE ORDERS(
		ProductNumber INT          NOT NULL AUTO_INCREMENT,
		Username      TEXT         NOT NULL,
		Parking       TEXT,
		FlightNumber  INT          NOT NULL,
		SeatNumber    INT,
		RentalCar     TEXT,
		FlightInfo    TEXT,
		DateofOrder   TEXT         NOT NULL,
		PRIMARY KEY (ProductNumber) ) ENGINE = InnoDB";
execute_query($query);


$query = "SELECT * From ORDERS";
$rs = mysql_query($query);

if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Query: $query executed\n";
	
$query = "SHOW COLUMNS FROM ORDERS";
$rs = mysql_query($query);
	
$nrows = mysql_num_rows($rs);

for ($i = 0; $i < $nrows; $i++) {
    $row = mysql_fetch_row($rs);
    echo $row[0];
    echo " ";
    echo $row[1];
    echo " ";
    echo $row[1];
    echo "\n";
}


mysql_close();

?>