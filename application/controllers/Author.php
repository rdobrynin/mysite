<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Author group only
 */
class Author extends MY_Controller {	

	protected $access = "Author";

	public function index()
	{
		$this->smarty->view('default.tpl');
	}

}