<div class="container-fluid">

    <!-- Page Heading -->

    <?= $this->session->flashdata('message'); ?>
    <h1 class="h3 mb-2 text-gray-800">Data Peminjaman</h1>
    <p class="mb-4">Dibawah ini adalah data peminjaman</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> <a style="text-decoration: none" class="collapse-item" href="<?= base_url('tambahpeminjaman'); ?>"> <i class="fas fa-fw fa-plus"></i> Tambah Data Peminjaman</h6></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Anggota</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Nama Anggota</th>
                            <th>Sisa Hari</th>
                            <th>Denda</th>
                            <th>Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($read as $data) {
                        ?>
                            <tr>
                                <td align="center"><?php echo $no ?></td>
                                <td><?php echo $data->id_anggota ?></td>
                                <td><?= format_indo(date('Y-m-d', strtotime($data->tgl_pinjam))); ?></td>
                                <td><?php echo $data->nama_lengkap ?></td>
                                <td>
                                    <?php
                                    $return_date = new DateTime($data->tgl_batas_kembali);
                                    $today = new DateTime(date('Y-m-d'));
                                    $interval = $return_date->diff($today);
                                    if ($data->returned == 0) {
                                        $return_date = new DateTime($data->tgl_batas_kembali);
                                        $today = new DateTime(date('Y-m-d'));
                                        $interval = $return_date->diff($today);
                                        if ($today > $return_date) {
                                            echo $interval->format('<p style="color: red">Melewati %a hari</p>');
                                        } else {
                                            echo $interval->format('<p>Sisa %a hari</p>');
                                        }
                                    } else {
                                        echo '<p style="color: royalBlue">Sudah dikembalikan</p>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($today > $return_date) {
                                        echo '<p> Rp. ' . $interval->d * 3000 . '</p>';
                                    } else {
                                        echo '<p> - </p>';
                                    }
                                    ?>
                                </td>
                                <td width="20%">
                                    <a href="<?= base_url('detailpeminjaman/' . $data->id_peminjaman); ?>" class="btn btn-sm btn-secondary" role="button" title="Detail"> Detail </a>
                                    <?php if ($data->returned != 1) : ?> <a href="<?= base_url('pengembalian/' . $data->id_buku . '/' . $data->id_peminjaman .'/'. $data->buku_keluar); ?>" class="btn btn-sm btn-success" role="button"> Kembalikan </a> <?php endif; ?>
                                </td>
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