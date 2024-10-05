<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $Nama= @$_GET['nama'];
        $Usia= @$_GET['usia'];

        echo "Hallo {$Nama}! Apakah benar anda berusia {$Usia} tahun?"
    ?>
</body>
</html>
