<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SMPN 2 Tasikmalaya 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar dari sistem?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan klik "Logout" untuk keluar dari sistem</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Konfirmasi Hapus</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
               
            </div>
            <div class="modal-body">Apakah anda yakin ingin menghapus data ini ?</div>
            <div class="modal-footer">
                <?= form_open('', 'class="d-inline" id="formLinkDelete"') ?>
                <input type="hidden" name="id" id="valueId">
                <button type="submit" class="btn btn-danger"> Ya </button> <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="carisiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cari Anggota</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?php echo base_url(). 'tambahpeminjaman';?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                    <div class="modal-body">
                        <div class="row">
                                <input style="padding-bottom: 10px;" type="hidden" name="idpeminjaman" class="form-control" value="PMJ-<?= $id_peminjaman ?>" readonly>
                             
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">ID Anggota<small class="text-danger">*</small></label>
                                    <input style="padding-bottom: 10px;" type="text" name="idanggota"  required class="form-control" value="AGT-">
                                    </div>
                             </div>
                         </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Cari</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    </div>

            </div>
        </div>
    </div>


    <div id="modalbuku" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Buku</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No ISBN</th>
                                            <th>Judul</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($buku as $data){
                                        ?>
                                        <tr id="buku" data-id="<?= $data->id_buku; ?>" data-judul="<?= $data->judul; ?>"data-penerbit="<?= $data->penerbit?>" data-tahunterbit="<?= $data->tahun_terbit?>" data-persediaanawal="<?= $data->persediaan_awal?>" data-bukukeluar="<?= $data->buku_keluar?>" onclick="bukuModal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_buku?></td>
                                          <td><?php echo $data->judul ?></td>
                                          <td><?php echo $data->penerbit ?></td>
                                          <td><?php echo $data->tahun_terbit ?></td>
                                          <td><?php echo $data->nama_kategori ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>
  <div id="modalbuku1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Buku</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No ISBN</th>
                                            <th>Judul</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($buku as $data){
                                        ?>
                                        <tr id="buku1" data-id="<?= $data->id_buku; ?>" data-judul="<?= $data->judul; ?>"data-penerbit="<?= $data->penerbit?>" data-tahunterbit="<?= $data->tahun_terbit?>" data-persediaanawal="<?= $data->persediaan_awal?>" data-bukumasuk="<?= $data->buku_masuk?>" onclick="buku1Modal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_buku?></td>
                                          <td><?php echo $data->judul ?></td>
                                          <td><?php echo $data->penerbit ?></td>
                                          <td><?php echo $data->tahun_terbit ?></td>
                                          <td><?php echo $data->nama_kategori ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>
  <div id="modalbuku2" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Buku</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No ISBN</th>
                                            <th>Judul</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($buku as $data){
                                        ?>
                                        <tr id="buku2" data-id="<?= $data->id_buku; ?>" data-judul="<?= $data->judul; ?>"data-penerbit="<?= $data->penerbit?>" data-tahunterbit="<?= $data->tahun_terbit?>"  data-bukurusak="<?= $data->buku_rusak?>" onclick="buku2Modal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_buku?></td>
                                          <td><?php echo $data->judul ?></td>
                                          <td><?php echo $data->penerbit ?></td>
                                          <td><?php echo $data->tahun_terbit ?></td>
                                          <td><?php echo $data->nama_kategori ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>
  <div id="modalbuku3" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Buku</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No ISBN</th>
                                            <th>Judul</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($buku as $data){
                                        ?>
                                        <tr id="buku3" data-id="<?= $data->id_buku; ?>" data-judul="<?= $data->judul; ?>"data-penerbit="<?= $data->penerbit?>" data-tahunterbit="<?= $data->tahun_terbit?>"  data-bukuhilang="<?= $data->buku_hilang?>" onclick="buku3Modal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_buku?></td>
                                          <td><?php echo $data->judul ?></td>
                                          <td><?php echo $data->penerbit ?></td>
                                          <td><?php echo $data->tahun_terbit ?></td>
                                          <td><?php echo $data->nama_kategori ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>


  <div id="modalanggota" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Anggota</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Anggota</th>
                                            <th>Nama Anggota</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($anggota as $data){
                                        ?>
                                        <tr id="anggota" data-id="<?= $data->id_anggota; ?>" data-nama="<?= $data->nama_lengkap; ?>"data-kelas="<?= $data->kelas?>" data-jeniskelamin="<?= $data->jenis_kelamin?>" onclick="anggotaModal()">
                                          <td align="center"><?php echo $no ?></td>
                                          <td><?php echo $data->id_anggota?></td>
                                          <td><?php echo $data->nama_lengkap ?></td>
                                          <td><?php echo $data->jenis_kelamin ?></td>
                                          <td><?php echo $data->kelas ?></td>
                                          <td><?php echo $data->alamat ?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>
