<?php
session_start();
$link = mysqli_connect('localhost', 'root', 'nito123');
mysqli_select_db($link,'nito');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
// Prepare an insert statement
$sql = "INSERT INTO createexam (subCode, gLink) VALUES (?, ?)";
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "ss", $subCode, $gLink);
    
    $subCode = $_REQUEST['subCode'];
    $gLink = $_REQUEST['gLink'];
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('Exam Created!');</script>";
    } else{
        echo "<script>alert('Exam Could NOT be Created! Try Again.');</script>";
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
