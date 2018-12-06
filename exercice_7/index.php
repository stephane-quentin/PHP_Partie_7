<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exercice 7 PHP Partie 7</title>
  </head>
  <body>
    <?php
    if(empty($_POST['lastname']) || empty($_POST['firstname']) || ($_FILES['myFile']['error'] == UPLOAD_ERR_NO_FILE))
    {
      ?>
    <div class="jumbotron">
    <p><a href="http://monProjet" class="btn btn-danger">Accueil</a></p>
    <form method="post" enctype="multipart/form-data">
      <select name="civility">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <p><label>Nom :</label>
      <input type="text" name="lastname" class="form-control" required/> </p>
      <p><label>Prénom :</label>
      <input type="text" name="firstname" class="form-control" required/> </p>
      <p><label>Fichier : </label>
      <input type="file" name="myFile"/ required></p>
      <input type="submit" name="submit" value="OK" class="btn btn-primary"/>
    </form>
    </div>
    <?php
    }else{
      $civility = $_POST['civility'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $file = basename($_FILES['myFile']['name']);
      ?>
      <div class="jumbotron">
        <p>Bonjour : <?= $civility . ' ' . $lastname . ' ' . $firstname ?></p>
        <p><?php echo 'Le fichier : ' . $file ?></p>
        <p><a href="index.php" class="btn btn-primary">Retour au formulaire</a></p>
      </div>
      <?php
      }
      ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
