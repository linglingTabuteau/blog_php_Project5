<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Accueil.css">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
  </head>
<body class="Accueil">
 <!-- navbar -->
<?php
include '../StructureSite/NavBar.php'
?>
<?php 
if(isset($_POST["mot_de_passe"]) && $_POST["mot_de_passe"] =="ling"){
  ?>  
  <h1>Espace Administrateur</h1>
<?php
} else {
    echo '<p>Mot de passe incorrect</p>';
}
?>
</body>
</html>