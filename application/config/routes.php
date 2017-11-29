<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

// Public
$route['peserta/halaman/(:num)'] = 'peserta/index/$1';
$route['pendaftaran-sukses'] = 'pendaftaran/sukses';
$route['pendaftaran-error'] = 'pendaftaran/error';
$route['kontak-error'] = 'kontak/error';
$route['kontak-sukses'] = 'kontak/sukses';
$route['pengumuman/halaman/(:num)'] = 'pengumuman/index/$1';
$route['pengumuman/(:any)'] = 'pengumuman/detail/$1';
$route['lupa-password'] = 'lupa_password/index';
$route['lupa-password-error'] = 'lupa_password/error';
$route['lupa-password-sukses'] = 'lupa_password/sukses';
$route['hasil-seleksi'] = 'hasil_seleksi/index';
$route['hasil-seleksi-error'] = 'hasil_seleksi/error';
$route['login-error'] = 'login/error';


// Dashboard
$route['dashboard/peserta/halaman/(:num)'] = 'dashboard/peserta/index/$1';
$route['dashboard/pengumuman/halaman/(:num)'] = 'dashboard/pengumuman/index/$1';
$route['dashboard/pengumuman/(:any)'] = 'dashboard/pengumuman/detail/$1';
$route['dashboard/kontak-sukses'] = 'dashboard/kontak/sukses';
$route['dashboard/kontak-error'] = 'dashboard/kontak/error';
$route['dashboard/biodata-sukses'] = 'dashboard/biodata/sukses';
$route['dashboard/biodata-error'] = 'dashboard/biodata/error';
$route['dashboard/biodata-preview'] = 'dashboard/biodata/preview';
$route['dashboard/biodata-preview-error'] = 'dashboard/biodata/error';
$route['dashboard/biodata-cetak'] = 'dashboard/biodata/cetak';
$route['dashboard/biodata-cetak-error'] = 'dashboard/biodata/error';
$route['dashboard/hasil-seleksi'] = 'dashboard/hasil_seleksi/index';
$route['dashboard/hasil-seleksi-error'] = 'dashboard/hasil_seleksi/error';
$route['dashboard/logout'] = 'login/logout';
$route['dashboard/ktp-sukses'] = 'dashboard/ktp/sukses';
$route['dashboard/ktp-error'] = 'dashboard/ktp/error';
$route['dashboard/ktp-preview'] = 'dashboard/ktp/preview';
$route['dashboard/ktp-preview-error'] = 'dashboard/ktp/error';
$route['dashboard/ktp-cetak'] = 'dashboard/ktp/cetak';
$route['dashboard/ktp-cetak-error'] = 'dashboard/ktp/error';
$route['dashboard/ktp-tambah'] = 'dashboard/ktp/tambah';
$route['dashboard/aktal-tambah'] = 'dashboard/aktal/tambah';
$route['dashboard/aktal-error'] = 'dashboard/aktal/error';
$route['dashboard/aktal-sukses'] = 'dashboard/aktal/sukses';
$route['dashboard/aktal-preview'] = 'dashboard/aktal/preview';
$route['dashboard/aktal-preview-error'] = 'dashboard/aktal/error';
$route['dashboard/aktal-cetak'] = 'dashboard/aktal/cetak';
$route['dashboard/aktal-cetak-error'] = 'dashboard/aktal/error';
$route['dashboard/akmat-tambah'] = 'dashboard/akmat/tambah';
$route['dashboard/akmat-error'] = 'dashboard/akmat/error';
$route['dashboard/akmat-sukses'] = 'dashboard/akmat/sukses';
$route['dashboard/akmat-preview'] = 'dashboard/akmat/preview';
$route['dashboard/akmat-preview-error'] = 'dashboard/akmat/error';
$route['dashboard/akmat-cetak'] = 'dashboard/akmat/cetak';
$route['dashboard/akmat-cetak-error'] = 'dashboard/akmat/error';
$route['dashboard/kk-tambah'] = 'dashboard/kk/tambah';
$route['dashboard/kk-error'] = 'dashboard/kk/error';
$route['dashboard/kk-sukses'] = 'dashboard/kk/sukses';
$route['dashboard/kk-preview'] = 'dashboard/kk/preview';
$route['dashboard/kk-preview-error'] = 'dashboard/kk/error';
$route['dashboard/kk-cetak'] = 'dashboard/kk/cetak';
$route['dashboard/kk-cetak-error'] = 'dashboard/kk/error';



// Admin
$route['admin/login-error'] = 'admin/login/error';
$route['admin/logout'] = "admin/login/logout";
$route['admin/peserta/halaman/(:num)'] = "admin/peserta/index/$1";
$route['admin/peserta/ubah-status-verifikasi/(:num)'] = "admin/peserta/ubah_status_verifikasi/$1";
$route['admin/peserta/ubah-status-seleksi/(:num)'] = "admin/peserta/ubah_status_seleksi/$1";
$route['admin/peserta/ubah-status-pendaftaran/(:num)'] = "admin/peserta/ubah_status_pendaftaran/$1";
$route['admin/kontak/halaman/(:num)'] = "admin/kontak/index/$1";
$route['admin/pengumuman/halaman/(:num)'] = "admin/pengumuman/index/$1";
$route['admin/pengumuman/tambah'] = "admin/pengumuman/tambah";
$route['admin/pengumuman/edit/(:num)'] = "admin/pengumuman/edit/$1";
$route['admin/pengumuman/hapus/(:num)'] = "admin/pengumuman/hapus/$1";
$route['admin/pengumuman/error'] = "admin/pengumuman/error";
$route['admin/pengumuman/sukses'] = "admin/pengumuman/sukses";
$route['admin/pengumuman/(:any)'] = "admin/pengumuman/detail/$1";
$route['admin/ktp/halaman/(:num)'] = "admin/ktp/index/$1";
$route['admin/ktp/ubah-status-verifikasi/(:num)'] = "admin/ktp/ubah_status_verifikasi/$1";
$route['admin/ktp-cetak_laporan'] = 'admin/ktp/cetak_laporan';
$route['admin/aktal/halaman/(:num)'] = "admin/aktal/index/$1";
$route['admin/aktal/ubah-status-verifikasi/(:num)'] = "admin/akmat/ubah_status_verifikasi/$1";
$route['admin/aktal-cetak_laporan'] = 'admin/aktal/cetak_laporan';
$route['admin/akmat/halaman/(:num)'] = "admin/akmat/index/$1";
$route['admin/akmat/ubah-status-verifikasi/(:num)'] = "admin/akmat/ubah_status_verifikasi/$1";
$route['admin/akmat-cetak_laporan'] = 'admin/akmat/cetak_laporan';
$route['admin/kk/halaman/(:num)'] = "admin/kk/index/$1";
$route['admin/kk/ubah-status-verifikasi/(:num)'] = "admin/kk/ubah_status_verifikasi/$1";
$route['admin/kk-cetak_laporan'] = 'admin/kk/cetak_laporan';

/* End of file routes.php */
/* Location: ./application/config/routes.php */