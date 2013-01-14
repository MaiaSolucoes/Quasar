<?php

class Blog_Controller extends Base_Controller {

	public function get_rules() {
		return array(
			'description' => 'required|min:5|max:50',
			'content' => 'required|min:10|max:2048'
		);
	}

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index() {

		$posts = array(
			array(
				'name' => 'Primeiro post',
				'desc' => 'Comentário'
			),
			array(
				'name' => 'Segundo post',
				'desc' => 'Comentário'
			),
			array(
				'name' => 'Terceiro post',
				'desc' => 'Comentário'
			),
			array(
				'name' => 'Quarto post',
				'desc' => 'Comentário'
			)
		);
		return View::make('blog.index')->with('posts', $posts);
	}

	public function action_new() {
		return View::make('blog.new');
	}

	public function action_add() {

		$validator = Validator::make(Input::all(), $this->get_rules());

		if($validator->passes()) {
			die('inseriu registro');
		} else {
			Input::flash();

			return Redirect::to('blog/new')
				->with_errors($validator);
		}


	}

}