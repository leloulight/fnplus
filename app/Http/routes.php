<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AnasayfaController@index');

/* 404 sayfası içi alttaki dosyayı değiştir.
 * vendor\laravel\framework\src\Illuminate\Foundation\Exceptions\Handler.php
 * kodu aktif hale getir.
 * if($e instanceof NotFoundHttpException)
		{
			return response()->view('404', [], 404);
		}
 */
// Dene
// Site Yönetimi Routing
Route::get('yonetim/ayarlar','Yonetim\SiteYonetimiController@index');
Route::get('yonetim/ayarlar/aktif/{id}','Yonetim\SiteYonetimiController@aktif');
Route::get('yonetim/ayarlar/ekle','Yonetim\SiteYonetimiController@getEkle');
Route::post('yonetim/ayarlar/ekle','Yonetim\SiteYonetimiController@postEkle');
Route::get('yonetim/ayarlar/sil/{id}','Yonetim\SiteYonetimiController@sil');
Route::post('yonetim/ayarlar/sil','Yonetim\SiteYonetimiController@topluSil');


// Kullanıcı Rooting
Route::get('yonetim', 'Yonetim\AdminPanelController@index');
Route::get('yonetim/kullanici','Yonetim\KullaniciController@index');
Route::get('yonetim/kullanici/ekle','Yonetim\KullaniciController@getEkle');
Route::post('yonetim/kullanici/ekle','Yonetim\KullaniciController@postEkle');
Route::get('yonetim/kullanici/duzenle/{id}','Yonetim\KullaniciController@getDuzenle');
Route::post('yonetim/kullanici/duzenle/{id}','Yonetim\KullaniciController@postDuzenle');
Route::get('yonetim/kullanici/sil/{id}','Yonetim\KullaniciController@sil');

// Giriş Çıkış ve Kayıt
Route::get('giris','LoginController@getGiris');
Route::get('cikis','LoginController@logout');
Route::post('giris','LoginController@postGiris');












