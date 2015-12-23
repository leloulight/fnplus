<?php namespace App\Http\Controllers\Yonetim;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Redirect;

class AdminPanelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 */
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		if(!Sentry::check())
			return Redirect::to('/giris');

		return view('apanel/yonetim');
	}

}
