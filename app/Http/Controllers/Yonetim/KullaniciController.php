<?php namespace App\Http\Controllers\Yonetim;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Hash;
use Redirect;
use Validator;
use Input;

class KullaniciController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 */
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		$user = User::paginate(10);
		return view('apanel/kullanici/kullanici')->with(array('kullanici' => $user));
	}

	public function getEkle()
	{
		return view('apanel/kullanici/ekle');
	}


	// Return düzenlenecek.
	public function postEkle()
	{
		$validation = Validator::make(Input::all(),[
			'username'	 => 'required|max:100|unique:users',
			'first_name' => 'required|max:255',
			'last_name'  => 'required|max:255',
			'email' 	 => 'required|email|max:255|unique:users',
			'password' 	 => 'required|min:6',
		]);

		if($validation->fails()){

			return Redirect::back()->withInput()->withErrors($validation->messages());

		}

        $user = new User();
		$user->username 	= Input::get('username');
		$user->first_name	= Input::get('first_name');
		$user->last_name 	= Input::get('last_name');
		$user->email 		= Input::get('email');
		$user->password 	= Hash::make(Input::get('password'));

		if($user->save())
		{
			return Redirect::back()->withInput()->with(array('basarili' => 'Kullanıcı başarı ile eklendi.'));
		}
		else
		{
			return Redirect::back()->withInput()->with(array('errors' => 'Kullanıcı eklenemedi.'));
		}
	}

	public function getDuzenle($id)
	{
		$user = User::find($id);
		return view('apanel.kullanici.duzenle')->with(array('u' => $user));
	}

	public function postDuzenle($id)
	{
		$validation = Validator::make(Input::all(),[
			'username'	 => 'required|max:100',
			'first_name' => 'required|max:255',
			'last_name'  => 'required|max:255',
			'email' 	 => 'required|email|max:255',
			'password' 	 => 'min:6',
		]);

		if($validation->fails()){

			return Redirect::back()->withInput()->withErrors($validation->messages());

		}

		$user = User::find($id);
		$user->username = Input::get('username');
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		if(Input::get('password')!="")
			$user->password = Hash::make(Input::get('password'));

		if($user->save())
		{
			return Redirect::back()->withInput()->with('basarili','Kullanıcı başarı ile güncellendi.');
			//return "Güncellendi";
		}
		else
		{
			return Redirect::back()->withInput()->with('hata','Kullanıcı başarı ile güncellendi.');
			//return "Güncellenemedi";
		}
	}


	public function sil($id)
	{
		if ($id==1)
			return Redirect::to('/yonetim/kullanici')
				   ->with('hata','Bu kullanıcıyı silebilmek için süper admin yetkisini kaldırmalısınız.');
		$user = User::find($id);

		if($user->delete())
		{
			return Redirect::to('/yonetim/kullanici')->with('basarili','Kullanıcı silindi');
		}
		else
		{
			return Redirect::to('/yonetim/kullanici')->with('hata','Kullanıcı silinemedi');
		}
	}


}
