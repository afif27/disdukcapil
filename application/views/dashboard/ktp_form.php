<div class="container">
<h2>Formulir Permohonan KTP</h2>
<hr>

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form' )) ?>

    <!-- hidden field -->
    <?php echo form_hidden('provinsi', $values->provinsi);?>
    <?php echo form_hidden('kabupaten', $values->kabupaten);?>
    <?php echo form_hidden('kecamatan', $values->kecamatan);?>

    <h3 class="bg-success">Pembuatan KTP </h3>

    <!-- no_peserta -->
   
    <!-- provinsi -->
    <div class="form-group form-group-sm">
        <?php echo form_label('Pemerinah Provinsi', 'provinsi', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <p class="form-control-static"><?php echo $values->provinsi;?></p>
        </div>
    </div>

    <!-- kabupaten-->
    <div class="form-group form-group-sm">        
        <?php echo form_label('Pemerintah Kabupaten/Kota', 'kabupaten', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <p class="form-control-static"><?php echo $values->kabupaten;?></p>
        </div>
    </div>
    
    <!-- Kecamatan -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('kecamatan')?>">        
        <?php echo form_label('Kecamatan', 'Kecamatan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
         <p class="form-control-static"><?php echo $values->kecamatan;?></p>
         </div>
         </div>
    
    <!-- kelurahan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan')?>">        
        <?php echo form_label('Kelurahan', 'Kelurahan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <?php
            $kelurahan = array(
                '' => '- Pilih -',
                '1' => 'Tambusai Tengah',
                '2' => 'Tambusai Barat',
                '3' => 'Tambusai Timur',
                '4' => 'Batas',
                '5' => 'TaliKumain',
                '6' => 'Rantau Panjang',
                '7' => 'Sungai Kumango',
                '8' => 'Batang Kumu',
                '9' => 'Sialang Rindang',
                '10' => 'Suka Maju',
                '11' => 'Tingkok',
                '12' => 'Lubuk',

                
            );
            $atribut_kelurahan= 'class="form-control"';
            echo form_dropdown('kelurahan', $kelurahan, $values->kelurahan, $atribut_kelurahan);
            ?>
            <?php if (form_error('kelurahan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kelurahan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
        </div>
        </div>

   <!-- Permohonan KTP -->
   <div class="form-group form-group-sm has-feedback <?php set_validation_style('permohonan')?>">
        <?php echo form_label('Permohonan KTP', 'permohonan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <label class="radio-inline" for="Baru">
                <?php echo form_radio('permohonan', 'A', (isset($values->permohonan) && $values->permohonan == 'A') ? true : false, 'id ="Baru"')?> A.Baru
            </label>
            <label class="radio-inline" for="Perpanjangan">
                <?php echo form_radio('permohonan', 'B', (isset($values->permohonan) && $values->permohonan == 'B') ? true : false, 'id ="Perpanjangan"')?> B.Perpanjangan
            </label>
            <label class="radio-inline" for="Penggantian">
                <?php echo form_radio('permohonan', 'C', (isset($values->permohonan) && $values->permohonan == 'C') ? true : false, 'id ="Penggantian"')?> C. Penggantian
            </label>
        </div>
        <?php if (form_error('permohonan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('permohonan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- nama -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama')?>">        
        <?php echo form_label('Nama', 'nama', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama', $values->nama, 'id="nama" class="form-control" placeholder="Nama" maxlength="64"') ?>
            <?php set_validation_icon('nama') ?>
        </div>
        <?php if (form_error('nama')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- No ktp -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('no_kk')?>">
        <?php echo form_label('No kk', 'no_kk', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('no_kk', $values->no_kk, 'id="no_kk" class="form-control" placeholder="No KK" maxlength="32"') ?>
            <?php set_validation_icon('no_kk') ?>
        </div>
        <?php if (form_error('no_kk')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('no_kk', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    
    <!-- Alamat -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat')?>">
        <?php echo form_label('Alamat', 'alamat', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat', $values->alamat, ' id = "alamat" class="form-control" id="alamat" placeholder="Alamat"') ?>
        </div>
        <?php if (form_error('alamat')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- RT -->

    <div class="form-group form-group-sm has-feedback <?php set_validation_style('RT')?>">
        <?php echo form_label('Rt', 'RT', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('RT', $values->RT, 'id = "RT" class="form-control" placeholder="RT" maxlength="3"') ?>
            <?php set_validation_icon('RT') ?>
        </div>
        <?php if (form_error('RT')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('RT', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>
 <!-- RW -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('RW')?>">
        <?php echo form_label('Rw', 'RW', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('RW', $values->RW, 'id = "RW" class="form-control" placeholder="RW" maxlength="3"') ?>
            <?php set_validation_icon('RW') ?>
        </div>
        <?php if (form_error('RW')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('RW', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Kode pos -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('kode_pos')?>">
        <?php echo form_label('Kode pos', 'kode_pos', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('kode_pos', $values->kode_pos, 'id = "kode_pos" class="form-control" placeholder="kode pos" maxlength="5"') ?>
            <?php set_validation_icon('kode_pos') ?>
        </div>
        <?php if (form_error('kode_pos')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('kode_pos', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>


    <hr>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>