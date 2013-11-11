<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

    protected $date =array();

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	protected function redirect($ur = '')
	{
		if(!preg_match('#^https?://#i',$url))
		{
			$url = URL::to('/').$url;
		}

		return Redirect::to($url);
	}
	protected function isLogin()
	{
		return $this->getLoginUserId()>0;
	}
	protected function getLoginUserId()
	{
		return Session::get('user_id');
	}
	protected function getParam($param)
	{
		return Input::get($param);
	}
	
	protected function display($view,$data)
    {
       
         return View::make($view,$data);
    }


}