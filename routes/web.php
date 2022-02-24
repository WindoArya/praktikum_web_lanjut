<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/hello', function(){
    return "hello";
});
*/

//Route::get('/world', [WelcomeController:class, 'world']);

/*
Route::get('mahasiswa', function ($id) {
});
Route::post('mahasiswa', function ($id) {
});
Route::put('mahasiswa', function ($id) {
});
Route::delete('mahasiswa', function ($id) {
});
Route::get('mahasiswa/{id}', function ($id) {
});
Route::put('mahasiswa/{id}', function ($id) {
});
Route::delete('mahasiswa/{id}', function ($id) {
});
*/

/*
Route::match(['get', 'post'], '/specialUrl', function(){

});

route::any('specialMahasiswa', function($id){

});
*/

//Route::redirect('/fb', 'http://facebook.com');

//Route::view('/welcome', 'welcome');

//Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
//Route::get('/posts/{post}/comments/{comment}', funtion ())

Route::get('/', function(){
    echo "Selamat Datang";
});

Route::get('/about', function(){
    echo "2041720226 Windo Arya Rizki Ramadhani";
});

Route::get('/article/{id}', function($id){
    echo "Halaman Artikel dengan ID" . $id;
});
