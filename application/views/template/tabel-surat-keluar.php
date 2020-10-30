<section class="section">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex xs-d-block ingrid-d-block">
            <div class="form-group w-75 xs-w-100 mb-0 ingrid-w-100">
              <select class="choices form-select" id="kategori">
                <option value="">Pilih Kategori</option>
                <option value="semua">Semua</option>
                <option value="Segera">Segera</option>
                <option value="Biasa">Biasa</option>
              </select>
            </div>
            <a id="filter" class="btn btn-primary btn-search-surat xs-w-100 w-25 ml-2 ingrid-w-100 ingrid-ml-0 ingrid-mt-3">
              <i data-feather="search"></i>&nbsp;Cari kategori surat
            </a>
          </div>
          <a href="<?= base_url('admin/tambah_surat_keluar') ?>" class="btn btn-success float-right mt-4">
            <i data-feather="plus"></i>&nbsp;<span>Tambah surat</span>
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">

      <table class='table table-striped' id="table1">
        <thead>
          <tr>
            <th>No Agenda</th>
            <th>Jenis surat</th>
            <th>Tahun</th>
            <th>Nomor surat</th>
            <th>Tanggal surat</th>
            <th>Perihal</th>
            <th>Surat Dari</th>
            <th>Isi Disposisi</th>
            <th>Diteruskan kepada</th>
            <th>Status surat</th>
            <th>Scan surat</th>
            <th>edit</th>
            <th>Aksi</th>
          </thead>
          <tbody>

            <!-- looping -->
            <?php foreach($dat as $data){ ?>

            <tr>
              <td><?= $data['no_agenda'] ?></td>
              <td><?= $data['jenis_surat'] ?></td>
              <td><?= $data['tahun'] ?></td>
              <td><?= $data['no_surat'] ?></td>
              <td><?= $data['tgl_surat'] ?></td>
              <td><?= $data['perihal'] ?></td>
              <td><?= $data['surat_dari'] ?></td>
              <td><?= $data['isi_disposisi'] ?></td>
              <td><?= $data['diteruskan_kepada'] ?></td>
              <td><div class="alert alert-primary">surat sedang dalam proses</div></td>
              <td><a href="#"><?= $data['scan_surat'] ?></a></td>
              <td>
                <a href="edit_surat/<?= $data['id_surat'] ?>" class="btn btn-primary cs-btn">
                  <i data-feather="edit-3"></i>
                </a>
              </td>
              <td>
                <a href="#" class="btn btn-success cs-btn">
                  <i data-feather="printer"></i>
                </a>
                <a href="#" class="btn btn-warning cs-btn">
                  <i data-feather="download"></i>
                </a>
                <a href="#" data-toggle="modal" data-target="#border-less" class="btn btn-danger cs-btn" class="hps" id="<?= $data['id_surat'] ?>">
                  <i data-feather="trash-2"></i>
                </a>
              </td>   
            </tr>                     

            <?php } ?>
            <!-- looping -->
  
          </tbody>
      </table>
    </div>
  </div>
</section>

<script>
  $('#filter').click(function(){
    
    var kategori = $('#kategori').val();
    if (kategori != "") {
      
      if (kategori != 'semua') {
        window.location.assign('http://localhost/persuratan/admin/daftar_surat_keluar/'+kategori);
      }else{
        window.location.assign('http://localhost/persuratan/admin/daftar_surat_keluar/');
      }

    }else{
      window.location.assign('http://localhost/persuratan/admin/daftar_surat_keluar/');
    }

  });
</script>