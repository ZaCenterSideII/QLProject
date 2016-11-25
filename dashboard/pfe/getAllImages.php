
<?php
 require_once('dbConnect.php');
 //$con=mysqli_connect('192.168.43.157','root','','pfe');
 //$sql = "select image from photos";
  $sql = "select img_url from image";
 
 $res = mysqli_query($con,$sql);
 var_dump($res);
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 array_push($result,array('url'=>$row['img_url']));
 }
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);