<?php
/* Les inclusions */
/*require ('classes/Product.php');*/
/*require ('classes/Category.php');*/

function autoloader_perso($className) {
    var_dump($className);
    require_once('Classes/' .$className . '.php');
    
}

spl_autoload_register('autoloader_perso');

echo "Bonjour";

/* Création de l'objet */
$hamac = new Product();
var_dump($hamac);
/* changement de nom du hamac*/
$hamac->name = 'hamac';
$hamac->description = 'pour la sieste';
$hamac->price = 15.99;

$voyage = new Category();
var_dump($voyage);
/* création d'un deuxième objet Product : un parasol*/
$parasol = new Product;
/*Changement des valeurs des propriétés du parasol*/
$parasol->name = 'Parasol';
$parasol->description = 'pour faire de l\'ombre';
$parasol->price = 150;
/*debug du parasol*/
var_dump($parasol);

/*Affichage d'une propriété (price) du parasol*/
echo '<p>' . $parasol->price . '€</p>';

/*Appel d'une méthode du parasol*/
echo '<p>' . $parasol->displayPrice() . '</p>';
echo '<p>' . $hamac->displayPrice() . '</p>';


/*Affichage d'une constante*/
echo '<p>Nombre de vues par défaut des produits : ' . $hamac::DEFAULT_NB_VIEWS . '</P>';
/*echo '<p>Nombre de vues par défaut des produits : ' . Product::DEFAULT_NB_VIEWS . '</P>';*/
?>