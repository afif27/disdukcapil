<?php if (!empty($ktp) && is_array($ktp)): ?>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama </th>
                    <th>Status Verifikasi</th>
                    <th>tanggal Buat</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($ktp as $row): ?>

                    <tr>
                        <td><?php echo ++$offset ?></td>
                        <td><?php echo $row->nik ?></td>
                        <td><?php echo $row->nama ?></td>
                        <?php echo $verifikasi ?>
                        <td>
                        <?php echo $row->created_at?>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>