<?php

$server = "localhost"; # pembuatan hubungan nama server
$username = "root"; #pembuatan huubngan login
$password = ""; #pembuatan huubngan login
$db_name = "dataakun"; # pembuatan hubungan dengan database

#menghubungkan database ke codingan
$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){ #jika $db gagal terbaca menggunakan 'die' untuk mematikan
    die("Database connection failed");
}

?>