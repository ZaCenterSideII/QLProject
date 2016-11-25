<?php 
  $email=$_POST['email'];
  $password=$_POST['password'];
try{
    $bd = new PDO('mysql:host=192.168.43.163;dbname=pfe', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req="SELECT ID,email,admin FROM client WHERE email='$email' AND password='$password' AND validation=1";
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

     $i=0;
       while ($Tab=$stmt->fetch()) {
        $i++; echo $Tab['ID']+"";
       }
     //echo "$ID";echo "$email";
  if ($i==1) {
      
     

  }else{echo "no";}




 ?>