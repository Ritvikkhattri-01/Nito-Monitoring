<?php
    
    $con = mysqli_connect('localhost', 'root', 'nito123');
    mysqli_select_db($con,'nito');

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

$subCode = $_POST['subCode'];
$gLink = $_POST['gLink'];


$s = " select * from createexam where subCode = '$subCode' and gLink= '$gLink';";
$result =  mysqli_query($con, $s);
$num = mysqli_num_rows($result);
    
    if($num == 1){
        session_start();
        $_SESSION['subCode'] = $subCode;
        $_SESSION['gLink'] = $gLink;   
        header('location:TestOnRun.php');
    }else {
        header('location:stu_SubCode.php');
        exit();
    }
?>