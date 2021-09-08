    
<html>
    <head>
        <title>
            Nito Proctoring | Exam Details
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
        <!-- <h1> Welcome  </h1> -->
  
    </head>  
    <div class="container">
    <div class="row">
        <div class="col-12">
            <header class=" text-center text-uppercase text-white mb-5 exam-details-header">Enter exam details</header>
        </div>
    </div> 
    <div class="row">
        <div class="col-12">
          <div class="exam-details-box">
         
<form action="ExamDetailsValidation.php" method="post">
<div class="form-group">
                        <label class="form-labels" >Subject Code </label>
                        <input placeholder="Enter Subject Code" type="text" name="subCode" class="form-control" required>
                    </div>
  <!-- <div class="form-group exam-details-box">
    <input type="text" class="form__input" name ="subCode" id="subCode" placeholder="Enter Subject Code" method="post" required />
    <label for="name" class="form__label">Here we go!</label>
  </div> -->
  <div class="text-center">
  <button type="submit" class="btn  submit-button mt-2">Submit</button>
  </div>
</form>
  </div> 
</div>
    </div> 
</div>
</html>
