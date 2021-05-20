<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizations_view extends CI_Controller {

	function approved_events()
	{
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Approved');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/events_approved');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function pending_events()
	{
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Pending');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/events_pending');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function archived_events()
	{
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Archived');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/events_archived');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function all_events()
	{
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'All');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/events_all');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function add_event()
	{
        echo "hello";
	}
}
