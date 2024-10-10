<?php
$myArray = array();
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.<br>";
} else {
    echo "Array terdefinisi dan tidak kosong.<br>";
}

if (empty($nonExistentVar)) {
    echo "Variable tidak terdefinisi atau kosong.";
    echo "Variable terdefinisi dan tidak kosong.";
} else {
    echo "Variable terdefinisi dan tidak kosong.";
    echo "Variable tidak terdefinisi atau kosong.";
}
?>