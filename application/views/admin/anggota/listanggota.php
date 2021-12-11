<div class="container-fluid">

                    <!-- Page Heading -->

      <?= $this->session->flashdata('message');?>
                    <h1 class="h3 mb-2 text-gray-800">Data Anggota</h1>
                    <p class="mb-4">Dibawah ini adalah data Anggota</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url()?>tambahdataanggota"> <i class="fas fa-fw fa-plus"></i> Tambah Data Anggota</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Anggota</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Kelas</th>
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
                                          <td><?php echo $data->id_anggota?></td>
                                          <td><?php echo $data->nama_lengkap ?></td>
                                          <td><?php echo $data->jenis_kelamin ?></td>
                                          <td><?php echo $data->alamat ?></td>
                                          <td><?php echo $data->kelas ?></td>
                                          <td width="20%">
                                          <a href="<?= base_url('editdataanggota/' . $data->id_anggota); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"> Ubah </a>
                                          <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_anggota; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'anggota/delete')" class="btn btn-sm btn-danger" role="button" title="Hapus"> Hapus </a></td>
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