<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

	function index()
	{
		$this->load->view('must/perfect_function');
		$this->load->view('must/header');

        if ($this->session->userdata('access')==="Dean")
        {
            $this->load->view('notification/dean_notif');
        } else
        {
            $this->load->view('notification/spec_notif');
        }
        
		$this->load->view('must/footer');

    }


}
