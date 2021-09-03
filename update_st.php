<?php
if(empty(trim($_POST["did"]))){
// URL doesn't contain id parameter. Redirect to error page
// header("location: error.php");
exit();
}
else{
// Include database connection file
require_once "dbconnect.php";
$st_id = $_POST["did"];
$st_name = $_POST["sname"];
$st_lname = $_POST["slname"];
$st_gpax = $_POST["sgpax"];
$st_School = $_POST["sschool"];
$st_program = $_POST["sprogram"];
$sql="UPDATE student_api SET FirstName = '$st_name' 
,LastName = '$st_lname'
,GPAX = $st_gpax
,School = '$st_School'
,Program = '$st_program'
WHERE StudentID = $st_id";
$result = mysqli_query($conn,$sql);
if (!$result)
{
die('Error: ' . mysql_error($conn));
}
else {
header("location: information.php");
}
mysqli_close($conn);
}
?>