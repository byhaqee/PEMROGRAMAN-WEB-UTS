<?php
    $serverName = "sql213.epizy.com";
    $userName = "epiz_30145789";
    $passwrod = "h7HXkOq121T";
    $dbName = "epiz_30145789_baihaqimtp";

    //Buat Koneksi
    $koneksi = mysqli_connect($serverName, $userName, $passwrod, $dbName);

    //cek koneksi
    if (!$koneksi) {
        die ("Koneksi Gagal".mysqli_connect_error());
    }

?>