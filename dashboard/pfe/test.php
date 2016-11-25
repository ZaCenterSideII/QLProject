<?php 
$sname=$_POST['sname'];
$cname=$_POST['cname'];
$family=$_POST['family'];
$desc=$_POST['desc'];
$location=$_POST['location'];
$id_clt=$_POST['id_clt'];
$Utilisation=$_POST['Utilisation'];
//$file_name=$_FILES['fichier']['name'];
//$file_name="a";
$file_dest="uploads/$sname.png";

  $valid=0;
//$file_tmp_name=$_FILES['fichier']['tmp_name'];
//$file_dest="uploads/".$file_name;
//$file_extension=strrchr($file_name,".");
 require_once('dbConnect.php');

//var_dump($con);
//$extension_autorise=array('.jpg','.png','.JPG','.PNG','.jpeg','.JPEG');
//if(in_array($file_extension,$extension_autorise)){

//if(move_uploaded_file($file_tmp_name,$file_dest)){
//$req=$bd->prepare('INSERT INTO files(name,file_url) values(?,?)');
//$req->execute(array($file_name,$file_dest));
//echo "fichier reussi <br>";
 $sql='INSERT INTO plant VALUES (NULL, "'.$sname.'", "'.$cname.'", "'.$family.'","'.$desc.'","'.$location.'","'.$Utilisation.'","'.$file_dest.'","'.$valid.'",NOW(),"'.$id_clt.'");';
    // $R="INSERT INTO plant VALUES (NULL,'$sname' ,'$cname' ,'$family' ,'$IDconfer',$date );";

 $res = mysqli_query($con,$sql);
    //var_dump($res);
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