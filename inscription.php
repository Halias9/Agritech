<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title class="text-center">Inscription</title>
  </head>
  <body>
   <?php 
      if(isset($_GET['reg_err']))
      {
        $err = htmlspecialchars($_GET['reg_err']);
          
        switch($err)  
        {
            case 'success':
                ?>
                <div class="alert alert-success">
                    <strong>Succès</strong>inscription réussie ! 
                </div>
             <?php 
                break;
            
            case 'adresse mail':
            ?>
            <div class="alert alert-danger">Erreur</div>adresse mail non valide
            <?php 
            break;
            case 'adresse mail_length':
            ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong>adresse mail trop longue 
            </div>
            <?php 
            
            case 'pseudo_length':
            ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong>pseudo trop long
            </div>
        <?php 
          
            case 'already':
            ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong>compte deja existant
            </div>
            <?php  
       }
          
      }
      ?>
    <h1>Inscription</h1>
      <div class="login-form">
   <form action="inscription_traitement.php" method="post">
         
       <div class="mb-3">
    <label for="exampleDropdownForPseudo" class="form-label">Pseudo</label>
    <input type="texte" name="pseudo" class="form-control" id="exampleDropdownForPseudo" placeholder="pseudo">
  </div> 
   <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">Adresse mail</label>
    <input type="email" name="email"class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
    <input type="password" name="password"class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
  </div>
  <button type="submit" name="save"class="btn btn-primary">s'inscrire</button>
</form> 
  </div>
    <a href="index.html">Retour</a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>