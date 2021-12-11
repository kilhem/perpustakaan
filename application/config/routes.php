<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';


$route['login'] = 'auth/index';

$route['administrator'] = 'admin';
$route['dashboard'] = 'home';

$route['profile'] = 'profile';
$route['editprofile'] = 'profile/edit';
$route['ubahpassword'] = 'profile/changepassword';

$route['anggota'] = 'anggota';
$route['tambahdataanggota']  = 'anggota/createanggota';
$route['editdataanggota/(:any)'] = 'anggota/editanggota/$1';


$route['petugas'] = 'petugas';
$route['tambahdatapetugas']  = 'petugas/createpetugas';
$route['editdatapetugas/(:any)'] = 'petugas/editpetugas/$1';

$route['buku'] = 'buku';
$route['tambahdatabuku']  = 'buku/createbuku';
$route['editdatabuku/(:any)'] = 'buku/editbuku/$1';

$route['peminjaman'] = 'peminjaman';
$route['tambahpeminjaman'] = 'peminjaman/createpeminjaman';
$route['detailpeminjaman/(:any)'] = 'peminjaman/detailpeminjaman/$1';

$route['pengembalian/(:any)/(:any)/(:any)'] = 'peminjaman/pengembalian/$1/$2/$3';

$route['pengadaan'] = 'pengadaan';
$route['tambahpengadaan'] = 'pengadaan/createpengadaan';
$route['detailpengadaan/(:any)'] = 'pengadaan/detailpengadaan/$1';

$route['transaksikerusakan'] = 'kerusakan';
$route['tambahkerusakan'] = 'kerusakan/createkerusakan';
$route['detailkerusakan/(:any)'] = 'kerusakan/detailkerusakan/$1';

$route['transaksikehilangan'] = 'kehilangan';
$route['tambahkehilangan'] = 'kehilangan/createkehilangan';
$route['detailkehilangan/(:any)'] = 'kehilangan/detailkehilangan/$1';

$route['laporan'] = 'laporan';
$route['laporankeseluruhanbuku'] = 'laporan/laporanbuku';
$route['laporankeseluruhananggota'] = 'laporan/laporananggota';
$route['laporankeseluruhanpetugas'] = 'laporan/laporanpetugas';
$route['laporankeseluruhanpeminjaman'] = 'laporan/laporanpeminjaman';
$route['laporankeseluruhanpengembalian'] = 'laporan/laporanpengembalian';
$route['laporanpeminjamanperperiode'] = 'laporan/laporanpeminjamanperperiode';
$route['laporanpengembalianperperiode'] = 'laporan/laporanpengembalianperperiode';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
