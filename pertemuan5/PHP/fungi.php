<?php
function perkenalan($nama, $salam="Assalamualikum") {
    echo $salam. ",";
    echo"Perkenalkan, nama saya ".$nama."</br>";
    echo "Senang berkenalan dengan anda</br>";
}

perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>