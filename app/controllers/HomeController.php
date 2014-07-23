<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use App\Models\DataModel;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
                $data = DataModel::all();
                $array = [
                    'isi' => $data,
                ];
		return View::make('hello', $array);
	}

}
