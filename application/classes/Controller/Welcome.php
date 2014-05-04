<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('<br><br><div align="center"><img src="http://www.madstudios.com/modules/madwww/media/assets/img/mad_logo.png"></div>');
	}

} // End Welcome
