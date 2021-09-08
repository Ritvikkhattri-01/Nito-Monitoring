<?php

session_start();
$con = mysqli_connect('localhost', 'root', 'nito123');
mysqli_select_db($con,'nito');

$sID = $_POST['stu_user'];
$sPass = $_POST['stu_Password'];

$s = " select * from student_register where studentID = '$sID' && studentPass = '$sPass';";
$result =  mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['display_username'] = $sID;
    header('location:http://localhost:5000/');
}else {
    echo"gii";
    header('location:htlogin.php');   
}

$link = mysqli_connect('localhost', 'root', 'nito123');

mysqli_select_db($link,'nito');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO phptopy (S_ID) VALUES (?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "d", $studentID);

    $studentID = $_REQUEST['stu_user'];
    
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?>
