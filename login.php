<?php
//  echo"Username";

if(isset($_POST["username"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "module";
    // echo"Username";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
    }
    $Username = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    $_SESSION["id"] = $Username;
    $sql = "SELECT Username,password FROM login where Username='$Username'";
    $result = $conn->query($sql);
    if (!empty($result) && $result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $safePassword=$row["password"];
           
            
        }
        $passback = password_verify($password, $safePassword);
        if ($passback) {
          include 'logincopy.php';
            
        } 
        else {
            echo"Incorrect Password!";
        }
    }

}
?>

