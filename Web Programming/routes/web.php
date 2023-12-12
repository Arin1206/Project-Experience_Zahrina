<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route; //import java.io
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MalesNgodingController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\X4Controller;
use App\Http\Controllers\adsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});
Route::get ('/Blg',function(){
    return view('blog');
});
Route::get('/mahasiswa/fasilkom/anto', function () {
    echo '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
});
Route::get('/mahasiswa', function () {
    $arrmahasiswa=["risa lestari","Rudi Hermawan","Bambang Kusumo","Lisa permata"];
    return view ('mahasiswa',['mahasiswa'=>$arrmahasiswa]);
});
Route::get('/ets', function () {
    return view('ets');
  });
Route::get('dd', '\App\Http\Controllers\DosenController@about');
Route::get('/pegawai/{nama}', '\App\Http\Controllers\PegawaiController@index');
Route::get('/formulir','\App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses','\App\Http\Controllers\PegawaiController@proses');

//Route Ads
Route::get('/ads',[adsController::class,'ads']);
Route::get('/ads2',[adsController::class,'ads2']);

//Route Blog
Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang' ,[BlogController::class,'tentang']);
Route::get('/blog/kontak',[BlogController::class,'kontak']);

//route CRUD
Route::get('/plus',[PegawaiController::class,'index']);
Route::get('/plus/tambah',[PegawaiController::class,'tambah']);
Route::post('/plus/store',[PegawaiController::class,'store']);
Route::get('/plus/edit/{id}',[PegawaiController::class,'edit']);
Route::post('/plus/update',[PegawaiController::class,'update']);
Route::get('/plus/hapus/{id}',[PegawaiController::class,'hapus']);
Route::get('/plus/cari',[PegawaiController::class,'cari']);
Route::get('/plus/view/{id}',[PegawaiController::class,'view']);

//Route Pagination
Route::get('/pagination',[PageController::class,'page']);
Route::get('/pagination/cari',[PageController::class,'cari']);

//Route Validasi
Route::get('/input',[MalesngodingController::class,'input']);
Route::post('/prs',[MalesngodingController::class,'prs']);

//Route contoh uas
Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('/karyawan/edit/{NIP}',[KaryawanController::class,'edi']);
Route::post('/karyawan/update',[KaryawanController::class,'upda']);
Route::get('/karyawan/view/{NIP}',[KaryawanController::class,'view']);

//Route 01
Route::get('/chat',[ChatController::class,'index']);

//Route 03
Route::get('/nilai',[NilaiController::class,'index']);
Route::get('/nilai/tambah',[NilaiController::class,'tambah']);
Route::post('/nilai/store',[NilaiController::class,'store']);
Route::get('/nilai/view/{id}',[NilaiController::class,'view']);

//Route EAS
Route::get('/shopping',[X4Controller::class,'index']);
Route::get('/shopping/beli',[X4Controller::class,'beli']);
Route::post('/shopping/store',[X4Controller::class,'store']);
Route::get('/shopping/batal/{id}',[X4Controller::class,'batal']);

//Route X02
Route::get('/X2',[X2Controller::class,'index']);
Route::get('/X2/beli',[X2Controller::class,'beli']);
Route::post('/X2/store',[X2Controller::class,'store']);
Route::get('/X2/hapus/{id}',[X2Controller::class,'batal']);

//Route::post('/karyawan/upda',[KaryawanController::class,'upda']);
//Route CRUD Eloquent
//Route::get('/sepatu', '\App\Http\Controllers\SepatuController@index');
//Route::get('/sepatu/menambahkan','\App\Http\Controllers\SepatuController@tambah');
//Route::post('/sepatu/simpan','\App\Http\Controllers\SepatuController@simpan');
//Route::get('/sepatu/perbaikan/{id}','\App\Http\Controllers\SepatuController@edit');
//Route::put('/sepatu/hasil/{id}','\App\Http\Controllers\SepatuController@hasil');
//Route::get('/sepatu/delete/{id}', '\App\Http\Controllers\SepatuController@delete');

//Route Soft Deletes
//Route::get('/Guru','\App\Http\Controllers\GuruController@index');
//Route::get('/Guru/dlt/{id}','\App\Http\Controllers\GuruController@delete');
//Route::get('/Guru/trash', '\App\Http\Controllers\GuruController@trash');
//Route::get('/Guru/kembalikan/{id}', '\App\Http\Controllers\GuruController@kembalikan');
//Route::get('/Guru/kembalikan_semua', '\App\Http\Controllers\GuruController@kembalikan_semua');
//Route::get('/Guru/hapus_permanen/{id}','\App\Http\Controllers\GuruController@hapuspermanen');
//Route::get('/Guru/hapus_permanen_semua/{id}','\App\Http\Controllers\GuruController@hapuspermanen_semua');

//Route Pengguna one to one
//Route::get('/pengguna', '\App\Http\Controllers\PenggunaController@index');

//Route Pengguna one to many
//Route::get('/article', '\App\Http\Controllers\WebController@index');

//Route Pengguna many to many
//Route::get('/anggota', '\App\Http\Controllers\AnggotaController@index');

//Route Upload file
//Route::get('/upload', '\App\Http\Controllers\UploadController@upload');
//Route::post('/upload/proses', '\App\Http\Controllers\UploadController@proses_upload');

//Route haapus file
//Route::get('/upload/hapus/{id}', '\App\Http\Controllers\UploadController@hapus');

//Route session
//Route::get('/session/tampil','\App\Http\Controllers\TesController@tampilkanSession');
//Route::get('/session/buat','\App\Http\Controllers\TesController@buatSession');
//Route::get('/session/hapus','\App\Http\Controllers\TesController@hapusSession');

//Route session flash
//Route::get('/pesan','\App\Http\Controllers\NotifController@index');
//Route::get('/pesan/sukses','\App\Http\Controllers\NotifController@sukses');
//Route::get('/pesan/peringatan','\App\Http\Controllers\NotifController@peringatan');
//Route::get('/pesan/gagal','\App\Http\Controllers\NotifController@gagal');

//Route debug
//Route::get('/malasngoding/{nama}','\App\Http\Controllers\MalasngodingController@index');

//Route Kirim Email
//Route::get('/kirimemail','\App\Http\Controllers\MlsngodingController@index');

//Route Verifikasi email
//Auth::routes();
//Auth::routes(['verify' => true]);
//Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');

//Route Dompdf
//Route::get('/job',[JobController::class, 'index'] );
//Route::get('/job/cetak_pdf', [JobController::class, 'cetak_pdf']);

//Route export excel
//Route::get('/siswa', '\App\Http\Controllers\SiswaController@index');
//Route::get('/siswa/export_excel', '\App\Http\Controllers\SiswaController@export_excel');
//Route import Excel
//Route::post('/siswa/import_excel', '\App\Http\Controllers\SiswaController@import_excel');

//Route multi localization bahasa
//Route::get('/form', function () {
    //return view('bio');
//});
//Route::get('/{locale}/form', function ($locale) {
    //App::setLocale($locale);
    //return view('bio');
//});

//Route jam
//Route::get('/jam', '\App\Http\Controllers\JamController@index');
