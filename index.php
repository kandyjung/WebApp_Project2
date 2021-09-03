<!DOCTYPE html>
  <html lang="en">
  <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css"/>
     <style>
    </style>
  </head>
  <body class="page">
  <?php
   error_reporting(E_ERROR);
   if(isset($_GET['did']))
   {
   $id = $_GET['did'];
    // Include database connection file
    require_once "dbconnect.php";

    // Database query.
    $sql= "SELECT StudentID, Prefix, FirstName, LastName, GPAX, School, Program, Advisor, Dean, Status FROM Student_api WHERE StudentID = $id";
    $result=mysqli_query($conn, $sql);
    }
    ?>
    <?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	$st_name = $row["FirstName"];
    $st_lname = $row["LastName"];
    $st_gpax = $row["GPAX"];
    $st_School = $row["School"];
    $st_program =$row["Program"];
    $st_Advisor = $row["Advisor"];
    $st_dean = $row["Dean"];
    $st_status = $row["Status"];
    }
} else {
    echo "1 results";
}

mysqli_close($conn);
?>
    <form action= method="GET">
         <div style = "text-align:right;">
         
         <b>REG-217</b>
         </div>
         <br><br>  
         <div class = "container"><div  class = "container" id="border1"  >
             <b>School of ...................................</b> <br> &nbsp; &nbsp; &nbsp;<b>Mae Fah Luang University</b> <br> No ....................................<br> Date .................................... <br> Time ............ Recorded by .........</div>
        <div class = "container" id="border2"  ><b>School of ...................................</b> <br> &nbsp; &nbsp; &nbsp;<b>Mae Fah Luang University</b> <br> No ....................................... <br> Date ....................................<br> Time .............Recorded by .........</div>
         <center><img src="MFU.png" alt="Italian Trulli" width="150" /></center> 
  <br><div id="division"> 
  REGISTRAR DIVISION, MAE FAH LUANG UNIVERSITY <br><br>
       Request Form for Enroll in courses with special concurrent examinations
       <br><br><div> Semester &nbsp;&nbsp;
       <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;">
        </canvas>
         <label for="vehicle1"> First </label> &nbsp;
         <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;">
        </canvas>
         <label for="vehicle1"> Second</label> &nbsp;
         <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;">
        </canvas>
         <label for="vehicle"> Summer</label> &nbsp;
         &nbsp; &nbsp; &nbsp; Academic year ..............
          </div>
          <br><br><div id="headdivision1">
             (1)  To Head of the Division of Registrar
         </div ><br>
          <div id="studentid1">
          OUT of stastus's  Student ID
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             &nbsp;
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             &nbsp;
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
       
         </div><br>
         <div id="name">
             Name    Mr./Miss/Mrs.
            <?= $st_name ?> <?= $st_lname ?>
            <span class="name1"> Current Student ID 
            <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             &nbsp;
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             &nbsp;
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas></span>
        </div><br>
        <div id="threelines">
           study in the school of <?= $st_School ?>
           &nbsp; program of &nbsp; <?= $st_program ?>
             &nbsp;Mobile phone &nbsp; ...........................................
          </div><br>
         <div id="Cumulative">
             Cumulative grade point average (GPAX) &emsp;<?= $st_gpax ?>
            &emsp;Student Status 
            &emsp;&emsp;&emsp;<canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> 
          <label for="vehicle1"> Normal </label> 
          &emsp; <canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas>
         <label for="vehicle1"> Probation </label> 
         No. ...................................
        </div><br>
         <div id="total">
             Total credits left ............................................ credits and registered in the 
         &emsp; <canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> 
         <label for="vehicle1"> First </label> 
         &emsp;<canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> 
         <label for="vehicle1"> Second</label> 
         &emsp;<canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> 
         <label for="vehicle1"> Summer</label> 
       Academic year .............. <br> <br>
         has the courses with concurrent examinations in which I would like to enroll 
         </div><br>
         <div id="coursecode">
         &emsp; &emsp; &emsp; &emsp;1.course code  
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             course title ................................................................................................................................
             
         </div><br>
         <div id="section">
         &emsp; &emsp; &emsp; &emsp;section 
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas> 
            &nbsp; Examination date Midterm &nbsp;  ................................................................
             &nbsp;&nbsp; &nbsp;Final &nbsp;................................................................
         </div><br>
         <div id="coursecode2">
         &emsp; &emsp; &emsp; &emsp;2.course code  
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             course title ................................................................................................................................
         </div><br>
         <div id="section">
         &emsp; &emsp; &emsp; &emsp; section 
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas>
             <canvas id="myCanvas" width="15" height="15" style="border:2px solid black;"></canvas> 
             &nbsp; Examination date Midterm &nbsp;  ................................................................
             &nbsp;&nbsp; &nbsp;Final &nbsp;................................................................
         </div><br><br>
  <div  id="signature" >
      Student's Signature ....................................................................<br> <br>
     (............................................................................) <br> <br>
      ...................../...................../........................
  </div> <br><br>
         <table class="ttable" border="5" height="500" width="1000" >
             <tr valign="top" align="left"><th>(2)Advisor's Comment
                <br><br>&emsp;............................................................... 
                <br><br>&emsp;...............................................................
                <br><br>&emsp;............................................................... 
                <br><br><br><br>
                <span class="name1"> Signature ............................... 
                <br><br> (.................................)
                <br><br>............./ ............./ ............. </span><br><br><br><br>
                <td>(4)Recorded by the Registrar Division's staff 
                   <br><br> &emsp; &emsp; &emsp; &emsp;<canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas><label for="vehicle1"> Redundancy of Final Exam   </label> <br> 
                     <br> &emsp; &emsp; &emsp; &emsp;<canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas><label for="vehicle1"> Redundancy of Midterm Exam   </label> <br> 
                     <br> &emsp; &emsp; &emsp; &emsp;<canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> <label for="vehicle1"> Both of redundancy    </label>  <br>  <br>
                     <br> 
                     <span class="name1"> Signature ............................... 
                    <br><br> (.................................)
                    <br><br>............./ ............./ ............. <br><br></span>
                </td></th></tr>
            <tr valign="top" align="left"><th>(3) Dean's Comment 
                <br><br> &emsp; <canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> <label for="vehicle1"> Approved   </label> 
                <br><br> &emsp; <canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> 
                <label for="vehicle1"> Disapproved because ..........................................   </label> <br> <br>
                  <br>
                  <span class="name1"> Signature ............................... 
                 <br><br> (.................................)
                 <br><br>............./ ............./ ............. <br><br></span>
                  
                 <td>(5) Head of  Division Registrar's of  comment 
                     <br><br>&emsp; &emsp; &emsp; &emsp;<canvas id="myCanvas" width="15" height="15" style="border:1px solid black;"></canvas> 
                     <label for="vehicle1"> Acknowledge   </label> <br> <br><br> <br><br>
                     <span class="name1">Signature ............................... 
                    <br><br> (Mr. Ruangsak Kiengkamon)
                    <br><br>............./ ............./ ............. </span>
                </td></th></tr>
             
             </table>
             
       
  </div>
  </div>
  </form>
  <script>
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    ctx.fillStyle = "#000000";
    
</script>
<input type="button" name="Button" value="Print" onclick="javascript:this.style.display='none';window.print();" class="btn btn-primary" id="result">
  </body>
  </html>
 

