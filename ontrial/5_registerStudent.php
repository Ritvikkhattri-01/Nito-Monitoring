<html>
    <head>
        <title>
            Nito | Student Registration
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
                        <h2  class="text-white"> Student Registration </h2>
                            <form action="6_studentRegisterForm.php" method="post">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="studentFullName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>StudentID</label>
                                    <input type="text" name="studentID" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Set Password</label>
                                    <input type="text" name="studentPass" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Teacher ID</label>
                                    <input type="text" name="sTeacherID" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject Code</label>
                                    <input type="text" name="sSubjectCode" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Institue Name</label>
                                    <input type="text" name="student_Institute" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                    <div class="col-md-6 login-right">
                        <h2  class="text-white"> Student Registration </h2>
                        <?php
                        error_reporting(0); 
                        ?> 
                        <?php
                        $msg = ""; 
                        if (isset($_POST['upload'])) { 
                            $studentID=$_POST["studentID"];
                            $filename = $_FILES["uploadfile"]["name"]; 
                            $tempname = $_FILES["uploadfile"]["tmp_name"];     
                                $folder = "facerecog/student_images/".$filename; 
                                
                            $db = mysqli_connect("localhost", "root", "nito123", "nito"); 
                                $sql = "INSERT INTO student_images (studentID,	studentIMG) VALUES ('$studentID','$filename')";
                                mysqli_query($db, $sql); 
                                if (move_uploaded_file($tempname, $folder))  { 
                                    $msg = "Image uploaded successfully"; 
                                    echo '<script>alert("Image Uploaded Successfully")</script>'; 
                                }else{ 
                                    $msg = "Failed to upload image"; 
                                    echo '<script>alert("Could Not Upload Image.Try Again ")</script>'; 
                            } 
                        } 
                        $result = mysqli_query($db, "SELECT * FROM student_images"); 
                        ?>
                        <div id="content"> 
                            <form method="POST" 
                                action="" 
                                enctype="multipart/form-data"> 
                                <input type="file" 
                                    name="uploadfile" 
                                    value="" /> 
                                    
                                <label class="text-white">ID</label>
                                <input type="text" name="studentID" style="width:250px;" class="form-control" required>  
                                <div> 
                                    <br>
                                    <button type="submit" class="btn btn-primary"
                                            name="upload"> 
                                    UPLOAD 
                                    </button> 
                                </div> 
                            </form> 
                        </div> 
                            </body> 
                   </div>
                </div>         
            </div>         
        </div>   
    </body>
</html>