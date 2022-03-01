<?php
$x = 75;
$y = 25;
$z = 0;
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}
 
addition();
echo $z;

echo "<br>Server Variable<br/>";
echo "==============================<br/>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER']; //Out dated
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


?>

<form method="POST" action="01_03_2022_submit.php?name=ajay&email=jainajay1989@gmail.com">
    <input type="text" name="email_id"/>
    <button type="submit">Submit</button>
</form>


<form method="GET" action="01_03_2022_submit.php">
    <input type="text" name="email_id" />
    <button type="submit">Submit</button>
</form>

<a href="01_03_2022_submit.php?name=ajay&email=jainajay1989@gmail.com">Click me</a>


MySQL Create Table:
===============================================================
CREATE TABLE Persons (
    PersonID int primary key auto_increament,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);

INSERT Query
===============================================================
INSERT INTO Persons(`PersonID`, `FirstName`, `LastName`, `Address`, `City`) VALUES(1, 'Ajay', 'Jain', 'Bollywood Center Point', 'Nagpur');
INSERT INTO Persons(`PersonID`, `FirstName`, `LastName`, `Address`, `City`) VALUES(NULL, 'Kalpesh', 'Jain', 'Bollywood Center Point', 'Nagpur')
INSERT INTO Persons(`PersonID`, `FirstName`, `LastName`, `Address`, `City`) VALUES(NULL, 'Ajay Kumar', 'Jain', 'Bollywood Center Point', 'Nagpur')



Select Records
===============================================================
Select * from Persons

Select * from Persons WHERE PersonID = 1;
Select * from Persons WHERE PersonID = 2;

SELECT * FROM `Persons` WHERE FirstName LIKE '%Ajay';
SELECT * FROM `Persons` WHERE FirstName LIKE 'Ajay%';
SELECT * FROM `Persons` WHERE FirstName LIKE '%Ajay%';

Update Records
===============================================================
UPDATE Persons SET LastName = 'More';
UPDATE Persons SET LastName = 'Jain' WHERE FirstName LIKE '%Ajay%';

===============================================================
DELETE from Persons WHERE FirstName LIKE '%Kalpesh%'
DELETE from Persons WHERE FirstName = 'Kalpesh'


<form method="post" action="01_03_2022_submit.php">
    <label>Firstname</label>
    <input type='text' name='firstname' />

    <label>Lastname</label>
    <input type='text' name='lastname' />

    <label>Address</label>
    <input type='text' name='address' />

    <label>City</label>
    <input type='text' name='city' />

    <input type='submit' value="Add" />
</form>