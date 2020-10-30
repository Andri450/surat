<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="mb-3 mt-1 d-none ingrid-d-block">
              <i data-feather="activity"></i>&nbsp;<span>Top 10 surat masuk</span>
          </h4>
          <div class="row">
            <div class="col-lg-12">
                <div class="d-flex xs-d-block ingrid-d-block">
                    <div class="form-group w-75 xs-w-100 mb-0 ingrid-w-100">
                        <select class="choices form-select">
                            <option value="square">Square</option>
                            <option value="rectangle">Rectangle</option>
                            <option value="rombo">Rombo</option>
                            <option value="romboid">Romboid</option>
                            <option value="trapeze">Trapeze</option>
                            <option value="traible">Triangle</option>
                            <option value="polygon">Polygon</option>
                        </select>
                    </div>
                    <a href="input-produk-hukum.php" class="btn btn-primary btn-search-surat xs-w-100 w-25 ml-2 ingrid-w-100 ingrid-ml-0 ingrid-mt-3">
                        <i  data-feather="search"></i>&nbsp;Cari kategori surat
                    </a>
                </div>
            </div>
            <div class="pt-2"></div>
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
                        <th>Scan surat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < 1 ; $i++) { ?>
                        <tr>
                            <td>1248</td>
                            <td>Segera</td>
                            <td>2016</td>
                            <td>800/1263/2026</td>
                            <td>27-10-2016</td>
                            <td>Permohonan data PNS</td>
                            <td>Badan kepegawaian daerah</td>
                            <td></td>
                            <td></td>
                            <td><a href="#">EKD Permohonan Data PNS</a></td>
                            <td>
                                <a href="#" class="btn btn-primary cs-btn">
                                    <i data-feather="download"></i>
                                </a>
                                <a href="#" class="btn btn-warning cs-btn">
                                    <i data-feather="printer"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#border-less" class="btn btn-danger cs-btn">
                                    <i data-feather="trash-2"></i>
                                </a>
                            </td>    
                        </tr>                     
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>