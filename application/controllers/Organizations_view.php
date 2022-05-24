<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizations_view extends CI_Controller {

    function search_org_events_view()
	{
        $this->events_search_session();
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        // $this->session->set_userdata('nav_active', 'Pending');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/search_org_events_view');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

	function approved_events()
	{
        $this->events_search_session_unset();
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Approved');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/events_approved');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');

        // $this->form_validation->set_rules('search','Search','required');
        // if ($this->form_validation->run() == TRUE)
        // {
        //     $this->events_search_session();
        //     redirect('/organizations_view/search_org_events_view');            
        // }
	}

    function for_approval_events()
	{
        $this->events_search_session_unset();
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'For approval');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/events_for_approval');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function denied_events()
	{
        $this->events_search_session_unset();
        $this->load->view('must/perfect_function');

        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Denied');
        
		$this->load->view('must/header');
        $this->load->view('organizations_view/head', $url_info);
        $this->session->unset_userdata("nav_active");
        
        $this->load->view('organizations_view/events_denied');

        $this->load->view('organizations_view/foot');
        $this->load->view('must/footer');
	}

    function archived_events()
	{
        $this->events_search_session_unset();
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

    function pending_events()
	{
        $this->events_search_session_unset();
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

    function all_events()
	{
        $this->events_search_session_unset();
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

    function events_search_session()
    {

        $org_data = array(
            'search' => $this->input->post('search')
        );
        $this->session->set_userdata($org_data);
        
    }

    function events_search_session_unset()
    {
        $this->session->unset_userdata("search");
    }

}
