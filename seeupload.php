<?php
// $dbh =new PDO("mysql: host=localhost; dbname=module", "root", "");
// $stat = $dbh->prepare ("select * from myblob");
// $stat->execute();
// while ($row = $stat->fetch()){
//     echo "<li><a target='_blank '[href='view.php?id=".$row['id'].">".$row['name']."</a></li>";
// }
session_start();
$Username=$_SESSION["id"];
$conn = mysqli_connect("localhost", "root", "", "module");  
                 
$query = "SELECT * FROM $Username";  
$result = mysqli_query($conn, $query);  
while($row = mysqli_fetch_array($result)) {
   echo "<li><a target='_blank 'href='view.php?id=".$row['id']."'>".$row['name']."</a></li>"; 
}


?>