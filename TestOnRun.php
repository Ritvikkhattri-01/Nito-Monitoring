<?php
error_reporting(0);
 $con = new mysqli("localhost", "root", "nito123", "nito");

  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  session_start();
  
  $subCode = $_SESSION['subCode'];
  $gLink = $_SESSION['gLink'];
          
?>  
  <html>
  <head>
    <title>
        Nito Proctoring | Test Running
    </title>
    <body style="background-color:black;">
    <link rel="stylesheet" type="text/css"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="testOnRun.css">
  </head>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <header class=" text-center text-uppercase text-white mb-5 create-exam-header">
            Good Luck,
            <?php
              $usr = $_SESSION['display_username'];
              echo $usr;      
            ?>
            For
            <?php
              echo $subCode; 
              echo $gLink;       
            ?>
            </header>
        </div>
    </div>
  <body>     
    <h1> 
    </h1> 
    <iframe name="target" id="target" width="320" height="187" frameborder="0" src="<?php echo htmlspecialchars($gLink); ?>"></iframe>  
        <script>
            let TabSwitchCount = 0;
            function TabSwitch(){
                TabSwitchCount = TabSwitchCount +1;
               // if(TabSwitchCount==1){                    
                 //   <?php
                   //     $tsCount=1;
                  // ?>}
                if(TabSwitchCount==2){
                    alert("Switching tabs will be considered as unfair means");
                    siteTitle = document.title;
                    document.title = 'Warning!';
                    <?php
                        $tsCount=1;
                        $register = "insert into tabswitch(stuID, subCode, tabSwitchCount) values('$usr','$subCode', '$tsCount');";
                        mysqli_query($con, $register);
                    ?>}
                if(TabSwitchCount==3){
                    alert("Switching tabs will be considered as unfair means");
                    siteTitle = document.title;
                    document.title = 'Warning!';
                    <?php
                        $tsCount=2;
                        $register = "insert into tabswitch(stuID, subCode, tabSwitchCount) values('$usr','$subCode', '$tsCount');";
                        mysqli_query($con, $register);
                    ?>
                    }             
                if(TabSwitchCount==4){ 
                    //window.onbeforeunload = null;
                    <?php
                        $tsCount=3;
                        $register = "insert into tabswitch(stuID, subCode, tabSwitchCount) values('$usr','$subCode', '$tsCount');";
                        mysqli_query($con, $register);                  
                    ?>
                    window.open("TestOver.php", '_self');
                   window.location.replace('TestOver.php');                    
                    }                   
                }
            let siteTitle = '';
            window.addEventListener('blur', () => {            
            TabSwitch();
            });
            window.addEventListener('focus', () => {
            document.title = siteTitle;
            });
        </script>    
    </body>
</html>