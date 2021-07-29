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
    <h1>Sign In</h1>
        <form action="InterfaceAdmin.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="CONNECTER" />
            </p>
        </form>
    </body>
</html>