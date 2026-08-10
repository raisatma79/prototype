<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\RuangControllers;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\NewsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('home-store', [HomeController::class, 'store']);

Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');
Route::get('/tentang-kami/indikator-mutu', [AboutController::class, 'indikatorMutu'])->name('indikator-mutu');

Route::get('/layanan-fasilitas', [ServiceController::class, 'index'])->name('service');
Route::get('/layanan-fasilitas/rawat-jalan', [ServiceController::class, 'rawatjalan'])->name('rawat-jalan');
Route::get('/layanan-fasilitas/rawat-jalan/{id}', [PoliklinikController::class, 'poliklinik'])->name('poli-detail');
Route::get('/layanan-fasilitas/rawat-inap', [App\Http\Controllers\RuangController::class, 'index'])->name('rawat-inap');
Route::get('/layanan-fasilitas/{id}', [App\Http\Controllers\RuangController::class, 'show'])->name('ruang-detail');

Route::get('/konsultasi-online', [ConsultationController::class, 'index'])->name('consultation');
Route::post('/konsultasi-online', [ConsultationController::class, 'store'])->name('consultation.store');

Route::get('/dokter', [DoctorController::class, 'dokter'])->name('dokter');
Route::get('/dokter/jadwal-dokter', [DoctorController::class, 'schedule'])->name('schedule');

Route::get('/informasi', [InformationController::class, 'index'])->name('information');
Route::get('/informasi/faq', [InformationController::class, 'faq'])->name('information-faq');

Route::get('/berita', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/berita/{slug}', [App\Http\Controllers\NewsController::class, 'show'])->name('news-detail');