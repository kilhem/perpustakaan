<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item" href="<?php echo base_url() ?>anggota"> Kembali</h6></a><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Anggota</h4>
            <p class="card-category">Masukkan Data Anggota</p>
          </div>
          <div class="card-body">
            <h4>Data Diri Anggota</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdataanggota'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <label class="bmd-label-floating">ID Anggota</label>
                    <input style="padding-bottom: 10px;" type="text" name="nis" class="form-control" value="AGT-<?= $id_anggota ?>" readonly>
                    <?= form_error('nis', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Lengkap<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label class="bmd-label-floating">Jenis Kelamin<small class="text-danger">*</small></label>
                            <select class="form-control" name="jeniskelamin" style="padding:10px;height: 45px;">
                              <option value="">- Pilih Jenis Kelamin -</option>
                              <option value="Laki-laki">Laki-Laki</option>
                              <option value="perempuan">Perempuan</option>
                               
                            </select>
                            <?= form_error('jeniskelamin', '<small class="text-danger">', '</small>'); ?>
                   </div>
              </div>
              <div class="col-md-6">
                  <label>Kelas<small class="text-danger">*</small></label>
                  <select class="form-control text-dark" name="kelas">

                    <option value="">- Pilih Kelas -</option>
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
                          <label class="bmd-label-floating">Alamat</label><small class="text-danger">*</small><br>
                          <input class="form-control" value="<?= set_value('alamat') ?>" id="alamat" rows="2" name="alamat">
                          <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                      </div>
              
              </div>
            
              <br>
              <button type="submit" class="btn btn-primary pull-right">Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>