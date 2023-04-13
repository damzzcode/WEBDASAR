<?php
$hasil = 10%5;

echo $hasil;

echo "</br>";

define("SATU", 1);

echo SATU;

echo "</br>";
if($perbandingan = true){
    echo "ucapkan selamat malam";
} else {
    echo "ucapkan selamat pagi";
}

echo $perbandingan = true;

echo "<br>";

$provinsi = array("JAWA TIMUR", "DKI", "IKN", "JATENG", "JABAR");

foreach($provinsi as $key){
    echo $key;
    echo "</br>";

}

while($i<5){
    echo "topi bulat </br>";
    $i++;
}