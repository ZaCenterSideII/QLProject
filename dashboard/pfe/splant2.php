<?php 


 	

//$file_name=$_FILES['fichier']['name'];


//$file_tmp_name=$_FILES['fichier']['tmp_name'];

//$file_dest="uploads/".$file_name;
//$file_extension=strrchr($file_name,".");

  
 require_once('dbConnect.php');


//$con = mysqli_connect(HOST,USER,PASS,DB);

//$extension_autorise=array('.jpg','.png','.JPG','.PNG','.jpeg','.JPEG');

//if(in_array($file_extension,$extension_autorise)){

//if(move_uploaded_file($file_tmp_name,$file_dest)){

//$req=$bd->prepare('INSERT INTO files(name,file_url) VALUES(?,?)');
//$req->execute(array($file_name,$file_dest));
//echo "fichier reussi <br>";
$sql = "select * from plant ";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('id'=>$row[0],
'sname'=>$row[1],
'cname'=>$row[2],'family'=>$row[3],'desc'=>$row[4],'location'=>$row[5],'Utilisation'=>$row[6],'img_path'=>$row[7],'valid'=>$row[8],'date'=>$row[9],'id_clt'=>$row[10]
));
}
 
echo json_encode($result);
 
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