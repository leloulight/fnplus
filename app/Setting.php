<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model {

	//

	public $timestamps = false;

	protected $table = 'settings';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'title', 'description', 'keywords', 'active', 'favicon'];


}
