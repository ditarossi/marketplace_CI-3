
<!DOCTYPE html>
<html>
<!--HEADER-->
 <?php $this->load->view('template/header');?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('template/navbar');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('template/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view('content/content');?>
  <!-- /.content-wrapper -->

  <!--FOOTER-->
    <?php //$this->load->view('template/footer');?>

</body>
</html>
