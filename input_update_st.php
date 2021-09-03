<!DOCTYPE html>
<html>
<head>
<title> Update Student </title>
</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";
$st_id = $_GET['did'];
$sql="SELECT StudentID, FirstName, LastName,GPAX, School, Program FROM student_api WHERE StudentID = $st_id";
$result = mysqli_query($conn,$sql);
?>
<h2>Update Student Data</h2>
<form action="update_st.php" method="post">
<?php
while($row = mysqli_fetch_assoc($result)) {
    $st_name = $row["FirstName"];
    $st_lname = $row["LastName"];
    $st_gpax = $row["GPAX"];
    $st_School = $row["School"];
    $st_Program = $row["Program"];
}
?>
Student ID: <?= $st_id ?>
<input type="hidden" name="did" value="<?= $st_id ?>"> <br/>
Student Name:<input type="text" name="sname" value="<?= $st_name?>"><br>
Student Last Name:<input type="text" name="slname" value="<?= $st_lname ?>"><br>
GPAX:<input type="text" name="sgpax" value="<?= $st_gpax ?>"><br>
School:<input type="text" name="sschool" value="<?= $st_School ?>"><br>
Program:<input type="text" name="sprogram" value="<?= $st_Program ?>"><br>

<input type="Submit" value = "Update Data">
</form>
</body>
</html>