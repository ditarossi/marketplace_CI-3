<!DOCTYPE html>
<html>
<head>
	<title>Admin | Pemesanan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
		<table style="margin:20px auto;" >
        <?php foreach($pemesanan as $u){ ?>
			<form class="row g-3" action="<?php echo base_url(). 'index.php/Admin/editPemesanan_aksi'; ?>" method="post">
            <div class="col-md-3">
					<label class="form-label">ID_Pemesanan</label>
					<input class="form-control" name="ID_Pemesanan" value="<?php echo $u->ID_Pemesanan ?>">
				</div>
				<div class="col-md-3">
					<label>Nama_Produk</label></br>
					<?php 
					$dataproduk = $this->db->get('Produk');

					foreach ($dataproduk->result_array() as $row)
					{
							$options[$row['ID_Produk']]=$row['Nama_Produk'];
					}
					$brand=set_value('Nama_Produk');
					echo form_dropdown('Nama_Produk',$options,$brand);
					?>
				</div>
                <div class="col-md-3">
					<label class="form-label">Jumlah</label>
					<input class="form-control" name="Jumlah" value="<?php echo $u->Jumlah ?>">
				</div>
                <div class="col-md-3">
					<label class="form-label">Metode_Pembayaran</label>
					<input class="form-control" name="Metode_Pembayaran" value="<?php echo $u->Metode_Pembayaran ?>">
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
            <?php } ?>
		</table>
</body>
</html>