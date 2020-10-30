<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User Baru</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/simple-datatables/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/sweetalert2.js') ?>"></script>
</head>
<body>
  <div id="app">
  <?php $this->load->view('template/sidebar'); ?>
    <div id="main">
      <?php $this->load->view('template/top-nav'); ?>

      <div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="plus" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Tambah User</h3>
           <p class="text-subtitle text-muted">Tambah User </p>
         </div>
       </div>

       <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="index" class="btn btn-secondary float-right">
              <i  data-feather="arrow-left"></i>&nbsp;Back
            </a>
          </div>
          <div class="card-body">
            <form class="form form-vertical" action="http://localhost/rest_surat/index.php/users" id="simpan">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">

                    <div class="form-group">
                      <label>NIP</label>
                      <input name="nip" id="nip" type="number" class="form-control" placeholder="NIP..">
                      <i data-feather="x" id="notif_nips" style="display: none;" class="text-danger"></i><small id="notif_nip" style="display: none;" class="form-text text-danger fsz-12"></small>
                    </div>

                    <div class="form-group">
                      <label>Username :</label>
                      <input name="username" id="username" type="text" class="form-control" placeholder="Username.." disabled="true">
                      <i data-feather="x" id="notif_usernames" style="display: none;" class="text-danger"></i><small id="notif_username" style="display: none;" class="form-text text-danger fsz-12"></small>
                    </div>

                    <div class="form-group">
                      <label>Nama :</label>
                      <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama.." disabled="true">
                    </div>

                    <div class="form-group">
                      <label>Jabatan :</label>
                      <input name="jabatan" id="jabatan" type="text" class="form-control" placeholder="Jabatan.." disabled="true">
                    </div>

                    <div class="form-group">
                      <label>Golongan :</label>
                      <input name="golongan" id="golongan" type="text" class="form-control" placeholder="Golongan.." disabled="true">
                    </div>

                    <div class="form-group">
                        <label>Role :</label>

                        <div class="accordion" id="accordionExample">

                          <!-- card role untuk dashboard -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingone">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
                                  <span>Dashboard</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat chart data surat</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar 10 top disposisi</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar 10 top kotak masuk</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar status surat</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk dashboard -->

                          <!-- card role untuk surat masuk -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingtwo">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                  <span>Surat masuk</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar surat masuk</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengunduh file surat masuk</label> 
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mencetak surat masuk</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menghapus surat masuk</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk surat masuk -->

                          <!-- card role untuk surat keluar --> 
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingthree">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                  <span>Surat keluar</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menambah surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengedit surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menghapus surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mencetak surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengunduh file surat keluar</label>
                                </div>


                              </div>
                            </div>
                          </div>
                          <!-- card role untuk surat keluar -->

                          <!-- card role untuk disposisi -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingfour">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                  <span>Disposisi</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar disposisi</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengunduh file surat yang ada pada halaman disposisi</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk disposisi -->

                          <!-- card role untuk user -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingfive">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                  <span>User</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar user</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat detail user</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengedit data user</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menghapus data user</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk disposisi -->

                        </div>
                      </div>

                  </div>

                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" id="tambah" class="btn btn-primary btn-save mr-1 mb-1" disabled="true">
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

<script>
    $(document).ready(function(){

        $('#nip').keyup(function(){
            var nip = $('#nip').val(); 
            if (nip != "") {
                $.ajax({
                  url: 'http://localhost/rest_surat/index.php/cek_nip',
                  data: { nip: nip },
                  method: 'get',
                  success: function(respon){
                      if (respon.status != "ada") {
                        inputan_aktif(true);
                        $('#username').prop('disabled',false); 
                        $('#notif_nip').hide('slow');
                        $('#notif_nips').hide('slow');
                      }else{
                        inputan_aktif(false);
                        $('#username').prop('disabled',true);
                        $('#notif_nip').text('NIP Sudah Terdaftar');
                        $('#notif_nip').show('slow');
                        $('#notif_nips').show('slow');
                      }
                  }
                });
            }else{
              inputan_aktif(false);
              $('#username').prop('disabled',true);
              $('#notif_nip').text('NIP Wajib Diisi');
              $('#notif_nip').show('slow');
              $('#notif_nips').show('slow');
            }
        });

        $('#username').keyup(function(){
            var username = $('#username').val(); 
            if (username != "") {
                $.ajax({
                  url: 'http://localhost/rest_surat/index.php/cek_username',
                  data: { username: username },
                  method: 'get',
                  success: function(respon){
                      if (respon.status == "ada") {
                        inputan_aktif(false);
                        $('#notif_username').text('Username Sudah Terdaftar');
                        $('#notif_username').show('slow');
                        $('#notif_usernames').show('slow'); 
                      }else{
                        $('#notif_username').hide('slow');
                        $('#notif_usernames').hide('slow');
                        inputan_aktif(true);
                      }
                  }
                });
            }else{
              inputan_aktif(false);
              $('#notif_username').text('Username Wajib Diisi');
              $('#notif_username').show('slow');
              $('#notif_usernames').show('slow');
            }
        });

        function inputan_aktif(sts){
            if (sts == true) {
              $('#nama').prop('disabled',false);
              $('#jabatan').prop('disabled',false);
              $('#golongan').prop('disabled',false);
              $('#tambah').prop('disabled',false);
            }else{
              $('#nama').prop('disabled',true);
              $('#jabatan').prop('disabled',true);
              $('#golongan').prop('disabled',true);
              $('#tambah').prop('disabled',true);
            }
        }

        $('#simpan').submit(function(e){
              e.preventDefault();
              
              var nip = $('#nip').val();
              var username = $('#username').val();
              var nama = $('#nama').val();
              var jabatan = $('#jabatan').val();
              var golongan = $('#golongan').val();
              
              if (nip == "" && username == "" && nama == "" && jabatan == "" && golongan == "") {
                  Swal.fire(
                    'Lengkapi Data',
                    'Lengkapi User',
                    'question'
                  );
              }else{

                  var data = $(this).serialize();
                  var action = $(this).attr('action');

                  $.ajax({
                      url: action,
                      data: data,
                      crossDomain: true,
                      method: 'post',
                      beforeSend: function(){
                          $('#tambah').text('Loading...');
                          $('#tambah').prop('disabled', true);
                      },
                      success: function(respon){
                          $('#tambah').text('Simpan');
                          $('#tambah').prop('disabled', false);
                          if (respon.status != 'fail') {
                              window.location.replace('list_user');
                          }
                      },
                      error: (e) => {
                        $('#tambah').text('Simpan');
                        $('#tambah').prop('disabled', false);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Error: ' + e.status + ' '+ e.statusText +' !'
                        })
                      }
                  });

              }

        });

    });
</script>

<script src="<?= base_url('assets/js/feather-icons/feather.min.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
