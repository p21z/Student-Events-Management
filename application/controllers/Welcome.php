<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function index()
	{
		$this->load->view('welcome_message');
	}
	function yawa()
	{
		$this->load->view('welcome_message');
	}
	function test()
	{
		echo "mic check 123";
	}
}
