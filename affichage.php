<?php
function afficher_titre($nomproduit)
{
    echo "<h1> fiche produit: $nomproduit </h1>";
}

function afficher_description($couleur, $prix)
{
    echo "<p> couleur : $couleur, prix: $prix</p>";
}
function afficher_produit($nomproduit, $couleur, $prix, $disponibler)
{
    if ($disponible==true){
        afficher_titre ($nomproduit);
        afficher_description ($couleur, $prix);
}

    else{
    echo "<p>le produit $nomproduit n'est malheuresement plus disponible </p>";
    }
}
?>



