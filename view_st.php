<!DOCTYPE html>
<html>
<head>
<title> View Employee </title>
</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";
$st_id = $_GET['did'];
$sql="SELECT StudentID, FirstName, LastName,GPAX, School, Program FROM student_api WHERE StudentID = $st_id";
$result = mysqli_query($conn,$sql);
?>
<h2>Student Data</h2>
<?php
while($row = mysqli_fetch_assoc($result)) {
$st_name = $row["FirstName"];
$st_lname = $row["LastName"];
$st_gpax = $row["GPAX"];
$st_School = $row["School"];
$st_Program = $row["Program"];

}
?>
Student ID: <?= $st_id ?> <br/>
Student Name: <?= $st_name ?> <br/>
Student Last Name: <?= $st_lname ?> <br/>
GPAX: <?= $st_gpax ?><br/>
School : <?= $st_School ?><br/>
Program: <?= $st_Program ?>

</body>
</html>