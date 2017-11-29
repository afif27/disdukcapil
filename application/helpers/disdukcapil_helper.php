<?php
// Konversi waktu ke : Senin, 4 Januari 2014
function format_hari_tanggal($waktu)
{
    // Senin, Selasa dst.
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];

    // Tanggal: 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan: Januari, Maret dst.
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun, 4 digit.
    $tahun = date('Y', strtotime($waktu));

    // Hasil akhir: Senin, 1 Oktober 2014
    return "$hari, $tanggal $bulan $tahun";
}

// Format tangal ke 1 Januari 1990
function format_tanggal($waktu)
{
    // Tanggal, 1-31 dst, tanpa leading zero.
    $tanggal = date('j', strtotime($waktu));

    // Bulan, Januari, Maret dst
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];

    // Tahun
    $tahun = date('Y', strtotime($waktu));

    // Senin, 12 Oktober 2014
    return "$tanggal $bulan $tahun";
}

// Format tangal ke yyyy-mm-dd
function date_to_en($tanggal)
{
    $tgl = date('Y-m-d', strtotime($tanggal));
    if ($tgl == '1970-01-01') {
        return '';
    } else {
        return $tgl;
    }
}

// Format tangal ke dd-mm-yyyy
function date_to_id($tanggal)
{
    $tgl = date('d-m-Y', strtotime($tanggal));
    if ($tgl == '01-01-1970') {        
        return '';
    } else {
        return $tgl;
    }
}


// Format nomor peserta ke 20140001
function format_no_pemohon($no)
{
    // Ambil nilai prefix dari file konfigurasi "discapil.php"
    $prefix = config_item('psb_prefix_no_pemohon');    
    $leadingzeros = '0000';
    $no_pemohon = $prefix . substr($leadingzeros, 0, (-strlen($no))) . $no;
    return $no_pemohon;
}

// Mendapatkan nilai interger no_peserta
function get_no_peserta_value($no_pemohon)
{
    return intval(substr($no_pemohon, 4, 4));
}

// Buat setiap awal kata huruf besar
function format_title_case($string)
{
    return ucwords($string);
}

function format_pekerjaan($pekerjaan)
{
    if ($pekerjaan == '1') {
        return 'Belum/Tidak Bekerja';
    } elseif ($pekerjaan == '2') {
        return 'Mengurus Rumah Tangga';
    } elseif ($pekerjaan == '3') {
        return 'Pelajar/Mahasiswa';
    } elseif ($pekerjaan == '4') {
        return 'Pensiunan';
    } elseif ($pekerjaan == '5') {
        return 'Pegawai Negeri Sipil (PNS)';
    } elseif ($pekerjaan == '6') {
        return 'TNI';
    } elseif ($pekerjaan == '7') {
        return 'Polri';
    } elseif ($pekerjaan == '8') {
        return 'Wiraswasta';
    } elseif ($pekerjaan == '9') {
        return 'Petani';
    } else {
        return ucwords($pekerjaan);
    }
}

function format_status_kawin($status_kawin)
{
    if ($status_kawin == '1') {
        return 'Belum Kawin';
    } elseif ($status_kawin == '2') {
        return 'Kawin';
    } elseif ($status_kawin == '3') {
        return 'Cerai Hidup ';
    } elseif ($status_kawin == '4') {
        return 'Cerai Mati';
    } else {
        return ucwords($status_kawin);
    }
}


function format_kelurahan($kelurahan)
{
    if ($kelurahan== '0') {
        return 'lainya';
    } elseif ($kelurahan == '1') {
        return 'Tambusai Tengah';
    } elseif ($kelurahan == '2') {
        return 'Tambusai Barat';
    } elseif ($kelurahan== '3') {
        return 'Tambusai Timur';
    } elseif ($kelurahan== '4') {
        return 'Batar';
    } elseif ($kelurahan == '5') {
        return 'TaliKumain';
    } elseif ($kelurahan == '6') {
        return 'Rantau Panjang';
    } elseif ($kelurahan == '7') {
        return 'Sungai Kumango';
    } elseif ($kelurahan == '8') {
        return 'Batang Kumu';
    } elseif ($kelurahan == '9') {
        return 'Sialang Rindang';
    } elseif ($kelurahan == '10') {
        return 'Suka Maju';
    } elseif ($kelurahan == '11') {
        return 'Tingkok';
    } elseif ($kelurahan == '12') {
        return 'Lubuk Soting';
    } else {
        return ucwords($kelurahan);
    }
}

