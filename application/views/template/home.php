<!DOCTYPE html>
<html>
  <?php $this->load->view('template/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('template/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('template/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <?php $this->load->view($content); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('template/footer') ?>
</body>
</html>
