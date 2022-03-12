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



if(isset($_POST['btn'])){

$name= $_FILES['myfile']['name'];

$type = $_FILES['myfile']['type'];
session_start();
$Username=$_SESSION["id"];

$data = file_get_contents($_FILES['myfile']['tmp_name']);
$conn = mysqli_connect("localhost", "root", "", "module");
$imgData =addslashes(file_get_contents($_FILES['myfile']['tmp_name']));
// $imageProperties = getimageSize($_FILES['myfile']['tmp_name']);
// $name= $_FILES['myfile']['name'];
$sql = "INSERT INTO $Username(name,mime,data)VALUES('$name','$type','$imgData')";
$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
// $stmt = $dbh->prepare ("insert into myblob values('',?,?,?)");

// $stmt->bindParam (1, $name);

// $stmt->bindParam (2,$type);

// $stmt->bindParam (3, $data);

// $stmt->execute();

}

?>

<form method="post" enctype="multipart/form-data"> <input type="file" name="myfile"/>

<button name="btn">Upload</button>

</form>

<p></p>

<ol>



</ol>

</body>

</html>
</body>
</html>
