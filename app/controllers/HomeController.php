<?php

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
		// return View::make('hello');
		echo 'hello, this is a demo for FirstPage';
	}

	public function getHome()
	{
		// $result = new HomeModule;
		// $result =$result->getData();
		$result = HomeModule::getData();
		echo $result;
	}
	public function getHello()
	{
		echo 'hahahahah';
	}
	public function getTest()
	{
		$result = HomeModule::getTest();
		echo $result;
	}

}