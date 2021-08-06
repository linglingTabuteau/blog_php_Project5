<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Sign In</title>
    </head>
    <body>
    <?php
include '../StructureSite/NavBar.php'
?>
    <h1>Database Liste de Comptes</h1>
       <div>
       <p>welcome</p>
       <?php
       $mdp = $_POST["password"];
     echo  '<p>First Name : '.$_POST["first_name"].'</p>Laste Name : '.$_POST["last_name"]. '</p><p>Mot de pass en clair:</p>'.$mdp.
     '<p>Mot de pass en crypté : '.password_hash($mdp, PASSWORD_DEFAULT).'</p>';
        ?>
       </div>
    </body>
</html>