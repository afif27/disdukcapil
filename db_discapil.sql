-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 10:04 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_discapil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akmat`
--

CREATE TABLE IF NOT EXISTS `tb_akmat` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nik_pemohon` int(20) NOT NULL,
  `kelurahan` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `nama_kep` varchar(25) NOT NULL,
  `no_kk` int(20) NOT NULL,
  `nik_jenazah` int(25) NOT NULL,
  `nama_jenazah` varchar(25) NOT NULL,
  `jenkel_jenazah` enum('P','L') NOT NULL,
  `tanggal_lahir_jenazah` date NOT NULL,
  `umur_jenazah` int(3) NOT NULL,
  `tempat_lahir_jenazah` varchar(20) NOT NULL,
  `agama_jenazah` enum('1','2','3','4','5','6') NOT NULL,
  `pekerjaan_jenazah` enum('1','2','3','4','6','7','8') NOT NULL,
  `alamat_jenazah` varchar(50) NOT NULL,
  `kewarganegaraan_jenazah` enum('1','2') NOT NULL,
  `keturunan_jenazah` enum('1','2','3','4','5') NOT NULL,
  `kebangsaan_jenazah` varchar(20) NOT NULL,
  `anak_ke` varchar(3) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `pukul_kematian` int(5) NOT NULL,
  `sebab_kematian` enum('1','2','3','4','5','6') NOT NULL,
  `tempat_kematian` varchar(25) NOT NULL,
  `yang_menerangkan` enum('1','2','3','4') NOT NULL,
  `nik_ayah` int(20) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `umur_ayah` int(3) NOT NULL,
  `pekerjaan_ayah` enum('1','2','3','4','5','7','8') NOT NULL,
  `alamat_ayah` varchar(50) NOT NULL,
  `kelurahan_ayah` varchar(20) NOT NULL,
  `kecamatan_ayah` varchar(20) NOT NULL,
  `kabupaten_ayah` varchar(20) NOT NULL,
  `provinsi_ayah` varchar(20) NOT NULL,
  `nik_ibu` int(20) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `umur_ibu` int(3) NOT NULL,
  `pekerjaan_ibu` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `kelurahan_ibu` varchar(20) NOT NULL,
  `kecamatan_ibu` varchar(20) NOT NULL,
  `kabupaten_ibu` varchar(20) NOT NULL,
  `provinsi_ibu` varchar(20) NOT NULL,
  `nik_pelapor` int(20) NOT NULL,
  `nama_pelapor` varchar(25) NOT NULL,
  `tanggal_lahir_pelapor` date NOT NULL,
  `umur_pelapor` int(3) NOT NULL,
  `pekerjaan_pelapor` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `alamat_pelapor` varchar(50) NOT NULL,
  `kelurahan_pelapor` varchar(20) NOT NULL,
  `kecamatan_pelapor` varchar(20) NOT NULL,
  `kabupaten_pelapor` varchar(20) NOT NULL,
  `provinsi_pelapor` varchar(20) NOT NULL,
  `nik_saksi_satu` int(20) NOT NULL,
  `nama_saksi_satu` varchar(25) NOT NULL,
  `tanggal_lahir_saksi_satu` date NOT NULL,
  `umur_saksi_satu` int(3) NOT NULL,
  `pekerjaan_saksi_satu` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `alamat_saksi_satu` varchar(50) NOT NULL,
  `kelurahan_saksi_satu` varchar(20) NOT NULL,
  `kecamatan_saksi_satu` varchar(20) NOT NULL,
  `kabupaten_saksi_satu` varchar(20) NOT NULL,
  `provinsi_saksi_satu` varchar(20) NOT NULL,
  `nik_saksi_dua` int(20) NOT NULL,
  `nama_saksi_dua` varchar(25) NOT NULL,
  `tanggal_lahir_saksi_dua` date NOT NULL,
  `umur_saksi_dua` int(3) NOT NULL,
  `pekerjaan_saksi_dua` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `alamat_saksi_dua` varchar(50) NOT NULL,
  `kelurahan_saksi_dua` varchar(20) NOT NULL,
  `kecamatan_saksi_dua` varchar(20) NOT NULL,
  `kabupaten_saksi_dua` varchar(20) NOT NULL,
  `provinsi_saksi_dua` varchar(20) NOT NULL,
  `status_akmat` enum('0','1') NOT NULL DEFAULT '0',
  `status_verifikasi` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_akmat`
--

INSERT INTO `tb_akmat` (`id`, `nik_pemohon`, `kelurahan`, `kecamatan`, `kabupaten`, `nama_kep`, `no_kk`, `nik_jenazah`, `nama_jenazah`, `jenkel_jenazah`, `tanggal_lahir_jenazah`, `umur_jenazah`, `tempat_lahir_jenazah`, `agama_jenazah`, `pekerjaan_jenazah`, `alamat_jenazah`, `kewarganegaraan_jenazah`, `keturunan_jenazah`, `kebangsaan_jenazah`, `anak_ke`, `tanggal_kematian`, `pukul_kematian`, `sebab_kematian`, `tempat_kematian`, `yang_menerangkan`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `umur_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `kelurahan_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `provinsi_ayah`, `nik_ibu`, `nama_ibu`, `tanggal_lahir_ibu`, `umur_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `kelurahan_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `provinsi_ibu`, `nik_pelapor`, `nama_pelapor`, `tanggal_lahir_pelapor`, `umur_pelapor`, `pekerjaan_pelapor`, `alamat_pelapor`, `kelurahan_pelapor`, `kecamatan_pelapor`, `kabupaten_pelapor`, `provinsi_pelapor`, `nik_saksi_satu`, `nama_saksi_satu`, `tanggal_lahir_saksi_satu`, `umur_saksi_satu`, `pekerjaan_saksi_satu`, `alamat_saksi_satu`, `kelurahan_saksi_satu`, `kecamatan_saksi_satu`, `kabupaten_saksi_satu`, `provinsi_saksi_satu`, `nik_saksi_dua`, `nama_saksi_dua`, `tanggal_lahir_saksi_dua`, `umur_saksi_dua`, `pekerjaan_saksi_dua`, `alamat_saksi_dua`, `kelurahan_saksi_dua`, `kecamatan_saksi_dua`, `kabupaten_saksi_dua`, `provinsi_saksi_dua`, `status_akmat`, `status_verifikasi`, `created_at`, `updated_at`) VALUES
(1, 0, '5', 'Kecamatan Tambusai', 'Kabupaten Rokan Hulu', 'jhony', 1, 1, 'hamsyong', 'L', '2014-06-17', 34, '34', '2', '6', 'sdsd', '1', '1', 's', '2', '2015-12-30', 8, '1', 'rumah', '1', 3, 'qwe', '2000-02-01', 23, '4', 'qw', 'ww', 'we', 'ewe', 'wew', 2, 'a', '2010-02-03', 2, '6', 'cxcxc', 'sdasdsd', 'ddcxx', 'xcx', 'dxcx', 3, 'dfdds', '2014-06-10', 3, '3', 'cxcxc', 'sdsdsd', 's', 's', 'e', 1, 'd', '2010-02-09', 2, '5', 'sa', 'as', 'asa', 'sas', 'asa', 1, 'asas', '2015-07-15', 23, '3', 'sdsd', 'dsd', 'we', 'xcxc', 'ssd', '1', '0', '2015-12-23 04:37:14', '2016-01-03 03:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktal`
--

