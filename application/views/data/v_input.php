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
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Produk
                </div>
                <div class="card-body">
			<form class="row g-3" action="<?php echo base_url(). 'index.php/Admin/inputProduk_aksi'; ?>" method="post">
				<div class="form-group">
					<label class="form-label">ID_Produk</label>
					<input class="form-control" name="ID_Produk">
				</div>
				<div class="form-group">
					<label class="form-label">Nama_Produk</label>
					<input class="form-control" name="Nama_Produk">
				</div>
				<div class="form-group">
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
				<div class="form-group">
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
				<div class="form-group">
					<label class="form-label">Manfaat</label>
					<input class="form-control" name="Manfaat">
				</div>
				<div class="form-group">
					<label class="form-label">Ingredients</label>
					<input class="form-control" name="Ingredients">
				</div>
				<div class="form-group">
					<label class="form-label">Harga</label>
					<input class="form-control" name="Harga">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Input</button>
				</div>
			</form>
		</div>
            </div>

        </div>
    </div>
</div>
</body>
</html>