<?php
// Nomor urut data di tabel.
$per_page = 2;

// Posisi nomor halaman (untuk paging) jika user login / tidak.
$login_status = $this->session->userdata('login_status');
$user_level = $this->session->userdata('user_level');
$page = $this->uri->segment(4);

// Nomor urut data di tabel.
// Ini karena library pagination menggunakan option 'use_page_numbers' => true.
if (empty($page)) {
    $offset = 0;
} else {
    $offset = ($page * $per_page - $per_page);
}
?>

<div class="container">
    <h2>Data pemohon Akta Kelahiran</h2>
    <hr>

    <!-- Paging dan form pencarian -->
    <div class="row navigasi_cari">
        <!-- Paging -->
        <div class="col-xs-12 col-md-6">
            <?php echo (!empty($paging)) ? $paging : ''?>
        </div>
        <!-- /Paging -->

        <!-- Form Pencarian -->
        <div class="col-xs-12 col-md-4 pull-right">
            <form method="get" action="<?php echo site_url('admin/aktal/cari');?>" role="form" class="form-horizontal">
                <div class="input-group">
                    <input type="text" name="kata_kunci" class="form-control" placeholder=" No KK atau Nama" id="kata_kunci" value="<?php echo $this->input->get('kata_kunci')?>">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Form Pencarian -->
    </div>
    <!-- /Paging dan form pencarian -->

    <?php if (!empty($aktal) && is_array($aktal)): ?>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                <tr>
                    <th>No</th>
                    <th>No KK </th>
                    <th>Nama Kepala Keluarga </th>
                    <th>Status Verifikasi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($aktal as $row): ?>
                    <?php
                    // Link edit, hapus, cetak
                    $link_edit = anchor('admin/aktal/edit/'.$row->id, '<span class="glyphicon glyphicon-edit"></span>', array('title' => 'Edit'));
                    $link_hapus = anchor('admin/aktal/hapus/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', array('title' => 'Hapus', 'data-confirm' => 'Anda yakin akan menghapus data ini?'));
                    $link_cetak = anchor('admin/aktal/cetak/'.$row->id,'<span class="glyphicon glyphicon-print"></span>', array('title' => 'Cetak'));

                    // Status verifikasi
                    if ($row->status_verifikasi == '0') {
                        $verifikasi = '<td class="status-danger">' . anchor('admin/aktal/ubah-status-verifikasi/'.$row->id, format_status_verifikasi($row->status_verifikasi), 'data-confirm="Mengubah status verifikasi ke SUDAH?"') . '</td>';
                    } else {
                        $verifikasi = '<td class="status-biasa">' . anchor('admin/aktal/ubah-status-verifikasi/'.$row->id, format_status_verifikasi($row->status_verifikasi), 'data-confirm="Mengubah status verifikasi ke BELUM?"')  . '</td>';
                    }

                    

                    ?>
                    <tr>
                        <td><?php echo ++$offset ?></td>
                        <td><?php echo $row->no_kk?></td>
                        <td><?php echo $row->nama_kep ?></td>
                        <?php echo $verifikasi ?>
                        <td>
                            <?php echo $user_level == 'administrator' ? $link_edit.'&nbsp;&nbsp;&nbsp;&nbsp;'.$link_hapus.'&nbsp;&nbsp;&nbsp;&nbsp;'.$link_cetak : $link_cetak ?>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <?php echo $aktal ?>
            </div>
        </div>
    </div>
    <?php endif ?>
    <div class="text-center">
    <?php echo anchor('admin/aktal-cetak_laporan', '&nbsp; &nbsp; Cetak Laporan &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div> 

</div> <!-- /container -->