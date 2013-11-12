<?php

class HomeController extends BaseController {

	
	public function showWelcome($status = 1)
	{
        if($status==1)
          $this->data['articles'] =HomeModule::searchArticleByCreated_at();
        else
            $this->data['articles'] = HomeModule::searchArticleByCommentNum();
		return $this->display('home',$this->data);
	}

}