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
		return View::make('welcome.form');
	}
	public function signup()
	{
		return View::make('welcome.register');
	}
	public function login()
	{
		return View::make('welcome.login');
	}
	public function register()
	{
		$data=Input::all();
		$data['password']=Hash::make($data['password']);
		User::create($data);

		return Redirect::to('login');
	}
	public function loginreal()
	{
		$email=Input::get('email');
		$password=Input::get('password');

		if(Auth::attempt(['email' => $email, 'password' => $password]));
		{
		$user=Auth::user();
		$id=$user->id;
		Session::put('id',$id);	
		return Redirect::to('form');

		
		}
		return Redirect::to('register');
		
	}
	public function add()
	{
		$data=Input::all();
		DB::table('forms')->insert($data);
		return Redirect::to('register');
	}



}
