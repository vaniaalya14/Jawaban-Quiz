<?php
$servername = 'localhost';
$username = 'username';
$password = 'password';
$dbname = 'myDB';

$conn = new mysqli($servername, $username, $password, $dbname)

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

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