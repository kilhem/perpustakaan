<div class="container-fluid">

                    <!-- Page Heading -->

      <?= $this->session->flashdata('message');?>
                    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
                    <p class="mb-4">Dibawah ini adalah data buku</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url()?>tambahdatabuku"> <i class="fas fa-fw fa-plus"></i> Tambah Data Buku</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kategori</th>
                                            <th>Stok Buku</th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($read as $data){
                                            $stokakhir = $data->persediaan_awal- $data->buku_keluar
                                        ?>
                                        <tr>
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->judul ?></td>
                                          <td><?php echo $data->penerbit ?></td>
                                          <td><?php echo $data->tahun_terbit ?></td>
                                          <td><?php echo $data->nama_kategori ?></td>
                                          <td><?php echo $stokakhir ?></td>
                                          <td width="20%">
                                          <a href="<?= base_url('editdatabuku/' . $data->id_buku); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"> Ubah </a>
                                          <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_buku; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'buku/delete')" class="btn btn-sm btn-danger" role="button" title="Hapus"> Hapus </a></td>
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