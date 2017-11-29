<div class="container">
    <h2>Form Pendaftaran</h2>
    <hr>

    <?php echo form_open('pendaftaran', array('id'=>'myform', 'class'=>'myform', 'role'=>'form', 'method'=>'post')) ?>

        <div class="form-group has-feedback <?php set_validation_style('nik')?>">
            <?php echo form_label('NIK', 'nik', array('class' => 'control-label')) ?>
            <?php echo form_input('nik', $values->nik, 'id="nik" class="form-control" placeholder="NIK" maxlength="15"') ?>
            <?php set_validation_icon('nik') ?>
            <?php echo form_error('nik', '<span class="help-block">', '</span>');?>
        </div>

        <div class="form-group has-feedback <?php set_validation_style('no_hp')?>">
            <?php echo form_label('NO HP', 'no_hp', array('class' => 'control-label')) ?>
            <?php echo form_input('no_hp', $values->no_hp, 'id="no_hp" class="form-control" placeholder="NO HP" maxlength="12"') ?>
            <?php set_validation_icon('no_hp') ?>
            <?php echo form_error('no_hp', '<span class="help-block">', '</span>');?>
        </div>

        <div class="form-group has-feedback <?php set_validation_style('nama')?>">            
            <?php echo form_label('Nama Lengkap', 'nama', array('class' => 'control-label')) ?>
            <?php echo form_input('nama', $values->nama, 'id="nama" class="form-control" placeholder="Nama Lengkap" maxlength="64"') ?>            
            <?php set_validation_icon('nama') ?>
            <?php echo form_error('nama', '<span class="help-block">', '</span>');?>
        </div>


        <p><?php echo $captcha; ?></p>
        <div class="form-group has-feedback <?php set_validation_style('captcha')?>">            
            <?php echo form_label('Captcha', 'captcha', array('class' => 'control-label')) ?>
            <?php echo form_input('captcha', $values->captcha, 'id="captcha" class="form-control" placeholder="Masukkan 4 huruf / angka pada gambar di atas" maxlength="4"') ?>
            <?php set_validation_icon('captcha') ?>
            <?php echo form_error('captcha', '<span class="help-block">', '</span>');?>
        </div>

        <?php echo form_button(array('content'=>'Daftar', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>

    <?php echo form_close() ?>

    <br>
    <p class="text-danger"><strong>Catatan:</strong></p>
    <p class="text-danger"> No HP harus diisi No HP yang valid dan aktif, karena akan digunakan untuk mengirim informasi.</p>

</div>