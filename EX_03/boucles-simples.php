<?php 
    function compter ($maximum) {
        $i = 1;
        while ($i <= $maximum) {
            echo $i++ . "<br/>"; 
        }
    }

    function compter_for ($maximum) {
        for ($i = 1; $i <= $maximum; $i++) {
            echo $i . "<br/>";
        }
    }

    compter(10);
    compter_for(10);
?>