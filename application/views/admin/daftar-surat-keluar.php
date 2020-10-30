<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Surat keluar</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/simple-datatables/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <link rel="stylesheet" href="<?= base_url('assets/vendors/choices.js/choices.min.css') ?>">
</head>
<body>
  <div id="app">
   <?php $this->load->view('template/sidebar'); ?>
    <div id="main">
      <?php $this->load->view('template/top-nav'); ?>

      <div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="mail" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Surat keluar</h3>
           <p class="text-subtitle text-muted">Daftar surat keluar</p>
         </div>
       </div>


       <!-- daftar surat keluar -->
       <div class="col-lg-12">
        <?php $this->load->view('template/tabel-surat-keluar'); ?>
      </div>
       <!-- daftar surat keluar -->


    </div>
  </div>
  <?php $this->load->view('template/modal-delete'); ?>
</body>
</html>


<script src="<?= base_url('assets/js/feather-icons/feather.min.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>

<script src="<?= base_url('assets/vendors/simple-datatables/simple-datatables.js') ?>"></script>
<script src="<?= base_url('assets/js/vendors.js') ?>"></script>
<!-- Include Choices JavaScript -->
<script src="<?= base_url('assets/vendors/choices.js/choices.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
