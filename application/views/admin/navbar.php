<?php $user_level = $this->session->userdata('user_level')?>

<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Link -->
        <ul class="nav navbar-nav navbar-left">
            <?php echo (isset($halaman) && $halaman == 'home') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin', '<span class="glyphicon glyphicon-home"></span> Home');?></li>

             <?php echo (isset($halaman) && $halaman == 'ktp') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/ktp', '<span class="glyphicon glyphicon-list-alt"></span> KTP');?></li>
            <?php echo (isset($halaman) && $halaman == 'kk') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/kk', '<span class="glyphicon glyphicon-list-alt"></span> Kartu Keluarga');?></li>
             <?php echo (isset($halaman) && $halaman == 'aktal') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/aktal', '<span class="glyphicon glyphicon-list-alt"></span> Akta Lahir');?></li>
              <?php echo (isset($halaman) && $halaman == 'akmat') ? '<li class="active">' : '<li>'; ?> <?php echo anchor('admin/akmat', '<span class="glyphicon glyphicon-list-alt"></span> Akta Mati');?></li>
           
        </ul>
        <!-- end Link -->


        <!-- Informasi login -->
        <p class="navbar-text navbar-right">
            Login sebagai,
            <strong>
                <?php echo anchor('admin/logout',
                    '<span class="glyphicon glyphicon-user"></span> ' . $this->session->userdata('username'),
                    array('class' => 'navbar-link', 'data-confirm' => 'Anda yakin akan logout?')); ?>
            </strong>
        </p>
        <!-- end Informasi login -->

    </div> <!-- container -->
</nav>