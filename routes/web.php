<?php

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
Auth::routes();

Route::get('/portal/','PortalController@index');

Route::get('/biodatamahasiswa/','BiodataMahasiswaController@index');

Auth::routes();

Route::get('/datadosen_geologi/{id}/delete','DataDosen_GeologiController@delete');
Route::get('/datadosen_geologi/','DataDosen_GeologiController@index')->name('datadosen_geologi.index');
Route::post('/datadosen_geologi/store','DataDosen_GeologiController@store')->name('datadosen_geologi.store');
Route::post('/datadosen_geologi/create','DataDosen_GeologiController@create');
Route::get('/datadosen_geologi/{id}/show','DataDosen_GeologiController@show');
Route::get('/datadosen_geologi/{id}/edit','DataDosen_GeologiController@edit');
Route::patch('/datadosen_geologi/{id}','DataDosen_GeologiController@update')->name('datadosen_geologi.update');
Route::delete('/datadosen_geologi/{id}','DataDosen_GeologiController@destroy')->name('datadosen_geologi.destroy');
Route::post('/datadosen_geologi/{id}/update','DataDosen_GeologiController@update');

Auth::routes();

Route::get('/datadosen_metalurgi/{id}/delete','DataDosen_MetalurgiController@delete');
Route::get('/datadosen_metalurgi/','DataDosen_MetalurgiController@index')->name('datadosen_metalurgi.index');
Route::post('/datadosen_metalurgi/store','DataDosen_MetalurgiController@store')->name('datadosen_metalurgi.store');
Route::post('/datadosen_metalurgi/create','DataDosen_MetalurgiController@create');
Route::get('/datadosen_metalurgi/{id}/show','DataDosen_MetalurgiController@show');
Route::get('/datadosen_metalurgi/{id}/edit','DataDosen_MetalurgiController@edit');
Route::patch('/datadosen_metalurgi/{id}','DataDosen_MetalurgiController@update')->name('datadosen_metalurgi.update');
Route::delete('/datadosen_metalurgi/{id}','DataDosen_MetalurgiController@destroy')->name('datadosen_metalurgi.destroy');
Route::post('/datadosen_metalurgi/{id}/update','DataDosen_MetalurgiController@update');

Auth::routes();

Route::get('/datadosen_pertambangan/{id}/delete','DataDosen_PertambanganController@delete');
Route::get('/datadosen_pertambangan/','DataDosen_PertambanganController@index')->name('datadosen_pertambangan.index');
Route::post('/datadosen_pertambangan/store','DataDosen_PertambanganController@store')->name('datadosen_pertambangan.store');
Route::post('/datadosen_pertambangan/create','DataDosen_PertambanganController@create');
Route::get('/datadosen_pertambangan/{id}/show','DataDosen_PertambanganController@show');
Route::get('/datadosen_pertambangan/{id}/edit','DataDosen_PertambanganController@edit');
Route::patch('/datadosen_pertambangan/{id}','DataDosen_PertambanganController@update')->name('datadosen_pertambangan.update');
Route::delete('/datadosen_pertambangan/{id}','DataDosen_PertambanganController@destroy')->name('datadosen_pertambangan.destroy');
Route::post('/datadosen_pertambangan/{id}/update','DataDosen_PertambanganController@update');

Auth::routes();

Route::get('/datatka_geologi/{id}/delete','DataTKA_GeologiController@delete');
Route::get('/datatka_geologi/','DataTKA_GeologiController@index')->name('datatka_geologi.index');
Route::post('/datatka_geologi/store','DataTKA_GeologiController@store')->name('datatka_geologi.store');
Route::post('/datatka_geologi/create','DataTKA_GeologiController@create');
Route::get('/datatka_geologi/{id}/show','DataTKA_GeologiController@show');
Route::get('/datatka_geologi/{id}/edit','DataTKA_GeologiController@edit');
Route::patch('/datatka_geologi/{id}','DataTKA_GeologiController@update')->name('datatka_geologi.update');
Route::delete('/datatka_geologi/{id}','DataTKA_GeologiController@destroy')->name('datatka_geologi.destroy');
Route::post('/datatka_geologi/{id}/update','DataTKA_GeologiController@update');

