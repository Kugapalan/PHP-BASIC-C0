<?php
$Kugapalan_besteld = 10;

if($Kugapalan_besteld > 10) {
    $prijs = 1.50;
    echo 1.50;
} 
elseif($Kugapalan_besteld < 20) {
    $prijs = 1.25;
    echo 1.25;
} else {
    $prijs = 1.00;
    echo $prijs;
}
echo (" ");

if($Kugapalan_besteld = 10) {
    $prijs = 1.50;
    echo $prijs ;
} 
elseif($Kugapalan_besteld < 20) {
    $prijs = 1.25;
    echo 1.25;
} else {
    $prijs = 1.00;
    echo 1.00;
}

echo (" ");

if($Kugapalan_besteld > 10) {
    $prijs = 1.50;
    echo $prijs ;
} 
elseif($Kugapalan_besteld == 20) {
    $prijs = 1.25;
    echo 1.25;
} else {
    $prijs = 1.00;
    echo 1.00;
}

?>