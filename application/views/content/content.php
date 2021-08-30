<!DOCTYPE html>
<html>
<head>
	<title>Admin | Dashboard</title>

</head>
<body>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <p><?php echo anchor('Admin/inputProduk', 'Tambahkan Data'); ?></p>
        <table style="margin:20px auto;" class="table table-strriped">
          <tr>
            <th>No</th>
            <th>ID_Produk</th>
            <th>Nama_Produk</th>
            <th>Jenis_Skincare</th>
            <th>Brand</th>
            <th>Manfaat</th>
            <th>Ingredients</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
          <?php 
          $no = 1;
          foreach($produk as $u){ 
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->ID_Produk ?></td>
            <td><?php echo $u->Nama_Produk ?></td>
            <td><?php echo $u->Jenis_Skincare ?></td>
            <td><?php echo $u->Brand ?></td>
            <td><?php echo $u->Manfaat ?></td>
            <td><?php echo $u->Ingredients ?></td>
            <td><?php echo $u->Harga ?></td>
            <td><?php echo $u->Gambar ?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo base_url('index.php/Admin/editProduk/'.$u->ID_Produk)?>" role="button">Edit</a>
              <a onclick="javascript: return confirm('Yakin hapus Data ini?')" class="btn btn-danger" href="<?php echo base_url('index.php/Admin/hapusProduk/'.$u->ID_Produk)?>" role="button">Hapus</a>
            </td>
          </tr>
          <?php } ?>
        </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>