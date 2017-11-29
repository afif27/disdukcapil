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

    <h2> Surat Keterangan Akta Kematian</h2>
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

    <h3 class="bg-success"> Jenazah </h3>
    <dl class="dl-horizontal">
        <dt>NIK : </dt>
        <dd>: <?php echo $pemohon->nik_jenazah?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Nama : </dt>
        <dd>: <?php echo $pemohon->nama_jenazah?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Jenis Kelamin </dt>
        <dd>: <?php echo format_jenis_kelamin($pemohon->jenkel_jenazah);?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Hdan Tanggal Lahir / umur </dt>
        <dd>: <?php echo format_hari_tanggal($pemohon->tanggal_lahir_jenazah);?>  / umur : <?php echo $pemohon->umur_jenazah ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tempat Kelahiran</dt>
        <dd>: <?php echo $pemohon->tempat_lahir_jenazah?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Agama : </dt>
        <dd>: <?php echo format_agama($pemohon->agama_jenazah)?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pekerjaan : </dt>
        <dd>: <?php echo $pemohon->pekerjaan_jenazah?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Alamat </dt>
        <dd> : <?php echo $pemohon->alamat_jenazah?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan?>. Kecamatan : <?php echo $pemohon->kecamatan?>. Kabupaten : <?php echo $pemohon->kabupaten?>. Provinsi : Riau </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kewarganegaraan </dt>
        <dd>: <?php echo format_kewarganegaraan($pemohon->kewarganegaraan_jenazah) ?>  </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kebangsaan</dt>
        <dd>: <?php echo $pemohon->kebangsaan_jenazah ?>  </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Anak Ke</dt>
        <dd>: <?php echo $pemohon->anak_ke ?>  </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tanggal KEmatian</dt>
        <dd>: <?php echo format_tanggal($pemohon->tanggal_kematian) ?>  </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pukul</dt>
        <dd>: <?php echo $pemohon->pukul_kematian ?>  </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Sebab Kematian </dt>
        <dd>: <?php echo format_sebab_kematian($pemohon->sebab_kematian) ?>  </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Tempat Kematian </dt>
        <dd>: <?php echo $pemohon->tempat_kematian  ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> Yang Menerangkan </dt>
        <dd> : <?php echo format_yang_menerangkan($pemohon->yang_menerangkan) ?> </dd>
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
        <dt> Tanggal Lahir / Umur </dt>
        <dd> : <?php echo format_tanggal($pemohon->tanggal_lahir_pelapor)?> /  Umur : <?php echo $pemohon->umur_pelapor ?></dd>
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
        <dt> Tanggal Lahir / Umur </dt>
        <dd> : <?php echo format_tanggal($pemohon->tanggal_lahir_saksi_satu)?> /  Umur : <?php echo $pemohon->umur_saksi_satu ?></dd>
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
        <dt> Tanggal Lahir / Umur </dt>
        <dd> : <?php echo format_tanggal($pemohon->tanggal_lahir_saksi_dua)?> /  Umur : <?php echo $pemohon->umur_saksi_dua ?></dd>
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
    <?php echo anchor('dashboard/akmat-cetak', '&nbsp; &nbsp; Cetak &nbsp; &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div>
</div>