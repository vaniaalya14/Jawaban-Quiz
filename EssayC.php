<?php
$servername = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'myDB';

$conn = new mysqli($servername, $username, $password, $dbname)

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
//------------------------------ ESSAY C -----------------------------------
$sql = "CREATE TABLE customers (
    -> id int AUTO_INCREMENT,
    -> name VARCHAR(255),
    -> email VARCHAR (255),
    -> password VARCHAR(255),
    -> PRIMARY KEY (id))";

if ($conn->query($sql) === TRUE) {
    echo "Table customers created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();

$sql1 = "CREATE TABLE orders (
    -> id int AUTO_INCREMENT,
    -> amount VARCHAR(255),
    -> customer_id int,
    -> PRIMARY KEY (id),
    -> CONSTRAINT FK_customer_id on (customer_id)
    -> REFERENCES customers(id))";

if ($conn->query($sql1) === TRUE) {
    echo "Table orders created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
?>