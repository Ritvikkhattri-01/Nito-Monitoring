<html>
    <head>
        <title>
            Nito Proctoring
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <div class="login-left">
            <h1  class="text-white"> Teacher Registration </h1>
        </div>
        <body>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
                        
                            <form action="3_teacherRegisterForm.php" method="post">
                                <div class="form-group">
                                    <label class="text-white">ID</label>
                                    <input type="text" name="t_ID" style="width:250px;" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Set Password</label>
                                    <input type="text" name="t_password" style="width:250px;" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Name</label>
                                    <input type="text" name="t_Name" style="width:250px;" class="form-control" required> 
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Institute Name</label>
                                    <input type="text" name="institute_Name" style="width:250px;" class="form-control" required> 
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
             </div>
                <div class="col-md-6 login-right">
                    
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
                        <div id="content"> 
                            <form method="POST" 
                                action="" 
                                enctype="multipart/form-data"> 
                                <input type="file" 
                                    name="uploadfile" 
                                    value="" /> 
                                    
                                <label class="text-white">ID</label>
                                <input type="text" name="teacherID" style="width:250px;" class="form-control" required>  
                                <div> 
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="upload"> 
                                    UPLOAD 
                                    </button> 
                                </div> 
                             
                        </div> 
                    </form> 
                    </div> 
                    </body>                                    
                </div>         
             </div>   
        </div>
</head>
</html>
