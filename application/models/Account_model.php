<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {

	protected $access = "Author";

	public function __construct()
	{
		parent::__construct();
	}



//	 Get all own active data

	public function getAllData($id)
	{
		$query = $this
			->db
			->where('uid', $id)
			->where('status', '1')
			->get('account');
		if ($query) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	//	 Remove Item by id

	public function removeItem($id)
	{
		$data = array (
			'status' => 0,
		);
		$this->db->where('id', $id);
		$update = $this->db->update('account', $data);
		return $update;
	}


}