Auth::routes();

Route::get('/datatka_metalurgi/{id}/delete','DataTKA_MetalurgiController@delete');
Route::get('/datatka_metalurgi/','DataTKA_MetalurgiController@index')->name('datatka_metalurgi.index');
Route::post('/datatka_metalurgi/store','DataTKA_MetalurgiController@store')->name('datatka_metalurgi.store');
Route::post('/datatka_metalurgi/create','DataTKA_MetalurgiController@create');
Route::get('/datatka_metalurgi/{id}/show','DataTKA_MetalurgiController@show');
Route::get('/datatka_metalurgi/{id}/edit','DataTKA_MetalurgiController@edit');
Route::patch('/datatka_metalurgi/{id}','DataTKA_MetalurgiController@update')->name('datatka_metalurgi.update');
Route::delete('/datatka_metalurgi/{id}','DataTKA_MetalurgiController@destroy')->name('datatka_metalurgi.destroy');
Route::post('/datatka_metalurgi/{id}/update','DataTKA_MetalurgiController@update');

Auth::routes();

Route::get('/datatka_pertambangan/{id}/delete','DataTKA_PertambanganController@delete');
Route::get('/datatka_pertambangan/','DataTKA_PertambanganController@index')->name('datatka_pertambangan.index');
Route::post('/datatka_pertambangan/store','DataTKA_PertambanganController@store')->name('datatka_pertambangan.store');
Route::post('/datatka_pertambangan/create','DataTKA_PertambanganController@create');
Route::get('/datatka_pertambangan/{id}/show','DataTKA_PertambanganController@show');
Route::get('/datatka_pertambangan/{id}/edit','DataTKA_PertambanganController@edit');
Route::patch('/datatka_pertambangan/{id}','DataTKA_PertambanganController@update')->name('datatka_pertambangan.update');
Route::delete('/datatka_pertambangan/{id}','DataTKA_PertambanganController@destroy')->name('datatka_pertambangan.destroy');
Route::post('/datatka_pertambangan/{id}/update','DataTKA_PertambanganController@update');

Auth::routes();

Route::get('/datatkl_geologi/{id}/delete','DataTKL_GeologiController@delete');
Route::get('/datatkl_geologi/','DataTKL_GeologiController@index')->name('datatkl_geologi.index');
Route::post('/datatkl_geologi/store','DataTKL_GeologiController@store')->name('datatkl_geologi.store');
Route::post('/datatkl_geologi/create','DataTKL_GeologiController@create');
Route::get('/datatkl_geologi/{id}/show','DataTKL_GeologiController@show');
Route::get('/datatkl_geologi/{id}/edit','DataTKL_GeologiController@edit');
Route::patch('/datatkl_geologi/{id}','DataTKL_GeologiController@update')->name('datatkl_geologi.update');
Route::delete('/datatkl_geologi/{id}','DataTKL_GeologiController@destroy')->name('datatkl_geologi.destroy');
Route::post('/datatkl_geologi/{id}/update','DataTKL_GeologiController@update');

Auth::routes();

Route::get('/datatkl_metalurgi/{id}/delete','DataTKL_MetalurgiController@delete');
Route::get('/datatkl_metalurgi/','DataTKL_MetalurgiController@index')->name('datatkl_metalurgi.index');
Route::post('/datatkl_metalurgi/store','DataTKL_MetalurgiController@store')->name('datatkl_metalurgi.store');
Route::post('/datatkl_metalurgi/create','DataTKL_MetalurgiController@create');
Route::get('/datatkl_metalurgi/{id}/show','DataTKL_MetalurgiController@show');
Route::get('/datatkl_metalurgi/{id}/edit','DataTKL_MetalurgiController@edit');
Route::patch('/datatkl_metalurgi/{id}','DataTKL_MetalurgiController@update')->name('datatkl_metalurgi.update');
Route::delete('/datatkl_metalurgi/{id}','DataTKL_MetalurgiController@destroy')->name('datatkl_metalurgi.destroy');
Route::post('/datatkl_metalurgi/{id}/update','DataTKL_MetalurgiController@update');

