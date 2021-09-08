<html>
    <head>
        <title>
            Nito Proctoring
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="popup.js"></script>
    </head>
        <div class="container">
            <div class="login-box">
            <div class="row">
             <div class="col-md-6 login-left">
                 <h2  class="text-white">Login | Student </h2>
                 <form action="7_studentRegisterValidation.php" method="post">
                     <div class="form-group">
                         <label>Username</label>
                         <input type="text" name="stu_user" class="form-control" required>
                     </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="stu_Password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>   
             <div class="col-md-6 login-right">
             <h2>Register | Teacher </h2>
                 <form action="4_teacherRegisterValidation.php" method="post">
                     <div class="form-group">
                         <label>Username</label>
                         <input type="text" name="t_ID" class="form-control" required>
                     </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="t_password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                        <script>
                        function NewUser() {
                        window.open("2registerTeacher.php");
                        }
                        </script>
                       <button type="submit" class="btn btn-primary" value="Open Window" onclick="NewUser()">New User?</button>
                       
                 </form>
             </div>   
            </div>
        </div>
  
    </body>
</html>