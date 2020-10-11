<?php
    $servername = 'localhost';
    $username = 'username';
    $password = 'password';
    $dbname = 'myDB';

    $conn = new mysqli($servername, $username, $password, $dbname)

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

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

?>