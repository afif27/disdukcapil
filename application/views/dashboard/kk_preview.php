<div class="container">
<div class="jumbotron bio-preview">
<h3 class="bg-success"></h3>
    <dl class="dl-horizontal">
     

        <dt>Pemerintah Desa / Kelurahan </dt>
        <dd>: <?php echo format_kelurahan ($pemohon->kelurahan); ?></dd>
        <dl class="dl-horizontal">
        <dt>Dusun / Kampung </dt>
        <dd>: <?php echo $pemohon->dusun?></dd>
    </dl>
    <h3 class="bg-success"> Data Kepala Keluarga Laki-Laki </h3>
    
    <hr>

    <dl class="dl-horizontal">
        <dt>Nama Kepala Keluarga</dt>
        <dd>: <?php echo $pemohon->nama_kep_laki ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>NIK Kepala Keluarga Laki-Laki</dt>
        <dd>: <?php echo $pemohon->nik_kep_laki?></dd>
    </dl>

     <dl class="dl-horizontal">
        <dt>Tangaal Lahir</dt>
        <dd>: <?php echo $pemohon->tanggal_lahir_kep_laki?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Alamat</dt>
        <dd>: <?php echo $pemohon->alamat_kep_laki?></dd>
    </dl>

<!-- Kepala Perempuan -->

     <h3 class="bg-success"> Data Kepala Keluarga Perempuan </h3>
    
    <hr>

    <dl class="dl-horizontal">
        <dt>Nama Kepala KeluargaPerempuan </dt>
        <dd>: <?php echo $pemohon->nama_kep_perempuan?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>NIK Kepala Keluarga Perempuan</dt>
        <dd>: <?php echo $pemohon->nik_kep_perempuan?></dd>
    </dl>

     <dl class="dl-horizontal">
        <dt>Tangaal Lahir</dt>
        <dd>: <?php echo $pemohon->tanggal_lahir_kep_perempuan?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Alamat</dt>
        <dd>: <?php echo $pemohon->alamat_kep_perempuan?></dd>
    </dl>

    <!-- LAki-laki -->

     <h3 class="bg-success"> Data Laki-Laki </h3>
    
    <hr>

    <dl class="dl-horizontal">
        <dt>Nama Kepala Keluarga</dt>
        <dd>: <?php echo $pemohon->nama_laki_laki ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>NIK Kepala Keluarga Laki-Laki</dt>
        <dd>: <?php echo $pemohon->nik_laki_laki?></dd>
    </dl>

     <dl class="dl-horizontal">
        <dt>Tangaal Lahir</dt>
        <dd>: <?php echo $pemohon->tanggal_lahir_laki?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Alamat</dt>
        <dd>: <?php echo $pemohon->alamat_laki_laki?></dd>
    </dl>

    <!-- Perempuan -->
<h3 class="bg-success"> Data Perempuan </h3>
    
    <hr>

    <dl class="dl-horizontal">
        <dt>Nama Perempuan </dt>
        <dd>: <?php echo $pemohon->nama_perempuan ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>NIK Perempuan</dt>
        <dd>: <?php echo $pemohon->nik_perempuan?></dd>
    </dl>

     <dl class="dl-horizontal">
        <dt>Tangaal Lahir</dt>
        <dd>: <?php echo $pemohon->tanggal_lahir_perempuan?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Alamat</dt>
        <dd>: <?php echo $pemohon->alamat_perempuan?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>No Surat Nikah/dt>
        <dd>: <?php echo $pemohon->no_surat_nikah?></dd>
    </dl>
    
        



</div> <!-- jumbotron end -->

<div class="text-center">
    <?php echo anchor('dashboard/kk-cetak', '&nbsp; &nbsp; Cetak &nbsp; &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div>
</div>