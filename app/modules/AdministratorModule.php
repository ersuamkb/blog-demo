<?php

class AdministratorModule {
	
	public static function login($userName,$password)
	{
		$result = User::where('name',$userName)->where('password',$password)->get();
	}
}