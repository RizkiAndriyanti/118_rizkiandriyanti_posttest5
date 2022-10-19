<?php

#diperlukan jika sumber beberapa syntax berada di file lain
require 'config.php';

#sambungan ke formulir.php
if(isset($_POST['Sign-Up'])){
    $nama = $_POST['nama'];
    $pw = $_POST['pw'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $ttl = $_POST['ttl'];

    $kirim = mysqli_query($db, "INSERT INTO akun (nama,pw,email,nohp,ttl) VALUES ('$nama','$pw','$email','$nohp','$ttl')");

    #jika pengiriman berhasil
    if($kirim){
        echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:akun.php");
    } else { # jika pengiriman gagal
        echo "Sending Fail!";
    }
}

?>