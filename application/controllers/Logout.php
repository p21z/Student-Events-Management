<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function index()
	{
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
		$this->load->view('login/logout');
        $this->load->view('must/footer');
	}

    function logout_proc()
    {
        session_destroy();
        redirect('/login');
    }

}
