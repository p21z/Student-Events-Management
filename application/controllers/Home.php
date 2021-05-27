<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		
		$this->load->view('must/header');
		$this->load->view('must/perfect_function');
        $this->load->view('home/home');
        $this->load->view('must/footer');
	}

}
