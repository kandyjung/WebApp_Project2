<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("dbconnect.php");
				// user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM login Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
			
                  if(mysqli_num_rows($result)==0){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["Username"] = $row["Username"];

                        Header("Location: Information.php");

                      

                  }

        }
?>