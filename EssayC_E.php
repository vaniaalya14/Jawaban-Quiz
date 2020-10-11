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


//------------------------------ ESSAY D -----------------------------------
  $sql = "INSERT INTO customers (name, email, password)
  VALUES ('John Doe', 'john@doe.com', 'john123'), ('Jane Doe', 'jane@doe.com', 'jane123')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  $sql = "INSERT INTO orders (amount, customer_id)
  VALUES ('500',1), ('200',2),('750',2),('250',1),('400',2)";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

//------------------------------ ESSAY E -----------------------------------
  $sql = "SELECT c.name as customer_name, SUM(o.amount) as total_amount 
    FROM customers c, orders o
    WHERE c.id = o.customer_id
    GROUP BY c.name
    HAVING sum(o.amount);";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>