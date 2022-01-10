<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    
    $no_urut = $_POST['no_urut'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nama_paket = $_POST['nama_paket'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $_POST['total_harga'];
    $total_bayar = $_POST['total_bayar'];
    $tgl_dibayar = $_POST['tgl_dibayar'];
    $status_transaksi = $_POST['status_transaksi'];

    // buat query
    $sql = "INSERT INTO transaksi(no_urut, nama_pelanggan, nama_paket, jumlah, total_harga, total_bayar, tgl_dibayar, status_transaksi) VALUE ('$no_urut', '$nama_pelanggan', '$nama_paket', '$jumlah', '$total_harga', '$total_bayar', '$tgl_dibayar', '$status_transaksi')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: tampiltransaksi.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: tampiltransaksi.php');
    }
} else {
    die("Akses dilarang...");
}

?>