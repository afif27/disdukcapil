<div class="container">
<h2>Formulir Kartu Keluarga</h2>
<hr>
 

<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form','method'=>'post')) ?>
  
   <!-- hidden field -->
  
 <!-- kelurahan -->

<div class="form-group form-group-sm has-feedback <?php set_validation_style('kelurahan')?>">        
        <?php echo form_label('Kelurahan/Desa', 'kelurahan', array('class' => 'control-label col-sm-3')) ?>
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

        <!-- dusun -->

        <div class="form-group form-group-sm has-feedback <?php set_validation_style('dusun')?>">        
        <?php echo form_label('Dusun', 'dusun', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('dusun', $values->dusun, 'id="nama_kep" class="form-control" placeholder="Nama Dusun" maxlength="64"') ?>
            <?php set_validation_icon('dusun') ?>
        </div>
        <?php if (form_error('dusun')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('dusun', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>  

<!-- nik pemohon -->
 <h3 class="bg-success">Data Kepala Keluarga Laki-Laki </h3>

       <!--- nama kepala keluarga -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_kep_laki')?>">        
        <?php echo form_label('Nama Kepala Keluarga Laki-laki ', 'nama_kep_laki', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_kep_laki', $values->nama_kep_laki, 'id="nama_kep" class="form-control" placeholder="Nama Lengkap" maxlength="64"') ?>
            <?php set_validation_icon('nama_kep_laki') ?>
        </div>
        <?php if (form_error('nama_kep_laki')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_kep_laki', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>  

    <!-- nik laki-laki -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_kep_laki')?>">
        <?php echo form_label('NIK Kepala Keluarga Laki-laki', 'nik_kep_laki', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('nik_kep_laki', $values->nik_kep_laki, 'id="nik_kep_laki" class="form-control" placeholder="NIK" maxlength="32"') ?>
            <?php set_validation_icon('nik_kep_laki') ?>
        </div>
        <?php if (form_error('nik_kep_laki')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_kep_laki', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal lahir -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_kep_laki')?>">  
        <?php echo form_label('Tanggal lahir  ', 'tanggal_lahir_kep_laki', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_kep_laki', date_to_id($values->tanggal_lahir_kep_laki), 'id="tanggal_lahir_kep_laki" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_kep_laki')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_kep_laki', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

        <!-- Alamat -->
        <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_kep_laki')?>">
        <?php echo form_label('Alamat', 'alamat_kep_laki', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_kep_laki', $values->alamat_kep_laki, 'class="form-control" id="alamat_kep_laki" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_kep_laki')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_kep_laki', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <h3 class="bg-success">Data Kepala Keluarga Perempuan </h3>

       <!--- nama kepala keluarga -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_kep_perempuan')?>">        
        <?php echo form_label('Nama Kepala Keluarga Perempuan ', 'nama_kep_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_kep_perempuan', $values->nama_kep_perempuan, 'id="nama_kep_perempuan" class="form-control" placeholder="Nama Lengkap" maxlength="64"') ?>
            <?php set_validation_icon('nama_kep_perempuan') ?>
        </div>
        <?php if (form_error('nama_kep_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_kep_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>  

    <!-- nik laki-laki -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_kep_perempuan')?>">
        <?php echo form_label('NIK Kepala Keluarga Perempuan', 'nik_kep_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('nik_kep_perempuan', $values->nik_kep_perempuan, 'id="nik_kep_perempuan" class="form-control" placeholder="NIK" maxlength="32"') ?>
            <?php set_validation_icon('nik_kep_perempuan') ?>
        </div>
        <?php if (form_error('nik_kep_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_kep_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal lahir -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_kep_perempuan')?>">  
        <?php echo form_label('Tanggal lahir  ', 'tanggal_lahir_kep_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_kep_perempuan', date_to_id($values->tanggal_lahir_kep_perempuan), 'id="tanggal_lahir_kep_perempuan" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_kep_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_kep_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

        <!-- Alamat -->
        <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_kep_perempuan')?>">
        <?php echo form_label('Alamat Kepala Keluarga Perempuan', 'alamat_kep_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_kep_perempuan', $values->alamat_kep_perempuan, 'class="form-control" id="alamat_kep_perempuan" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_kep_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_kep_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif?>
        </div>

         <h3 class="bg-success">Data Laki-Laki </h3>

       <!--- nama kepala keluarga -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_laki_laki')?>">        
        <?php echo form_label('Nama Laki-laki ', 'nama_laki_laki', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_laki_laki', $values->nama_laki_laki, 'id="nama_laki_laki" class="form-control" placeholder="Nama Lengkap" maxlength="64"') ?>
            <?php set_validation_icon('nama_laki_laki') ?>
        </div>
        <?php if (form_error('nama_laki_laki')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_laki_laki', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>  

    <!-- nik laki-laki -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_laki_laki')?>">
        <?php echo form_label('NIK Laki-laki', 'nik_laki_laki', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('nik_laki_laki', $values->nik_laki_laki, 'id="nik_laki_laki" class="form-control" placeholder="NIK" maxlength="32"') ?>
            <?php set_validation_icon('nik_laki_laki') ?>
        </div>
        <?php if (form_error('nik_laki_laki')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_laki_laki', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal lahir -->
     <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_laki')?>">  
        <?php echo form_label('Tanggal lahir  ', 'tanggal_lahir_laki', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_laki', date_to_id($values->tanggal_lahir_laki), 'id="tanggal_lahir_laki" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_laki')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_laki', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

            <!-- Alamat -->
        <div class="form-group form-group-sm has-feedback <?php set_validation_style('alamat_laki_laki')?>">
        <?php echo form_label('Alamat', 'alamat_kep_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-5">
            <?php echo form_textarea('alamat_kep_perempuan', $values->alamat_kep_perempuan, 'class="form-control" id="alamat_kep_perempuan" placeholder="Alamat Tinggal"') ?>
        </div>
        <?php if (form_error('alamat_kep_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('alamat_kep_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif?>
        </div>

      <h3 class="bg-success">Data Perempuan </h3>

       <!--- nama kepala keluarga -->
  <div class="form-group form-group-sm has-feedback <?php set_validation_style('nama_perempuan')?>">        
        <?php echo form_label('Nama Perempuan ', 'nama_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-4">
            <?php echo form_input('nama_perempuan', $values->nama_perempuan, 'id="nama_perempuan" class="form-control" placeholder="Nama Lengkap" maxlength="64"') ?>
            <?php set_validation_icon('nama_perempuan') ?>
        </div>
        <?php if (form_error('nama_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nama_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>  

    <!-- nik laki-laki -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('nik_perempuan')?>">
        <?php echo form_label('NIK Perempuan', 'nik_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('nik_perempuan', $values->nik_perempuan, 'id="nik_perempuan" class="form-control" placeholder="NIK" maxlength="32"') ?>
            <?php set_validation_icon('nik_perempuan') ?>
        </div>
        <?php if (form_error('nik_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nik_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- tanggal lahir -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('tanggal_lahir_perempuan')?>">  
        <?php echo form_label('Tanggal lahir  ', 'tanggal_lahir_perempuan', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-2">
            <div class="input-group date" data-date-format="dd-mm-yyyy">
                <?php echo form_input('tanggal_lahir_perempuan', date_to_id($values->tanggal_lahir_perempuan), 'id="tanggal_lahir_perempuan" class="form-control" placeholder="Tanggal Lahir" maxlength="10"') ?>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <?php if (form_error('tanggal_lahir_perempuan')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('tanggal_lahir_perempuan', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

     <!-- nomor akta perkawinan -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style('no_surat_nikah')?>">
        <?php echo form_label('No surat nikah', 'no_surat_nikah', array('class' => 'control-label col-sm-3')) ?>
        <div class="col-sm-3">
            <?php echo form_input('no_surat_nikah', $values->no_surat_nikah, 'id="no_surat_nikah" class="form-control" placeholder="No Akta" maxlength="32"') ?>
            <?php set_validation_icon('no_surat_nikah') ?>
        </div>
        <?php if (form_error('no_surat_nikah')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('no_surat_nikah', '<span class="help-block">', '</span>');?>
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