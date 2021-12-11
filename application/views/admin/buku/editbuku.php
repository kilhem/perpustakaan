<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>buku"> Kembali</h6></a><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Edit Data Buku</h4>
          </div>
          <div class="card-body">
            <h4>Data Diri Buku</h4>
            <hr>
            <?php
             foreach($buku as $data){
            ?>
            <form action="<?php echo base_url() . 'buku/update'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                  <input style="padding-bottom: 10px;" type="hidden" name="idbuku" class="form-control" value="<?= $data->id_buku ?>" readonly>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Id Buku<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="isbn" class="form-control" value="<?= $data->id_buku ?>" readonly>
                    <?= form_error('isbn', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Judul Buku<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="judul" class="form-control" value="<?= $data->judul ?>" required>
                    <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Penerbit<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="penerbit" class="form-control" value="<?= $data->penerbit ?>">
                    <?= form_error('penerbit', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tahun Terbit<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="tahunterbit" class="form-control" value="<?= $data->tahun_terbit ?>" required>
                    <?= form_error('tahunterbit', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Kategori Buku<small class="text-danger">*</small></label>
                        <div class="input-group">
                          <input type="hidden" class="form-control" id="id_kategori" value="<?= $data->id_kategori ?>" name="kategoribuku" placeholder="Nomor Id Kategori" readonly>
                          <input type="text" placeholder="<?= $data->nama_kategori ?>" class="form-control" id="nama_kategori" name="namakategori" readonly>
                          <span class="input-group-btn">
                            <button style="margin-left: 2px;" type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal">Cari</button>
                            
                          </span>

                        </div>
                        <?= form_error('kategoribuku', '<small class="text-danger">', '</small>'); ?>
                     
                   </div>
              </div>
              </div><br>
              <button type="submit" class="btn btn-primary pull-right">Simpan</button>

            </form>

            <?php 
              } 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form role="form" id="form-tambah" method="post" action="input_setoran.php">
        <div class="modal-header">
          <center>
          <h3 class="modal-title">Pilih Kategori</h3>
          </center>
        </div>
          <div class="modal-body">
            <table class="table table-hover" id="dataTable" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($kategori as $data){
                                        ?>
                                        <tr>
                                          <td width="10%" align="center"><?php echo $no ?></td>
                                          <td width="30%"><?php echo $data->nama_kategori?></td>
                                           <td width="20%" align="center">
                                          <a  id="kategori" data-id="<?= $data->id_kategori; ?>" data-namakategori="<?= $data->nama_kategori; ?>" class="btn btn btn-success" title="Hapus"  onclick="kategoriModal()"> Pilih </a></td>
                                        </tr>
                                        </tr>
                                        <?php 
                                        $no++;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>