Auth::routes();

Route::get('/datatkl_pertambangan/{id}/delete','DataTKL_PertambanganController@delete');
Route::get('/datatkl_pertambangan/','DataTKL_PertambanganController@index')->name('datatkl_pertambangan.index');
Route::post('/datatkl_pertambangan/store','DataTKL_PertambanganController@store')->name('datatkl_pertambangan.store');
Route::post('/datatkl_pertambangan/create','DataTKL_PertambanganController@create');
Route::get('/datatkl_pertambangan/{id}/show','DataTKL_PertambanganController@show');
Route::get('/datatkl_pertambangan/{id}/edit','DataTKL_PertambanganController@edit');
Route::patch('/datatkl_pertambangan/{id}','DataTKL_PertambanganController@update')->name('datatkl_pertambangan.update');
Route::delete('/datatkl_pertambangan/{id}','DataTKL_PertambanganController@destroy')->name('datatkl_pertambangan.destroy');
Route::post('/datatkl_pertambangan/{id}/update','DataTKL_PertambanganController@update');

Auth::routes();

Route::get('/datajurusan/{id}/delete','DataJurusanController@delete');
Route::get('/datajurusan/','DataJurusanController@index')->name('datajurusan.index');
Route::post('/datajurusan/store','DataJurusanController@store')->name('datajurusan.store');
Route::post('/datajurusan/create','DataJurusanController@create');
Route::get('/datajurusan/{id}/show','DataJurusanController@show');
Route::get('/datajurusan/{id}/edit','DataJurusanController@edit');
Route::patch('/datajurusan/{id}','DataJurusanController@update')->name('datajurusan.update');
Route::delete('/datajurusan/{id}','DataJurusanController@destroy')->name('datajurusan.destroy');
Route::post('/datajurusan/{id}/update','DataJurusanController@update');

Auth::routes();

Route::get('/datafakultas/{id}/delete','DataFakultasController@delete');
Route::get('/datafakultas/','DataFakultasController@index')->name('datafakultas.index');
Route::post('/datafakultas/store','DataFakultasController@store')->name('datafakultas.store');
Route::post('/datafakultas/create','DataFakultasController@create');
Route::get('/datafakultas/{id}/show','DataFakultasController@show');
Route::get('/datafakultas/{id}/edit','DataFakultasController@edit');
Route::patch('/datafakultas/{id}','DataFakultasController@update')->name('datafakultas.update');
Route::delete('/datafakultas/{id}','DataFakultasController@destroy')->name('datafakultas.destroy');
Route::post('/datafakultas/{id}/update','DataFakultasController@update');

Auth::routes();

Route::get('/datatenagaperpustakaan/{id}/delete','DataTenagaPerpustakaanController@delete');
Route::get('/datatenagaperpustakaan/','DataTenagaPerpustakaanController@index')->name('datatenagaperpustakaan.index');
Route::post('/datatenagaperpustakaan/store','DataTenagaPerpustakaanController@store')->name('datatenagaperpustakaan.store');
Route::post('/datatenagaperpustakaan/create','DataTenagaPerpustakaanController@create');
Route::get('/datatenagaperpustakaan/{id}/show','DataTenagaPerpustakaanController@show');
Route::get('/datatenagaperpustakaan/{id}/edit','DataTenagaPerpustakaanController@edit');
Route::patch('/datatenagaperpustakaan/{id}','DataTenagaPerpustakaanController@update')->name('datatenagaperpustakaan.update');
Route::delete('/datatenagaperpustakaan/{id}','DataTenagaPerpustakaanController@destroy')->name('datatenagaperpustakaan.destroy');
Route::post('/datatenagaperpustakaan/{id}/update','DataTenagaPerpustakaanController@update');


