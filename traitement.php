<?php 
$host='localhost';
$port='3306';
$dbname='formulaire';
$user='root';
$pwd='';

try {
    $bdd= new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8','root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e)
{
    die('Erreur'.$e->getMessage());
}

echo "test";

if (isset($_POST['Nom'])&&
    isset($_POST['Prenom'])&&
    isset($_POST['email'])){
        $insertion=$newBD->prepare("INSERT INTO newsletter VALUES(NULL,:Nom,:Prenom,:Adresse_mail)");
        $insertion->bindValue(':Nom',$_POST['Nom']); 
        $insertion->bindValue(':Prénom',$_POST['Prenom']);
        $insertion->bindValue(':email',$_POST['Adresse_mail']);
        $verification=$insertion->execute();
            if ($verification){
        echo "<br>insertion reussie";
    }else{
        echo "echec de l'insertion";
    }
}else{
    echo " une variable n'est pas declarée ou est null ";
}


?>