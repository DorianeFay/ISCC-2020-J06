<?php 
    function compter_dizaine ($maximum){
    for ($i = 1; $i <= $maximum; $i++) {
        echo $i . "<br/>";
        if ($i % 10 === 0) {
            echo "<p> Ceci est une dizaine <br> </p>"; }
        elseif ($i%100 === 0) {
            echo "<p> Ceci est une centaine <br> </p>"; 
        }
    }}
    compter_dizaine(100);

?>