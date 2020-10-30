<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah surat</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/apexcharts/apexcharts.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/simple-datatables/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/datepicker/datepicker.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/choices.js/choices.min.css') ?>">
</head>
<body>
  <div id="app">
    <?php $this->load->view('template/sidebar') ?>
      <div id="main">
        <?php $this->load->view('template/top-nav') ?>

      <div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="plus" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Tambah surat</h3>
           <p class="text-subtitle text-muted">Tambah surat</p>
         </div>
       </div>

       <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('admin/daftar_surat_keluar') ?>" class="btn btn-secondary float-right">
              <i  data-feather="arrow-left"></i>&nbsp;Back
            </a>
          </div>
          <div class="card-body">
            <form class="form form-vertical" id="simpan">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">
                    <div class="form-group">
                      <label>Nomor agenda :</label>
                      <input name="no_agenda" type="number" class="form-control" placeholder="Nomor agenda..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Jenis surat :</label>
                      <input name="jenis_surat" type="text" class="form-control" placeholder="Jenis surat..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Tahun :</label>
                      <input name="tahun" type="number" class="form-control" placeholder="Tahun..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Nomor surat :</label>
                      <input name="no_surat" type="text" class="form-control" placeholder="Nomor surat..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Tanggal surat</label>
                      <div class="input-group date" data-date-format="dd.mm.yyyy">
                        <input name="tgl_surat" type="text" class="form-control mb-0" placeholder="Tanggal surat...">
                        <div class="input-group-addon">
                          <p class="date-icon mt-2">></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <label>Perihal :</label>
                      <input name="perihal" type="text" class="form-control" placeholder="Perihal...">
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Surat dari :</label>
                      <input name="surat_dari" type="text" class="form-control" placeholder="Surat dari...">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Isi disposisi :</label>
                      <input name="isi_disposisi" type="text" class="form-control" placeholder="Isi disposisi...">
                    </div>
                  </div>

                  <div class="col-lg-6">
                   <div class="form-group">
                    <label>Diteruskan kepada :</label>
                    <select id="diteruskan" name="diteruskan_kepada" class="choices form-select multiple-remove" multiple="multiple">
                      <optgroup label="Diteruskan kepada :" class="opt">
                        <?php foreach($usr as $dat_usr){ ?>
                          <option value="<?= $dat_usr['nip'] ?>"><?= $dat_usr['nama'] ?></option>
                        <?php } ?>
                      </optgroup>
                    </select>
                    <input type="hidden" id="pilihan" val="ds" name="pilihan">
                  </div>
                </div>

                <input type="hidden" name="id_log" value="0">

                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Unggah berkas scan surat:</label><br>
                    <input name="file" type="file" class="form-control-file loking" placeholder="Unggah scan surat..">
                  </div>
                </div>

                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary btn-save mr-1 mb-1">
                    <i data-feather="save"></i>&nbsp;<span>SIMPAN</span>
                  </button>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
</div>


</body>
</html>

<script src="<?= base_url('assets/js/feather-icons/feather.min.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datepicker/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/datepicker/datepicker.min.js') ?>"></script>
<!-- Include Choices JavaScript -->
<script src="<?= base_url('assets/vendors/choices.js/choices.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script>
  $('.input-group.date').datepicker({format: "dd-mm-yyyy"}); 

  $(document).ready(function() {
		$("#simpan").submit(function(e){
          e.preventDefault();
		      // const fileupload = $('#fileupload').prop('files')[0];
 
	        // let formData = new FormData();
	        // formData.append('fileupload', fileupload);
	        // formData.append('nama_customer', $('#nama_customer').val());
          // formData.append('alamat', $('#alamat').val());

          $('#pilihan').val($('#diteruskan').val());

          var data = $(this).serialize();
          
	        $.ajax({
	            type: 'POST',
	            url: "http://localhost/rest_surat/index.php/surat",
              data: new FormData(this),
              crossDomain: true,
	            cache: false,
	            processData: false,
	            contentType: false,
	            success: function (msg) {
                alert("Upload Surat Berhasil");
                window.location.replace('daftar_surat_keluar');
	            },
	            error: function (e) {
                  alert("Data Gagal Diupload"+e.status);
                  console.log(e);
	            }
	        });
        });
    });
</script>
