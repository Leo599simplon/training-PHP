<?php
$distance = 2.87;
echo gettype($distance);
echo "<br>";
$canette = "cocacola";
echo gettype($canette);

$canette = true;
$petillant = true;
$marque = 'lipton';

if ($canette) { 
    if ($petillant = true && $marque = 'lipton'){
        echo '<br>ca petille';
    }
    else {
        echo 'elle est plate ta merde';
    }
}else{
    echo 'c\est pas vrai un lipton';
}

$b = &$a;
// b est une référence à $a, si $a est changé, alors $b aussi

//$text .= "additional text" est 100x mieux que $text =  $text ."additional text"

// attention aux parenthèses qui peuvent aussi changer l'ordre d'importances
//$x = true and false;   //$x est vrai
//$y = (true and false); //$y est faux

$x = 5; 
$y = -8;

if ($x >= 0 AND $x <= 5 ) {
    echo ' valeur comprise entre 0 et 5<br>';
}

if ($x >= 0 AND $y >= 0) {
echo'$x et $y contiennent une valeur positive<br>';
}
if ($x >= 0 OR $y >= 0) {
    echo'une des deux valeur contient une valeur positive<br>';
}
if ($x >= 0 XOR $y >= 0) {
    echo '$x ou $y contient une valeur positive mais pas les deux<br>';
}

?>

<form action="action.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<?php

echo str_word_count("Bonjour Madame ");
echo '</br>';
echo strrev('bonjour madame');
echo '</br>';
echo strlen('Bonjour Madame');
echo '</br>';
$bonjour = 'Madame';
switch($bonjour){
    case "Madame":
        echo "Bonjour Madame</br>";
        case "Monsieur":
            echo "Bonjour Monsieur</br>";
            default:
            echo "Rien du tout</br>";
};
echo '</br>';

$b = 17;
while ($b<35)
{
    echo "mon nombre augmente : $b </br>";
    $b++;
}

$c = ["blanc", "rouge", "vert"];
foreach ($c as $value) {
    echo "$value<br>";
    # code...
}

$d = array('bouteille','cannette',"verre");
$longueurTableau = count($d);
for ($i=0; $i < $longueurTableau; $i++) { 
 echo $d[$i];
 echo "</br>";
}

$alma = ['first','second','third', 'fourth'];
$tailleTab = count($alma);
foreach ($alma as $value) {
    echo $tailleTab;
};
?>
<html>
<body>
<form action='training.php' method='GET'>
Bonjour: <input type='text' name="bonjour">
</form>
<p>Bonjour <?php echo $_GET['bonjour'] ; ?> </p>
</body>
</html>





