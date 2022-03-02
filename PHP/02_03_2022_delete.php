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
$sql = "DELETE E, ES, EC from Employee AS E INNER JOIN Employee_salary AS ES ON E.id = ES.emp_id INNER JOIN Employee_city AS EC ON EC.emp_id = E.id WHERE E.id = ".$_GET['emp_id'];

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
header('Location: 02_03_2022.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