Auth::routes();

Route::get('/datapegawai/{id}/delete','DataPegawaiController@delete');
Route::get('/datapegawai/','DataPegawaiController@index')->name('datapegawai.index');
Route::post('/datapegawai/store','DataPegawaiController@store')->name('datapegawai.store');
Route::post('/datapegawai/create','DataPegawaiController@create');
Route::get('/datapegawai/{id}/show','DataPegawaiController@show');
Route::get('/datapegawai/{id}/edit','DataPegawaiController@edit');
Route::patch('/datapegawai/{id}','DataPegawaiController@update')->name('datapegawai.update');
Route::delete('/datapegawai/{id}','DataPegawaiController@destroy')->name('datapegawai.destroy');
Route::post('/datapegawai/{id}/update','DataPegawaiController@update');

Auth::routes();

Route::get('/dataprodi/{id}/delete','DataProdiController@delete');
Route::get('/dataprodi/','DataProdiController@index')->name('dataprodi.index');
Route::post('/dataprodi/store','DataProdiController@store')->name('dataprodi.store');
Route::post('/dataprodi/create','DataProdiController@create');
Route::get('/dataprodi/{id}/show','DataProdiController@show');
Route::get('/dataprodi/{id}/edit','DataProdiController@edit');
Route::patch('/dataprodi/{id}','DataProdiController@update')->name('dataprodi.update');
Route::delete('/dataprodi/{id}','DataProdiController@destroy')->name('dataprodi.destroy');
Route::post('/dataprodi/{id}/update','DataProdiController@update');


Auth::routes();

Route::get('/databeasiswa/{id}/delete','DataBeasiswaController@delete');
Route::get('/databeasiswa/','DataBeasiswaController@index')->name('databeasiswa.index');
Route::post('/databeasiswa/store','DataBeasiswaController@store')->name('databeasiswa.store');
Route::post('/databeasiswa/create','DataBeasiswaController@create');
Route::get('/databeasiswa/{id}/show','DataBeasiswaController@show');
Route::get('/databeasiswa/{id}/edit','DataBeasiswaController@edit');
Route::patch('/databeasiswa/{id}','DataBeasiswaController@update')->name('databeasiswa.update');
Route::delete('/databeasiswa/{id}','DataBeasiswaController@destroy')->name('databeasiswa.destroy');
Route::post('/databeasiswa/{id}/update','DataBeasiswaController@update');


Auth::routes();

Route::get('/datavisimisi/{id}/delete','DataVisiMisiController@delete');
Route::get('/datavisimisi/','DataVisiMisiController@index')->name('datavisimisi.index');
Route::post('/datavisimisi/store','DataVisiMisiController@store')->name('datavisimisi.store');
Route::post('/datavisimisi/create','DataVisiMisiController@create');
Route::get('/datavisimisi/{id}/show','DataVisiMisiController@show');
Route::get('/datavisimisi/{id}/edit','DataVisiMisiController@edit');
Route::patch('/datavisimisi/{id}','DataVisiMisiController@update')->name('datavisimisi.update');
Route::delete('/datavisimisi/{id}','DataVisiMisiController@destroy')->name('datavisimisi.destroy');
Route::post('/datavisimisi/{id}/update','DataVisiMisiController@update');

Auth::routes();

