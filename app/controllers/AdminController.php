<?php

class AdminController extends BaseController{
	
	public function getIndex()
	{
		echo 'Hello World,Hello My Dream...';
	}
	public function getAdmin()
	{
		if($this->isLogin())
		{
			echo 'welcome to My blog! enjoy it!';			
		}
		else
		{
			echo 'Please login in,otherwise No access permission';
			//return Redirect::to('admin/login');
		}
	}
	public function postLogin()
	{
		$loginName = $this->getParamLoingName();
		$password = $this->getParamPassword();

		$useId = AdministratorModule::loginByNameAndPassword($userName,$password);
		if($useId)
		{
			Session::set('user_id',$useId);
		}
	    //$this->outputParamErrorIfExit();

	}
	private function getParamLoingName($param = 'login_name')
	{
		$loginName = $this->getParam($param);
		return $loginName;
	}
	private function getParamPassword($param = 'password')
	{
		$password = $thid->getParam($param);
		return $password;
	}
}