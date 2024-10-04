<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
        }
        th,td{
            padding: 10px;
            text-align: left;
        }
        table{
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' =>'Malang',
        'jenis_kelamin'=> 'Perempuan' ];

        echo"Nama: {$Dosen ['nama']}<br>";
        echo "Domisili : {$Dosen ['domisili']}<br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']}<br>";

        echo"<table>
            <tr>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
            <tr>
                <td>{$Dosen ['nama']}</td>
                <td>{$Dosen ['domisili']}</td>
                <td>{$Dosen ['jenis_kelamin']}</td>
            </tr>
        </table>";
    ?>
</body>
</html>