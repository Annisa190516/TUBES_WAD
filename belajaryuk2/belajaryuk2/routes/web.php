<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home')->middleware('guest');

Route::get('/login', 'LoginController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/register-siswa', 'LoginController@register_siswa')
->name('register.siswa')->middleware('guest');

Route::get('/register-guru', 'LoginController@register_guru')
->name('register.guru')->middleware('guest');

Route::post('/register-siswa/post', 'LoginController@register_siswa_post')
->name('register.siswa.post')->middleware('guest');

Route::post('/register-guru/post', 'LoginController@register_guru_post')
->name('register.guru.post')->middleware('guest');


Route::prefix('siswa')->middleware('auth:siswa')->group(function () {

	Route::get('/', 'SiswaController@dashboard')->name('siswa.dashboard');
	Route::get('/setting', 'SiswaController@setting')->name('siswa.setting');
	Route::post('/setting/{id}', 'SiswaController@setting_post')->name('siswa.setting.edit');

	Route::prefix('kelas')->group(function () {
		Route::get('/materi/{id}', 'SiswaController@materi')->name('siswa.materi');
		Route::get('/materi/detail/{id}', 'SiswaController@materi_detail')->name('siswa.materi_detail');
		Route::get('/tugas/{id}', 'SiswaController@tugas')->name('siswa.tugas');
		Route::get('/tugas/detail/{id}', 'SiswaController@tugas_detail')->name('siswa.tugas_detail');
		Route::get('/setting/{id}', 'SiswaController@setting_kelas')->name('siswa.setting_kelas');
		Route::get('/rekap/{id}', 'SiswaController@rekap')->name('siswa.rekap');
	});

	Route::prefix('be')->group(function () {
		Route::prefix('join')->group(function () {
			Route::post('/store', 'JoinKelasController@store')->name('siswa.join.store');
		});
		Route::prefix('jawaban')->group(function () {
			Route::post('/store', 'JawabanController@store')->name('siswa.jawaban.store');
			Route::post('/edit/{id}', 'JawabanController@edit')->name('siswa.jawaban.edit');
		});
	});	

});

Route::prefix('guru')->middleware('auth:guru')->group(function () {

	Route::get('/', 'GuruController@dashboard')->name('guru.dashboard');
	Route::get('/setting', 'GuruController@setting')->name('guru.setting');

	Route::prefix('kelas')->group(function () {
		Route::get('/materi/{id}', 'GuruController@materi')->name('guru.materi');
		Route::get('/materi/detail/{id}', 'GuruController@materi_detail')->name('guru.materi_detail');
		Route::get('/tugas/{id}', 'GuruController@tugas')->name('guru.tugas');
		Route::get('/tugas/detail/{id}', 'GuruController@tugas_detail')->name('guru.tugas_detail');
		Route::get('/setting/{id}', 'GuruController@setting_kelas')->name('guru.setting_kelas');
		Route::get('/rekap/{id}', 'GuruController@rekap')->name('guru.rekap');
	});

	Route::prefix('be')->group(function () {
		Route::post('/setting/{id}', 'GuruController@setting_post')->name('guru.setting.edit');
		
		Route::prefix('kelas')->group(function () {
			Route::post('/store', 'KelasController@store')->name('guru.kelas.store');
			Route::post('/edit/{id}', 'KelasController@edit')->name('guru.kelas.edit');
			Route::post('/edit-kode/{id}', 'KelasController@kode')->name('guru.kelas.kode');
			Route::get('/delete/{id}', 'KelasController@delete')->name('guru.kelas.delete');
		});
		Route::prefix('materi')->group(function () {
			Route::post('/store', 'MateriController@store')->name('guru.materi.store');
			Route::get('/delete/{id}', 'MateriController@delete')->name('guru.materi.delete');
			Route::post('/edit/{id}', 'MateriController@edit')->name('guru.materi.edit');
		});
		Route::prefix('tugas')->group(function () {
			Route::post('/store', 'TugasController@store')->name('guru.tugas.store');
			Route::get('/delete/{id}', 'TugasController@delete')->name('guru.tugas.delete');
			Route::post('/edit/{id}', 'TugasController@edit')->name('guru.tugas.edit');
		});
		Route::prefix('nilai')->group(function () {
			Route::post('/jawaban/nilai/{id}', 'JawabanController@nilai')->name('guru.jawaban.nilai');
		});	
	});
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {

	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
	Route::get('/siswa', 'AdminController@setting')->name('admin.siswa');
	Route::get('/guru', 'AdminController@guru')->name('admin.guru');
	Route::get('/setting', 'AdminController@setting')->name('admin.setting');

	Route::prefix('kelas')->group(function () {
		Route::get('/', 'AdminController@kelas')->name('admin.kelas');
		Route::get('/materi', 'AdminController@materi')->name('admin.kelas.materi');
		Route::get('/materi/komponen', 'AdminController@materi_komponen')->name('admin.kelas.materi_komponen');
		Route::get('/tugas', 'AdminController@tugas')->name('admin.kelas.tugas');
		Route::get('/tugas/detail', 'AdminController@tugas_detail')->name('admin.kelas.tugas_detail');
		Route::get('/siswa', 'AdminController@siswa')->name('admin.kelas.siswa');
		Route::get('/rekap', 'AdminController@rekap')->name('admin.kelas.rekap');
	});

});