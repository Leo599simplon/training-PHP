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

<header class="container-fluid d-flex justify-content-center align-items-center">
        <h1 class="col-m-4 text-center font-weight-bold">Page d'administration</h1>

    </header>

    <section class="container mt-5">
        <form action="formulaire2.php" method="POST">
            <div class="form-group row">
                <label for="nom_produit" class="col-md-3 col-form-label font-weight-bold">Nom du produit:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="nom_produit2" name="nom_produit2"
                        placeholder="Exemple : iphone 6, etc." pattern="[a-zA-Z0-9 ]+" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-3 col-form-label font-weight-bold">Description:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="description2" name="description2"
                        placeholder="Description du produit" pattern="[a-zA-Z0-9 é & è ç ! à ù , ; . £ * # ' ]+">
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-3 col-form-label font-weight-bold">Image du produit</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="image2" id="image2" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_initial" class="col-md-3 col-form-label font-weight-bold">Prix initial (en €):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_initial2" name="prix_initial2"
                        placeholder="Exemple : 2€" required min="1" step="0.01">
                </div>
            </div>

            <div class="form-group row">
                <label for="prix_clic" class="col-md-3 col-form-label font-weight-bold">Prix du clic (en cts)</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="prix_clic2" name="prix_clic2"
                        placeholder="Exemple : 30cts" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_prix" class="col-md-3 col-form-label font-weight-bold">Augmentation prix
                    enchère (en cts):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_prix2" name="augmentation_prix2"
                        placeholder="Exemple : 2cts" required min="1">
                </div>
            </div>

            <div class="form-group row">
                <label for="augmentation_duree" class="col-md-3 col-form-label font-weight-bold">Augmentation durée
                    enchère (en secondes):</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" id="augmentation_duree2" name="augmentation_duree2"
                        placeholder="Exemple : 30sec" required min="1">
                </div>
            </div>

            <div class="justify-content-end d-flex row">
         
                <input class="btn btn-secondary mr-3 mb-5 mt-5 p-2 border-0" name="form2" type="submit"
                    value="Ajouter le produit">
            </div>
        </form>
      
        </div>

    </section>

<?php 

// 
// if (!isset($_SESSION['card_infos']))
// {
// $_SESSION['card_infos'] = array();
// }

// $_SESSION['card_infos'][$card_infos] = array('nom2' => $_POST['nom_produit2'], 'description2' => $_POST['description2'], 'image2' => $_POST['image2'], 'prix_initial2' => $_POST['prix_initial2'],
// 'augmentation_prix2' => $_POST['augmentation_prix2'], 'augmentation_duree2' => $_POST['augmentation_duree2'], 'prix_clic2' => $_POST['prix_clic2']);

   
  
// $_SESSION['tab_info'] = $card_info;

// if (isset($_SESSION['tab_info']) and isset($_POST["form2"]))

// Autre tableau
// $_SESSION['cardInfo'] = array();
// $_SESSION['cardInfo'][$cardInfoName] = array('nom_produit2' => $nom_produit2, 'description2' => $description_2, 'image2' => $image2,'prix_initial2'
// => $prix_initial2, 'augmentation_prix2' => $augmentation_prix2,'augmentation_duree2' =>$augmentation_duree2,'prix_clic2' => $prix_clic2);

function new_tab()

{

if (isset($_POST['nom_produit2'],$_POST['description2'],$_POST['image2'],$_POST['prix_initial2'],$_POST['augmentation_prix2'],$_POST['augmentation_duree2'],$_POST['prix_clic2']))

{
$nomProduit = htmlspecialchars($_POST['nom_produit2']);
$_SESSION['nom_produit2'] = $nomProduit;
$description2 = htmlspecialchars($_POST['description2']);
$_SESSION['description2'] = $description2;
$image2 = htmlspecialchars($_POST['image2']);
$_SESSION['image2'] = $image2;
$prix_initial2 = htmlspecialchars($_POST['prix_initial2']);
$_SESSION['nom_produit2'] = $prix_initial2;
$augmentation_prix2 = htmlspecialchars($_POST['augmentation_prix2']);
$_SESSION['augmentation_prix2'] = $augmentation_prix2;
$prix_initial2 = htmlspecialchars($_POST['prix_initial2']);
$_SESSION['prix_initial2'] = $prix_initial2;
$$augmentation_duree2 = htmlspecialchars($_POST['augmentation_duree2']);
$_SESSION['augmentation_duree2'] = $augmentation_duree2;
$prix_clic2 = htmlspecialchars($_POST['prix_clic2']);
$_SESSION['prix_clic2'] = $prix_clic2;

$tableau_produit = array($nomProduit,$description2,$prix_initial2,$augmentation_prix2,$prix_initial2,$augmentation_duree2,$prix_clic2);
$_SESSION['tableau_produit'] = $tableau_produit;

}

if ( $_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["form2"]))
{

    array_push($_SESSION['tableau_produit'], new_tab());
}
}






if ( $_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["form2"]))
{

    
   ?>             <div class="col d-flex justify-content-center my-5">
   <div class="card" style="width: 18rem;">
       <h5 class="card-title text-center py-2 border-bottom"><?php echo $nomProduit; ?></h5>
       <div class="prix text-center text-danger"><?php echo $_SESSION['prix_initial2']; ?> €
       </div>
       <img src="<?php echo $_SESSION['image2'] ?>" class="card-img-top border-bottom" alt="...">
       <div class="description border-bottom">
           <p class="descriptionDuProduit text-center"><?php echo $_SESSION['description2']; ?></p>

       </div>
       <div class="card-body d-flex align-items-center">
           <p class="card-text">
               Prix de l'enchère:<i class="infoPrix"> +<?php echo $_SESSION['augmentation_prix2']; ?>cts/clics</i>
           </p>
       </div>
       <div class="card-footer d-flex flex-column justify-content-around">
           <h6>Durée:
               <div class="float-right font-weight-bold" id="">

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