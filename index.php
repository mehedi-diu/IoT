<?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
        header("location: welcome.php"); 
      }
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>

<html>
   
   <head>
      <title>Login Page</title>
   </head>
   
   <body>
      <div align = "center">
           <div> <b>Industry Automation System<br><br>Login</b></div>	
               <form action = "" method = "post">
                  <label>Username  : </label><input type = "text" name = "userName" /><br /><br />
                  <label>Password  : </label><input type = "password" name = "password" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form> 
               <div<?php echo $error; ?></div>
 
			
      </div>

   </body>
</html>