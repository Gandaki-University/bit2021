<?php
// MySQLi extension
// MySQLi will only work with MySQL databases

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
// Creating a DATABASE

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
?>

<!-- Creating a Table -->
<?php
$query_create = "CREATE TABLE guSTD (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($query_create) === TRUE) {
  echo "Table guSTD created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
 ?>
 <!-- Inserting the data -->
 <?php

 $insert_sql = "INSERT INTO guSTD (firstname, lastname, email)
 VALUES ('Ram', 'Neupane', 'hari@gmail.com')";

 if ($conn->query($insert_sql) === TRUE) {
   echo "New record created successfully";
   /* Getting the record id of insertion */
 //   $last_id = $conn->insert_id;
 // echo "New record created successfully. Last inserted ID is: " . $last_id;
 } else {
   echo "Error: " . $insert_sql . "<br>" . $conn->error;
 }
  ?>

<?php
// Closing the connection
$conn->close();
 ?>