Route::get('/dataunit_pelaksanaan_teknis/{id}/delete','DataUnit_Pelaksanaan_TeknisController@delete');
Route::get('/dataunit_pelaksanaan_teknis/','DataUnit_Pelaksanaan_TeknisController@index')->name('dataunit_pelaksanaan_teknis.index');
Route::post('/dataunit_pelaksanaan_teknis/store','DataUnit_Pelaksanaan_TeknisController@store')->name('dataunit_pelaksanaan_teknis.store');
Route::post('/dataunit_pelaksanaan_teknis/create','DataUnit_Pelaksanaan_TeknisController@create');
Route::get('/dataunit_pelaksanaan_teknis/{id}/show','DataUnit_Pelaksanaan_TeknisController@show');
Route::get('/dataunit_pelaksanaan_teknis/{id}/edit','DataUnit_Pelaksanaan_TeknisController@edit');
Route::patch('/dataunit_pelaksanaan_teknis/{id}','DataUnit_Pelaksanaan_TeknisController@update')->name('dataunit_pelaksanaan_teknis.update');
Route::delete('/dataunit_pelaksanaan_teknis/{id}','DataUnit_Pelaksanaan_TeknisController@destroy')->name('dataunit_pelaksanaan_teknis.destroy');
Route::post('/dataunit_pelaksanaan_teknis/{id}/update','DataUnit_Pelaksanaan_TeknisController@update');


Auth::routes();

Route::prefix('/datakategori')->group(function(){
    Route::get('/','DataKategoriController@index')->name('datakategori.index');
    Route::post('/store','DataKategoriController@store')->name('datakategori.store');
    Route::get('/{id}','DataKategoriController@show')->name('datakategori.show');
    Route::get('/{id}/edit','DataKategoriController@edit')->name('datakategori.edit');
    Route::patch('/{id}','DataKategoriController@update')->name('datakategori.update');
    Route::delete('/{id}','DataKategoriController@destroy')->name('datakategori.destroy');
});

Auth::routes();

Route::get('/datamahasiswa/{id}/delete','DataMahasiswaController@delete');
Route::get('/datamahasiswa/','DataMahasiswaController@index')->name('datamahasiswa.index');
Route::post('/datamahasiswa/store','DataMahasiswaController@store')->name('datamahasiswa.store');
Route::post('/datamahasiswa/create','DataMahasiswaController@create');
Route::get('/datamahasiswa/{id}/show','DataMahasiswaController@show');
Route::get('/datamahasiswa/{id}/edit','DataMahasiswaController@edit');
Route::patch('/datamahasiswa/{id}','DataMahasiswaController@update')->name('datamahasiswa.update');
Route::delete('/datamahasiswa/{id}','DataMahasiswaController@destroy')->name('datamahasiswa.destroy');
Route::post('/datamahasiswa/{id}/update','DataMahasiswaController@update');

Route::get('/datamatakuliah_metalurgi/{id}/delete','DataMatakuliah_MetalurgiController@delete');
Route::get('/datamatakuliah_metalurgi/','DataMatakuliah_MetalurgiController@index')->name('datamatakuliah_metalurgi.index');
Route::post('/datamatakuliah_metalurgi/create','DataMatakuliah_MetalurgiController@create');
Route::get('/datamatakuliah_metalurgi/{id}/show','DataMatakuliah_MetalurgiController@show');
Route::get('/datamatakuliah_metalurgi/{id}/edit','DataMatakuliah_MetalurgiController@edit');
Route::post('/datamatakuliah_metalurgi/{id}/update','DataMatakuliah_MetalurgiController@update');

Route::get('/datamatakuliah_geologi/{id}/delete','DataMatakuliah_GeologiController@delete');
Route::get('/datamatakuliah_geologi/','DataMatakuliah_GeologiController@index')->name('datamatakuliah_geologi.index');
Route::post('/datamatakuliah_geologi/create','DataMatakuliah_GeologiController@create');
Route::get('/datamatakuliah_geologi/{id}/show','DataMatakuliah_GeologiController@show');
Route::get('/datamatakuliah_geologi/{id}/edit','DataMatakuliah_GeologiController@edit');
Route::post('/datamatakuliah_geologi/{id}/update','DataMatakuliah_GeologiController@update');

Route::get('/datamatakuliah_pertambangan/{id}/delete','DataMatakuliah_PertambanganController@delete');
Route::get('/datamatakuliah_pertambangan/','DataMatakuliah_PertambanganController@index')->name('datamatakuliah_pertambangan.index');
Route::post('/datamatakuliah_pertambangan/create','DataMatakuliah_PertambanganController@create');
Route::get('/datamatakuliah_pertambangan/{id}/show','DataMatakuliah_PertambanganController@show');
Route::get('/datamatakuliah_pertambangan/{id}/edit','DataMatakuliah_PertambanganController@edit');
Route::post('/datamatakuliah_pertambangan/{id}/update','DataMatakuliah_PertambanganController@update');

