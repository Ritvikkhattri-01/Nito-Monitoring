<?php 
session_start(); 
$user = 'root'; 
$password = 'nito123';  
$database = 'nito';  
$servername='localhost'; 
$mysqli = new mysqli($servername, $user, $password, $database); 

$subCode = $_SESSION['subCode']; 


if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  
// SQL query to select data from database 
$sql = "SELECT stuID, MAX(tabSwitchCount) FROM tabswitch WHERE subCode='$subCode' GROUP BY stuID;"; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
<html> 
<html lang="en">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styleExamDetail.css">
<head> 
    <meta charset="UTF-8"> 
    <title>Nito | Exam Details</title> 
    <!-- CSS FOR STYLING THE PAGE --> 
</head> 
  
<body> 
    <section> 
        <div class="row pt-5">
            <div class="col-12">
            <p class="text-white text-center exam-details-header">SUBJECT CODE: 
            <?php
            $subCode = $_SESSION['subCode']; 
            echo $subCode;
            ?>         
        </p> 

            </div>
        </div>
        
        <!-- TABLE CONSTRUCTION--> 
        <table class="mt-3"> 
            <tr> 
                <th class="text-uppercase">Enrollment Number</th> 
                <th class="text-uppercase">Number of tab switch attempts</th> 

            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['stuID'];?></td> 
                <td><?php echo $rows['MAX(tabSwitchCount)'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 