CREATE TABLE IF NOT EXISTS `tb_aktal` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nik_pemohon` int(20) NOT NULL,
  `kelurahan` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `nama_kep` varchar(25) NOT NULL,
  `no_kk` int(20) NOT NULL,
  `nama_anak` varchar(25) NOT NULL,
  `jenkel_anak` enum('P','L') NOT NULL,
  `tempat_dilahirkan` enum('1','2','3','4','5') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pukul_lahir` varchar(6) NOT NULL,
  `jenis_kelahiran` enum('1','2','3','4','5') NOT NULL,
  `kelahiran_ke` int(2) NOT NULL,
  `penolong_kelahiran` enum('1','2','3','4') NOT NULL,
  `berat_bayi` int(3) NOT NULL,
  `panjang_bayi` int(3) NOT NULL,
  `nik_ibu` int(20) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `umur_ibu` int(3) NOT NULL,
  `pekerjaan_ibu` enum('1','2','3','4','5','7') NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `kelurahan_ibu` varchar(20) NOT NULL,
  `kecamatan_ibu` varchar(20) NOT NULL,
  `kabupaten_ibu` varchar(20) NOT NULL,
  `provinsi_ibu` varchar(20) NOT NULL,
  `kewarganegaraan_ibu` enum('1','2') NOT NULL,
  `kebangsaan_ibu` varchar(20) NOT NULL,
  `tanggal_kawin` date NOT NULL,
  `nik_ayah` int(20) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `umur_ayah` int(3) NOT NULL,
  `pekerjaan_ayah` enum('1','2','3','4','5','7') NOT NULL,
  `alamat_ayah` varchar(50) NOT NULL,
  `kelurahan_ayah` varchar(20) NOT NULL,
  `kecamatan_ayah` varchar(20) NOT NULL,
  `kabupaten_ayah` varchar(20) NOT NULL,
  `provinsi_ayah` varchar(20) NOT NULL,
  `kewarganegaraan_ayah` enum('1','2') NOT NULL,
  `kebangsaan_ayah` varchar(20) NOT NULL,
  `nik_pelapor` int(20) NOT NULL,
  `nama_pelapor` varchar(25) NOT NULL,
  `umur_pelapor` int(3) NOT NULL,
  `jenkel_pelapor` enum('P','L') NOT NULL,
  `pekerjaan_pelapor` enum('1','2','3','4','5','7') NOT NULL,
  `alamat_pelapor` varchar(50) NOT NULL,
  `kelurahan_pelapor` varchar(20) NOT NULL,
  `kecamatan_pelapor` varchar(20) NOT NULL,
  `kabupaten_pelapor` varchar(20) NOT NULL,
  `provinsi_pelapor` varchar(20) NOT NULL,
  `nik_saksi_satu` int(20) NOT NULL,
  `nama_saksi_satu` varchar(25) NOT NULL,
  `umur_saksi_satu` int(3) NOT NULL,
  `jenkel_saksi_satu` enum('P','L') NOT NULL,
  `pekerjaan_saksi_satu` enum('1','2','3','4','5','7') NOT NULL,
  `alamat_saksi_satu` varchar(50) NOT NULL,
  `kelurahan_saksi_satu` varchar(20) NOT NULL,
  `kecamatan_saksi_satu` varchar(20) NOT NULL,
  `kabupaten_saksi_satu` varchar(20) NOT NULL,
  `provinsi_saksi_satu` varchar(20) NOT NULL,
  `nik_saksi_dua` int(20) NOT NULL,
  `nama_saksi_dua` varchar(25) NOT NULL,
  `umur_saksi_dua` int(3) NOT NULL,
  `jenkel_saksi_dua` enum('P','L') NOT NULL,
  `pekerjaan_saksi_dua` enum('1','2','3','4','5','7') NOT NULL,
  `alamat_saksi_dua` varchar(50) NOT NULL,
  `kelurahan_saksi_dua` varchar(20) NOT NULL,
  `kecamatan_saksi_dua` varchar(20) NOT NULL,
  `kabupaten_saksi_dua` varchar(20) NOT NULL,
  `provinsi_saksi_dua` varchar(20) NOT NULL,
  `status_aktal` enum('0','1') NOT NULL DEFAULT '0',
  `status_verifikasi` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_aktal`
--

INSERT INTO `tb_aktal` (`id`, `nik_pemohon`, `kelurahan`, `kecamatan`, `kabupaten`, `nama_kep`, `no_kk`, `nama_anak`, `jenkel_anak`, `tempat_dilahirkan`, `tempat_lahir`, `tanggal_lahir`, `pukul_lahir`, `jenis_kelahiran`, `kelahiran_ke`, `penolong_kelahiran`, `berat_bayi`, `panjang_bayi`, `nik_ibu`, `nama_ibu`, `tanggal_lahir_ibu`, `umur_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `kelurahan_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `provinsi_ibu`, `kewarganegaraan_ibu`, `kebangsaan_ibu`, `tanggal_kawin`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `umur_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `kelurahan_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `provinsi_ayah`, `kewarganegaraan_ayah`, `kebangsaan_ayah`, `nik_pelapor`, `nama_pelapor`, `umur_pelapor`, `jenkel_pelapor`, `pekerjaan_pelapor`, `alamat_pelapor`, `kelurahan_pelapor`, `kecamatan_pelapor`, `kabupaten_pelapor`, `provinsi_pelapor`, `nik_saksi_satu`, `nama_saksi_satu`, `umur_saksi_satu`, `jenkel_saksi_satu`, `pekerjaan_saksi_satu`, `alamat_saksi_satu`, `kelurahan_saksi_satu`, `kecamatan_saksi_satu`, `kabupaten_saksi_satu`, `provinsi_saksi_satu`, `nik_saksi_dua`, `nama_saksi_dua`, `umur_saksi_dua`, `jenkel_saksi_dua`, `pekerjaan_saksi_dua`, `alamat_saksi_dua`, `kelurahan_saksi_dua`, `kecamatan_saksi_dua`, `kabupaten_saksi_dua`, `provinsi_saksi_dua`, `status_aktal`, `status_verifikasi`, `created_at`, `updated_at`) VALUES
(1, 1243546576, '2', 'Kecamatan Tambusai', 'Kabupaten Rokan Hulu', 'afif', 1, 'asu', 'L', '3', 'kampung', '2010-02-09', '20.30', '1', 2, '1', 21, 23, 1, 'asasdadasd', '2010-02-09', 23, '2', 's', 'sf', 'g', 'r', 'y', '1', 'i', '1980-02-12', 123, '234543', '1994-06-14', 23, '5', 'sdsd', 'cssdsdsds', 'sdsdsdd', 'sdsd', 'dsdsdsd', '1', 'sdsd', 45, 'sf', 54, 'L', '2', 'sdss', 'g', 'd', 'h', 'y', 324222, 'er', 40, 'L', '2', 'sdf', 'sda', 'sdsd', 'sdsd', 'sdsd', 345654, 'sds', 45, 'L', '7', 'cxcx', 'sdsd', 'sdsd', 'sdsd', 'sdsd', '1', '1', '2015-12-22 14:06:02', '2016-03-04 16:09:54'),
(3, 0, '3', 'Kecamatan Tambusai', 'Kabupaten Rokan Hulu', 'as', 123, 'as', 'L', '3', 'as', '0000-00-00', '20', '2', 2, '1', 22, 23, 123, 'qw', '0000-00-00', 23, '3', 'asdadsda', 'adsads', 'asdads', 'dsdffaddfsds', 'sadsads', '1', 'asdads', '0000-00-00', 12334334, 'qwe', '0000-00-00', 23, '3', 'asdasdadsdasd', 'asasd', 'asdasd', 'asdasdsd', 'asdasda', '1', 'asdasdasd', 1232, 'asdad', 34, 'L', '3', 'asadasdas', 'asdads', 'xzsadasd', 'adcad', 'sdas', 123, 'asdad', 50, 'L', '3', 'asdad', 'asasd', 'asddasd', 'aasdsd', 'aasadsdad', 1232323, 'cxcxcx', 23, 'L', '2', 'sdsdsfssdsd', 'dsadsd', 'asasa', 'sd', 'sasas', '1', '1', '2015-12-22 15:11:11', '2015-12-22 15:11:11'),
(4, 0, '3', 'Kecamatan Tambusai', 'Kabupaten Rokan Hulu', 'as', 12, 'as', 'L', '2', 'sad', '1994-06-21', '12.30', '1', 12, '2', 12, 12, 121212, '12', '0000-00-00', 12, '5', '12', '12', '12', '12', '12', '1', '12', '0000-00-00', 12, 'qwq', '0000-00-00', 23, '2', 'qsqweewq', 'qweq', 'wqeqwe', 'weqwe', 'qweq', '1', 'qweq', 123, 'qe', 23, 'L', '3', 'dasd', 'asdsads', 'asda', 'asd', 'sddad', 123, 'asd', 34, 'L', '4', 'qsdqd', 'qwe', 'qweqe', 'weq', 'qwewq', 1234, 'ads', 20, 'L', '4', 'sdsd', 'sdasda', 'asdsa', 'asda', 'asdas', '1', '1', '2015-12-22 15:17:37', '2015-12-22 15:17:37'),
(5, 1243546576, '2', 'Kecamatan Tambusai', 'Kabupaten Rokan Hulu', 'afif', 1, 'as', 'L', '3', 'kampung', '2010-02-09', '20.30', '1', 2, '1', 21, 23, 1, 'asasdadasd', '1993-02-17', 23, '2', 's', 'sf', 'g', 'r', 'y', '1', 'i', '1980-02-12', 123, '234543', '1994-06-14', 23, '5', 'sdsd', 'cssdsdsds', 'sdsdsdd', 'sdsd', 'dsdsdsd', '1', 'sdsd', 45, 'sf', 54, 'L', '2', 'sdss', 'g', 'd', 'h', 'y', 324222, 'er', 40, 'L', '2', 'sdf', 'sda', 'sdsd', 'sdsd', 'sdsd', 345654, 'sds', 45, 'L', '7', 'cxcx', 'sdsd', 'sdsd', 'sdsd', 'sdsd', '1', '0', '2015-12-22 17:11:32', '2015-12-22 17:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE IF NOT EXISTS `tb_kk` (
  `id` char(26) NOT NULL,
  `kelurahan` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `dusun` varchar(25) NOT NULL,
  `nik_pemohon` char(20) NOT NULL,
  `nama_kep_laki` varchar(25) NOT NULL,
  `nik_kep_laki` int(15) NOT NULL,
  `tanggal_lahir_kep_laki` date NOT NULL,
  `alamat_kep_laki` varchar(25) NOT NULL,
  `nama_kep_perempuan` varchar(25) NOT NULL,
  `nik_kep_perempuan` int(15) NOT NULL,
  `tanggal_lahir_kep_perempuan` date NOT NULL,
  `alamat_kep_perempuan` varchar(50) NOT NULL,
  `nama_laki_laki` varchar(25) NOT NULL,
  `nik_laki_laki` int(15) NOT NULL,
  `tanggal_lahir_laki` date NOT NULL,
  `alamat_laki_laki` varchar(50) NOT NULL,
  `nama_perempuan` varchar(25) NOT NULL,
  `nik_perempuan` int(15) NOT NULL,
  `tanggal_lahir_perempuan` date NOT NULL,
  `alamat_perempuan` varchar(50) NOT NULL,
  `no_surat_nikah` varchar(25) NOT NULL,
  `status_kk` enum('0','1') NOT NULL DEFAULT '0',
  `status_verifikasi` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id`, `kelurahan`, `dusun`, `nik_pemohon`, `nama_kep_laki`, `nik_kep_laki`, `tanggal_lahir_kep_laki`, `alamat_kep_laki`, `nama_kep_perempuan`, `nik_kep_perempuan`, `tanggal_lahir_kep_perempuan`, `alamat_kep_perempuan`, `nama_laki_laki`, `nik_laki_laki`, `tanggal_lahir_laki`, `alamat_laki_laki`, `nama_perempuan`, `nik_perempuan`, `tanggal_lahir_perempuan`, `alamat_perempuan`, `no_surat_nikah`, `status_kk`, `status_verifikasi`, `created_at`, `updated_at`) VALUES
