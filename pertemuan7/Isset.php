<?php
$umur;
if(isset($umur) && $umur >= 18){
    echo"Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variable 'umur' tidak ditemukan.";
    
}
$data = array("nama" => "Jane","Usia"=> 25);
if (isset($data["nama"])){
    echo "<br>Nama: <br>".$data["nama"]."";
}else{
    echo "Variable 'nama' tidak ditemukan dalam array.";
}
?>