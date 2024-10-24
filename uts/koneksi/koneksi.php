<?php
    $serverName = "DESKTOP-RVJTL45\SQLEXPRESS";
    $database = "VinoAnjay";
    $username = "root";
    $password = "";

        try {
            $conn = new PDO("sqlsrv:server=$serverName;database=VinoAnjay");
            return $conn;
            echo "connect";
        } catch (Exception $e) {
            echo "tidak connect" . $e->getMessage();
        }
?>