<?php

/* This code is used to connect with database */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quicksol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/* This code is used to connect with database */

$sql = "INSERT INTO Persons (firstname, lastname, address, city)
VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['address']."', '".$_POST['city']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>