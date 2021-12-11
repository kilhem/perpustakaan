<!-- Begin Page Content -->
<div class="container-fluid">
<?= $this->session->flashdata('message');?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('profile/edit'); ?>
            <div class="form-group row">
                <input type="hidden" class="form-control" id="email" name="id" value="<?= $user->id_user ?>" readonly>
                <label for="email" class="col-sm-3 col-foem-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user->email ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-foem-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user->nama ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Gambar</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user->image; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file" id="file5">
                              <input type="file" class="custom-file-input" id="file5-input" name="image" onchange="previewfile5()">
                              <label class="custom-file-label" id="file5-label" for="rekomorganisasi">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->