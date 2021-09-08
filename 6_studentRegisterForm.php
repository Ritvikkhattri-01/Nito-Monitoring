<?php

session_start();

$link = mysqli_connect('localhost', 'root', 'nito123');

mysqli_select_db($link,'nito');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO student_register (studentFullName, studentID, studentPass, sTeacherID, sSubjectCode, student_Institute) VALUES (?, ?, ?, ?, ?,?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $studentFullName, $studentID, $studentPass, $sTeacherID, $sSubjectCode, $student_Institute);
    
    $studentFullName = $_REQUEST['studentFullName'];
    $studentID = $_REQUEST['studentID'];
    $studentPass = $_REQUEST['studentPass'];
    $sTeacherID = $_REQUEST['sTeacherID'];
    $sSubjectCode = $_REQUEST['sSubjectCode'];
    $student_Institute = $_REQUEST['student_Institute'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('You are Registered!');</script>";
    } else{
        echo "<script>alert('We could not Register you. Try Again!');</script>";
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?>
