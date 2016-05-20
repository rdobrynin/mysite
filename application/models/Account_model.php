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
		$return = array();
		$query = $this
			->db
			->where('uid', $id)
			->where('status', '1')
			->get('account');
		$result = $query->result_array();
		if(!empty($result)){
			$count = 0;
			foreach($result as $v){
				$return[$count]['id'] = $v["id"];
				$return[$count]['uid'] = $v["uid"];
				$return[$count]['summa'] = $v["summa"];
				$return[$count]['credit'] = $v["credit"];
				$return[$count]['desc'] = $v["desc"];
				$return[$count]['date_created'] = time($v["date_created"]);
				$return[$count]['date_due'] = strtotime($v["date_due"]);
				$return[$count]['notify'] = $v["notify"];
				$return[$count]['status'] = $v["status"];
				$count ++;
			}
		}
		return $return;
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