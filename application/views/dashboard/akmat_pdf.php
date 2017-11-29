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
<h3> KODE F2-32 </h3>

<h1>SURAT KETERANGAN KEMATIAN</h1>
<h1>NO : ...........................................</h1>
    <hr>
<table width="600" border="0">
<tr>
        <td> Pemerintah Desa / Kelurahan </td>
        <td>: <?php echo format_kelurahan($pemohon->kelurahan) ?></td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>: <?php echo $pemohon->kecamatan ?></td>
    </tr>
    <tr>
        <td>Kabupaten / Kota</td>
        <td>: <?php echo $pemohon->kabupaten ?></td>
    </tr>
    <tr>
        <td>Kode Wilayah </td>
        <td>:
            </td>
    </tr>
    <tr>
        <td>Nama Kepala Keluarga </td>
        <td>: <?php echo $pemohon->nama_kep ?></td>
    </tr>
    <tr>
        <td>Nomor Kartu Keluarga </td>
        <td>: <?php echo $pemohon->no_kk ?></td>
    </tr>
    <tr>
        <td colspan="0"><h2> JENAZAH</h2></td>
    </tr>
    <tr>
        <td>Nik </td>
        <td>:  <?php echo $pemohon->nik_jenazah ?></td>
    </tr>
    <tr>
        <td>Nama </td>
        <td>:  <?php echo $pemohon->nama_jenazah ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin </td>
        <td>:  <?php echo $pemohon->jenkel_jenazah ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir/ Umur </td>
        <td>:
            <?php echo format_hari_tanggal( $pemohon->tanggal_lahir_jenazah) ?> / Umur : <?php echo $pemohon->umur_jenazah?></td>
    </tr>
    <tr>
        <td>Tempat Lahir </td>
        <td>:
             <?php echo $pemohon->tempat_lahir_jenazah ?></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:  <?php echo format_agama($pemohon->agama_jenazah) ?></td>
    </tr>
    <tr>
        <td>Pekerjaan </td>
        <td>:  <?php echo format_pekerjaan($pemohon->pekerjaan_jenazah) ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:  <?php echo $pemohon->alamat_jenazah ?></td>
    </tr>
    <tr>
        <td>Tanggal Kematian</td>
        <td>:  <?php echo format_tanggal($pemohon->tanggal_kematian) ?></td>
    </tr>
    <tr>
        <td>Pukul</td>
        <td>:  <?php echo $pemohon->pukul_kematian ?></td>
    </tr>
    <tr>
        <td>Sebab Kematian </td>
        <td>:  <?php echo format_sebab_kematian($pemohon->sebab_kematian )?></td>
    </tr>
    <tr>
        <td>Yang Menerangkan </td>
        <td>:  <?php echo format_yang_menerangkan($pemohon->yang_menerangkan) ?></td>
    </tr>
    <tr>
        <td colspan="1"><h2>AYAH</h2></td>
    </tr>
    <tr>
    <td>NIK </td>
        <td>:  <?php echo $pemohon->nik_ayah ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap </td>
        <td>:  <?php echo $pemohon->nama_ayah ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir Umur</td>
        <td>:  <?php echo format_tanggal($pemohon->tanggal_lahir_ayah) ?> Umur : <?php echo $pemohon->umur_ayah?> </td>
    </tr>
    <tr>
        <td>Pekerjaan </td>
        <td>:  <?php echo format_pekerjaan($pemohon->pekerjaan_ayah)?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $pemohon->alamat_ayah ?> </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>: Desa/ Kelurahan : <?php echo $pemohon->kelurahan_ayah?>. Kecamatan : <?php echo $pemohon->kecamatan_ayah?>. Kabupaten : <?php echo $pemohon->kabupaten_ayah?>. Provinsi : <?php echo $pemohon->provinsi_ayah ?></td>
    </tr>
    <tr>
        <td colspan="1"><h2>IBU </h2></td>
    </tr>
    <tr>
        <td>NIK </td>
        <td>:  <?php echo $pemohon->nik_ibu ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap </td>
        <td>:  <?php echo $pemohon->nama_ibu ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir Umur</td>
        <td>:  <?php echo format_tanggal($pemohon->tanggal_lahir_ibu)?> / Umur : <?php echo $pemohon->umur_ibu ?></td>
    </tr>
    <tr>
        <td>Pekerjaan </td>
        <td>:  <?php echo format_pekerjaan($pemohon->pekerjaan_ibu)?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $pemohon->alamat_ibu?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_ibu?>. Kecamatan : <?php echo $pemohon->kecamatan_ibu?>. Kabupaten : <?php echo $pemohon->kabupaten_ibu?>. Provinsi : <?php echo $pemohon->provinsi_ibu ?></td>
    </tr>
    
    <tr>
      <td colspan="1"><h2>Pelapor</h2></td>
    </tr>
    <tr>
    <td>NIK</td>
        <td>:  <?php echo $pemohon->nik_pelapor ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap </td>
        <td>:  <?php echo $pemohon->nama_pelapor ?></td>
    </tr>
    <tr>
        <td> Tanggal Lahir / Umur</td>
        <td>: <?php echo format_tanggal($pemohon->tanggal_lahir_pelapor);?> / Umur :  <?php echo $pemohon->umur_pelapor?> </td>
    </tr>
    <tr>
        <td>Pekerjaan </td>
        <td>:  <?php echo format_pekerjaan($pemohon->pekerjaan_pelapor)?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $pemohon->alamat_pelapor ?> </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>: Desa/ Kelurahan : <?php echo $pemohon->kelurahan_pelapor?>. Kecamatan : <?php echo $pemohon->kecamatan_pelapor?>. Kabupaten : <?php echo $pemohon->kabupaten_pelapor?>. Provinsi : <?php echo $pemohon->provinsi_pelapor ?></td>
    </tr>
    <tr>
      <td colspan="2"><h2>SAKSI I</h2></td>
    </tr>
    <tr>
    <td>NIK</td>
        <td>:  <?php echo $pemohon->nik_saksi_satu ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap </td>
        <td>:  <?php echo $pemohon->nama_saksi_satu ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir / Umur</td>
        <td>: <?php echo format_tanggal($pemohon->tanggal_lahir_saksi_satu)?> / Umur : <?php echo $pemohon->umur_saksi_satu?> </td>
    </tr>
    <tr>
        <td>Pekerjaan </td>
        <td>:  <?php echo format_pekerjaan($pemohon->pekerjaan_saksi_satu)?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $pemohon->alamat_saksi_satu?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_saksi_satu?>. Kecamatan : <?php echo $pemohon->kecamatan_saksi_satu?>. Kabupaten : <?php echo $pemohon->kabupaten_saksi_satu?>. Provinsi : <?php echo $pemohon->provinsi_saksi_satu?></td>
    </tr>
     <tr>
        <td colspan="2"><h2>SAKSI II</h2></td>
    </tr>
    <tr>
    <td>NIK</td>
        <td>:  <?php echo $pemohon->nik_saksi_dua ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap </td>
        <td>:  <?php echo $pemohon->nama_saksi_dua ?> </td>>
    </tr>
    <tr>
        <td>Tanggal Lahir / Umur</td>
        <td>: <?php echo format_tanggal($pemohon->tanggal_lahir_saksi_dua)?> / Umur : <?php echo $pemohon->umur_saksi_dua?> </td>
    </tr>
    <tr>
        <td>Pekerjaan </td>
        <td>:  <?php echo format_pekerjaan($pemohon->pekerjaan_saksi_dua)?> </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $pemohon->alamat_saksi_dua?>. Desa/ Kelurahan : <?php echo $pemohon->kelurahan_saksi_dua?>. Kecamatan : <?php echo $pemohon->kecamatan_saksi_dua?>. Kabupaten : <?php echo $pemohon->kabupaten_saksi_dua?>. Provinsi : <?php echo $pemohon->provinsi_saksi_dua?></td>
    </tr>

</table>
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
            Pelapor, <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            (<?php echo $pemohon->nama_pelapor?>)
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