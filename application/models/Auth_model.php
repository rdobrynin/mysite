<?php

class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function get_login()
    {
        $this->email = $_POST('email');
        $this->password = $_POST('password');
        $this->db->load('users', $this);
    }


}