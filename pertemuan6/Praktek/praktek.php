<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Pemula</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <style>
        .center{
            text-align: center;
        }

        th,td{
            border: 2px solid whitesmoke;
            padding: 5px;   
        }

        table{
            border-collapse: collapse;
            width: 50%;
            text-align: center;
            margin: 15px auto;
            font-size: 20px ;
            color: whitesmoke;
            box-shadow: 2px 3px 5px white;
    
        }
        
        body{
            background-image: url('gambar2.jpg');
            background-size: cover;
            padding-top: 50px;
        }

        h3,h2,#showTable{
            color: whitesmoke;
            font-size: 26px;
            
        }

        #showTable{
            cursor: pointer;
            border-bottom: 2px solid whitesmoke;
            padding-bottom: 15px
        }

        #dataSiswa{
            display: none;
        }

        h2 {
        margin-top: 40px;
        text-align: center;
        color: azure;
        }


    </style>

    <script>
        $(document).ready(function(){
            $("#showTable").click(function(){
                $("#dataSiswa").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <!-- <img src="gambar2.jpg" > -->
    <h2 class="center">Data Siswa</h2>
    <p class="center" id="showTable">CLICK TO SHOW & HIDE DATABASE</p>
    <div id="dataSiswa">
        <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $siswa = [
                    ["Nama"=> "Andi","Umur"=> "15","Kelas"=> "10A","Alamat"=> "Malang"],
                    ["Nama"=> "Siti","Umur"=> "16","Kelas"=> "10B","Alamat"=> "Batu"],
                    ["Nama"=> "Budi","Umur"=> "15","Kelas"=> "10A","Alamat"=> "Dinoyo"],
                    ["Nama"=> "Anton","Umur"=> "25","Kelas"=> "15A","Alamat"=> "Dinoyo"]
                ];

                foreach ($siswa as $data) {
                    echo"<tr>";
                    echo"<td>".$data['Nama']."</td>";
                    echo"<td>".$data['Umur']."</td>";
                    echo"<td>".$data['Kelas']."</td>";
                    echo"<td>".$data['Alamat']."</td>";
                    echo"</tr>";
                }

                $totalUmur=0;
                foreach ($siswa as $data) {
                    $totalUmur +=$data["Umur"];
                }
                $rataUmur = $totalUmur/count($siswa);
            ?>
        </tbody>
        </table>
        <h3 class="center">Rata-rata Umur Siswa: <?php echo number_format($rataUmur,2) ?> Tahun</h3>
    </div>
</body>
</html>