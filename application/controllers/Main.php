<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $data['data'] = array(
            'meta' => 'My site',
            'title' => 'Open Source Todo app 1.0'
        );
        $this->smarty->view('default.tpl', $data);
    }
}
