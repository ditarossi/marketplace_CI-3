<!DOCTYPE html>
<html>
<head>
	<title>Admin | Jenis Skincare</title>
    <!--HEADER-->
    <?php $this->load->view('template/header');?>

    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view('template/navbar');?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('template/sidebar');?>

</head>
<body>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jenis Skincare</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jenis Skincare</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <p><?php echo anchor('Admin/inputJenis_Skincare', 'Tambahkan Data'); ?></p>
        <table style="margin:20px auto;" class="table table-strriped">
          <tr>
            <th>No</th>
            <th>ID_Jenis</th>
            <th>Jenis</th>
            <th>Action</th>
          </tr>
          <?php 
          $no = 1;
          foreach($jenis_skincare as $u){ 
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->ID_Jenis ?></td>
            <td><?php echo $u->Jenis ?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo base_url('index.php/Admin/editJenis_Skincare/'.$u->ID_Jenis)?>" role="button">Edit</a>
              <a onclick="javascript: return confirm('Yakin hapus Data ini?')" class="btn btn-danger" href="<?php echo base_url('index.php/Admin/hapusJenis_Skincare/'.$u->ID_Jenis)?>" role="button">Hapus</a>
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