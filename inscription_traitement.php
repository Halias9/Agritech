 <?php 
    
require_once 'config.php';

if (isset($_POST['pseudo'])&& isset ($_POST['email'])&& isset ($_POST['password']))
{
    
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
$check = $bdd->prepare("SELECT pseudo, adresse_mail, password FROM utilisateur WHERE adresse_mail = '$email'");
$check->execute();
$data = $check->fetch();
$row = $check->rowCount();
    
 if ($row == 0)
 {
   if(strlen($pseudo) <= 100)
   {
     if(strlen($email)<= 100) 
      {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
               $password = hash('sha256',$password);
                $insert = $bdd->prepare('INSERT INTO utilisateur (pseudo, adresse_mail, password) VALUES(:pseudo, :email, :password)');
                if ($insert->execute(
                        array(
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password,
                            )
                        )
                    ) {
                 header('Location:inscription.php?reg_err=success');  
               } else {
                   var_dump('echec');
               }
        }else header('Location:inscription.php?reg_err=adresse mail');
     }else header('Location:inscription.php?reg_err=adresse mail_length');      
   }else header('Location:inscription.php?reg_err=pseudo_length');   
 }else header('Location:inscription.php?reg_err=already');
}
