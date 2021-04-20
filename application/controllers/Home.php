<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		$this->load->view('must/header.php');
        $this->load->view('home/home.php');
        $this->load->view('must/footer.php');
	}

}
