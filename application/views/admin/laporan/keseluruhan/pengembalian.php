<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                margin-top : 20px;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4e73df;
                color: white;
            }
        </style>
    </head><body>
        <div style="text-align:center">
            <h3><?= $title;?> </h3>
        </div>
        <table id="table">
                <tr>
                    <th>No</th>
                    <th>ID Anggota</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Nama Anggota</th>
                    <th>Status</th>
                    <th>Denda</th>
                </tr>
            <?php
                $no=1;
                foreach($pengembalian as $data){
                ?>
                <tr>
                    <td align="center"><?php echo $no ?></td>
                    <td><?php echo $data->id_anggota ?></td>
                    <td><?php echo format_indo(date('Y-m-d', strtotime($data->tgl_pinjam)));?></td>
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
                </tr>
                <?php 
                $no++;
                } 
                ?>
        </table>


        <!-- <?php foreach($totaldata as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 20px;">
            <tr>
                <td  style="padding-bottom: 5px;"><b>Keterangan</b></td>
            </tr>
            <tr>
                <td  width="135">Jumlah Seluruh Data</td>
                <td width="564">: <?= $jml->jml_pengajuansurat ?></td>
            </tr>
        </table>
        <?php } ?>

        <?php foreach($totaldatadiproses as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 0px;">
            <tr>
                <td>Jumlah Data Yang Diproses</td>
                <td width="564">: <?= $jml->jml_diproses ?></td>
            </tr>
        </table>
        <?php } ?>

        <?php foreach($totaldataditerima as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 0px;">
            <tr>
                <td>Jumlah Data Yang Diterima</td>
                <td width="564">: <?= $jml->jml_diterima ?></td>
            </tr>
        </table>
        <?php } ?>

        <?php foreach($totaldataditolak as $jml){?>
        <table style="margin-bottom: 0px;margin-top: 0px;">
            <tr>
                <td width="135">Jumlah Data Yang Ditolak</td>
                <td >: <?= $jml->jml_ditolak ?></td>
            </tr>
        </table>
        <?php } ?> -->
    </body></html>