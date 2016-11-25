<?php

 
// if($_SERVER['REQUEST_METHOD']=='POST'){
 
 require_once('dbConnect.php');


 $image = $_POST['image'];

 var_dump($image);
 
 //$con=mysqli_connect('192.168.43.250','root','','pfe');
 
 
$sql ="SELECT id FROM plant ORDER BY id ";
 

 $res = mysqli_query($con,$sql);
 
//var_dump($res);

 $id = 0;
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 }
 
$id=$_POST['sname'];
 $path = "uploads/$id.png";
 
 $actualpath = "http://localhost/dashboard/pfe/$path";
 
 
//$sql = "INSERT INTO photos (image) VALUES ('$actualpath')";*

 
 $sql = "INSERT INTO image (Nom,img_url) VALUES ('$id','$actualpath')";
 
 var_dump($res);
 if(mysqli_query($con,$sql)){

 file_put_contents($path,base64_decode($image));var_dump($res);
 echo "Successfully Uploaded";

 }
 
 mysqli_close($con);

 
//}
 ?>