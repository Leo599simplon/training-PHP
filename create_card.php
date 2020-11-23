<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<?php

$tab_general=[]; //version condensé de $tab_general = array()
//Tableau principal qui contiendra les infos de toutes les cartes, qu'on parcourera avec une fonction pour créer les cartes "<div class="card"> etc



function create_tab()
{
    //Je crée un tableau provisoire avec les infos de la prochaine nouvelle carte, la création marche bien (test ok)
    $tab_provi = ['nom' => $_POST['nom_produit'], 'description' =>$_POST['description'], 'image' => $_POST['image'],'prix_initial' => $_POST['prix_initial'],
    'aug_prix'=>$_POST['augmentation_prix'], 'aug_duree' => $_POST['augmentation_duree'], 'prix_clic' => $_POST['prix_clic']];

//Je retourne le tableau provisoire pour pouvoir le stocker dans le tableau principal
return $tab_provi;
}



//On ajoute le tableau provisoire dans le tableau principal
array_push($tab_general,create_tab());
print_r($tab_infos); 

//Fonction création de carte
function create_card()
{
    //On récupère en variable globale le tableau principal
    //On stock la longueur du tableau principal 
    //On parcourt le tableau principal qui contient les infos de toutes les cartes
    {
        echo 
        '<div class="col">
        <div class="card d-flex flex column pb-3" style="width: 20rem;">
        <div class="card-body text-center">
        <h5 class="card-title">'.$tab_infos[$x]['nom']. '</h5>'.
        '<p class="card-text">'.$tab_infos[$x]['description'] . '</p>'.
        '</div>'.
        '<img src="assets/'.$tab_infos[$x]['image']. '" class="card-img-top">'. 
        '<div class="card-body">'. 
        '<h5 class="card-title"> Prix du clic :' .$tab_infos[$x]['prix_clic']. 'cts/clic. </h5>'.
        '<h5 class="card-title"> Prix augmentation :' .$tab_infos[$x]['aug_prix']. 'cts/clic. </h5>'.
        '</div>'. 
        '<div class="barre"></div>'.
        '<div class="card-body">'. 
        '<p class="card-text"> Durée : 00:30:00 </p>'. 
        '<p class="card-text">'. $tab_infos[$x]['prix_initial']. '</p>'.
        '</div>'.
        '<div class="btn btn-primary w-50 align-self-end">Enchérir</div>
        </div>
    </div>';
    }
    
}

create_card();

?>
