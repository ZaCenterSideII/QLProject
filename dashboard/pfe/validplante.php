<?php 

 require_once('dbConnect.php');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 require_once('dbConnect.php');
  $sname=$_POST['sname'];

//$extension_autorise=array('.jpg','.png','.JPG','.PNG','.jpeg','.JPEG');
//if(in_array($file_extension,$extension_autorise)){

//if(move_uploaded_file($file_tmp_name,$file_dest)){
//$req=$bd->prepare('INSERT INTO files(name,file_url) VALUES(?,?)');
//$req->execute(array($file_name,$file_dest));
//echo "fichier reussi <br>";
$sql = "update plant set valid=1 where sname='$sname'";
 
$res = mysqli_query($con,$sql);

//echo json_encode($result);
 
mysqli_close($con);
 
 ?>