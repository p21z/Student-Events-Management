<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizations_view extends CI_Controller {

	function index()
	{
        $this->session->set_userdata('nav_active', 'Approved');
        print_r($_SESSION);
		$this->load->view('must/header');
        $this->load->view('organizations_view/head');
        $this->session->unset_userdata("nav_active");
        print_r($_SESSION);
        $this->load->view('organizations_view/events_approved');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function pending_events()
	{
        $this->session->set_userdata('nav_active', 'Pending');
        print_r($_SESSION);
		$this->load->view('must/header');
        $this->load->view('organizations_view/head');
        $this->session->unset_userdata("nav_active");
        print_r($_SESSION);
        $this->load->view('organizations_view/events_approved');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function archived_events()
	{
        $this->session->set_userdata('nav_active', 'Archived');
        print_r($_SESSION);
		$this->load->view('must/header');
        $this->load->view('organizations_view/head');
        $this->session->unset_userdata("nav_active");
        print_r($_SESSION);
        $this->load->view('organizations_view/events_approved');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function all_events()
	{
        $this->session->set_userdata('nav_active', 'All');
        print_r($_SESSION);
		$this->load->view('must/header');
        $this->load->view('organizations_view/head');
        $this->session->unset_userdata("nav_active");
        print_r($_SESSION);
        $this->load->view('organizations_view/events_approved');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

}