Route::get('/pendaftaran','PendaftaranController@index');
Route::post('/pendaftaran/create','PendaftaranController@create');
Route::get('/pendaftaran/{id}/edit','PendaftaranController@edit');
Route::post('/pendaftaran/{id}/update','PendaftaranController@update');
Route::get('/pendaftaran/{id}/delete','PendaftaranController@delete');
Route::get('/pendaftaran/{id}/profile','PendaftaranController@profile');

Auth::routes();

Route::get('/prodiGeologi/{id}/delete','ProdiGeologiController@delete');
Route::get('/prodiGeologi/','ProdiGeologiController@index')->name('prodiGeologi.index');
Route::post('/prodiGeologi/store','ProdiGeologiController@store')->name('prodiGeologi.store');
Route::post('/prodiGeologi/create','ProdiGeologiController@create');
Route::get('/prodiGeologi/{id}/show','ProdiGeologiController@show');
Route::get('/prodiGeologi/{id}/edit','ProdiGeologiController@edit');
Route::patch('/prodiGeologi/{id}','ProdiGeologiController@update')->name('prodiGeologi.update');
Route::delete('/prodiGeologi/{id}','ProdiGeologiController@destroy')->name('prodiGeologi.destroy');
Route::post('/prodiGeologi/{id}/update','ProdiGeologiController@update');

Auth::routes();

Route::get('/prodiMetalurgi/{id}/delete','ProdiMetalurgiController@delete');
Route::get('/prodiMetalurgi/','ProdiMetalurgiController@index')->name('prodiMetalurgi.index');
Route::post('/prodiMetalurgi/store','ProdiMetalurgiController@store')->name('prodiMetalurgi.store');
Route::post('/prodiMetalurgi/create','ProdiMetalurgiController@create');
Route::get('/prodiMetalurgi/{id}/show','ProdiMetalurgiController@show');
Route::get('/prodiMetalurgi/{id}/edit','ProdiMetalurgiController@edit');
Route::patch('/prodiMetalurgi/{id}','ProdiMetalurgiController@update')->name('prodiMetalurgi.update');
Route::delete('/prodiMetalurgi/{id}','ProdiMetalurgiController@destroy')->name('prodiMetalurgi.destroy');
Route::post('/prodiMetalurgi/{id}/update','ProdiMetalurgiController@update');

Auth::routes();

Route::get('/prodiPertambangan/{id}/delete','ProdiPertambanganController@delete');
Route::get('/prodiPertambangan/','ProdiPertambanganController@index')->name('prodiPertambangan.index');
Route::post('/prodiPertambangan/store','ProdiPertambanganController@store')->name('prodiPertambangan.store');
Route::post('/prodiPertambangan/create','ProdiPertambanganController@create');
Route::get('/prodiPertambangan/{id}/show','ProdiPertambanganController@show');
Route::get('/prodiPertambangan/{id}/edit','ProdiPertambanganController@edit');
Route::patch('/prodiPertambangan/{id}','ProdiPertambanganController@update')->name('prodiPertambangan.update');
Route::delete('/prodiPertambangan/{id}','ProdiPertambanganController@destroy')->name('prodiPertambangan.destroy');
Route::post('/prodiPertambangan/{id}/update','ProdiPertambanganController@update');


