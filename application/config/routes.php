<?php
defined('BASEPATH') or exit('No direct script access allowed');

//home
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
$route['index.js'] = 'Home';
$route['sejarah-singkat.js'] = 'Home/sejarah';
$route['visi-misi.js'] = 'Home/visimisi';
$route['tujuan-fungsi-tugas.js'] = 'Home/tugasfungsi';
$route['struktur-organisasi.js'] = 'Home/struktur';
$route['keanggotaan.js'] = 'Home/keanggotaan';
$route['e-votting-calon.js'] = 'Home/evotting';
$route['login.js'] = 'Home/login';
$route['kontak.js'] = 'Home/kontak';


//anggota
$route['dashboard-anggota.js'] = 'Anggota/dashboard';
$route['data-pribadi-anggota.js'] = 'Anggota';
$route['data-calon-ketua-anggota.js'] = 'Anggota/Votting';


//user
$route['login-admin.js'] = 'User';
$route['dashboard-admin.js'] = 'User/dashboard';
$route['anggota-admin.js'] = 'User/anggota';
$route['anggota-verifikasi-admin.js'] = 'User/anggota/verifikasi_anggota';
$route['calon-ketua-admin.js'] = 'User/votting';
$route['hasil-votting-admin.js'] = 'User/votting/hasil_votting';
$route['artikel-admin.js'] = 'User/artikel';
$route['kategori-artikel-admin.js'] = 'User/artikel/kategori_artikel';
$route['konferensi-admin.js'] = 'User/konferensi';
$route['kategori-konferensi-admin.js'] = 'User/konferensi/kategori_konferensi';
$route['sejarah-admin.js'] = 'User/ProfilAptikom';
$route['visi-misi-admin.js'] = 'User/ProfilAptikom/visimisi';
$route['tujuan-fungsi-tugas-admin.js'] = 'User/ProfilAptikom/tugasfungsi';
$route['struktur-aptikom-admin.js'] = 'User/ProfilAptikom/struktur';
$route['about-aptikom-admin.js'] = 'User/About';
$route['inbox-aptikom-admin.js'] = 'User/Inbox';
$route['user-akses-aptikom-admin.js'] = 'User/Akses';