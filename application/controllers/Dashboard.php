<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for all logged in users
 */
class Dashboard extends MY_Controller {	

	public function index()
	{
		if ($this->session->userdata("logged_in")) {
			$data['data'] = array(
				'section' => $this->uri->segment(1)
			);
			$data['user'] = $this->session->userdata();


			$this->smarty->view('dashboard/default.tpl', $data);
		}
		else {
			redirect("main");
		}
	}

}