function format_gol_darah($gol_darah)
{
    if ($gol_darah== '1') {
        return 'A';
    } elseif ($gol_darah == '2') {
        return 'B';
    } elseif ($gol_darah == '3') {
        return 'AB';
    } elseif ($gol_darah == '4') {
        return 'O';
    } elseif ($gol_darah== '5') {
        return 'A+';
    } elseif ($gol_darah == '6') {
        return 'A-';
    } elseif ($gol_darah == '7') {
        return 'B+';
    } elseif ($gol_darah == '8') {
        return 'B-';
    } elseif ($gol_darah == '9') {
        return 'AB+';
    } elseif ($gol_darah == '10') {
        return 'AB-';
    } elseif ($gol_darah == '11') {
        return 'O+';
    } elseif ($gol_darah == '12') {
        return 'O-';
    } elseif ($gol_darah == '13') {
        return 'Tidak Tahu';
    } else {
        return ucwords($gol_darah);
    }
}

function format_cacat($cacat)
{
    if ($cacat== '1') {
        return 'Cacat Fisik';
    } elseif ($cacat == '2') {
        return 'Cacat Netra/ Buta';
    } elseif ($cacat == '3') {
        return 'Cacat Rungu/Wicara';
    } elseif ($cacat == '4') {
        return 'Cacat Mental / Jiwa';
    } elseif ($cacat== '5') {
        return 'cacat Fisik dan mental';
    } elseif ($cacat == '6') {
        return 'cacat lainya';
        } else {
        return ucwords($cacat);
    }
}

function format_status_hubungan($status_hubungan)
{
    if ($status_hubungan== '1') {
        return 'Kepala Keluarga';
    } elseif ($status_hubungan == '2') {
        return 'Suami';
    } elseif ($status_hubungan == '3') {
        return 'Istri';
    } elseif ($status_hubungan == '4') {
        return 'Anak';
    } elseif ($status_hubungan== '5') {
        return 'Menantu';
    } elseif ($status_hubungan == '6') {
        return 'Cucu';
    } elseif ($status_hubungan == '7') {
        return 'Orang Tua';
    } elseif ($status_hubungan == '8') {
        return 'Mertua';
    } elseif ($status_hubungan == '9') {
        return 'Famili Lain';
    } elseif ($status_hubungan == '10') {
        return 'Pembantu';
    } elseif ($status_hubungan == '11') {
        return 'Lainya';
    } else {
        return ucwords($status_hubungan);
    }
}

function format_pendidikan_terakhir($pendidikan_terakhir)
{
    if ($pendidikan_terakhir == '1') {
        return 'Tidak/ Belum Sekolah';
    } elseif ($pendidikan_terakhir == '2') {
        return 'Belum Tamat SD / Sederajat';
    } elseif ($pendidikan_terakhir == '3') {
        return 'Tamat SD / Sederajat';
    } elseif ($pendidikan_terakhir == '4') {
        return 'SLTP / Sederajat';
    } elseif ($pendidikan_terakhir== '5') {
        return 'SLTA / Sederajat';
    } elseif ($pendidikan_terakhir == '6') {
        return 'Diploma I/II';
    } elseif ($pendidikan_terakhir == '7') {
        return 'Akademi/ Diploma III Sarjana Muda';
    } elseif ($pendidikan_terakhir == '8') {
        return 'Diploma IV / Strata I';
    } elseif ($pendidikan_terakhir == '9') {
        return 'Strata II';
    } elseif ($pendidikan_terakhir == '10') {
        return 'Strata III';
    } else {
        return ucwords($pendidikan_terakhir);
    }
}
function format_jenis_kelamin($kelamin)
{
    if ($kelamin == 'L') {
        return 'Laki-laki';
    } else {
        return 'Perempuan';
    }
}
function format_akta($akta)
{
    if ($akta == '1') {
        return 'Tidak Ada';
    } else {
        return 'Ada';
    }
}

function format_fisik($fisik)
{
    if ($fisik == '1') {
        return 'Tidak Ada';
    } else {
        return 'Ada';
    }
}
function format_kewarganegaraan($kewarganegaraan)
{
    if ($kewarganegaraan== '1') {
        return 'WNI';
    } else {
        return 'WNA';
    }
}

function format_sebab_kematian($kematian)
{
    if ($kematian == '1'){
        return 'Sakit Biasa / TUA';
    } elseif ($kematian == '2'){
        return 'Wabah Penyakit';  
    } elseif ($kematian =='3'){
        return 'Kecelakaan';
    } elseif ($kematian == '4'){
        return 'Kriminalitas';
    } elseif ($kematian =='5'){
        return 'Bunuh Diri ';
    } elseif ($kematian =='6'){
        return 'Lainya';
    } else {
        return ucwords($kematian);
    }
}

