<section class="section">
    <div class="card">
        <div class="card-header">
            <a href="tambah_user" class="btn btn-success">
                <i  data-feather="user-plus"></i>&nbsp;Add New User
            </a>
        </div>
        <div class="card-body">
            <table class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>JABATAN</th>
                        <th>GOLONGAN</th>
                        <th>USERNAME</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="isi_table">

                <?php foreach($dat as $data){ ?>
                        
                        <?php if ($data['nip'] != $this->session->userdata('nip')) : ?>

                            <?php if ($data['jabatan'] != 'Admin') : ?>
                                <tr>
                                    <td><?= $data['nip'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['jabatan'] ?></td>
                                    <td><?= $data['golongan'] ?></td>
                                    <td><?= $data['username'] ?></td>
                                    <td>
                                        <a href="detail-user.php" class="btn btn-secondary  cs-btn">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="edit-user.php" class="btn btn-primary cs-btn">
                                            <i data-feather="edit-3"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#border-less" class="btn btn-danger cs-btn">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </td>    
                                </tr>                     
                            <?php else: ?>
                                <tr>
                                    <td><?= $data['nip'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['jabatan'] ?></td>
                                    <td><?= $data['golongan'] ?></td>
                                    <td><?= $data['username'] ?></td>
                                    <td>
                                        <a href="detail-user.php" class="btn btn-secondary cs-btn">
                                            <i data-feather="eye"></i>
                                        </a>
                                        <a href="edit-user.php" class="btn btn-primary cs-btn">
                                            <i data-feather="edit-3"></i>
                                        </a>
                                    </td>    
                                </tr>
                            <?php endif; ?>       
                        
                        <?php endif; ?>

                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    // $.ajax({
    //     url: 'http://localhost/rest_surat/index.php/users',
    //     method: 'get',
    //     success: function(ress){
    //         console.log(ress);
    //         $.each(ress,function(index,dat){
    //             if (dat.jabatan != "admin") {
    //                 $('#table1','#isi_table').append(`
    //                     <tr>
    //                         <td>`+ dat.nip +`</td>
    //                         <td>`+ dat.username +`</td>
    //                         <td>`+ dat.nama +`</td>
    //                         <td>`+ dat.jabatan +`</td>
    //                         <td>`+ dat.golongan +`</td>
    //                         <td>
    //                             <a href="detail-user.php" class="btn btn-secondary  cs-btn">
    //                                 <i data-feather="eye"></i>
    //                             </a>
    //                             <a href="edit-user.php?id=`+ dat.nip +`" class="btn btn-primary cs-btn">
    //                                 <i data-feather="edit-3"></i>
    //                             </a>
    //                             <a href="#" data-toggle="modal" data-target="#border-less" class="btn btn-danger cs-btn">
    //                                 <i data-feather="trash-2"></i>
    //                             </a>
    //                         </td>    
    //                     </tr>
    //                 `);
    //             }else{
    //                 $('#isi_table').append(`
    //                     <tr>
    //                         <td>`+ dat.nip +`</td>
    //                         <td>`+ dat.username +`</td>
    //                         <td>`+ dat.nama +`</td>
    //                         <td>`+ dat.jabatan +`</td>
    //                         <td>`+ dat.golongan +`</td>
    //                         <td>
    //                             <a href="detail-user.php" class="btn btn-secondary  cs-btn">
    //                                 <i data-feather="eye"></i>
    //                             </a>
    //                             <a href="edit-user.php?id=`+ dat.nip +`" class="btn btn-primary cs-btn">
    //                                 <i data-feather="edit-3"></i>
    //                             </a>
    //                     </tr>
    //                         </td>    
    //                 `);
    //             }
    //         })      
    //     },
    //     error: (e) => {
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Oops...',
    //             text: e.error
    //         });
    //     }
    // });

    // let dataTable = new DataTable("#table1", {
    //     ajax: {
    //         url: "http://localhost/rest_surat/index.php/users", // url to remote data
    //         method: 'get',
    //         content: {
    //             type: "", // specify the content
    //         },
    //         load: function(xhr) {
    //             // process and return the response data
    //         }
    //     }
    // });

    // $(document).ready(function() {
        
    //     var t = $('#table1').DataTable({
    //             // {#processing: true,
    //             // serverSide: true,#}
    //             ajax: {
    //                     url : "http://localhost/rest_surat/index.php/users",
    //                     type : "GET",
    //                     data : {
    //                         nip: '' 
    //                     }
    //             },
    //             columns: [
    //                 {
    //                     data: "nip"
    //                 },
    //                 {
    //                     data: "nama"
    //                 },
    //                 {
    //                     data: "username"
    //                 },
    //                 {
    //                     data: "jabatan",
    //                 }
    //             ]
    //         });
    // });
</script>

<!-- modal untuk delete data -->

<div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-center">
                <img src="<?= base_url('assets/images/avatar/delete-ilustration.svg') ?>" class="img-fluid img-delete" alt="">
            </p>
            <p class="text-center sure-txt">Apakah anda yakin ingin menghapus data ini ?</p>
            <p class="text-center">
                <a href="" class="btn btn-primary">Hapus</a>&nbsp;
                <a href="" class="btn btn-danger" data-dismiss="modal">Batalkan</a>
            </p>
        </div>
    </div>
</div>

<!-- modal untuk delete data -->