<?php 
$id_clt=0;

 function Ajouter($sname,$cname,$family,$desc,$location,$_FILES['fichier']['name']){

 	if(!empty($_FILES))
{
$file_name=$_FILES['fichier']['name'];

  $valid=0;
$file_tmp_name=$_FILES['fichier']['tmp_name'];
$file_dest="uploads/".$file_name;
$file_extension=strrchr($file_name,".");
$bd = new PDO('mysql:host=192.168.43.229;dbname=pfe', 'root', '');
$extension_autorise=array('.jpg','.png','.JPG','.PNG','.jpeg','.JPEG');
if(in_array($file_extension,$extension_autorise)){

if(move_uploaded_file($file_tmp_name,$file_dest)){
$req=$bd->prepare('INSERT INTO files(name,file_url) values(?,?)');
$req->execute(array($file_name,$file_dest));
echo "fichier reussi <br>";
 $R='INSERT INTO plant VALUES (NULL, "'.$sname.'", "'.$cname.'", "'.$family.'",'.$desc.'",'.$location.'",'.$file_dest.'",'.$id_clt.'",'.$valid.',NOW());';
    // $R="INSERT INTO plant VALUES (NULL,'$sname' ,'$cname' ,'$family' ,'$IDconfer',$date );";

    $bd->query($R);
}
else

{
echo "une erreur <br>";
}}
else{
echo "PDFS autorises <br>";
}
}
	
}

 function Supprimer($id){
		try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe', 'root', '');}
	catch (Exception $e){
    die('Erreur : ' . $e->getMessage());}
    $stmt=$bd->query('DELETE FROM plant WHERE   id = "'.$id.'"');
	
}
 function valider($id){
    $date='NOW()';
    $valid=0;
    try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe', 'root', '');}
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
              //$rr='UPDATE `plant` SET `sname`="'.$sname.'",`cname`="'.$cname.'",`family`="'.$family.'",`IDconfer`='.$IDconfer.',`Date`="'.$date.'" WHERE    id="'.$  id.'";';

                $rr="UPDATE `plant` SET `valid`=1 WHERE id='$id';";

    $bd->query($rr);
}
/*
function valider($id){
  try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req="SELECT * FROM plant WHERE id=$id";
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
        $sname=$stmt['sname'];
        $cname=$stmt['cname'];
        $family=$stmt['family'];
        $desc=$stmt['desc'];
        $location=$stmt['location'];
        $img_path=$stmt['img_path'];
        $date=$stmt['date'];
        $id_clt=$stmt['id_clt'];
       }
       $valid=1;
    $rr="UPDATE `plant` SET `sname`='$sname',`cname`='$cname',`family`='$family',`desc`='$desc',`location`='$location',`img_path`='$img_path',`valid`='$valid',`date`=$date ,`id_clt`=$id_clt  WHERE    id='$id';";

    $bd->query($rr); 
}*/

 function affich(){
	try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe;charset=utf8', 'root', '');}
	catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req='SELECT * FROM plant';
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
		$stmt->execute();

		echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
       		echo '<tr><td> '.$Tab['id'].'</td><td>'.$Tab['sname'].'</td><td>'.$Tab['cname'].'</td><td>'.$Tab['family'].'</td><td>'.$Tab['desc'].'</td><td>'.$Tab['location'].'</td><td>'.$Tab['img_path'].'</td><td>'.$Tab['valid'].'</td><td>'.$Tab['date'].'</td><td>'.$Tab['id_clt'].'</td></tr>';

       }
   		echo '</Table>';
}
 function afficPClient(){
  try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req='SELECT * FROM plant WHERE valid=1 ORDER BY date DESC';
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
          echo '<tr><td> '.$Tab['id'].'</td><td>'.$Tab['sname'].'</td><td>'.$Tab['cname'].'</td><td>'.$Tab['family'].'</td><td>'.$Tab['desc'].'</td><td>'.$Tab['location'].'</td><td>'.$Tab['img_path'].'</td><td>'.$Tab['valid'].'</td><td>'.$Tab['date'].'</td><td>'.$Tab['id_clt'].'</td></tr>';

       }
      echo '</Table>';
}
function affichPAdmin(){
  try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req='SELECT * FROM plant ORDER BY date ASC';
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
          echo '<tr><td> '.$Tab['id'].'</td><td>'.$Tab['sname'].'</td><td>'.$Tab['cname'].'</td><td>'.$Tab['family'].'</td><td>'.$Tab['desc'].'</td><td>'.$Tab['location'].'</td><td>'.$Tab['img_path'].'</td><td>'.$Tab['valid'].'</td><td>'.$Tab['date'].'</td><td>'.$Tab['id_clt'].'</td></tr>';

       }
      echo '</Table>';
}
function afficActualite(){
	try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe;charset=utf8', 'root', '');}
	catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req='SELECT * FROM plant ORDER BY date DESC';
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
		$stmt->execute();

		echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
       		echo '<tr><td> '.$Tab['id'].'</td><td>'.$Tab['sname'].'</td><td>'.$Tab['cname'].'</td><td>'.$Tab['family'].'</td><td>'.$Tab['IDconfer'].'</td><td>'.$Tab['date'].'</td><td>'.$Tab['id_clt'].'</td></tr>';

       }
   		echo '</Table>';



}
function mesplantes(){
  $id_clt=0;
  try{
    $bd = new PDO('mysql:host=192.168.43.229;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req="SELECT * FROM plant WHERE id_clt=$id_clt ORDER BY date DESC";
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
          echo '<tr><td> '.$Tab['id'].'</td><td>'.$Tab['sname'].'</td><td>'.$Tab['cname'].'</td><td>'.$Tab['family'].'</td><td>'.$Tab['img_path'].'</td><td>'.$Tab['date'].'</td><td>'.$Tab['id_clt'].'</td></tr>';

       }
      echo '</Table>';



}



//des tests

//Ajouter('qwwq','qwdqwdqwfqefqefqefeqvqevqevqevqevqeqevqevqevqevqevqevqeqevqevqevqevqevqe','wqwqwiuoq',1213,'2012-06-11');
//Modifier(10,'qwwq','sahjg','wqwqwiuoq',1213,'');
 //Supprimer(2);
//afficActualite();

//Ajouter($sname,$cname,$family,$desc,$location,$img_path);
mesplantes();


 ?>