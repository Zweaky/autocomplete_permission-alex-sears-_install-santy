<?php
class PostController extends BaseController{

	//get action for the add
	public function getAdd(){

		return View::make('post.register');
	}
	public function show(){

		return View::make('master');
	}

	//post action for the add
	public function postAdd(){
		//make the validator
		$validator = Validator::make(Input::all(),array(
				'email' 		=> 'email|required|unique:users',
				'username' 		=> 'required|min:5',
				'password' 	=> 'required'
			)
		);

		if($validator->fails()){
			//show errors
			return Redirect::route('post-add-register')->withErrors($validator)->withInput();
		}else{
			//insert a record
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			
            $pass = Hash::make($password);
			//create a post object and save data
			$post = new User;
			$post->email = $email;
			$post->username = $username;
			
			$post->password = $pass;

			$post->save();
			return Redirect::route('post-add-get')->with('global','Successfully Register!');
		}
	}

}