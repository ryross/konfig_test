<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$config = Kohana::config('database');
		echo debug::vars($config);

		$this->response->body(View::factory('test'));
	}

} 