Auth::routes();
Route::get('/datamengajar/{id}/delete','DataMengajarController@delete');
Route::get('/datamengajar/','DataMengajarController@index')->name('datamengajar.index');
Route::post('/datamengajar/store','DataMengajarController@store')->name('datamengajar.store');
Route::post('/datamengajar/create','DataMengajarController@create');
Route::get('/datamengajar/{id}/show','DataMengajarController@show');
Route::get('/datamengajar/{id}/edit','DataMengajarController@edit');
Route::patch('/datamengajar/{id}','DataMengajarController@update')->name('dataMengajar.update');
Route::delete('/dataMengajar/{id}','DataMengajarController@destroy')->name('datamengajar.destroy');
Route::post('/datamengajar/{id}/update','DataMengajarController@update');

Auth::routes();
Route::get('/dataprofil_lulusan/{id}/delete','DataProfil_LulusanController@delete');
Route::get('/dataprofil_lulusan/','DataProfil_LulusanController@index')->name('dataprofil_lulusan.index');
Route::post('/dataprofil_lulusan/store','DataProfil_LulusanController@store')->name('dataprofil_lulusan.store');
Route::post('/dataprofil_lulusan/create','DataProfil_LulusanController@create');
Route::get('/dataprofil_lulusan/{id}/show','DataProfil_LulusanController@show');
Route::get('/dataprofil_lulusan/{id}/edit','DataProfil_LulusanController@edit');
Route::patch('/dataprofil_lulusan/{id}','DataProfil_LulusanController@update')->name('dataprofil_lulusan.update');
Route::delete('/dataprofil_lulusan/{id}','DataProfil_LulusanController@destroy')->name('dataprofil_lulusan.destroy');
Route::post('/dataprofil_lulusan/{id}/update','DataProfil_LulusanController@update');

Auth::routes();
Route::get('/datacpl_prodi/{id}/delete','DataCpl_ProdiController@delete');
Route::get('/datacpl_prodi/','DataCpl_ProdiController@index')->name('datacpl_prodi.index');
Route::post('/datacpl_prodi/store','DataCpl_ProdiController@store')->name('datacpl_prodi.store');
Route::post('/datacpl_prodi/create','DataCpl_ProdiController@create');
Route::get('/datacpl_prodi/{id}/show','DataCpl_ProdiController@show');
Route::get('/datacpl_prodi/{id}/edit','DataCpl_ProdiController@edit');
Route::patch('/datacpl_prodi/{id}','DataCpl_ProdiController@update')->name('datacpl_prodi.update');
Route::delete('/datacpl_prodi/{id}','DataCpl_ProdiController@destroy')->name('datacpl_prodi.destroy');
Route::post('/datacpl_prodi/{id}/update','DataCpl_ProdiController@update');

Auth::routes();
Route::get('/datapraktikum/{id}/delete','DataPraktikumController@delete');
Route::get('/datapraktikum/','DataPraktikumController@index')->name('datapraktikum.index');
Route::post('/datapraktikum/store','DataPraktikumController@store')->name('datapraktikum.store');
Route::post('/datapraktikum/create','DataPraktikumController@create');
Route::get('/datapraktikum/{id}/show','DataPraktikumController@show');
Route::get('/datapraktikum/{id}/edit','DataPraktikumController@edit');
Route::patch('/datapraktikum/{id}','DataPaktikumController@update')->name('datapraktikum.update');
Route::delete('/datapraktikum/{id}','DataPraktikumController@destroy')->name('datapraktikum.destroy');
Route::post('/datapraktikum/{id}/update','DataPraktikumController@update');

Auth::routes();
Route::get('/dataujian/{id}/delete','DataUjianController@delete');
Route::get('/dataujian/','DataUjianController@index')->name('dataujian.index');
Route::post('/dataujian/store','DataUjianController@store')->name('dataujian.store');
Route::post('/dataujian/create','DataUjianController@create');
Route::get('/dataujian/{id}/show','DataUjianController@show');
Route::get('/dataujian/{id}/edit','DataUjianController@edit');
Route::patch('/dataujian/{id}','DataPaktikumController@update')->name('dataujian.update');
Route::delete('/dataujian/{id}','DataUjianController@destroy')->name('dataujian.destroy');
Route::post('/dataujian/{id}/update','DataUjianController@update');


Route::get('/home', 'HomeController@index')->name('home');


