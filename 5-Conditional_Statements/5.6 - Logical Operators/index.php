<?php
$var1 = 6;
$var2 = 12;

if($var1 < 10 && $var2 > 3) {
    echo "Het getal zit tussen de 10 en de 3";
} else{
    echo "het getal is groter dan 10 of kleiner dan 3!";
}
echo "<br>";
if($var1 = 10 || $var2 > 3){
    echo "Het is dit";
} else{
    echo "Of het is dat";
}
echo "<br>";
if($var1 == 2 xor $var2 > 6){
    echo "XOR 1";
} else{
    echo "XOR 2";
}
echo "<br>";
if($var1 != 2 && $var2 > 6){
    echo "Waar als de vergelijking niet waar is";
} else{
    echo "Fout";
}
?>