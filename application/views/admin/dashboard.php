<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/apexcharts/apexcharts.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/simple-datatables/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/ingrid.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/choices.js/choices.min.css') ?>">
  <script src="<?= base_url('assets/vendors/datepicker/jquery.min.js') ?>"></script>
</head>
<body>
  <div id="app">
    <?php $this->load->view('template/sidebar') ?>
    <div id="main">
      <?php $this->load->view('template/top-nav') ?>

      <div class="main-content container-fluid">

        <div class="page-title">
         <h3>Hallo, <?= $this->session->userdata('nama') ?></h3>
         <p class="text-subtitle text-muted">Selamat datang di halaman Admin</p>
       </div>

       <div class="row bc-order-card">

        <!-- top-card -->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card  order-card">
            <div class="card-block">
              <p class="backup-top-data-admin">
                <i data-feather="inbox" class="admin-icon"></i>
                <span class="num-dash float-right"></span>
              </p>
              <br>
              <p class="m-b-0 jum-num-dash">
               <span class="sub-num-dash"></span>&nbsp;
               <span>Surat Masuk</span>
             </p>
           </div>
         </div>
       </div>
       <!-- top-card -->

       <!-- top-card -->
       <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card  order-card">
          <div class="card-block">
            <p class="backup-top-data-admin">
              <i data-feather="send" class="admin-icon bg-2"></i>
              <span class="num-dash float-right jumlah_surat_keluar"></span>
            </p>
            <br>
            <p class="m-b-0 jum-num-dash">
             <span class="sub-num-dash jumlah_surat_keluar"></span>&nbsp;
             <span>Surat Keluar</span>
           </p>
         </div>
       </div>
     </div>
     <!-- top-card -->



     <!-- top-card -->
     <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card  order-card">
        <div class="card-block">
          <p class="backup-top-data-admin">
            <i data-feather="user" class="admin-icon bg-4"></i>
            <span class="num-dash float-right jumlah_user" id=""></span>
          </p>
          <br>
          <p class="m-b-0 jum-num-dash">
           <span class="sub-num-dash jumlah_user"></span>&nbsp;
           <span>Jumlah user</span>
         </p>
       </div>
     </div>
   </div>
   <!-- top-card -->

   <!-- chart top user -->
   <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>
          <i data-feather="bar-chart-2"></i>&nbsp;<span>Data surat setiap bulan
            <span class="dif-color ml-1">Januari</span></span>
        </h4>
      </div>
      <div class="card-body">
        <div id="bar"></div>
      </div>
    </div>
  </div>
  <!-- chart top user -->


  <!-- top 10 disposisi dan surat masuk -->
  <div class="row pr-0">

    <!-- top 10 disposisi -->
    <div class="col-lg-6 pr-0">
      <?php $this->load->view('template/top-10-disposisi') ?>
    </div>
    <!-- top 10 disposisi -->

    <!-- top 10 surat masuk -->
    <div class="col-lg-6 pr-0">
      <?php $this->load->view('template/top-10-surat-masuk') ?>
    </div>
    <!-- top 10 surat masuk -->

  </div>
  <!-- top 10 disposisi dan surat masuk -->

  <!-- tabel status surat -->
  <div class="col-12">
    <?php $this->load->view('template/tabel-status-surat') ?>
  </div>
  <!-- tabel status surat -->

</div>
</div>
</body>
</html>
<script src="<?= base_url('assets/js/feather-icons/feather.min.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
<script src="<?= base_url('assets/vendors/simple-datatables/simple-datatables.js') ?>"></script>
<script src="<?= base_url('assets/js/vendors.js') ?>"></script>
<script src="<?= base_url('assets/vendors/apexcharts/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('assets/js/pages/ui-apexchart.js') ?>"></script>
<!-- Include Choices JavaScript -->
<script src="<?= base_url('assets/vendors/choices.js/choices.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<script>
  $.ajax({
	  type: 'get',
	  url: "http://localhost/rest_surat/index.php/jumlah_surat_keluar",
    crossDomain: true,
	  cache: false,
	  processData: false,
	  contentType: false,
	  success: function (msg) {
        $('.jumlah_surat_keluar').text(msg);   
	  }
	});
</script>

<script>
  $.ajax({
	  type: 'get',
	  url: "http://localhost/rest_surat/index.php/jumlah_user",
    crossDomain: true,
	  cache: false,
	  processData: false,
	  contentType: false,
	  success: function (msg) {
        $('.jumlah_user').text(msg);   
	  }
	});
</script>