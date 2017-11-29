<div class="container">
<div class="jumbotron bio-preview">
    <h2>Formulir Permohonan KTP  </h2>
    <hr>

    <h3 class="bg-success"></h3>
    <dl class="dl-horizontal">
        <dt>Pemerintah Provinsi</dt>
        <dd>: <?php echo $pemohon->provinsi ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Pemerintah Kabupaten</dt>
        <dd>: <?php echo $pemohon->kabupaten ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kecamatan</dt>
        <dd>: <?php echo $pemohon->kecamatan?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Kelurahan / Desa </dt>
        <dd>: <?php echo format_kelurahan ($pemohon->kelurahan);?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Permohonan KTP </dt>
        <dd>: <?php echo format_permohonan($pemohon->permohonan) ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Nama Lengkap </dt>
        <dd>: <?php echo $pemohon->nama?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>No KK</dt>
        <dd>: <?php echo $pemohon->no_kk?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>NIK</dt>
        <dd>: <?php echo $pemohon->nik ?> </dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>alamat</dt>
        <dd>: <?php echo $pemohon->alamat ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt> RT/RW/kode Pos   </dt>
        <dd> : RT <?php echo $pemohon->RT ?> / RW <?php echo $pemohon->RW ?> / Kode Pos <?php echo $pemohon->kode_pos ?></dd>
    </dl>



</div> <!-- jumbotron end -->

<div class="text-center">
    <?php echo anchor('dashboard/ktp-cetak', '&nbsp; &nbsp; Cetak &nbsp; &nbsp;', array('class' => 'btn btn-primary btn-lg', 'role' => 'button')); ?>
</div>
</div>