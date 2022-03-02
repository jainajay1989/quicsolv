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

/* Code used to fetch the data */
$sql = "Select E.id, E.name, E.email, E.phone, ES.salary, EC.city from Employee AS E INNER JOIN Employee_salary AS ES ON E.id = ES.emp_id INNER JOIN Employee_city AS EC ON EC.emp_id = E.id WHERE E.id = ".$_GET['emp_id']." LIMIT 1";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($data);
?>
<form method="post" action="02_03_2022_update_submit.php">
    <label>Name</label>
    <input type='text' name='name' value="<?=$row['name']; ?>"/>

    <label>Email</label>
    <input type='text' name='email' value="<?=$row['email']; ?>"/>

    <label>Phone</label>
    <input type='text' name='phone' value="<?=$row['phone']; ?>"/>

    <label>Salary</label>
    <input type='text' name='salary' value="<?=$row['salary']; ?>" />

    <label>City</label>
    <input type='text' name='city' value="<?=$row['city']; ?>"/>

    <input type="hidden" name='emp_id' value="<?=$_GET['emp_id'];?>" />

    <input type='submit' value="Update" />
</form>