<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$config = Kohana::config('database');
		$this->view = View::factory('test');
		$this->view->config = $config;
		$this->view->production = Kohana::load(APPPATH.'config/production/database.php');
		$this->view->development = Kohana::load(APPPATH.'config/development/database.php');
		$this->view->original = Kohana::load(APPPATH.'config/database.php');

		$this->response->body($this->view->render());
	}

} 
