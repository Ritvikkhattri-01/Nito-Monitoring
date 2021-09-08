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
        <div class="row pt-5">
                    <div class="col-12">
                    <header class=" text-center text-uppercase text-white teacher-register-header">Student Registration</header>
                    </div>
                </div>
            
                <div class="row justify-content-center">
                    <div class="col-12 register-student-box mx-4 mt-3 rounded">
                    <h2  class="text-white mb-4 text-center">Student Details </h2>
                        
                            <form action="6_studentRegisterForm.php" method="post">
                                <div class="form-group">
                                    <label class="form-labels">Full Name</label>
                                    <input placeholder="Enter Student Name" type="text" name="studentFullName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Student ID</label>
                                    <input placeholder="Enter Student ID" type="text" name="studentID" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Password</label>
                                    <input placeholder="Enter Password" type="text" name="studentPass" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Teacher ID</label>
                                    <input placeholder="Enter Teacher ID" type="text" name="sTeacherID" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Subject Code</label>
                                    <input placeholder="Enter Subject Code" type="text" name="sSubjectCode" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Institute Name</label>
                                    <input placeholder="Enter Institute Name" type="text" name="student_Institute" class="form-control" required>
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn submit-button mt-2">Submit</button>

                                </div>
                                
                            </form>
                    </div>
                    <!-- <div class="col-md-6 upload-student-image-box mx-4 mt-3 rounded">
                    <h2  class="text-white mb-4 text-center">Upload Student Image </h2>
                     /*    <?php
                        error_reporting(0); 
                        ?> 
                        <?php
                        $msg = ""; 
                        if (isset($_POST['upload'])) { 
                            $studentID=$_POST["studentID"];
                            $filename = $_FILES["uploadfile"]["name"]; 
                            $tempname = $_FILES["uploadfile"]["tmp_name"];     
                                $folder = "student_images/".$filename; 
                                
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
                        ?> */
                        <div id="content"> 
                            <form method="POST" 
                                action="" 
                                enctype="multipart/form-data"> 
                                <label class="form-labels">Student Image</label>
                                <br/>

                                <input type="file" 
                                    name="uploadfile" 
                                    value="" />
                                    <br/> 
                                    
                                <label class="form-labels mt-4">Student ID</label>
                                <input placeholder="Enter Student ID" type="text" name="studentID" class="form-control" required>  
                                <div> 
                                    <br>
                                    <div class="text-center">
                                    <button type="submit" class="btn submit-button mt-2"
                                            name="upload"> 
                                    UPLOAD 
                                    </button> 


                                    </div>
                                    
                                </div> 
                            </form>  -->
                        </div> 
                            </body> 
                   </div>
                </div>         
                    
        </div>   
    </body>
</html>