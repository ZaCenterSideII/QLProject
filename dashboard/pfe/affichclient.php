<?php 
 require_once('dbConnect.php');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 require_once('dbConnect.php');
//$extension_autorise=array('.jpg','.png','.JPG','.PNG','.jpeg','.JPEG');
//if(in_array($file_extension,$extension_autorise)){

//if(move_uploaded_file($file_tmp_name,$file_dest)){
//$req=$bd->prepare('INSERT INTO files(name,file_url) VALUES(?,?)');
//$req->execute(array($file_name,$file_dest));
//echo "fichier reussi <br>";
$sql = "select * from client order by date DESC";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('ID'=>$row[0],
'email'=>$row[1],
'password'=>$row[2],'nom'=>$row[3],'Adresse'=>$row[4],'date'=>$row[5],'admin'=>$row[6],'validation'=>$row[7]
));
}
 
echo json_encode($result);
 
mysqli_close($con);
 ?>