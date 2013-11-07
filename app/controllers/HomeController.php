<?php

class HomeController extends BaseController {

	
	public function showWelcome()
	{
		$articles = Article::limit(5)->orderBy('created_at','DESC')->get();

		$this->display('home',$articles[0]);
	}

}