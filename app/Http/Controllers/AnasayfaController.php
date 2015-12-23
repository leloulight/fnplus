<?php namespace App\Http\Controllers;

use App\setting;

class AnasayfaController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$settings = Setting::where('active', '=', 1)->get();
		return view('anasayfa.anasayfa')->with(array('ayar' => $settings));
	}


}
