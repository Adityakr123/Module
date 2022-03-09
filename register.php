<?php 
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "module";  

// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  

// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}

$FIND=0;
$checkcopy=0;
$CPASSCOPY;
$PASSCOPY;

       
if(isset($_POST["name"])){ 
        

        // Allow certain file formats 
        
        
    
            $name = $_POST['name'];
            $Username = $_POST['username'];
            $Email = $_POST['email'];
            $desig = $_POST['desig'];
            $sap = $_POST['sap'];
        
           
            $Password = $_POST['password'];
           
            $safePassword=password_hash($Password, PASSWORD_DEFAULT);
            
            
            $CPASSCOPY=$Password;
            $CPassword = $_POST['cpassword'];
            $PASSCOPY=$CPassword;
           
          
            if($CPASSCOPY!==$PASSCOPY){
            
              $checkcopy=1;
            }
            else
          {    
            
            // Insert image content into database 
           
                $db->query("CREATE TABLE REGISTER (name varchar(255),username varchar(255), email varchar(255),sap varchar(255),desig varchar(255))");
                
                
                $insert = $db->query("INSERT into REGISTER(name,username,email,sap,desig) VALUES ('$name','$Username','$Email','$sap','$desig')"); 
                
                $insert = $db->query("INSERT into login(Username,password) VALUES ('$Username','$safePassword')"); 
            
                if($insert){ 
                    $FIND=1;
                }
                else{ 
                   
                }
        
          }  
     
    
} 

// Display status message 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>REGISTER</title>
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS/navbar.css">
      <link rel="stylesheet" href="CSS/register.css">

   </head>
   <body>
    <nav>
        <div class="logo">
           MODULE
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
        </label>
        <ul>
           
           <li><a class="active" href="#">Register</a></li>
           <li><a href="login.html">Login</a></li>
          
        </ul>
     </nav>
      <div class="content">
        <h1 class="topheading"></h1>
   
        <div class="box" >
            <h2 class="secondheading">Register Now</h2>
                    <?php
                        if($FIND==1){
                            echo"<div style='text-align:center;color:green;font-size:30px;'>Successfully registered!!! </div>";
                        }
                    ?>
            <form action="Register.php" method="post" class="input1">
                <div style="align-items: center;">
                    <input type="text" name="name" placeholder="Enter your name" class="input topinput">
                    <!-- <input type="Phone" name="Phone" placeholder="Enter your Phone number" class="input"> -->
                    <input type="Email" name="email" placeholder="Enter your email" class="input">
                    <input type="text" name="sap" placeholder="Enter your SAPID" class="input">
                    <input type="text" name="desig" placeholder="Enter your DESIGNATION" class="input">
                    <input type="text" name="username" placeholder="Enter your username" class="input">
                    <input type="Password" name="password" placeholder="Set your Pasword" class="input">
                    <input type="Password" name="cpassword" placeholder="Confirm your Pasword" class="input">
                    <?php
                        if($checkcopy==1){
                            echo"<div style='text-align:center;color:red;font-size:30px;'>Password and Confirm password are same!!!! </div>";
                        }
                    ?>
                    <input type="submit" class="submit" >
    
                </div>
    
            </form>
        </div>
        
        <br>
        <br>
        <!-- <footer style="background-color: black; color:white;text-align:center;height:80px;">
            <span ><br><div class="logo"><h4>
               COPYRIGHT @ADITYA KUMAR</h4>
             </div>
            </span>
            </footer> -->
      </div>

   </body>
</html>
