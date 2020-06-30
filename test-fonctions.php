<?php
$nomproduit= "T-shirt femme";
$couleur= "rouge";
$prix = "15.50";
$disponible= "true";
$quantite= "10";
include ('.EX_01/affichage.php');
include ('EX_01/gestion-produit.php');
afficher_produit ($nomproduit, $couleur, $prix, $disponible);
?>
<?php
afficher_produit ($nomproduit, $couleur, $prix, $disponible);
$quantite = achat($quantite,5);
$disponible = update_dispo ($quantite);
afficher_produit ($nomproduit, $couleur, $prix, $disponible);
$quantite = achat($quantite,5);
$disponible = update_dispo ($quantite);
afficher_produit ($nomproduit, $couleur, $prix, $disponible);
$quantite = restopckage($quantite,5);
$disponible = update_dispo ($quantite);
afficher_produit ($nomproduit, $couleur, $prix, $disponible);
?>