<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Admin group only
 */
class Admin extends MY_Controller {

	protected $access = "Admin";
	
	public function index()
	{
		$data['data'] = array(
			'section' => $this->uri->segment(1)
		);

		$this->smarty->view('admin/default.tpl', $data);
	}

}