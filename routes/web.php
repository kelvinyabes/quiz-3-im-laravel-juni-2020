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
    return view('artikel/erd'); }); // menampilkan halaman gambar ERD png/jpg

Route::get('/artikel/create', 'ArtikelController@create'); // menampilkan halaman form untuk membuat artikel
Route::post('/artikel', 'ArtikelController@store'); // menyimpan artikel baru
Route::get('/artikel', 'ArtikelController@index'); // menampilkan tabel berisi data artikel


Route::get('/artikel/{idartikel}', 'ArtikelController@show'); // menampilkan detail semua artikel dengan isi
Route::get('/artikel/{idartikel}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit artikel
Route::put('/artikel/{idartikel}', 'ArtikelController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{idartikel}', 'ArtikelController@destroy'); // menghapus data dari id