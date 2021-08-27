<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
        <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/"> -->
        <link href="Signin.css" rel="stylesheet" />

        <title>Sign In</title>
    </head>
    <body>
    <?php
include '../StructureSite/NavBar.php'
?>
    <!-- <h1>Sign In</h1>
        <form action="InterfaceAdmin.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="CONNECTER" />
            </p>
        </form> -->
<body class="text-center"> 
    <main class="form-signin">
    <form data-bitwarden-watching="1">
        <!-- <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <!-- <p class="mt-5 mb-3 text-muted">© 2017–2021</p> -->
    </form>
    </main>
</body>
    <a class="nav-link" href="/Admin/Signup.php">Créer un compte</a>
    </body>
</html>