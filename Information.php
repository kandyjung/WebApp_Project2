<!DOCTYPE html>
<html>
<head> 
<!-- Required meta tags -->
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-
to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



<title> Read Data from Database </title> 
</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";
// Database query.
$sql = "SELECT StudentID, FirstName, LastName FROM student_api";
$result = mysqli_query($conn,$sql);
?>
<div class="container">
<div class = "page-header">
<h2 class="font-weight-bold">Student Data</h2>
</div>
<div class="float-left">
<a href="input_insert_st.php" class="btn btn-primary btn-lg" role="button">
Add New Student</a>
</div><br><br><br>



<table class="table table-striped">
<thead class="thead-dark">
<tr class="table-active">
<th>StudentID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Function</th>
</tr>
<?php
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$st_id = $row["StudentID"];
$st_name = $row["FirstName"];
$st_lname = $row["LastName"];
?>
<tr  class="bg-success">
<td class="table-warning"><?= $st_id ?></td>
<td class="table-success"><?= $st_name ?></td>
<td class="table-danger"><?= $st_lname ?></td>
<td class="table-primary">
<a href="view_st.php?did=<?= $st_id ?>" >View</a>
<a href="input_update_st.php?did=<?= $st_id ?>" >Update</a>
<a href="delete_st.php?did=<?= $st_id ?>" onClick="return confirm ('Delete this Student?')">Delete</a>
<a href="index.php?did=<?= $st_id ?>" >Print</a>

</td>
</tr>
<?php
}
} else {
echo "0 results";
}
mysqli_close($conn);
?>
</table> 
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="an
onymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="an
onymous"></script>
</body> 
</html>