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
if(!empty($_POST)) {

    $sql = "UPDATE Employee AS E INNER JOIN Employee_salary AS ES ON E.id = ES.emp_id INNER JOIN Employee_city AS EC ON E.id = EC.emp_id SET E.name = '".$_POST['name']."', E.email = '".$_POST['email']."', E.phone = '".$_POST['phone']."', ES.salary = '".$_POST['salary']."', EC.city = '".$_POST['city']."' WHERE E.id = ".$_POST['emp_id'];

    if (mysqli_query($conn, $sql)) {
        header('Location: 02_03_2022.php');
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

