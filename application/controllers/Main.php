<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for all logged in users
 */
class Main extends MY_Controller {

	public function index()
	{

		$data['data'] = array(
			'meta' => 'My site',
			'title' => 'Open Source Todo app 1.0',
			'session' => $this->session->userdata("logged_in") ? true : false
		);
		$this->session->userdata("logged_in") ? $data['user'] = $this->session->userdata() : false;
		$this->smarty->view('default.tpl', $data);
	}
}