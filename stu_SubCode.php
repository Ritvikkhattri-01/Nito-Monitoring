<?php   
    session_start(); 
    $con = mysqli_connect('localhost', 'root', 'nito123');
    mysqli_select_db($con,'nito');
?>       
<html>
    <head>
        <title>
            Nito Proctoring | Subject Code
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styleSubCode.css">
        
  
    </head>  
<div class="container">     
  <div class="row pt-5">
    <div class="col-12">
    <h1 class="text-center text-white"> Welcome
        <?php 
            $usr= $_SESSION['display_username'];
            echo $usr;
        ?>
        </h1>

    </div>
</div>
<div class="row my-5 pt-5">
  <div class="col-12 d-flex justify-content-center">
  <form class="subject-code-container rounded" action="createExamValidation.php" method="post">
  <div class="form-group">
    <label class="form-labels">
      Subject Code
</label> 
    <input class="form-control" type="text" name ="subCode" id="subCode" placeholder="Enter Subject Code" method="post" required />
    
  </div>
  <div class="form-group">
  <label class="form-labels">
      Link
</label> 
    <input class="form-control" type="text" name ="gLink" id="gLink" placeholder="Enter Link" method="post" required />
    
  </div>
  <div class="text-center">
    <button type="submit" class="btn submit-button mt-2">Submit</button>
  </div>
  <div class="text-white mt-3 text-center h4" for="name" >Good Luck!</div>
  
</form>  

  </div>
</div>
<div>


