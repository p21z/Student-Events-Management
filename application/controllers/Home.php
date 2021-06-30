<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		
		$this->load->view('must/header');
		$this->load->view('must/perfect_function');
        
		if ($this->session->userdata('access')==="Student" OR $this->session->userdata('access')==="Officer")
		{
			$this->load->view('home/home_student');
		} else
		{
			$this->load->view('home/home_not_student');
		}
		
        $this->load->view('must/footer');
	}

}
