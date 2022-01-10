<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // buat query
    $sql = "INSERT INTO admin(nama, email, username, password) VALUE ('$nama', '$email', '$username', '$password')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>