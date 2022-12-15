<?php
session_start();
require 'dbcon.php';

if(isset($_POST['simpan']))
{
    $name = mysqli_real_escape_string($con, $_POST['nama']);
    $name = mysqli_real_escape_string($con, $_POST['email']);
    $name = mysqli_real_escape_string($con, $_POST['telepon']);
    $name = mysqli_real_escape_string($con, $_POST['alamat']);

    $query = "INSERT INTO biodata_peminjam(nama,email,telepon,alamat) 
    VALUES('$name','$email','$telepon','$alamat')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Buat daftar Peminjaman Sukses!";
        header("Location: peminjam.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Buat daftar Peminjaman Gagal!";
        header("Location: peminjam.php");
        exit(0);
    }
}

?>