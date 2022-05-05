<?php
defined('BASEPATH') or exit('No direct script access allowed');



/* TRYOUT ================================================================================================= */
$route['bankSoalDetail/(:num)'] = 'admin_menu/tryout/bank_soal/page_detail/$1';
$route['bankSoalEdit/(:num)'] = 'admin_menu/tryout/bank_soal/page_edit/$1';
$route['hapusBankSoal/(:num)'] = 'admin_menu/tryout/bank_soal/hapus/$1';

$route['tryoutDetail/(:num)'] = 'admin_menu/tryout/tryout/page_detail/$1';
$route['hapusTO/(:num)'] = 'admin_menu/tryout/tryout/hapus/$1';

$route['hasilTODetail/(:num)'] = 'admin_menu/tryout/hasil_tryout/page_detail/$1';
$route['prep/(:num)'] = 'user/tryout/tryout_base/prep/$1';
$route['startTO/(:num)'] = 'user/tryout/tryout_base/start/$1';
$route['finish'] = 'user/tryout/tryout_base/finish';

$route['detail_riwayat/(:num)'] = 'user/tryout/tryout_base/detail_riwayat/$1';







/* MATERI NEW================================================================================================= */

$route['viewmateriSD/(:num)'] = 'materi/materiViewSD/$1';
$route['viewmateriSMP/(:num)'] = 'materi/materiViewSMP/$1';
$route['viewmateriSMA/(:num)'] = 'materi/materiViewSMA/$1';

/* MATERI ================================================================================================= */
$route['hapusMateriMatik/(:num)'] = 'admin_menu/m_materi/hapusMateriMatik/$1';
$route['hapusMateriFisika/(:num)'] = 'admin_menu/m_materi/hapusMateriFisika/$1';
$route['hapusMateriKimia/(:num)'] = 'admin_menu/m_materi/hapusMateriKimia/$1';
$route['updateMateriMatik'] = 'admin_menu/m_materi/updateMateriMatik';
$route['updateMateriFisika'] = 'admin_menu/m_materi/updateMateriFisika';
$route['updateMateriKimia'] = 'admin_menu/m_materi/updateMateriKimia';
$route['editMateriMatik/(:num)'] = 'admin_menu/m_materi/editMateriMatik/$1';
$route['editMateriFisika/(:num)'] = 'admin_menu/m_materi/editMateriFisika/$1';
$route['editMateriKimia/(:num)'] = 'admin_menu/m_materi/editMateriKimia/$1';
$route['tambahMateri'] = 'admin_menu/m_soal/tambah_materi';

/* SOAL ================================================================================================= */

$route['hapusSoalMatik/(:num)'] = 'admin_menu/m_soal/hapusSoalMatik/$1';
$route['hapusSoalFisika/(:num)'] = 'admin_menu/m_soal/hapusSoalFisika/$1';
$route['hapusSoalKimia/(:num)'] = 'admin_menu/m_soal/hapusSoalKimia/$1';
$route['updateSoalMatik'] = 'admin_menu/m_soal/updateSoalMatik';
$route['updateSoalFisika'] = 'admin_menu/m_soal/updateSoalFisika';
$route['updateSoalKimia'] = 'admin_menu/m_soal/updateSoalKimia';
$route['editSoalMatik/(:num)'] = 'admin_menu/m_soal/editSoalMatik/$1';
$route['editSoalFisika/(:num)'] = 'admin_menu/m_soal/editSoalFisika/$1';
$route['editSoalKimia/(:num)'] = 'admin_menu/m_soal/editSoalKimia/$1';
$route['tambahSoal'] = 'admin_menu/m_soal/tambah_soal';

/* VIDEO ================================================================================================= */

$route['hapusVideoMatik/(:num)'] = 'admin_menu/m_video/hapusVideoMatik/$1';
$route['hapusVideoFisika/(:num)'] = 'admin_menu/m_video/hapusVideoFisika/$1';
$route['hapusVideoKimia/(:num)'] = 'admin_menu/m_video/hapusVideoKimia/$1';
$route['updateMatik'] = 'admin_menu/m_video/updateMatik';
$route['updateFisika'] = 'admin_menu/m_video/updateFisika';
$route['updateKimia'] = 'admin_menu/m_video/updateKimia';
$route['editVideoMatik/(:num)'] = 'admin_menu/m_video/editVideoMatik/$1';
$route['editVideoFisika/(:num)'] = 'admin_menu/m_video/editVideoFisika/$1';
$route['editVideoKimia/(:num)'] = 'admin_menu/m_video/editVideoKimia/$1';
$route['tambahVideo'] = 'admin_menu/m_video/tambah_video';

/* SISWA/USER ================================================================================================= */

$route['profile'] = 'home/profile';
$route['evaluasi'] = 'home/data_evaluasi';
$route['print_evaluasi'] = 'home/evaluasi';
$route['tambahUser'] = 'admin_menu/m_user/tambah_user';
$route['tambahAdmin'] = 'admin_menu/m_user/tambah_admin';
$route['detailUser/(:num)'] = 'admin_menu/m_user/detailUser/$1';
$route['hapusUser/(:num)'] = 'admin_menu/m_user/prosesHapus/$1';
$route['editUser'] = 'admin_menu/m_user/editUser';
$route['editUserPage/(:num)'] = 'admin_menu/m_user/editPage/$1';

$route['acceptRequest'] = 'admin_menu/m_user/requestAccept';
$route['declineRequest/(:num)'] = 'admin_menu/m_user/requestDecline/$1';

$route['tambahMurid'] = 'home/tambah_murid';
$route['detailMurid/(:num)'] = 'admin_menu/m_siswa/detailPage/$1';
$route['hapusMurid/(:num)'] = 'admin_menu/m_siswa/prosesHapus/$1';
$route['editSiswaProfile'] = 'home/editSiswaProfile';
$route['editSiswa'] = 'admin_menu/m_siswa/editSiswa';
$route['editMurid/(:num)'] = 'admin_menu/m_siswa/editPage/$1';

$route['tambahSiswa'] = 'admin_menu/m_siswa/tambah_siswa';

/* ALUMNUS ================================================================================================= */

$route['detail_kehadiran/(:any)/(:num)'] = "admin_menu/m_user/detail_kehadiran/$1/$2";

/* ALUMNUS ================================================================================================= */

$route['hapusAlumnus/(:num)'] = 'admin_menu/m_alumni/prosesHapus/$1';
$route['editAlumni'] = 'admin_menu/m_alumni/editAlumni';
$route['editAlumnus/(:num)'] = 'admin_menu/m_alumni/editPage/$1';
$route['tambahAlumni'] = 'admin_menu/m_alumni/tambah_alumni';

/* BASE ================================================================================================= */


$route['expired'] = 'CronJob';
$route['admin'] = 'admin_menu/dashboard';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
