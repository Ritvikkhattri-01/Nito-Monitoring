<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'nito123');

mysqli_select_db($con,'nito');

$id = $_POST['t_ID'];
$pass = $_POST['t_password'];
$teName = $_POST['t_Name'];
$insName = $_POST['institute_Name'];

$s = " select * from teacher_register where teacherID = '$id' && teacherPassword = '$pass';";
$result =  mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:teacheroptions.html');
}else{
    header('location:htlogin.php');
}
?>