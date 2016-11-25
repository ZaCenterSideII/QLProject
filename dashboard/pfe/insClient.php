<?php 
  $email=$_POST['email'];
  $password=$_POST['password'];
  $nom=$_POST['nom'];

  $Adresse=$_POST['Adresse'];
  echo $Adresse;
	$date='NOW()';
  $admin=0;
  
	try{
    $bd = new PDO('mysql:host=localhost;dbname=pfe', 'root', '');
    var_dump($bd);}
	catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}

    $R='INSERT INTO Client VALUES(NULL, "'.$email.'", "'.$password.'", "'.$nom.'", "'.$Adresse.'", NOW(),0,0);';
    $a=$bd->query($R);
    var_dump($a); 


    ?>