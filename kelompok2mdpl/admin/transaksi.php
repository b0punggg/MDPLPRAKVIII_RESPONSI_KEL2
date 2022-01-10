<?php include('../koneksi.php'); ?>

        <center><font size="6">Input Paket</font></center>
        <hr>
        <?php
        if(isset($_POST['submit'])){
            $invoice			= $_POST['invoice'];
            $nama_pelanggan		= $_POST['nama_pelanggan'];
            $status				= $_POST['status'];
			$total				= $_POST['total'];

            $cek = mysqli_query($koneksi, "SELECT * FROM data_transaksi WHERE id_transaksi='$id_transaksi'") or die(mysqli_error($koneksi));

            if(mysqli_num_rows($cek) == 0){
                $sql = mysqli_query($koneksi, "INSERT INTO data_transaksi (invoice, nama_pelanggan, status, total) VALUES('$invoice', '$nama_pelanggan', '$status', '$total')") or die(mysqli_error($koneksi));

                if($sql){
                    echo '<script>alert("Berhasil menambahkan transaksi."); document.location="index.php?page=tampil_transaksi";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah transaksi.</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
            }
        }
        ?>

        <form action="index.php?page=transaksi" method="post">
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Invoice</label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="invoice" class="form-control" required>
                </div>
            </div>
			<div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pelanggan</label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="nama_pelanggan" class="form-control" required>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                <div class="col-md-6 col-sm-6">
                    <select name="status" class="form-control" required>
                        <option value="">Pilih Status</option>
                        <option value="belum bayar">Belum Bayar</option>
                        <option value="dibayar">Dibayarr</option>
                    </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Total</label>
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="total" class="form-control" required>
                </div>
            </div>
            <div class="item form-group">
                <div  class="col-md-6 col-sm-6 offset-md-3">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
