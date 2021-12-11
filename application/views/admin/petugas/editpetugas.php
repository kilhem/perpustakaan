<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>anggota"> Kembali</h6></a><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Edit Data Petugas</h4>
          </div>
          <div class="card-body">
            <h4>Data Diri Petugas</h4>
            <hr>
            <?php
             foreach($petugas as $data){
            ?>
            <form action="<?php echo base_url() . 'petugas/update'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">ID Petugas<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="nip" class="form-control" value="<?= $data->id_petugas ?>" readonly>
                    <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Lengkap<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="nama" class="form-control" value="<?= $data->nama_petugas ?>" required>
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Jenis Kelamin </label>
                            <select class="form-control" name="jeniskelamin" style="padding:10px;height: 45px;" required>
                              <option value="<?= $data->jenis_kelamin ?>">Jenis Kelamin Asal : <?= $data->jenis_kelamin ?></option>
                              <option value="Laki-laki">Laki-Laki</option>
                              <option value="perempuan">Perempuan</option>

                            </select>
                            <?= form_error('jeniskelamin', '<small class="text-danger">', '</small>'); ?>
                   </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Telepon<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="telepon" class="form-control" value="<?= $data->telepon ?>" required>
                    <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
            </div>
              <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label><br>
                          <input class="form-control" value="<?= $data->alamat ?>" id="alamat" rows="2" name="alamat" required>
                          <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
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