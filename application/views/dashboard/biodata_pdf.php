<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Data Pe</title>
    <style type="text/css">
        h1 {text-align:center; font-size:18px;}
        h2 {font-size:14px;}
        .tengah {text-align:center;	}
        .kiri {padding-left:10px;}
        table.nilai {border-collapse: collapse;}
        table.nilai td {border: 1px solid #000000}
    </style>
</head>

<body>
<h1>DATA CALON PESERTA DIDIK</h1>
<hr />
<table width="500" border="0">
    <tr>
        <td colspan="2"><h2>A. DATA PRIBADI</h2></td>
    </tr>
    <tr>
        <td>Nomor Peserta </td>
        <td>: <?php echo format_no_peserta($peserta->id) ?></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td>: <?php echo $peserta->nisn ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>: <?php echo $peserta->nama ?></td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir </td>
        <td>:
            <?php echo $peserta->tempat_lahir ?>, <?php echo format_tanggal($peserta->tanggal_lahir) ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin </td>
        <td>:
            <?php echo format_jenis_kelamin($peserta->jenis_kelamin) ?></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>: <?php echo $peserta->agama != '0' ? format_agama($peserta->agama) : format_agama($peserta->ket_agama); ?></td>
    </tr>
    <tr>
        <td>Berat Badan </td>
        <td>: <?php echo $peserta->berat_badan ?> kg </td>
    </tr>
    <tr>
        <td>Tinggi Badan </td>
        <td>: <?php echo $peserta->tinggi_badan ?> cm</td>
    </tr>
    <tr>
        <td>Golongan Darah </td>
        <td>: <?php echo $peserta->golongan_darah ?></td>
    </tr>
    <tr>
        <td>Status Anak </td>
        <td>: <?php echo format_status_anak($peserta->status_anak) ?></td>
    </tr>
    <tr>
        <td>Anak ke </td>
        <td>: <?php echo $peserta->anak_ke ?> dari <?php echo $peserta->jumlah_saudara ?> bersaudara</td>
    </tr>
    <tr>
        <td colspan="2"><h2>B. ORANG TUA</h2></td>
    </tr>
    <tr>
        <td>Nama Ayah </td>
        <td>: <?php echo $peserta->ort_nama_ayah ?></td>
    </tr>
    <tr>
        <td>Pekerjaan Ayah </td>
        <td>: <?php echo $peserta->ort_pekerjaan_ayah != '0' ? format_pekerjaan($peserta->ort_pekerjaan_ayah) : format_pekerjaan($peserta->ort_ket_pekerjaan_ayah) ?></td>
    </tr>
    <tr>
        <td>Nama Ibu </td>
        <td>: <?php echo $peserta->ort_nama_ibu ?></td>
    </tr>
    <tr>
        <td>Pekerjaan Ibu </td>
        <td>: <?php echo $peserta->ort_pekerjaan_ibu != '0' ? format_pekerjaan($peserta->ort_pekerjaan_ibu) : format_pekerjaan($peserta->ort_ket_pekerjaan_ibu) ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $peserta->ort_alamat ?></td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td>: <?php echo $peserta->ort_telepon ?></td>
    </tr>
    <tr>
        <td>Penghasilan</td>
        <td>: Rp. <?php echo format_penghasilan($peserta->ort_penghasilan) ?></td>
    </tr>
    <tr>
        <td colspan="2"><h2>C. TEMPAT TINGGAL</h2></td>
    </tr>
    <tr>
        <td>Selama Sekolah Tinggal dengan </td>
        <td>: <?php echo $peserta->tmp_tinggal_dengan != '0' ? format_tinggal($peserta->tmp_tinggal_dengan) : format_tinggal($peserta->tmp_ket_tinggal_dengan) ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $peserta->tmp_alamat ?> </td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td>: <?php echo $peserta->tmp_telepon ?></td>
    </tr>
    <tr>
        <td>Jarak Tempat Tinggal ke Sekolah </td>
        <td>: <?php echo $peserta->tmp_jarak_sekolah ?></td>
    </tr>
    <tr>
        <td>Pergi ke Sekolah dengan </td>
        <td>: <?php echo format_kendaraan($peserta->tmp_kendaraan) ?></td>
    </tr>
    <tr>
        <td colspan="2"><h2>D.  PENDIDIKAN SEBELUMNYA </h2></td>
    </tr>
    <tr>
        <td>Nama Sekolah </td>
        <td>:  <?php echo $peserta->ska_nama ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>: <?php echo $peserta->ska_status ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $peserta->ska_alamat ?></td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td>: <?php echo $peserta->ska_telepon ?></td>
    </tr>
    <tr>
        <td>Asal Kelas </td>
        <td>: <?php echo $peserta->ska_kelas ?></td>
    </tr>
    <tr>
        <td>Tahun Lulus </td>
        <td>: <?php echo $peserta->ska_tahun_lulus ?></td>
    </tr>
    <tr>
        <td>Nomor Ijazah </td>
        <td>: <?php echo $peserta->ska_no_ijazah ?></td>
    </tr>
</table>
<p>&nbsp;</p>
<table width="600" border="0">
    <tr>
        <td width="200">
            Mengetahui<br>
            Orang Tua Siswa,<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php echo $peserta->ort_nama_ayah ?>
        </td>
        <td width="200">&nbsp;</td>
        <td width="200"><br />
            Pasirian, <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php echo $peserta->nama ?>
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
<h1>NILAI RAPORT CALON PESERTA DIDIK </h1>
<hr />
<table width="410">
    <tr>
        <td width="200">Nomor Peserta </td>
        <td width="200">: <?php echo format_no_peserta($peserta->id) ?></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td>: <?php echo $peserta->nisn ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>: <?php echo $peserta->nama ?></td>
    </tr>
</table>

<p>&nbsp;</p>
<table width="573" class="nilai">
    <tr>
        <td width="40" rowspan="2" class="tengah">No</td>
        <td width="200" rowspan="2" class="kiri">Mata Pelajaran Mata Pelajaran </td>
        <td colspan="6" class="tengah">Semester</td>
    </tr>
    <tr>
        <td width="45" class="tengah">1</td>
        <td width="45" class="tengah">2</td>
        <td width="45" class="tengah">3</td>
        <td width="45" class="tengah">4</td>
        <td width="45" class="tengah">5</td>
        <td width="90" class="tengah">Rata-rata</td>
    </tr>
    <tr>
        <td class="tengah">1</td>
        <td class="kiri">Bahasa Indonesia </td>
        <td class="tengah"><?php echo $peserta->nil_bin_1 ?></td>
        <td class="tengah"><?php echo $peserta->nil_bin_2 ?></td>
        <td class="tengah"><?php echo $peserta->nil_bin_3 ?></td>
        <td class="tengah"><?php echo $peserta->nil_bin_4 ?></td>
        <td class="tengah"><?php echo $peserta->nil_bin_5 ?></td>
        <td class="tengah"><?php echo $peserta->nil_bin_rata ?></td>
    </tr>
    <tr>
        <td class="tengah">2</td>
        <td class="kiri">Bahasa Inggris </td>
        <td class="tengah"><?php echo $peserta->nil_big_1 ?></td>
        <td class="tengah"><?php echo $peserta->nil_big_2 ?></td>
        <td class="tengah"><?php echo $peserta->nil_big_3 ?></td>
        <td class="tengah"><?php echo $peserta->nil_big_4 ?></td>
        <td class="tengah"><?php echo $peserta->nil_big_5 ?></td>
        <td class="tengah"><?php echo $peserta->nil_big_rata ?></td>
    </tr>
    <tr>
        <td class="tengah">3</td>
        <td class="kiri">Matematika</td>
        <td class="tengah"><?php echo $peserta->nil_mat_1 ?></td>
        <td class="tengah"><?php echo $peserta->nil_mat_2 ?></td>
        <td class="tengah"><?php echo $peserta->nil_mat_3 ?></td>
        <td class="tengah"><?php echo $peserta->nil_mat_4 ?></td>
        <td class="tengah"><?php echo $peserta->nil_mat_5 ?></td>
        <td class="tengah"><?php echo $peserta->nil_mat_rata ?></td>
    </tr>
    <tr>
        <td class="tengah">4</td>
        <td class="kiri">IPA</td>
        <td class="tengah"><?php echo $peserta->nil_ipa_1 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ipa_2 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ipa_3 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ipa_4 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ipa_5 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ipa_rata ?></td>
    </tr>
    <tr>
        <td class="tengah">5</td>
        <td class="kiri">IPS</td>
        <td class="tengah"><?php echo $peserta->nil_ips_1 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ips_2 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ips_3 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ips_4 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ips_5 ?></td>
        <td class="tengah"><?php echo $peserta->nil_ips_rata ?></td>
    </tr>
</table>
<p>&nbsp;</p>
</body>
</html>