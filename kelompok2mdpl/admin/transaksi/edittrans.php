<?php include('../koneksi.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Konfirmasi Pembayaran</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id_transaksi'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id_transaksi = $_GET['id_transaksi'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM data_transaksi WHERE id_transaksi='$id_transaksi'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data_transaksi = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$invoice		= $_POST['invoice'];
			$nama_pelanggan			= $_POST['nama_pelanggan'];
			$status			= $_POST['status'];
			$total			= $_POST['total'];
			
			$sql = mysqli_query($koneksi, "UPDATE data_transaksi SET invoice='$invoice', nama_pelanggan='$nama_pelanggan', status='$status', total='$total' WHERE id_transaksi='$id_transaksi'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>document.location="index.php?page=tampil_pembayaran";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_transaksi&id_transaksi=<?php echo $id_transaksi; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Invoice</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="invoice" class="form-control" size="4" readonly value="<?php echo $data_transaksi['invoice']; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pelanggan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama_pelanggan" class="form-control" readonly value="<?php echo $data_transaksi['nama_pelanggan']; ?>">
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<select name="status" class="form-control" value="<?php echo $data_transaksi['status']; ?>" required>
                        <option value="">Pilih status</option>
                        <option value="dibayar">dibayar</option>
                    </select> 
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Total</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="total" class="form-control" readonly value="<?php echo $data_transaksi['total']; ?>">
				</div>
			</div>
			
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-success" value="Bayar">
					<a href="index.php?page=tampil_transaksi" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
