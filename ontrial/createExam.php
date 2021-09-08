<html>
    <head>
        <title>
            Nito Proctoring
        </title>    
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
    <div class="row">
        <div class="col-12">
            <header class=" text-center text-uppercase text-white mb-5 create-exam-header">Create Exam</header>
        </div>
    </div>
    
        <div class="row">
            <div class="col-12">
            <div class="create-exam-box rounded">
            <form action="createExamForm.php" method="post">
                <div>           
                    <div class="form-group">
                        <label class="form-labels" >Subject </label>
                        <input placeholder="Enter Subject For Your Exam" type="text" name="subCode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-labels">Form Link</label>
                        <input placeholder="Enter Exam Link" type="text" name="gLink" class="form-control" required>
                    </div>
                    <div class="text-center">
                <button type="submit" class="btn  submit-button mt-2">Submit</button> 
</div>        
                </form>
</div>
            </div>        
        </div>   
    </div>
</div>
</body>
</html>
