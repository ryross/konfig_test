<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$config = Kohana::config('database');
		$this->view = View::factory('test');
		$this->view->env = Kohana::$environment == Kohana::PRODUCTION ? 'production' : 'development';
		$this->view->config = $config;
		$this->view->production = Kohana::load(APPPATH.'config/env_production/database.php');
		$this->view->development = Kohana::load(APPPATH.'config/env_development/database.php');
		$this->view->original = Kohana::load(APPPATH.'config/database.php');

		$this->response->body($this->view->render());
	}

} 
