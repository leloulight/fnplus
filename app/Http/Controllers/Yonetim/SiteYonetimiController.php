<?php namespace App\Http\Controllers\Yonetim;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\setting;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class SiteYonetimiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 */

	public function index()
	{
		$settings = Setting::all();
		return view('apanel.siteyonetimi.siteyonetimi')->with(array('ayar' => $settings));
	}

	public function aktif($id)
	{
		Setting::where('active','=', 1)->update(['active' => 0]);

		$settings = Setting::find($id);
		$settings->active = 1;

		if($settings->save())
			return Redirect::to('/yonetim/ayarlar')->with('basarili', 'Ayar başarı ile aktif edildi.');
		else
			return Redirect::to('/yonetim/ayarlar')->with('hata', 'Ayar aktif edilemedi.');
	}

	public function getEkle()
	{
		return view('apanel.siteyonetimi.ekle');
	}

	/**
	 * @return mixed
	 */
	public function postEkle()
	{
		$validation = Validator::make(Input::all(),[
			'name'	 	   => 'required|unique:settings',
			'title'		   => 'required|max:255',
			'description'  => 'required|max:255',
			'keywords' 	   => 'required|max:255',
			'favicon'	   => 'mimes:jpeg,ico,png,jpg|max:500',
		]);

		if($validation->fails()){

			return Redirect::back()->withInput()->withErrors($validation->messages());

		}

		if (Input::hasFile('favicon'))
		{
			$file = Input::file('favicon');
			$extension = $file->getClientOriginalExtension();
			$filename = rand(11111, 99999) . '.' . $extension;
			$file->move('img', $filename);
		}
		else
		{
		   $filename = "favicon.ico";
		}

		if(Input::get('active') == 1) {

			Setting::where('active','=', 1)->update(['active' => 0]);
		}

		$settings = new Setting();
		$settings->name = Input::get('name');
		$settings->title = Input::get('title');
		$settings->description = Input::get('description');
		$settings->keywords = Input::get('keywords');
		$settings->active	= Input::get('active');
		$settings->favicon   = $filename;

		if($settings->save())
		{
			return Redirect::back()->withInput()->with(array('basarili' => 'Ayar başarı ile kaydedildi.'));
		}
		else
		{
			return Redirect::back()->withInput()->with(array('errors' => 'Ayar kaydedilemedi.'));
		}

	}

	public function sil($id)
	{
		$settings = Setting::find($id);

		if($settings->active==1) {
			Setting::where('id', '=', 1)->update(['active' => 1]);
		}

		if($settings->delete())
		{
			return Redirect::back()->withInput()->with(array('basarili' => 'Ayar başarı ile silindi.'));
		}
		else
		{
			return Redirect::back()->withInput()->with(array('hata' => 'Ayar başarı ile silinemedi.'));
		}
	}

	public function topluSil()
	{

		$ayar = Input::get('id');

		foreach ($ayar as $id) {

			Setting::find($id)->delete();

		}

		return Redirect::back()->withInput()->with(array('basarili' => 'Seçilen Ayarlar başarı ile silindi.'));
	}

}
