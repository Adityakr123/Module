<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

// $dbh= new PDO("mysql: host=localhost; dbname=module", "root","");
if(isset($_POST['btn'])){
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
$name= $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];

$data= file_get_contents($_FILES['myfile']['tmp_name']);

$conn->query("INSERT INTO  myblob(name,mime)values('$name','$type')");
// $stmt->bindParam(1,$name);
// $stmt->bindParam(2,$type);
// $stmt->bindParam(3,$data);
// $stmt->execute();
}

?>
<form method="post" enctype="multipart/form-data"> 
    <input type="file" name="myfile"/>

<button name="btn">Upload</button>

</form>

<p></p>

<ol>

<?php
// $stat = $dbh->prepare ("select * from myblob");
// $stat->execute();
// while ($row = $stat->fetch()){
//     echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";

// }

?>
</ol>
</body>
</html>
