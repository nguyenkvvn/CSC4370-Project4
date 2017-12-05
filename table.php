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
		Firstname     TEXT   NOT NULL, 
		Lastname      TEXT   NOT NULL, 
		StreetAddress TEXT, 
		City          TEXT, 
		State         TEXT, 
		Zipcode       INT,
		PRIMARY KEY (Id)        ) ENGINE=InnoDB";
execute_query($query);

$query = "INSERT INTO CUSTOMERS (Firstname, Lastname) VALUES('Maaz', 'Shah')";
execute_query($query);

$query = "DROP TABLE IF EXISTS INVENTORY";
execute_query($query);

$query = "CREATE TABLE INVENTORY(
		ProductNumber INT          NOT NULL AUTO_INCREMENT,
		ProductType   TEXT         NOT NULL,
		Product		  TEXT         NOT NULL,
		ProductTier   TEXT         NOT NULL,
		Price         DOUBLE(6,2)  NOT NULL,
		Stock		  INT          NOT NULL,
		Days          INT,
		PRIMARY KEY (ProductNumber) ) ENGINE = InnoDB";
execute_query($query);

$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Copenhagen.", "Economy", 699.99, 80)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Copenhagen.", "First Class", 999.99, 20)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Jakarta.", "Economy", 799.99, 160)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock) VALUES("Flight","Lufthansa Airlines, Atlanta to Jakarta.", "First Class", 1199.99, 40)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock) VALUES("Flight","Delta Airlines, Atlanta to Denver.", "Economy", 349.99, 120)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock) VALUES("Flight","Delta Airlines, Atlanta to Denver.", "First Class", 599.99, 30)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Volkswagon Jetta", "Compact", 89.99, 3, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Honda Pilot", "SUV", 109.99, 2, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Chevrolet Camaro", "Midsize", 100.99, 1, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Rental Car", "Cadillac XTS", "Luxury", 139.99, 3, 2)";
execute_query($query);
$query = "INSERT INTO INVENTORY (ProductType, Product, ProductTier, Price, Stock, Days) VALUES("Parking Fee", "Volkswagon Jetta", "Compact", 99.99, 30, 2)";
execute_query($query);



$query = "DROP TABLE IF EXISTS ORDERS";
execute_query($query);

$query = "CREATE TABLE ORDERS(
		ProductNumber INT          NOT NULL AUTO_INCREMENT,
		Product       TEXT         NOT NULL,
		Price         DOUBLE(6,2)  NOT NULL,
		Quantity      INT          NOT NULL,
		HenryTaxPrice DOUBLE(6,2),
		PRIMARY KEY (ProductNumber) ) ENGINE = InnoDB";
execute_query($query);


mysql_close();

?>