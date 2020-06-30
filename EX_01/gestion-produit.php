<?php
    function update_dispo ($quantite) {
        if ($quantite >0) {
            return True;
        }
        else {
            return False;
        }
    }

    function restockage ($quantite, $nb_ajout) { 
        echo "<p> $nb_ajout produits ont été ajoutés au stock";
        return $quantite + $nb_ajout;
    }

    function achat ($quantite, $nb_achat) {
        echo "<p> $nb_achat produits ont été ajoutés acheté </p>";
        return $quantite - $nb_achat;
    }