<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <form name="formulaire" method="POST" action="formulaire.php">
        <div class="form-group">
          <label>Email address</label>
          <input  class="form-control" id="email" name="email">
         
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <button type="submit" class="btn btn-primary" name="envoi" value="Envoyer">Envoyer</button>
      </form>
</div>

<?php 
if (isset($_POST['email']))
{
$email = htmlspecialchars($_POST["email"]);
$_SESSION["email"] = $email;
} 

if (isset($_POST['password']))
{
  $password = htmlspecialchars($_POST["password"]);
  $_SESSION["password"] = $password;
} 


if ( (isset($_POST['email'])) and (isset($_POST['password'])) )
{echo "memorisation ok<br>";

echo "email vaut : ".$_SESSION["email"]."<br>";

echo "password vaut : ".$_SESSION["password"]."<br>";}



  if ( $_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["envoi"]))

  {
    
   ?> '<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">email et password</h5>
    <p class="card-text">email vaut <?php echo $_SESSION["email"] ?> et password vaut <?php echo $_SESSION["password"] ?>  </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>';

  <?php    
  }

?>





    <!-- Boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

</body>
</html>