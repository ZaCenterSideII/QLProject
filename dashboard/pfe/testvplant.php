<?php 


 	

//$file_name=$_FILES['fichier']['name'];


//$file_tmp_name=$_FILES['fichier']['tmp_name'];

//$file_dest="uploads/".$file_name;
//$file_extension=strrchr($file_name,".");

  
 require_once('dbConnect.php');

$sname=$_POST['sname'];
//$con = mysqli_connect(HOST,USER,PASS,DB);

//$extension_autorise=array('.jpg','.png','.JPG','.PNG','.jpeg','.JPEG');

//if(in_array($file_extension,$extension_autorise)){

//if(move_uploaded_file($file_tmp_name,$file_dest)){

//$req=$bd->prepare('INSERT INTO files(name,file_url) VALUES(?,?)');
//$req->execute(array($file_name,$file_dest));
//echo "fichier reussi <br>";a
$sql = "select valid from plant where sname='$sname'";
 
$res = mysqli_query($con,$sql);
//var_dump($res);
while($row = mysqli_fetch_array($res)){
$v=$row['valid'];
}
 if ($v==1) {
echo "valide"; }else echo "non valide";
 
mysqli_close($con);

    // $R="INSERT INTO plant VALUES (NULL,'$sname' ,'$cname' ,'$family' ,'$IDconfer',$date );";

    
/*
}
else

{
echo "une erreur <br>";
}}
else{
echo "PDFS autorises <br>";
}
*/
	

 ?>