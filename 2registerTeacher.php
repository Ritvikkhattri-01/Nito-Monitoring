<html>
    <head>
        <title>
            Nito Proctoring | Teacher Registration
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <!-- <div class="login-left">
            <h1  class="text-white"> Teacher Registration </h1>
        </div> -->
        </head>
        <body>
        <div class="container">
            <!-- <div class="login-box"> -->
                <div class="row">
                    <div class="col-12">
                    <header class=" text-center text-uppercase text-white mb-5 teacher-register-header">Teacher Registration</header>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 register-info-box m-4 rounded">
                    <h2  class="text-white mb-4 text-center">Teacher Details </h2>
                            <form action="3_teacherRegisterForm.php" method="post">
                                <div class="form-group">
                                    <label class="form-labels">ID</label>
                                    <input placeholder="Enter ID" type="text" name="t_ID" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Set Password</label>
                                    <input placeholder="Enter Password" type="text" name="t_password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Name</label>
                                    <input placeholder="Enter Name" type="text" name="t_Name"  class="form-control" required> 
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Institute Name</label>
                                    <input placeholder="Enter Institute Name" type="text" name="institute_Name" class="form-control" required> 
                                </div>
                                <div class="text-center">
  <button type="submit" class="btn  submit-button mt-2">Submit</button>
  </div>
                            </form>
             </div>
                <div class="col-md-6 student-details-box m-4 rounded">
                <h2  class="text-white mb-4 text-center">Upload Teacher Image </h2>
                    
                    <?php
                        error_reporting(0); 
                    ?> 
                    <?php
                        $msg = ""; 
                        if (isset($_POST['upload'])) { 
                            $teacherID=$_POST["teacherID"];
                            $filename = $_FILES["uploadfile"]["name"]; 
                            $tempname = $_FILES["uploadfile"]["tmp_name"];     
                                $folder = "t_image/".$filename; 
                                
                            $db = mysqli_connect("localhost", "root", "nito123", "nito"); 
                                $sql = "INSERT INTO teacher_images (teacherID,	teacherIMG) VALUES ('$teacherID','$filename')";
                                mysqli_query($db, $sql); 
                                if (move_uploaded_file($tempname, $folder))  { 
                                    echo '<script>alert("Image Uploaded Successfully")</script>'; 
                                    $msg = "Image uploaded successfully"; 
                                }else{ 
                                    echo '<script>alert("Could not Upload Image. Please Try Again.")</script>'; 
                                    $msg = "Failed to upload image"; 
                            } 
                        } 
                        $result = mysqli_query($db, "SELECT * FROM teacher_images"); 
                        ?>
                        <div id="content" class="pt-2"> 
                            <form method="POST" 
                                action="" 
                                enctype="multipart/form-data"> 
                                <label class="form-labels">
                                    Teacher Image
                                </label>
                                <br/>
                                <input type="file" 
                                    name="uploadfile" 
                                    value="" /> 
                                    <br/>
                                    
                                <label class="form-labels mt-4">Teacher ID</label>
                                <input placeholder="Enter teacher ID" type="text" name="teacherID" class="form-control" required>  
                                <div> 
                                    <br/>
                                    <div class="text-center">
                                    <button type="submit" class="btn submit-button mt-2" name="upload"> 
                                    UPLOAD 
                                    </button> 

                                    </div>
                                    
                                </div> 
                             
                        </div> 
                    </form> 
                    </div> 
                    </body>                                    
                <!-- </div>          -->
             <!-- </div>    -->
        <!-- </div> -->

</html>
