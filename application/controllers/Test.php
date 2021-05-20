<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function index()
	{
		$this->load->view('must/perfect_function');
		$this->load->view('test');
		print_r($_SESSION);
	}

}
