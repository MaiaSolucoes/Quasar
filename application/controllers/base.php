<?php

class Base_Controller extends Controller {

	public function __construct() {

		Asset::add('css_default', 'css/default.css');
		Asset::add('css_error', 'css/error.css');
		Asset::add('js_default', 'js/default.js');
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}