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

    function officer_session()
    {
        $officer_data = array(
            'off_type' => $this->input->post('off_type')
        );

        $this->session->set_userdata($officer_data);
    }

    function officer_session_2()
    {
        $officer_data = array(
            'off_id' => $this->uri->segment(3),
            'off_type' => $this->input->post('off_type'),
            'user_id' => $this->input->post('user_id'),
            'org_id' => $this->input->post('org_id')
        );

        $this->session->set_userdata($officer_data);
    }

    function users_session_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("off_id");
        $this->session->unset_userdata("off_type");
    }

    function officer_details()
	{
        $this->users_session_unset();
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
        // print_r($_SESSION);
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
        
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
		$this->load->view('officers/position_add');
        $this->load->view('must/footer');

        $this->form_validation->set_rules('off_type','Officer Type','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->officer_session();
            redirect('/officers/position_add_proc');
        }
        // print_r($_SESSION);
    }

    function position_add_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('officers/position_add_proc');
        // $this->users_session_unset();
		redirect('/officers/officer_details/'.$this->session->userdata('user_id'));
    }

    function position_edit()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('officers/position_edit', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('off_type','Officer Type','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->officer_session_2();
            redirect('/officers/position_edit_proc');
        }
        // print_r($_SESSION);
    }

    function position_edit_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('officers/position_edit_proc');
        // $this->users_session_unset();
		redirect('/officers/officer_details/'.$this->session->userdata('user_id'));
    }

    function position_delete()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('officers/position_delete', $url_info);
        $this->load->view('must/footer');
        $this->form_validation->set_rules('user_id','user_id ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->officer_session_2();
            redirect('/officers/position_delete_proc');
        }

    }

    function position_delete_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('officers/position_delete_proc');
        // $this->users_session_unset();
		redirect('/officers/officer_details/'.$this->session->userdata('user_id'));
    }

    


}
