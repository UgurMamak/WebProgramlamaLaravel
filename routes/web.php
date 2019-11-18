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

Auth::routes(); 
//login işlemi yaparken çalışan route yapısı
Route::get('/', array('as'=>'index','uses'=>'HomeController@index'));


Route::get('/index', 'Home2Controller@Fnkindex'); 

//Tasarımı daha tamamlanmamış sayfalar boşsayfaya yönlendirmek için yapıldı.
Route::get('/BosSayfa', 'Home2Controller@FnkBosSayfa'); 


//Admin ve üyeler için farklı profil sayfaları açılmaktadır.
Route::get('/Profil', array('as'=>'Profil','uses'=>'HomeController@FnkProfil'));
Route::post('/Profil', array('as'=>'Profil','uses'=>'IslemlerController@FnkProfilGuncelle'));


//Adminin Duyuru ekleme panelini görmesi ve post işlemini yapabilemesi için route atadık.
Route::get('/DuyuruEkleme', array('as'=>'DuyuruEkleme','uses'=>'HomeController@FnkDuyuruEkle'));
Route::post('/DuyuruEkleme', array('as'=>'DuyuruEkleme','uses'=>'IslemlerController@FnkDuyuruEkle2'));


//Siteye girenlerin dilek ve şikayetlerini yazabilecekleri ekrana girebilmesi için ve dilek ve şikayetlerini gönderebilmesi için route atadık.
Route::get('/DilekSikayet', array('as'=>'DilekSikayet','uses'=>'Home2Controller@FnkDilekSikayet'));
Route::post('/DilekSikayet', array('as'=>'DilekSikayet','uses'=>'Home2Controller@FnkDilekSikayetEkle'));


//Admin Sisteme Kayıtlı hesapları görmesi için
Route::get('/HesapListele', array('as'=>'HesapListele','uses'=>'HomeController@FnkHesapListele'));
Route::post('/HesapListele', array('as'=>'HesapListele','uses'=>'HomeController@FnkHesapGuncelle1'));
Route::post('/HesapListele2', array('as'=>'HesapListele2','uses'=>'HomeController@FnkHesapGuncelle2')); 