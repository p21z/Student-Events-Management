<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Officers extends CI_Controller {

	function index()
	{
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
		$this->load->view('officers/officers_manage');
        $this->load->view('must/footer');
	}

    function officer_details()
	{
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
		$this->load->view('officers/officer_details', $url_info);
        $this->load->view('must/footer');
	}

    function position_add_options()
    {
        $url_data = array(
            'user_id' => $this->uri->segment(3)
        );
        $this->session->set_userdata($url_data);
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
		$this->load->view('officers/position_add_options');
        $this->load->view('must/footer');
    }

    function position_add()
    {
        $url_data = array(
            'user_id' => $this->uri->segment(3),
            'org_id' => $this->uri->segment(4)
        );
        $this->session->set_userdata($url_data);
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
		$this->load->view('officers/position_add');
        $this->load->view('must/footer');
        

    
    }

}
