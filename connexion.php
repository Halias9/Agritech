<?php 

//session_start();
require_once 'config.php';

if(isset($_POST['pseudo'])&& isset($_POST['adresse_mail'])&& isset ($_POST['password']))
{

$email = htmlspecialchars($_POST['adresse_mail']);
$password = htmlspecialchars($_POST['password']);
$pseudo = htmlspecialchars($_POST['pseudo']);

$check = $bdd->prepare("SELECT pseudo, adresse_mail, password FROM utilisateur WHERE email = '$email'");
$check->execute();
$data = $check->fetch();
$row = $check->rowCount();

if($row ==1)
{
  if (filter_var($email, FILTER_VALIDATE_EMAIL))  
  {
      $password = hash('sha256', $password);
      
      if($data['password']== $password)
      {
         $_SESSION['user'] = $data['pseudo'];
          header('Location:landing.php');    
      }else header ('Location:index.html login_err=password');
        }else header ('Location:index.html login_err=email');
    }else header('Location:index.html login_err=already');
}else header('location:index.html');