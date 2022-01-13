<?php
function mijnNaamisGroot(){
    $voornaam = "Kugapalan ";
    $achternaam = "Ganeshwaran";
    $mijn_naam_is = "Mijn naam is ";
    $geheleNaam = $mijn_naam_is . $voornaam . $achternaam;
    echo strtoupper ($geheleNaam);
}

mijnNaamisGroot();
?>