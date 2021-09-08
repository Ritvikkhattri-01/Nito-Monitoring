<html>
    <head>
        <title>
            Nito Proctoring | Welcome
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="popup.js"></script>
    </head>
        <div class="container">
            <!-- <div class="login-box"> -->
            <div class="row ml-3">
             <div class="col-md-6 m-2 rounded login-student-box">
                 <h2  class="text-white mb-4 text-center">Login | Student </h2>
                 <form action="7_studentRegisterValidation.php" method="post">
                     <div class="form-group">
                         <label class="form-labels">Username</label>
                         <input placeholder="Enter Username" type="text" name="stu_user" class="form-control" required>
                     </div>
                        <div class="form-group">
                            <label class="form-labels">Password</label>
                            <input placeholder="Enter Password" type="text" name="stu_Password" class="form-control" required>
                        </div>
                        <div class="text-center">
  <button type="submit" class="btn  submit-button mt-2">Submit</button>
  
  <script>
                        function sNewUser() {
                        window.open("stu_5_registerStudent.php");
                        }
                        </script>
                       <!-- <button type="submit" class="btn btn-primary" value="Open Window" onclick="NewUser()">New User?</button> -->
                       
  <button type="submit" class="btn  submit-button mt-2" value="Open Window" onclick="sNewUser()">New User?</button>

  </div>
  
                 </form>
             </div>   
             <div class="col-md-6 m-2 rounded login-teacher-box">
             <h2 class="text-white mb-4 text-center">Login | Teacher </h2>
                 <form action="4_teacherRegisterValidation.php" method="post">
                     <div class="form-group">
                         <label class="form-labels">Username</label>
                         <input placeholder="Enter Username" type="text" name="t_ID" class="form-control" required>
                     </div>
                        <div class="form-group">
                            <label class="form-labels">Password</label>
                            <input placeholder="Enter Password" type="text" name="t_password" class="form-control" required>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn  submit-button mt-2">Submit</button>
                        
                        <script>
                        function NewUser() {
                        window.open("2registerTeacher.php");
                        }
                        </script>
                       <!-- <button type="submit" class="btn btn-primary" value="Open Window" onclick="NewUser()">New User?</button> -->
                       
  <button type="submit" class="btn  submit-button mt-2" value="Open Window" onclick="NewUser()">New User?</button>
  </div>
                       
                 </form>
             </div>   
            <!-- </div> -->
        </div>
  
    </body>
</html>