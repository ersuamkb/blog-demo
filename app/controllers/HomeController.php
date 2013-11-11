<?php

class HomeController extends BaseController {

	
	public function showWelcome()
	{

        $this->data['articles'] =HomeModule::searchArticleByCreated_at();
		return View::make('home',$this->data);
	}

}