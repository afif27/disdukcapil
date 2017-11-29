<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Data Pe</title>
    <style type="text/css">
        h3 {text-align:center; font-size: 10px;}
        h1 {text-align:right; font-size:18px;}

        h2 {font-size:14px;}
        .tengah {text-align:center; }
        .kiri {padding-left:10px;}
        table.nilai {border-collapse: collapse;}
        table.nilai td {border: 1px solid #000000}
    </style>
</head>

<body>
<h1> F-1.21 </h1>

<table width="500" border="0">
    <tr>
        <td colspan="2"><h2>Formulir Permohonan Kartu Tanda Penduduk (KTP) Warga Negara Indonesia</h2></td>
    </tr>
    <tr>
        <td> Pemerintah Provinsi </td>
        <td>: <?php echo $pemohon->provinsi?></td>
    </tr>
    <tr>
        <td>Pemerintah Kabupaten / Kota</td>
        <td>: <?php echo $pemohon->kabupaten ?></td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>: <?php echo $pemohon->kecamatan ?></td>
    </tr>
    <tr>
        <td>Kelurahan / Desa </td>
        <td>: <?php echo format_kelurahan($pemohon->kelurahan) ?></td>
    </tr>
    <tr>
        <td>Permohonan KTP</td>
        <td>:
            <?php echo format_permohonan($pemohon->permohonan) ?></td>
    </tr>
    <tr>
        <td>No KK</td>
        <td>: <?php echo $pemohon->no_kk?></td>
    </tr>
    <tr>
        <td>NIK </td>
        <td>: <?php echo $pemohon->nik ?>  </td>
    </tr>
    <tr>
        <td> Alamat </td>
        <td>: <?php echo $pemohon->alamat ?> </td>
    </tr>
    <tr>
        <td> </td>
        <td> <table width="274" class ="nilai">
          <tr>
            <td>RT : <?php echo $pemohon->RT?> </td>
            <td>RW : <?php echo $pemohon->RW?></td>
            <td>Kode Pos : <?php echo $pemohon->kode_pos?></td>
          </tr>
        </table>
          </td>
    </tr>
</table>
<p>&nbsp;</p>
<table width="482" height="150" border="1">
  <tr>
    <th width="100" scope="col">Pas Photo (2x3) </th>
    <th width="100" scope="col">Cap Jempol </th>
    <th width="150" scope="col">Specimen Tanda Tangan </th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td height="130">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="600" border="0">
    <tr>
        <td width="200">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </td>
        <td width="200">&nbsp;</td>
        <td width="200"><br />
            Pemohon, <br>
            <br>
            <br>
            <br>
            <br>
            <br>
             (      <?php echo $pemohon->nama ?>       )
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
<p><h3> Mengetahui,</h3></p>
<table width="600" border="0">
    <tr>
        <td width="200">
            Mengetahui<br>
            Camat Tambusai, <br>
            <br>
            <br>
            <br>
            <br>
            <br> (....................................)
        </td>
        <td width="200">&nbsp;</td>
        <td width="200"><br />
            Kepala Desa / Lurah <?php echo format_kelurahan($pemohon->kelurahan) ?><br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h3>(........................................................................)</h3>
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