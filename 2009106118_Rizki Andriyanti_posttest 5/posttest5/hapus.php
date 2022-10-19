<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM akun WHERE id='$id'");

    if($hapus){
        header("Location:akun.php");
    }
}