<!-- PDO (PHP Data Objects) -->
<?php
// PDO will work on 12 different database systems


 ?>
 <?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// A great benefit of PDO is that it has an exception class to handle any problems that may occur in our database queries
?>
<!-- Creating a database -->
<?php
$sql = "CREATE DATABASE bit2022";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
 ?>