function format_yang_menerangkan($menerangkan)
{
    if ($menerangkan == '1'){
        return 'Dokter';
    } elseif ($menerangkan == '2'){
        return 'Tenaga Kesehatan';
    } elseif ($menerangkan =='3'){
        return 'Kepolisian';
    } elseif ($menerangkan=='4'){
        return 'Lainya';
    } else {
        return ucwords($menerangkan);
    }
}

function format_keturunan($keturunan)
{
    if ($keturunan== '1') {
        return 'Eropa';
    } elseif ($keturunan== '2') {
        return 'Cina / Timur Asing Lainya';
    } elseif ($keturunan == '3') {
        return 'Indonesia';
    } elseif ($keturunan == '4') {
        return 'Indonesia Nasrani';
    } elseif ($keturunan == '5') {
        return 'Lainya';
    } else {
        return ucwords($keturunan);
    }
}
function format_permohonan($permohonan)
{
    if ($permohonan == 'A') {
        return 'Baru';
    } elseif ($permohonan == 'B'){
        return 'Perpanjangan';
    } elseif ($permohonan == 'C') {
        return 'Penggantian';

    }
}

function format_status_anak($status)
{
    if ($status == '0') {
        return 'Angkat';
    } else {
        return 'Kandung';
    }
}

function format_status_sekolah($status)
{
    if ($status == '0') {
        return 'Swasta';
    } else {
        return 'Negeri';
    }
}

function format_status_pendaftaran($status)
{
    if ($status == '0') {
        return 'Mundur';
    } else {
        return 'Aktif';
    }
}

function format_status_biodata($status)
{
    if ($status == '0') {
        return 'Belum Lengkap';
    } else {
        return 'Lengkap';
    }
}
function format_status_ktp($status)
{
    if ($status == '0') {
        return 'Belum Lengkap';
    } else {
        return 'Lengkap';
    }
}

function format_status_seleksi($status)
{
    if ($status == '0') {
        return 'Tidak Lulus';
    } else {
        return 'Lulus';
    }
}

function format_status_verifikasi($status)
{
    if ($status == '0') {
        return 'Belum';
    } else {
        return 'Sudah';
    }
}

function format_agama($agama)
{
    if ($agama == '0') {
        return 'Lainnya';
    } elseif ($agama == '1') {
        return 'Islam';
    } elseif ($agama == '2') {
        return 'Katolik';
    } elseif ($agama == '3') {
        return 'Protestan';
    } elseif ($agama == '4') {
        return 'Hindu';
    } elseif ($agama == '5') {
        return 'Budha';
    } elseif ($agama == '6') {
        return 'Konghucu';
    } else {
        return ucwords($agama);
    }
}
function format_tempat_lahir($tmp_lahir)
{
   if($tmp_lahir == '1'){
    return 'RS/RB';
   } elseif ($tmp_lahir =='2'){
    return 'Puskesmas';
   } elseif ($tmp_lahir =='3'){
    return 'Polindes';
   }elseif ($tmp_lahir =='4'){
    return 'Rumah';
   }elseif ($tmp_lahir =='5'){
    return 'lainnya';
   } else {
    return ucwords($tmp_lahir);
   }
 }
 function format_jenis_kelahiran($jenis_lahir)
{
   if($jenis_lahir == '1'){
    return 'Kembar 1';
   } elseif ($jenis_lahir =='2'){
    return 'Kembar 2';
   } elseif ($jenis_lahir =='3'){
    return 'Kembar 3';
   }elseif ($jenis_lahir =='4'){
    return 'Kembar 4';
   }elseif ($jenis_lahir =='5'){
    return 'Lainya';
   } else {
    return ucwords($jenis_lahir);
   }
 }
 function format_penolong_kelahiran($penolong_kelahiran)
{
   if($penolong_kelahiran == '1'){
    return 'Dokter';
   } elseif ($penolong_kelahiran =='2'){
    return 'Bidan/Perawat';
   } elseif ($penolong_kelahiran =='3'){
    return 'Dukun';
   }elseif ($penolong_kelahiran =='4'){
    return 'Lainya';
   } else {
    return ucwords($jenis_lahir);
   }
 }
function format_tinggal($ket)
{
    if ($ket == '0') {
        return 'Lainnya';
    } elseif ($ket == '1') {
        return 'Orang Tua';
    } elseif ($ket == '2') {
        return 'Kakak';
    } elseif ($ket == '3') {
        return 'Paman / Bibi';
    } elseif ($ket == '4') {
        return 'Kakek / Nenek';
    } else {
        return ucwords($ket);
    }
}

function format_penghasilan($penghasilan)
{
    return number_format($penghasilan, 2, ',', '.' );
}

function format_is_blokir($status)
{
    if ($status == '1') {
        return 'BLOKIR';
    } else {
        return 'AKTIF';
    }
}