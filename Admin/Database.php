<?php session_start();?>
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
     <?php 
        $mdp = $_POST["password"];
        var_dump($_POST);
        if (isset($_POST['password']) &&  $_POST['password'] == $_POST['confirm_password']) {
    // on enregistre les données dans la BDD
     echo 'les deux mot de passe  sont bon';
     echo  '<p>Welcome '.$_POST["first_name"].' '.$_POST["last_name"]. '</p><p>Mot de pass en clair:</p>'.$mdp.
     '<p>Mot de pass en crypté : '.password_hash($mdp, PASSWORD_DEFAULT).'</p>';
     unset($_SESSION['signup_form']);
} else {
    $_SESSION['signup_form'] = [
        'errors' => ['password' => 'Les deux mot de passe ne corresponde pas']
    ];
    // rediréger vers la page Signup.php
    header("Location: Signup.php");
} ?>
       </div>
    </body>
</html>