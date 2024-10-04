<?php
// function tampilkanHalloDunia(){
//     echo"Halo dunia! <br>";

//     tampilkanHalloDunia();
// }

// tampilkanHalloDunia();

// for ($i=0; $i <= 25 ; $i++) { 
//     echo"perulangan ke- {$i} <br>";
// }

function tampilAngka (int $jumlah, int $indeks = 1) {
    echo"pelungan ke-{$indeks}<br>";

    if($indeks < $jumlah){
        tampilAngka($jumlah, $indeks+1);
    }
}
tampilAngka(20)
?>