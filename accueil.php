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
include './StructureSite/NavBar.php'
?>

<!-- caroussel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/photo/php2.jpeg" class="d-block w-100" alt="php ballon">
    </div>
    <div class="carousel-item">
      <img src="/photo/php3.jpeg" class="d-block w-100" alt="ling">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- section about me -->
<div class="About">
<div class="CardText">
<p>Hello I am Lingling Tabuteau, an passionate developper on PHP, Javascript, Typescript, Node.js, React</p>
</div>
<div class="card" style="width: 18rem;">
  <img src="/photo/smiling-pig.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lingling Tabuteau</h5>
  </div>
  <div class="card-body">
    <a href="#" class="card-link">CV link</a>
    <a href="#" class="card-link">Lindlin link</a>
  </div>
</div>

</div>
<!-- formulaire contact -->
<div class= "Formulaire">
<form class="row g-3" action="Contact.php" method="POST">
<h2>contact</h2>
  <div class="col-md-6">
    <label for="inputFirstName" class="form-label">Prénom</label>
    <input type="text" name="inputFirstName" class="form-control" id="inputFirstName" placeholder="prénom">
  </div>
  <div class="col-md-6">
    <label for="inputLastName" class="form-label">nom</label>
    <input type="text" name="inputLastName" class="form-control" id="inputLastName" placeholder="nom">
  </div>
  <div class="col-12">
    <label for="inputEmail4" class="form-label" placeholder="email">Email</label>
    <input type="email" name="inputEmail4" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <textarea class="form-control" name="message" aria-label="With textarea" placeholder="message"></textarea>
   
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">ENVOYER</button>
  </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>


