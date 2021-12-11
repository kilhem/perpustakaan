<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>anggota"> Kembali</h6></a><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Edit Data Anggota</h4>
          </div>
          <div class="card-body">
            <h4>Data Diri Anggota</h4>
            <hr>
            <?php
             foreach($anggota as $data){
            ?>
            <form action="<?php echo base_url() . 'anggota/update'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                  <input style="padding-bottom: 10px;" type="hidden" name="idanggota" class="form-control" value="<?= $data->id_anggota ?>" readonly>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">ID Anggota<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="nis" class="form-control" value="<?= $data->id_anggota ?>" readonly>
                    <?= form_error('nis', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Lengkap<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="nama" class="form-control" value="<?= $data->nama_lengkap ?>" required>
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
                  <label>Kelas<small class="text-danger">*</small></label>
                  <select class="form-control text-dark" name="kelas" required>

                   <option value="<?= $data->kelas ?>">Kelas Asal : <?= $data->kelas ?></option>
                    <option value="VII">VII</option>
                    <option value="VIII">VIII</option>
                    <option value="IX">IX</option>
                  </select>
                  <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
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