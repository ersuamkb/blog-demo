<?php

class HomeController extends BaseController {

	
	public function showWelcome()
	{
		$this->data["articles"]= Article::limit(5)->orderBy('created_at','DESC')->get();

		return View::make('home',$this->data);
	}

}