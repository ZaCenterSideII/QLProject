<?php 




 function Ajouter($email,$password,$nom,$Adresse){
  
  $email=$_POST['email'];
  $password=$_POST['password'];
  $nom=$_POST['nom'];

  $Adresse=$_POST['Adresse'];
	$date='NOW()';
  $admin=0;
  
	try{
    $bd = new PDO('mysql:host=http://192.168.43.163/;dbname=pfe', 'root', '');
    var_dump($bd);}
	catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}

    $R='INSERT INTO Client VALUES(NULL, "'.$email.'", "'.$password.'", "'.$nom.'", "'.$Adresse.'", NOW(),0);';
    $a=$bd->query($R);
    var_dump($a);
}

function Supprimer($ID) {
  $ID=$_POST['ID'];
		try{
    $bd = new PDO('mysql:host=http://192.168.43.229/;dbname=pfe', 'root', '');}
	catch (Exception $e){
    die('Erreur : ' . $e->getMessage());}
    $stmt=$bd->query('DELETE FROM Client WHERE ID = "'.$ID.'"');
	
}
function Administrer($ID) {

    try{
    $bd = new PDO('mysql:host=http://192.168.43.229/;dbname=pfe', 'root', '');}
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
        /*
        $req='SELECT * FROM Client WHERE ID="'.$ID.'"';
       $res=$bd->query($req);//var_dump($res);
       while($Tab=$res->fetch()){//var_dump($res);
        $email=$Tab['email'];
        $password=$Tab['password'];
        $nom=$Tab['nom'];
      $Adresse=$Tab['Adresse'];
      $date=$Tab['Adresse'];}
      */
     // echo "$email $password $nom $date";
        $rr="UPDATE `Client` SET `admin`=1 WHERE ID='$ID';";
      $a=$bd->exec($rr);
      //var_dump($a);
}

 function affich(){
  try{
    $bd = new PDO('mysql:host=http://192.168.43.229/;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req='SELECT * FROM Client ORDER BY date DESC';
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
        echo "<tr>";
        echo '<td>'.$Tab['ID'].'</td>';
          echo '<td>'.$Tab['email'].'</td>';
          echo '<td>'.$Tab['password'].'</td>';
          echo '<td>'.$Tab['nom'].'</td>';
          echo '<td>'.$Tab['Adresse'].'</td>';
          echo '<td>'.$Tab['date'].'</td>';
          echo '<td>'.$Tab['admin'].'</td>';
          echo "</tr>";
       }
      echo '</Table>';
}

 function rech_mail($email){
  try{
    $bd = new PDO('mysql:host=http://192.168.43.229/;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req='SELECT * FROM Client WHERE email="$email"';
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
        echo "<tr>";
          foreach ($Tab as $key => $value) {
            echo '<td>'.$value.'</td>';
          }
          echo "</tr>";
       }
      echo '</Table>';
}

 function rech_ID($ID){
  try{
    $bd = new PDO('mysql:host=http://192.168.43.229/;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req="SELECT * FROM Client WHERE ID=$ID";
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
        echo "<tr>";
        echo '<td>'.$Tab['ID'].'</td>';
          echo '<td>'.$Tab['email'].'</td>';
          echo '<td>'.$Tab['password'].'</td>';
          echo '<td>'.$Tab['nom'].'</td>';
          echo '<td>'.$Tab['Adresse'].'</td>';
          echo '<td>'.$Tab['date'].'</td>';
          echo '<td>'.$Tab['admin'].'</td>';
          echo "</tr>";
       }
      echo '</Table>';
}

 function rech_nom($nom){
  try{
    $bd = new PDO('mysql:host=http://192.168.43.229/;dbname=pfe;charset=utf8', 'root', '');}
  catch (Exception $e){
        die('Erreur : ' . $e->getMessage());}
       $req="SELECT * FROM Client WHERE nom='$nom'";
       //$res=$bd->query($req);
       $stmt = $bd->prepare($req);
    $stmt->execute();

    echo '<Table border="1" >';
       while ($Tab=$stmt->fetch()) {
        echo "<tr>";
        echo '<td>'.$Tab['ID'].'</td>';
          echo '<td>'.$Tab['email'].'</td>';
          echo '<td>'.$Tab['password'].'</td>';
          echo '<td>'.$Tab['nom'].'</td>';
          echo '<td>'.$Tab['Adresse'].'</td>';
          echo '<td>'.$Tab['date'].'</td>';
          echo '<td>'.$Tab['admin'].'</td>';
          echo "</tr>";
       }
      echo '</Table>';
     // echo "$Tab['email']";
}

//Ajouter("Aers111@gmail.com","1qw45","Aers","2206temara");
//Administrer(1);
//affich();
//rech_nom("Anass");
//rech_ID(1);

 ?>