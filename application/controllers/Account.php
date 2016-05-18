<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Admin group only
 */
class Account extends MY_Controller {


	function __construct() {
		parent::__construct();
		$this->load->model('account_model');
		$id = $this->session->userdata('id');
	}

	
	public function index()
	{

		$user = $this->session->userdata();
		$id = $user['id'];
		$data['data'] = array(
			'account' => $this->account_model->getAllData($id),
			'section' => $this->uri->segment(1)
		);



		$this->smarty->view('account/default.tpl', $data);
	}



	public function getDataAjax()
	{

		if(!$this->input->is_ajax_request()) {
			redirect('404');
		}
		$user = $this->session->userdata();
		$id = $user['id'];
		$result['header'] = 'My Account';
		$result['data'] = array(
			'account' => $this->account_model->getAllData($id)
		);

		echo json_encode($result);
	}

	/**
	 * RemoveItem
	 * @param null $id
	 */

	public function removeItem($id = null)
	{
		if ($id == NULL) {
			echo json_encode(false);
		} else {
			$this->account_model->removeItem($id);
			$message = array('id' => $id, 'message' => 'DELETED!');
			echo json_encode($message);
		}

	}

}