<!DOCTYPE html>
<html>
<head>
	<title>Admin | Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
		<table style="margin:20px auto;" >
        <?php foreach($produk as $u){ ?>
			<form class="row g-3" action="<?php echo base_url(). 'index.php/Admin/editProduk_aksi'; ?>" method="post">
				<div class="col-md-3">
					<label class="form-label">ID_Produk</label>
					<input class="form-control" name="ID_Produk" value="<?php echo $u->ID_Produk ?>">
				</div>
				<div class="col-md-3">
					<label class="form-label">Nama_Produk</label>
					<input class="form-control" name="Nama_Produk" value="<?php echo $u->Nama_Produk ?>">
				</div>
				<div class="col-md-3">
					<label>Jenis_Skincare</label></br>
					<?php 
					$datajenis = $this->db->get('Jenis_Skincare');

					foreach ($datajenis->result_array() as $row)
					{
							$options[$row['ID_Jenis']]=$row['Jenis'];
					}
					$jenis=set_value('Jenis_Skincare');
					echo form_dropdown('Jenis_Skincare',$options,$jenis);
					?>
				</div>
				<div class="col-md-3">
					<label>Brand</label></br>
					<?php 
					$databrand = $this->db->get('Brand');

					foreach ($databrand->result_array() as $row)
					{
							$options[$row['ID_Brand']]=$row['Nama_Brand'];
					}
					$brand=set_value('Brand');
					echo form_dropdown('Brand',$options,$brand);
					?>
				</div>
				<div class="col-md-3">
					<label class="form-label">Manfaat</label>
					<input class="form-control" name="Manfaat" value="<?php echo $u->Manfaat ?>">
				</div>
				<div class="col-md-3">
					<label class="form-label">Ingredients</label>
					<input class="form-control" name="Ingredients" value="<?php echo $u->Ingredients ?>">
				</div>
				<div class="col-md-3">
					<label class="form-label">Harga</label>
					<input class="form-control" name="Harga" value="<?php echo $u->Harga ?>">
				</div>
				<div class="col-md-3">
					<label class="form-label">Gambar</label>
					<input class="form-control" name="Gambar" value="<?php echo $u->Gambar ?>">
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
            <?php } ?>
		</table>
</body>
</html>