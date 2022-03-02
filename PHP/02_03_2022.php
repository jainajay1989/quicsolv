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
$sql = "Select E.id, E.name, E.email, E.phone, ES.salary, EC.city from Employee AS E INNER JOIN Employee_salary AS ES ON E.id = ES.emp_id INNER JOIN Employee_city AS EC ON EC.emp_id = E.id";
$data = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($data)) {
    $records[] = $row;
}
/* Code used to fetch the data */
?>
<table class="table" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Salary</th>
            <th>City</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($records as $val) { ?>
        <tr>
            <td><?=$val['id']?></td>
            <td><?=$val['name']?></td>
            <td><?=$val['email']?></td>
            <td><?=$val['phone']?></td>
            <td><?=$val['salary']?></td>
            <td><?=$val['city']?></td>
            <td><a href="02_03_2022_edit.php?emp_id=<?=$val['id'];?>">Edit</a> | <a href="02_03_2022_delete.php?emp_id=<?=$val['id'];?>">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
