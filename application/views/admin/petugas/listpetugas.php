<div class="container-fluid">

                    <!-- Page Heading -->

      <?= $this->session->flashdata('message');?>
                    <h1 class="h3 mb-2 text-gray-800">Data Petugas</h1>
                    <p class="mb-4">Dibawah ini adalah data petugas</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url()?>tambahdatapetugas"> <i class="fas fa-fw fa-plus"></i> Tambah Data Petugas</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Petugas</th>
                                            <th>Nama Petugas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($read as $data){
                                        ?>
                                        <tr>
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_petugas ?></td>
                                          <td><?php echo $data->nama_petugas ?></td>
                                          <td><?php echo $data->jenis_kelamin ?></td>
                                          <td><?php echo $data->telepon ?></td>
                                          <td><?php echo $data->alamat ?></td>
                                          <td width="20%">
                                          <a href="<?= base_url('editdatapetugas/' . $data->id_petugas); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"> Ubah </a>
                                          <a href="#" class="hapusdata btn btn-sm btn-danger" role="button" data-toggle="modal" data-target="#ModalHapus" id="<?=$data->id_petugas?>|<?=$data->id_user?>|" >Hapus</a></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
              <form action="<?php echo base_url(). 'petugas/delete';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="modal-body" id="IsiModalHapusDokter">   
              </div>
              <div class="modal-footer">
                   <button type="submit" class="btn btn-danger">Ya</button>
                <a class="btn btn-info" type="button" data-dismiss="modal">Cancel</a>
              </div>
              </form>
            </div>
          </div>
        </div>