('0', '1', 'dsdsdsd', '678954343433333', 'ssddsd', 1231323132, '2004-06-21', 'sadsdadasdad', 'qsdasdadsad', 2147483647, '2005-06-21', 'dadasdasd', 'sdadasdsadada', 123123123, '2004-06-21', '', 'adadsdsad', 123123123, '2010-02-16', '', 'weqe232', '1', '0', '2016-03-04 16:14:26', '2016-03-04 16:14:26'),
('121323232323132', '1', 'bahagia', '121323232323132', 'saipul jamil', 2147483647, '2013-05-12', 'sasdsdasdsdad', 'asdsasadsdad', 2123212123, '2013-05-12', 'dsadadsdad', 'adadasdsadad', 232331312, '2013-05-12', '', 'daddadad', 1212132, '2013-05-13', '', '34123231', '1', '0', '2016-03-04 16:18:41', '2016-03-04 16:22:41'),
('4', '5', 'sei gelinggang', '1243546576', 'Asriadi', 909303923, '0000-00-00', 'Talikumain', 'rusdy', 838383933, '0000-00-00', '0', 'hendri', 2147483647, '0000-00-00', '', 'jesika', 2147483647, '0000-00-00', '', '837922', '1', '0', '2016-01-14 05:58:26', '2016-01-14 05:58:26'),
('6', '3', 'adsads', '2147483647', 'adasads', 12313123, '1990-06-19', 'qdqdqwdqdwd', 'qee13', 12132, '2010-02-02', '0', 'asdasdsd', 123123, '1990-06-19', '', 'deweqeqw', 12313123, '2010-02-09', '', '2131231323', '1', '0', '2016-03-04 09:06:21', '2016-03-04 09:06:21'),
('7', '3', 'asdadsdad', '121231232313122', 'asdadsadsd', 1323123132, '1990-02-06', 'dasdadsad', 'adsdads', 2147483647, '2016-03-04', '0', 'sdadasdd', 12313123, '1990-02-06', '', 'sadada', 2147483647, '2013-05-06', '', '312323dsdsd', '1', '0', '2016-03-04 15:44:19', '2016-03-04 15:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_ktp` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(25) NOT NULL DEFAULT 'Provinsi Riau',
  `kabupaten` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL DEFAULT 'Kecamatan Tambusai',
  `kelurahan` enum('0','1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `permohonan` enum('A','B','C') NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` char(30) NOT NULL,
  `nik` char(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `RT` int(3) NOT NULL,
  `RW` int(11) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `status_ktp` enum('0','1') NOT NULL DEFAULT '0',
  `status_verifikasi` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tb_ktp`
--

INSERT INTO `tb_ktp` (`id`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `permohonan`, `nama`, `no_kk`, `nik`, `alamat`, `RT`, `RW`, `kode_pos`, `status_ktp`, `status_verifikasi`, `created_at`, `updated_at`) VALUES
(21, 'Provinsi Riau', 'Kabupaten Rohul', 'Kecamatan Tambusai', '5', 'A', 'Hasnul Nadawi', '1234543212', '1243546576', 'asasdasdadasd', 2, 5, 23432, '1', '1', '2016-01-03 01:17:48', '2016-01-03 01:17:48'),
(22, 'Provinsi Riau', 'Kabupaten Rohul', 'Kecamatan Tambusai', '5', 'A', 'Sirod', '2147483647', '8937635372', 'Talikumain', 1, 2, 87868, '1', '0', '2016-01-08 09:29:52', '2016-01-08 09:29:52'),
(23, 'Provinsi Riau', 'Kabupaten Rohul', 'Kecamatan Tambusai', '4', 'A', 'sadasdsd', '2147483647', '1221313213', 'cadsdsa', 123, 323, 23242, '1', '0', '2016-01-10 07:04:14', '2016-01-10 07:04:14'),
(24, 'Provinsi Riau', 'Kabupaten Rohul', 'Kecamatan Tambusai', '1', 'A', 'dfdada', '232323', '345678909764333', 'fdasdsda', 231, 231, 32123, '1', '0', '2016-03-04 07:34:05', '2016-03-04 07:34:05'),
(25, 'Provinsi Riau', 'Kabupaten Rohul', 'Kecamatan Tambusai', '3', 'A', 'Hams', '2312313232313', '121231232313122', 'sdsadadsadsdadsad', 2, 323, 12321, '1', '0', '2016-03-04 15:42:25', '2016-03-04 15:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE IF NOT EXISTS `tb_pemohon` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `no_hp` char(12) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nik` char(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status_pendaftaran` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`id`, `no_hp`, `username`, `password`, `nik`, `nama`, `created_at`, `updated_at`, `status_pendaftaran`) VALUES
(1, '987654321', 'J1TuBlmG', 'jYhw1VRp', '1234567891', 'aswaqws', '2015-12-09 18:33:23', '2015-12-09 18:33:23', '0'),
(2, '2147483647', 'UjnJmPLD', 'b2ApgjEx', '9685745342', 'agus', '2015-12-09 19:09:28', '2015-12-09 19:09:28', '0'),
(3, '2147483647', 'YNyOyCI0', 'uzjXIQAM', '1432564786', 'bumbum', '2015-12-09 19:27:56', '2015-12-09 19:27:56', '0'),
(4, '1234567898', 'Ci4qhZSl', 'AlUhRkN1', '1345764358', 'awswawas', '2015-12-09 19:40:03', '2015-12-09 19:40:03', '1'),
(5, '2147483647', 'HXCmlOYf', '2y1zf4Tl', '1243546576', 'Hasnul Nadawi', '2015-12-10 07:43:38', '2015-12-10 07:43:38', '1'),
(6, '2147483647', 'kElvCUu1', '7erxZfDp', '1984756342', 'doni', '2015-12-14 01:31:25', '2015-12-14 01:31:25', '1'),
(7, '2147483647', 'QGWld79D', 'tQbhz4Jw', '1234567895', 'afdal', '2015-12-17 23:30:35', '2015-12-17 23:30:35', '1'),
(8, '2147483647', 'gTAW329Y', 'ySolG7OT', '1675849382', 'afdal', '2015-12-17 23:37:13', '2015-12-17 23:37:13', '1'),
(9, '2147483647', 'N7WL93se', 'EhFwXuC0', '1345432123', 'afdal', '2015-12-17 23:44:18', '2015-12-17 23:44:18', '1'),
(10, '2147483647', '6Ql4pXoM', 'BHR35WYR', '1615141718', 'afdal', '2015-12-17 23:50:59', '2015-12-17 23:50:59', '1'),
(11, '2147483647', 'bHn2Ja5Y', 'efZoXfNO', '1875637562', 'afdal', '2015-12-17 23:59:43', '2015-12-17 23:59:43', '1'),
(12, '2147483647', 'bup4yO8H', 'py0sH3nS', '1875637563', 'afdal', '2015-12-18 00:09:30', '2015-12-18 00:09:30', '1'),
(13, '2147483647', 'AJSH6AKC', 'Z6C00RqB', '1345434563', 'afdal', '2015-12-18 00:13:40', '2015-12-18 00:13:40', '1'),
(14, '2147483647', 'K2kuSksz', 'TItXhX19', '1324567876', 'afdal', '2015-12-18 00:14:51', '2015-12-18 00:14:51', '1'),
(15, '989098789', 'zlJGzl6l', 'omCn4Ekz', '3454321234', 'fadil', '2015-12-18 00:16:41', '2015-12-18 00:16:41', '1'),
(16, '2147483647', 'EJ9Y1AOF', '9HDvbp9u', '2345654323', 'gaggagaga', '2015-12-18 00:22:48', '2015-12-18 00:22:48', '1'),
(17, '2147483647', 'AOpidgsg', 'UppVpKQC', '4567876543', 'agus bum', '2015-12-18 00:26:25', '2015-12-18 00:26:25', '1'),
(18, '89878', 'NAwiw577', 'E4NE3eaG', '1232123454', 'boni', '2015-12-21 06:41:42', '2015-12-21 06:41:42', '1'),
(19, '12321234', '82wRE6Mk', 'kh4jVpIw', '2123212345', 'saw', '2015-12-21 07:36:16', '2015-12-21 07:36:16', '1'),
(20, '2147483647', 'C5YEVqVh', 'GQbWgYRF', '0987654321', 'gsdd', '2015-12-23 05:52:05', '2015-12-23 05:52:05', '1'),
(21, '8383', 'cg8j45Ib', 'cDEtAnAo', '8937635372', 'sirod', '2016-01-08 09:28:04', '2016-01-08 09:28:04', '1'),
(22, '2147483647', 'pSh6DIer', 'gDkc8Kd6', '1323131232', 'somplak', '2016-01-10 06:18:18', '2016-01-10 06:18:18', '1'),
(23, '2147483647', 'FNGe8oWb', 'd8D3AduN', '1221313213', 'afifadf', '2016-01-10 07:03:42', '2016-01-10 07:03:42', '1'),
(24, '2147483647', '98HqGFWl', 'QYksSzMb', '345678909764333', 'suek', '2016-03-04 07:16:13', '2016-03-04 07:16:13', '1'),
(25, '2147483647', 'acSajhTl', 'S81xu2iA', '123445678765434', 'adsadsadsadsa', '2016-03-04 09:07:52', '2016-03-04 09:07:52', '1'),
(26, '2147483647', 'Ji6NUG7P', 'zOlCH86l', '123212345678976', 'fafdadddf', '2016-03-04 09:37:11', '2016-03-04 09:37:11', '1'),
(27, '2147483647', 'Kn3AVkrJ', 'G0HnmiDP', '121323232323131', 'wwerewrewr', '2016-03-04 09:43:18', '2016-03-04 09:43:18', '1'),
(28, '3444434', 'GqLKcohI', 'vBJ3twWq', '344324342434324', 'weqew', '2016-03-04 09:53:28', '2016-03-04 09:53:28', '1'),
(29, '2147483647', 'XibFn4wI', 'TvJwBqnw', '123232323232323', 'dsdadad', '2016-03-04 15:37:54', '2016-03-04 15:37:54', '1'),
(30, '434343423131', 'WsDIQEX6', 'FPdmPlFC', '121231232313122', 'asdasd', '2016-03-04 15:40:22', '2016-03-04 15:40:22', '1'),
(31, '232313231323', 'uO4B6uAi', 'bE8F6ILA', '678954343433333', 'dsadsadsadsad', '2016-03-04 16:13:13', '2016-03-04 16:13:13', '1'),
(32, '986675454455', 'BCjOXrA0', 'GR1yu3uZ', '121323232323132', 'huam', '2016-03-04 16:17:30', '2016-03-04 16:17:30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tb_pengumuman` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(64) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul`, `slug`, `isi`, `created_at`, `updated_at`) VALUES
(10, 'Mengetahui Status Kelulusan Siswa PSB 2014', 'mengetahui-status-kelulusan-siswa-psb-2014', '<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>\r\n<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>\r\n<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>\r\n<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>\r\n<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>\r\n<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>\r\n<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>\r\n<p>&nbsp;Berikut ini adalah cara verifikasi data PSB 2014.&nbsp; Berikut ini adalah cara verifikasi data PSB 2014. &nbsp;Berikut ini adalah cara verifikasi data PSB 2014. &nbsp; Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014. Berikut ini adalah cara verifikasi data PSB 2014.</p>', '2014-12-05 17:35:55', '2014-12-05 19:58:56'),
(11, 'Cara Update Data', 'cara-update-data', '<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>\r\n<p>Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini. Bagi anda yang belum tahu cara mengupdate data, maka ikuti langkah berikut ini.</p>', '2014-12-08 17:26:16', '2014-12-08 17:26:16'),
(12, 'Menghapus Pengumuman Yang Sudah Kadaluarsa', 'menghapus-pengumuman-yang-sudah-kadaluarsa', '<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>\r\n<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>\r\n<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>\r\n<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>\r\n<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>\r\n<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>\r\n<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>\r\n<p>Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa. Berikut ini adalah cara bagaimana menghapus pengumuman yang sudah dadaluarsa.</p>', '2014-12-31 06:14:14', '2014-12-31 06:14:14'),
(13, 'tes', 'tes', '<p>tes 123 123 123</p>', '2015-11-25 03:27:02', '2015-11-25 03:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` enum('administrator','pimpinan') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'administrator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 'pimpinan', 'pimpinan', '2016-01-05 00:00:00', '2016-01-05 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
