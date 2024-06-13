<?php
$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "uts_312310810" ;
$koneksi = mysqli_connect($host, $user, $pass, $db) ;

if ($koneksi == false) {
    echo "Koneksi Gagal";
    die();
} else {
    echo ""; # Koneksi Berhasil
}
?>