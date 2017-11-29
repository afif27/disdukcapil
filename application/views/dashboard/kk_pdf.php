<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Data Pe</title>
    <style type="text/css">
        h1 {text-align:center; font-size:14px;}
        h2 {font-size:12px;}
        h3 {text-align:right; font-size:14px;}
        td {font-size:12px; font-family:Times;}
        .tengah {text-align:center; }
        .kiri {padding-left:10px;}
        table.nilai {border-collapse: collapse;}
        table.nilai td {border: 1px solid #000000}
    </style>
</head>

<body>
<h3> KODE F-1.01 </h3>

<h1>Pemerintah Kabupaten Rokan Hulu</h1>
<h1>Formulir Permohonan Kartu Keluarga</h1>
 <hr>
<h2>Data Kepala Keluarga Laki-Laki</h2>
<table width="600" border="0">
<tr>
        <td> Nama Kepala Keluarga Laki- Laki </td>
        <td>: <?php echo $pemohon->nama_kep_laki ?></td>
    </tr>
    <tr>
        <td>Nik Kepala Keluarga Laki-laki</td>
        <td>: <?php echo $pemohon->nik_kep_laki ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>: <?php echo $pemohon->tanggal_lahir_kep_laki ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:  <?php echo $pemohon->alamat_kep_laki?></td>
    </tr>
    <tr>
        <td colspan="0"><h2> DATA Kepala Keluarga Perempuan </h2></td>

    </tr>
    <tr>
        <td> Nama Kepala Keluarga Laki- Laki </td>
        <td>: <?php echo $pemohon->nama_kep_perempuan ?></td>
    </tr>
    <tr>
        <td>Nik Kepala Keluarga Laki-laki</td>
        <td>: <?php echo $pemohon->nik_kep_perempuan ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>: <?php echo $pemohon->tanggal_lahir_kep_perempuan ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:  <?php echo $pemohon->alamat_kep_perempuan?></td>
    </tr>
    <tr>
    <td colspan="0"><h2> DATA Laki-Laki</h2></td>
    </tr>
    <tr>
        <td> Nama  Laki- Laki </td>
        <td>: <?php echo $pemohon->nama_laki_laki?></td>
    </tr>
    <tr>
        <td>Nik Laki-laki</td>
        <td>: <?php echo $pemohon->nik_laki_laki ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>: <?php echo $pemohon->tanggal_lahir_laki?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:  <?php echo $pemohon->alamat_laki_laki?></td>
    </tr>

</table> 
<p>&nbsp;</p>
 Nama Ketua RT : __________________________ 
<p>&nbsp;</p>
Nama Ketua RW : ___________________________
<p>&nbsp;</p>
<table width="600" border="0">
    <tr>
        <td width="200">
            Mengetahui<br>
            Kelapa Desa / Lurah <?php echo format_kelurahan($pemohon->kelurahan) ?>,<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            (..................................................)
        </td>
        <td width="200">&nbsp;</td>
        <td width="200"><br />
            Nama Kepala Keluarga, <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            (<?php echo $pemohon->nama_laki_laki?>)
        </td>
    </tr>
</table>


<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</body>
</html>