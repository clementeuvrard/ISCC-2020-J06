<?php
function update_dispo($quantie){
    if ($quantie>0){
        return (true);
    }
    else{
        return (false);
    }
}

function restockage($quantie, $nb_ajout){
    echo "<p> $nb_ajout produit ont été ajoutés au stocks </p>";
    return ($quantie + $nb_ajout);
    }
    function achat($quantie,$nb_ajout){
        echo "<p>$nb_ajout produits ont été acheté.</P>";
        return ($quantite -$nb_ajout);
    }
?>
