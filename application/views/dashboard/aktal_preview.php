<div class="container">
<div class="jumbotron bio-preview">
<h3 class="bg-success"></h3>
    <dl class="dl-horizontal">
        <dt>Pemerintah Desa / Kelurahan </dt>
        <dd>: <?php echo format_kelurahan ($pemohon->kelurahan); ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kecamatan</dt>
        <dd>: <?php echo $pemohon->kecamatan?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pemerintah Kabupaten / Kota</dt>
        <dd>: <?php echo $pemohon->kabupaten ?></dd>
    </dl>

    <h2> Surat Keterangan Akta Kelahiran</h2>
    <hr>

    <dl class="dl-horizontal">
        <dt>Nama Kepala Keluarga</dt>
        <dd>: <?php echo $pemohon->nama_kep ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nomor Kartu Keluarga</dt>
        <dd>: <?php echo $pemohon->no_kk ?></dd>
    </dl>

<!-- Data Bayi -->

    <h3 class="bg-success"> BAYI / ANAK </h3>

    <dl class="dl-horizontal">
        <dt>Nama : </dt>
        <dd>: <?php echo $pemohon->nama_anak?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Jenis Kelamin </dt>
        <dd>: <?php echo format_jenis_kelamin($pemohon->jenkel_anak);?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tempat Dilahirkan </dt>
        <dd>: <?php echo format_tempat_lahir($pemohon->tempat_dilahirkan);?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tempat Kelahiran</dt>
        <dd>: <?php echo $pemohon->tempat_lahir?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Hari dan Tanggal Lahir </dt>
        <dd>: <?php echo format_hari_tanggal($pemohon->tanggal_lahir);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pukul</dt>
        <dd>: <?php echo $pemohon->pukul_lahir ?>  </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Jenis Kelahiran</dt>
        <dd>: <?php echo format_jenis_kelahiran($pemohon->jenis_kelahiran); ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Kelahiran KE</dt>
        <dd> : <?php echo $pemohon->kelahiran_ke?> </dd>
    </dl>
     <dl class="dl-horizontal">
        <dt> Penolong Kelahiran</dt>
        <dd> : <?php echo format_penolong_kelahiran($pemohon->penolong_kelahiran);?> </dd>
    </dl>
     <dl class="dl-horizontal">
        <dt> Berat Bayi</dt>
        <dd> : <?php echo $pemohon->berat_bayi?> Kg </dd>
    </dl>
     <dl class="dl-horizontal">
        <dt> Panjang Bayi </dt>
        <dd> : <?php echo $pemohon->panjang_bayi?> Cm </dd>
    </dl>

    <!-- data Ibu -->
    <h3 class="bg-success"> IBU </h3>

     <dl class="dl-horizontal">
        <dt> NIK </dt>
        <dd> : <?php echo $pemohon->nik_ibu ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Nama Lengkap </dt>
        <dd> : <?php echo $pemohon->nama_ibu?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Tanggal Lahir / Umur </dt>
        <dd> : <?php echo format_tanggal($pemohon->tanggal_lahir_ibu)?> /  Umur : <?php echo $pemohon->umur_ibu ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Pekerjaan </dt>
        <dd> : <?php echo format_pekerjaan($pemohon->pekerjaan_ibu);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Alamat </dt>
        <dd> : <?php echo $pemohon->alamat_ibu?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_ibu?>. Kecamatan : <?php echo $pemohon->kecamatan_ibu?>. Kabupaten : <?php echo $pemohon->kabupaten_ibu?>. Provinsi : <?php echo $pemohon->provinsi_ibu?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Kewarganegaraan</dt>
        <dd> : <?php echo format_kewarganegaraan($pemohon->kewarganegaraan_ibu);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Kebangsaan </dt>
        <dd> : <?php echo $pemohon->kebangsaan_ibu?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Tgl. Pencatatan Perkawinan </dt>
        <dd> : <?php echo format_tanggal($pemohon->tanggal_kawin);?> </dd>
    </dl>

 <!-- data ayah -->

 <h3 class="bg-success"> Ayah</h3>

     <dl class="dl-horizontal">
        <dt> NIK </dt>
        <dd> : <?php echo $pemohon->nik_ayah ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Nama Lengkap </dt>
        <dd> : <?php echo $pemohon->nama_ibu?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Tanggal Lahir / Umur </dt>
        <dd> : <?php echo format_tanggal($pemohon->tanggal_lahir_ayah)?> /  Umur : <?php echo $pemohon->umur_ayah ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Pekerjaan </dt>
        <dd> : <?php echo format_pekerjaan($pemohon->pekerjaan_ayah);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Alamat </dt>
        <dd> : <?php echo $pemohon->alamat_ayah?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_ayah?>. Kecamatan : <?php echo $pemohon->kecamatan_ayah?>. Kabupaten : <?php echo $pemohon->kabupaten_ayah?>. Provinsi : <?php echo $pemohon->provinsi_ayah?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Kewarganegaraan</dt>
        <dd> : <?php echo format_kewarganegaraan($pemohon->kewarganegaraan_ayah);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Kebangsaan </dt>
        <dd> : <?php echo $pemohon->kebangsaan_ayah?> </dd>
    </dl>
    
    <!-- data pelapor -->
     <h3 class="bg-success"> Pelapor</h3>
     <dl class="dl-horizontal">
        <dt> NIK </dt>
        <dd> : <?php echo $pemohon->nik_pelapor ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Nama Lengkap </dt>
        <dd> : <?php echo $pemohon->nama_pelapor?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Umur </dt>
        <dd> :  : <?php echo $pemohon->umur_pelapor ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Jenis Kelamin </dt>
        <dd> : <?php echo format_jenis_kelamin($pemohon->jenkel_pelapor);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Pekerjaan </dt>
        <dd> : <?php echo format_pekerjaan($pemohon->pekerjaan_ayah);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Alamat </dt>
        <dd> : <?php echo $pemohon->alamat_pelapor?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_pelapor?>. Kecamatan : <?php echo $pemohon->kecamatan_pelapor?>. Kabupaten : <?php echo $pemohon->kabupaten_pelapor?>. Provinsi : <?php echo $pemohon->provinsi_pelapor?></dd>
    </dl>
    
    <!-- data Saksi 1 -->
    <h3 class="bg-success"> Saksi 1</h3>
     <dl class="dl-horizontal">
        <dt> NIK </dt>
        <dd> : <?php echo $pemohon->nik_saksi_satu ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Nama Lengkap </dt>
        <dd> : <?php echo $pemohon->nama_saksi_satu?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Umur </dt>
        <dd> :  : <?php echo $pemohon->umur_saksi_satu ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Jenis Kelamin </dt>
        <dd> : <?php echo format_jenis_kelamin($pemohon->jenkel_saksi_satu);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Pekerjaan </dt>
        <dd> : <?php echo format_pekerjaan($pemohon->pekerjaan_saksi_satu);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Alamat </dt>
        <dd> : <?php echo $pemohon->alamat_saksi_satu?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_saksi_satu?>. Kecamatan : <?php echo $pemohon->kecamatan_saksi_satu?>. Kabupaten : <?php echo $pemohon->kabupaten_saksi_satu?>. Provinsi : <?php echo $pemohon->provinsi_saksi_satu?></dd>
    </dl>

    <!-- saksi 2 -->
    <h3 class="bg-success"> Saksi 2</h3>
     <dl class="dl-horizontal">
        <dt> NIK </dt>
        <dd> : <?php echo $pemohon->nik_saksi_dua ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Nama Lengkap </dt>
        <dd> : <?php echo $pemohon->nama_saksi_dua?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Umur </dt>
        <dd> :  : <?php echo $pemohon->umur_saksi_dua ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Jenis Kelamin </dt>
        <dd> : <?php echo format_jenis_kelamin($pemohon->jenkel_saksi_dua);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Pekerjaan </dt>
        <dd> : <?php echo format_pekerjaan($pemohon->pekerjaan_saksi_dua);?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Alamat </dt>
        <dd> : <?php echo $pemohon->alamat_saksi_dua?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_saksi_dua?>. Kecamatan : <?php echo $pemohon->kecamatan_saksi_dua?>. Kabupaten : <?php echo $pemohon->kabupaten_saksi_dua?>. Provinsi : <?php echo $pemohon->provinsi_saksi_dua?></dd>
    </dl>


        



</div> <!-- jumbotron end -->

<div class="text-center">
    <?php echo anchor('dashboard/aktal-cetak', '&nbsp; &nbsp; Cetak &nbsp; &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div>
</div>