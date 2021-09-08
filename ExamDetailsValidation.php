<?php

session_start();
$con = mysqli_connect('localhost', 'root', 'nito123');
mysqli_select_db($con,'nito');

$subCode = $_POST['subCode'];



$s = " select * from createexam where subCode = '$subCode';";
$result =  mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){  
    $_SESSION['subCode'] = $subCode;

    header('location:exDetailTables');
}else {
    header('location:ExamDetails.php');
}
?>
