<?php
$login_status = $this->session->userdata('login_status');
$user_level = $this->session->userdata('user_level');
?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">

        <!-- Navbar Link -->
        <ul class="nav navbar-nav navbar-left">
            <!-- Link Peserta -->
            <?php echo (isset($halaman) && $halaman == 'home') ? '<li class="active">' : '<li>'; ?> <?php echo anchor(site_url('dashboard'), '<span class="glyphicon glyphicon-home"></span> Home');?></li>

            <!-- Link ktp -->
            <?php echo (isset($halaman) && preg_match('#(ktp|cetak-ktp)#', $halaman)) ? '<li class="active">' : '<li>'; ?>
            <?php echo anchor('#', '<span class="glyphicon glyphicon-list"></span> KTP <span class="caret"></span>', 'class="dropdown-toggle" data-toggle="dropdown"');?>
                <ul class="dropdown-menu" role="menu">
                    <?php echo (isset($halaman) && $halaman == 'ktp') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/ktp', '<span class="glyphicon glyphicon-book"></span> Form KTP');?></li>
                    <?php echo (isset($halaman) && $halaman == 'cetak-ktp') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/ktp-preview', '<span class="glyphicon glyphicon-print"></span> Cetak KTP');?></li>
                </ul>
            </li> 
            <!-- link kk -->
            <?php echo (isset($halaman) && preg_match('#(kk|cetak-kk)#', $halaman)) ? '<li class="active">' : '<li>'; ?>
            <?php echo anchor('#', '<span class="glyphicon glyphicon-list-alt"></span> Kartu Keluarga <span class="caret"></span>', 'class="dropdown-toggle" data-toggle="dropdown"');?>
            <ul class="dropdown-menu" role="menu">
                <?php echo (isset($halaman) && $halaman == 'kk') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/kk', '<span class="glyphicon glyphicon-book"></span> Form Kartu Keluarga');?></li>
                <?php echo (isset($halaman) && $halaman == 'cetak-kk') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/kk-preview', '<span class="glyphicon glyphicon-print"></span> Cetak Form Kartu Keluarga');?></li>
                
            </ul>
            </li>
            <!-- Dropdown akta lahir -->
            <?php echo (isset($halaman) && preg_match('#(aktal|cetak-aktal)#', $halaman)) ? '<li class="active">' : '<li>'; ?>
            <?php echo anchor('#', '<span class="glyphicon glyphicon-list-alt"></span> AKTA Kelahiran<span class="caret"></span>', 'class="dropdown-toggle" data-toggle="dropdown"');?>
            <ul class="dropdown-menu" role="menu">
                <?php echo (isset($halaman) && $halaman == 'aktal') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/aktal', '<span class="glyphicon glyphicon-book"></span> Form Akta Kelahiran');?></li>
                <?php echo (isset($halaman) && $halaman == 'cetak-aktal') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/aktal-preview', '<span class="glyphicon glyphicon-print"></span> Cetak Form Akta Kelahiran');?></li>
                
            </ul>
            </li>
            <!-- Dropdown Informasi end -->
            <!-- Dropdown akta lahir -->
            <?php echo (isset($halaman) && preg_match('#(aktmat|cetak-akmat)#', $halaman)) ? '<li class="active">' : '<li>'; ?>
            <?php echo anchor('#', '<span class="glyphicon glyphicon-list-alt"></span> Akta Kematian<span class="caret"></span>', 'class="dropdown-toggle" data-toggle="dropdown"');?>
            <ul class="dropdown-menu" role="menu">
                <?php echo (isset($halaman) && $halaman == 'akmat') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/akmat', '<span class="glyphicon glyphicon-book"></span> Form Akta Kematian');?></li>
                <?php echo (isset($halaman) && $halaman == 'cetak-akmat') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/akmat-preview', '<span class="glyphicon glyphicon-print"></span> Cetak Form Akta Kematian');?></li>
                
            </ul>
            </li>

            <!-- Link Hasil Seleksi -->
            <?php if (config_item('psb_tahap_psb') == 'pengumuman') : ?>
                <?php echo (isset($halaman) && $halaman == 'hasil-seleksi') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/hasil-seleksi', '<span class="glyphicon glyphicon-flag"></span> Hasil Seleksi'); ?></li>
            <?php endif ?>

            <!-- Link Kontak -->
           <!-- <?php echo (isset($halaman) && $halaman == 'kontak') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/kontak', '<span class="glyphicon glyphicon-envelope"></span> Kontak'); ?></li>-->

            <!-- Link Dropdown Akun Saya -->
           <!-- <?php echo (isset($halaman) && preg_match('#(biodata|cetak-biodata)#', $halaman)) ? '<li class="active">' : '<li>'; ?>
            <?php echo anchor('#', '<span class="glyphicon glyphicon-user"></span> Akun Saya<span class="caret"></span>', 'class="dropdown-toggle" data-toggle="dropdown"');?>
                <ul class="dropdown-menu" role="menu">
                    <?php echo (isset($halaman) && $halaman == 'biodata') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/biodata', '<span class="glyphicon glyphicon-book"></span> Biodata');?></li>
                    <?php echo (isset($halaman) && $halaman == 'cetak-biodata') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('dashboard/biodata-preview', '<span class="glyphicon glyphicon-print"></span> Cetak Biodata');?></li>
                </ul>
            </li> -->
            <!-- Link Dropdown Akun Saya -->
        </ul>
        <!-- Navbar Link end -->

        <!-- Informasi login -->
        <?php if (($login_status == true) && ($user_level == 'peserta')) : ?>
        <p class="navbar-text navbar-right">
            Login sebagai,
            <strong>
                <?php echo anchor('dashboard/logout',
                    '<span class="glyphicon glyphicon-user"></span> ' . $this->session->userdata('nama'),
                    array('class' => 'navbar-link', 'data-confirm' => 'Anda yakin akan logout?')); ?>
            </strong>
        </p>
        <?php endif ?>
        <!-- end Informasi login -->

    </div> <!-- container -->
</nav>