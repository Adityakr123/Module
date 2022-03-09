

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/login.css">
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
           
           <!-- <li><a href="#">ABOUT US</a></li> -->
           <li><a href="register.php">Register</a></li>
           <li><a class="active" href="login.php">Login</a></li>
           <!-- <li><a href="#">Gallery</a></li>
           <li><a href="#">Feedback</a></li> -->
        </ul>
     </nav>
      <div class="content">
        <h1 class="topheading"></h1>
   
        <div class="box" >
            <h2 class="secondheading">UPLOAD DOCUMENT</h2>
                    
            <form action="upload.php" method="post" class="input1">
                <div style="align-items: center;">
                    <input type="file" name="file"  class="input topinput">
                    <input type="text" name="description_entered" placeholder="discription" class="input">
                    <input type="submit" class="submit" name="submit" value="Upload"/>
    
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