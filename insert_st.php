<?php
// Include database connection file
require_once "dbconnect.php";
// Get data from input form
$stid=$_POST['did'];
$stname=$_POST['sname'];
$st_lname=$_POST['slname'];
$st_gpax=$_POST['sgpax'];
$st_School=$_POST['sschool'];
$st_program=$_POST['sprogram'];
$st_Advisor=$_POST['sad'];
$st_dean=$_POST['sdean'];
$st_status=$_POST['sstat'];
// Insert data
$sql="INSERT INTO student_api(StudentID, FirstName, LastName, GPAX, School, Program, Advisor, Dean, Status) VALUES
($stid, '$stname','$st_lname', $st_gpax, '$st_School', '$st_program', '$st_Advisor', '$st_dean', '$st_status')";
$result=mysqli_query($conn, $sql);
if (!$result){
die('Error: ' . mysqli_error($conn));
}
else {
header("location: information.php");
}
mysqli_close($conn);
?>