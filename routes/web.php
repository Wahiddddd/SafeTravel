<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('info-negara', [PageController::class, 'infoNegara'])->name('info-negara');
Route::get('inggirs-raya/informasi-umum', [PageController::class, 'informasiUmum'])->name('informasi-umum');
Route::get('inggirs-raya/persyaratan', [PageController::class, 'persyaratan'])->name('persyaratan');
Route::get('inggirs-raya/keselamatan-keamanan', [PageController::class, 'keselamatanKeamanan'])->name('keselamatan-keamanan');
Route::get('inggirs-raya/hukum-kebiasaan', [PageController::class, 'hukumKebiasaan'])->name('hukum-kebiasaan');
Route::get('inggirs-raya/mata-uang', [PageController::class, 'mataUang'])->name('mata-uang');
Route::get('inggirs-raya/asuransi-kesehatan', [PageController::class, 'asuransiKesehatan'])->name('asuransi-kesehatan');
Route::get('inggirs-raya/telekomunikasi', [PageController::class, 'telekomunikasi'])->name('telekomunikasi');
Route::get('inggirs-raya/tempat-ibadah', [PageController::class, 'tempatIbadah'])->name('tempat-ibadah');
Route::get('inggirs-raya/fasilitas-kesehatan', [PageController::class, 'fasilitasKesehatan'])->name('fasilitas-kesehatan');
Route::get('inggirs-raya/kuliner', [PageController::class, 'kuliner'])->name('kuliner');
Route::get('inggirs-raya/tempat-wisata', [PageController::class, 'tempatWisata'])->name('tempat-wisata');
Route::get('inggirs-raya/fasilitas-kesehatan/detail', [PageController::class, 'fasilitasKesehatanDetail'])->name('fasilitas-kesehatan-detail');
Route::get('inggirs-raya/tempat-ibadah/detail', [PageController::class, 'tempatIbadahDetail'])->name('tempat-ibadah-detail');
Route::get('inggirs-raya/kuliner/detail', [PageController::class, 'kulinerDetail'])->name('kuliner-detail');
Route::get('inggirs-raya/tempat-wisata/detail', [PageController::class, 'tempatWisataDetail'])->name('tempat-wisata-detail');

Route::get('himbauan', [PageController::class, 'himbauan'])->name('himbauan');
Route::get('himbauan/detail', [PageController::class, 'himbauanDetail'])->name('himbauan-detail');

Route::get('pelayanan/dinas', [PageController::class, 'pelayananDinas'])->name('pelayanan-dinas');
Route::get('pelayanan/umum', [PageController::class, 'pelayananUmum'])->name('pelayanan-umum');
Route::get('pelayanan/umum/inggris-raya', [PageController::class, 'pelayananUmumInggrisRaya'])->name('pelayanan-umum-inggris-raya');
Route::get('pelayanan/umum/kbri', [PageController::class, 'kbri'])->name('kbri');

Route::get('pelayanan/umum/pembuatan-paspor', [PageController::class, 'pembuatanPaspor'])->name('pembuatan-paspor');
Route::get('pelayanan/umum/pembuatan-SPLP', [PageController::class, 'pembuatanSPLP'])->name('pembuatan-SPLP');
Route::get('pelayanan/umum/legalisasi-dokumen', [PageController::class, 'legalisasiDokumen'])->name('legalisasi-dokumen');
Route::get('pelayanan/umum/pelayanan-lain', [PageController::class, 'pelayananLain'])->name('pelayanan-lain');
Route::get('pelayanan/umum/lapor-diri', [PageController::class, 'laporDiri'])->name('lapor-diri');
Route::get('pelayanan/umum/tourist-visa', [PageController::class, 'touristVisa'])->name('tourist-visa');
Route::get('pelayanan/umum/diplomatic-service-visa', [PageController::class, 'diplomaticServiceVisa'])->name('diplomatic-service-visa');
Route::get('pelayanan/umum/journalistic-visa', [PageController::class, 'journalisticVisa'])->name('journalistic-visa');
Route::get('pelayanan/umum/perlindungan-hukum', [PageController::class, 'perlindunganHukum'])->name('perlindungan-hukum');

Route::get('asuransi/perjalanan', [PageController::class, 'asuransiPerjalanan'])->name('asuransi-perjalanan');
Route::get('asuransi/infografis', [PageController::class, 'infografis'])->name('infografis');
Route::get('asuransi/kartu-kredit', [PageController::class, 'asuransiKartuKredit'])->name('asuransi-kartu-kredit');

Route::get('fun-fact', [PageController::class, 'funFact'])->name('fun-fact');
Route::get('fun-fact/detail', [PageController::class, 'funFactDetail'])->name('fun-fact-detail');

Route::get('tips/infografis', [PageController::class, 'tipsInfografis'])->name('infografis-tips');
Route::get('tips/tki', [PageController::class, 'tipsTKI'])->name('tips-tki');
Route::get('tips/umrah', [PageController::class, 'tipsUmrah'])->name('tips-umrah');
Route::get('tips/wisatawan', [PageController::class, 'tipsWisatawan'])->name('tips-wisatawan');
