<?php
    $str1 = "La maîtrise des fondamentaux du code et de la programmation dans 
    les domaines du business, du marketing et de la communication est un 
    avantage sérieux et utile.";

    echo "<p> La chaine str1 contient "; 
    echo strlen ($str1);
    echo " caractère </p>"; 

    echo "<p> La chaine str1 contient ";
    echo str_word_count ($str1);
    echo " mots </p>";

    echo "<p>";
    echo strtolower ($str1);
    echo "</p>";

    echo "<p>";
    echo strtoupper ($str1);
    echo "</p>";
    
    echo "<p>";
    echo str_shuffle ($str1);
    echo "</p>";

    echo "<p>";
    echo str_replace ("la", "LA", $str1);
    echo "</p>";

    echo "<p>";
    echo str_replace ("est un avantage sérieux et utile", "", $str1);
    echo "</p>";

    echo "<p>";
    echo substr ($str1, 0, 132);
    echo "</p>";
?>