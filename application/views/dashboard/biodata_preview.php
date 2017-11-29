<div class="container">
<div class="jumbotron bio-preview">
    <h2>DATA CALON PESERTA DIDIK</h2>
    <hr>

    <h3 class="bg-success">A. DATA PRIBADI</h3>
    <dl class="dl-horizontal">
        <dt>Nomor Peserta</dt>
        <dd>: <?php echo format_no_peserta($peserta->id) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>NISN</dt>
        <dd>: <?php echo $peserta->nisn ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nama</dt>
        <dd>: <?php echo $peserta->nama ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tempat, Tanggal Lahir</dt>
        <dd>: <?php echo $peserta->tempat_lahir ?>, <?php echo format_tanggal($peserta->tanggal_lahir) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Jenis Kelamin</dt>
        <dd>: <?php echo format_jenis_kelamin($peserta->jenis_kelamin) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Agama</dt>
        <dd>: <?php echo $peserta->agama != '0' ? format_agama($peserta->agama) : format_agama($peserta->ket_agama); ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Berat Badan</dt>
        <dd>: <?php echo $peserta->berat_badan ?> kg</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tinggi Badan</dt>
        <dd>: <?php echo $peserta->tinggi_badan ?> cm</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Golongan Darah</dt>
        <dd>: <?php echo $peserta->golongan_darah ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Status Anak</dt>
        <dd>: <?php echo format_status_anak($peserta->status_anak) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Anak ke</dt>
        <dd>: <?php echo $peserta->anak_ke ?> dari <?php echo $peserta->jumlah_saudara ?> bersaudara</dd>
    </dl>

    <h3 class="bg-success">B. DATA ORANG TUA</h3>
    <dl class="dl-horizontal">
        <dt>Nama Ayah</dt>
        <dd>: <?php echo $peserta->ort_nama_ayah ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pekerjaan Ayah</dt>
        <dd>: <?php echo $peserta->ort_pekerjaan_ayah != '0' ? format_pekerjaan($peserta->ort_pekerjaan_ayah) : format_pekerjaan($peserta->ort_ket_pekerjaan_ayah) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nama Ibu</dt>
        <dd>: <?php echo $peserta->ort_nama_ibu ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pekerjaan Ibu</dt>
        <dd>: <?php echo $peserta->ort_pekerjaan_ibu != '0' ? format_pekerjaan($peserta->ort_pekerjaan_ibu) : format_pekerjaan($peserta->ort_ket_pekerjaan_ibu) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Alamat</dt>
        <dd>: <?php echo $peserta->ort_alamat ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Telepon</dt>
        <dd>: <?php echo $peserta->ort_telepon ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Penghasilan</dt>
        <dd>: <?php echo 'Rp. ' . format_penghasilan($peserta->ort_penghasilan) ?></dd>
    </dl>


    <h3 class="bg-success">C. DATA TEMPAT TINGGAL</h3>
    <dl class="dl-horizontal">
        <dt>Selama Sekolah Tinggal Dengan</dt>
        <dd>: <?php echo $peserta->tmp_tinggal_dengan != '0' ? format_tinggal($peserta->tmp_tinggal_dengan) : format_tinggal($peserta->tmp_ket_tinggal_dengan) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Alamat</dt>
        <dd>: <?php echo $peserta->tmp_alamat ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Telepon</dt>
        <dd>: <?php echo $peserta->tmp_telepon ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Jarak Tempat Tinggal ke Sekolah</dt>
        <dd>: <?php echo $peserta->tmp_jarak_sekolah ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pergi ke Sekolah dengan</dt>
        <dd>: <?php echo format_kendaraan($peserta->tmp_kendaraan) ?></dd>
    </dl>

    <h3 class="bg-success">D. DATA PENDIDIKAN SEBELUMNYA</h3>
    <dl class="dl-horizontal">
        <dt>Nama Sekolah</dt>
        <dd>: <?php echo $peserta->ska_nama ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Status</dt>
        <dd>: <?php echo format_status_sekolah($peserta->ska_status) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Alamat</dt>
        <dd>: <?php echo $peserta->ska_alamat ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Telepon</dt>
        <dd>: <?php echo $peserta->ska_telepon ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Asal Kelas</dt>
        <dd>: <?php echo $peserta->ska_kelas ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tahun Lulus</dt>
        <dd>: <?php echo $peserta->ska_tahun_lulus ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nomor Ijazah</dt>
        <dd>: <?php echo $peserta->ska_no_ijazah ?></dd>
    </dl>

    <h3 class="bg-success">E. DATA NILAI</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Mata Pelajaran</th>
            <th>Sem 1</th>
            <th>Sem 2</th>
            <th>Sem 3</th>
            <th>Sem 4</th>
            <th>Sem 5</th>
            <th>Rata-rata</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Bahasa Indonesia</td>
            <td><?php echo $peserta->nil_bin_1 ?></td>
            <td><?php echo $peserta->nil_bin_2 ?></td>
            <td><?php echo $peserta->nil_bin_3 ?></td>
            <td><?php echo $peserta->nil_bin_4 ?></td>
            <td><?php echo $peserta->nil_bin_5 ?></td>
            <td><?php echo $peserta->nil_bin_rata ?></td>
        </tr>
        <tr>
            <td>Bahasa Inggris</td>
            <td><?php echo $peserta->nil_big_1 ?></td>
            <td><?php echo $peserta->nil_big_2 ?></td>
            <td><?php echo $peserta->nil_big_3 ?></td>
            <td><?php echo $peserta->nil_big_4 ?></td>
            <td><?php echo $peserta->nil_big_5 ?></td>
            <td><?php echo $peserta->nil_big_rata ?></td>
        </tr>
        <tr>
            <td>Matematika</td>
            <td><?php echo $peserta->nil_mat_1 ?></td>
            <td><?php echo $peserta->nil_mat_2 ?></td>
            <td><?php echo $peserta->nil_mat_3 ?></td>
            <td><?php echo $peserta->nil_mat_4 ?></td>
            <td><?php echo $peserta->nil_mat_5 ?></td>
            <td><?php echo $peserta->nil_mat_rata ?></td>
        </tr>
        <tr>
            <td>I P A</td>
            <td><?php echo $peserta->nil_ipa_1 ?></td>
            <td><?php echo $peserta->nil_ipa_2 ?></td>
            <td><?php echo $peserta->nil_ipa_3 ?></td>
            <td><?php echo $peserta->nil_ipa_4 ?></td>
            <td><?php echo $peserta->nil_ipa_5 ?></td>
            <td><?php echo $peserta->nil_ipa_rata ?></td>
        </tr>
        <tr>
            <td>I P S</td>
            <td><?php echo $peserta->nil_ipa_1 ?></td>
            <td><?php echo $peserta->nil_ipa_2 ?></td>
            <td><?php echo $peserta->nil_ipa_3 ?></td>
            <td><?php echo $peserta->nil_ipa_4 ?></td>
            <td><?php echo $peserta->nil_ipa_5 ?></td>
            <td><?php echo $peserta->nil_ipa_rata ?></td>
        </tr>
        </tbody>
    </table>

</div> <!-- jumbotron end -->

<div class="text-center">
    <?php echo anchor('dashboard/biodata-cetak', '&nbsp; &nbsp; Cetak &nbsp; &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div>
</div>