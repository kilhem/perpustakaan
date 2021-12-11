
<div class="container-fluid">
<?= $this->session->flashdata('message');?>
    <h1 class="h3 mb-4 text-gray-800">Ubah Password</h1>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('ubahpassword') ?>" method="POST">
                <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <div class="input-group">
                            <input type="hidden" class="form-control" id="email" name="id" value="<?= $user->id_user ?>" readonly>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-left-0 <?= (form_error('password')) ? 'border-danger rounded-right' : ''; ?>">
                                    <a role="button" onclick="previewPassword(this, 'current_password')"><span class="fa fa-fw fa-sm fa-eye-slash text-black-50"></span></a>
                                </div>
                            </div>
                        </div>
                        
                             <?= form_error('current_password', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                <!-- <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="hidden" class="form-control" id="email" name="id" value="<?= $user->id_user ?>" readonly>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl-2">', '</small>'); ?>
                </div> -->
                <div class="form-group">
                        <label for="current_password">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="new_password1" name="new_password1">

                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-left-0">
                                    <a role="button" onclick="previewPassword(this, 'new_password1')"><span class="fa fa-fw fa-sm fa-eye-slash text-black-50"></span></a>
                                </div>
                            </div>
                            
                          

                        </div>
                          <?= form_error('new_password1', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>

                <!-- <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-2">', '</small>'); ?>
                </div> -->
                <div class="form-group">
                        <label for="current_password">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-left-0 <?= (form_error('password')) ? 'border-danger rounded-right' : ''; ?>">
                                    <a role="button" onclick="previewPassword(this, 'new_password2')"><span class="fa fa-fw fa-sm fa-eye-slash text-black-50"></span></a>
                                </div>
                            </div>
                            <?= form_error('password'); ?>
                        </div>

                            <?= form_error('new_password2', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                <!-- <div class="form-group">
                    <label for="new_password2">Repeat Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-2">', '</small>'); ?>
                </div> -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->