<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizations extends CI_Controller {

	function index()
	{
        print_r($_SESSION);
        
		$this->load->view('must/perfect_function');
        $this->orgs_session_unset();
        $this->orgs_session_unset_2();
        $this->load->view('must/header');
        $this->load->view('orgs/orgs_manage');
        $this->load->view('must/footer');
	}

    function orgs_session()
    {

        $org_data = array(
            'url_id' => $this->input->post('url_id'),
            'org_id' => $this->input->post('org_id'),
            'org_name' => $this->input->post('org_name'),
            'org_description' => $this->input->post('org_description'),
            'org_category' => $this->input->post('org_category')
        );

        $this->session->set_userdata($org_data);
    }

    function orgs_session_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("org_id");
        $this->session->unset_userdata("org_name");
        $this->session->unset_userdata("org_description");
        $this->session->unset_userdata("org_category");
    }

    function orgs_session_2()
    {
        $table_name="tbl_programs";
        $inclusion_data=array('org_id' => $this->input->post('org_id'));
        
        $init_counter=1;
        $test_counter=count_rows($table_name);

        while($init_counter<=$test_counter)
        {
            $inclusion_data['check'.$init_counter]=$this->input->post('check'.$init_counter);
            $init_counter++;
        }

        $this->session->set_userdata($inclusion_data);
    }

    function orgs_session_unset_2()
    {
        $table_name="tbl_programs";
        $init_counter=1;
        $test_counter=count_rows($table_name);
        while($init_counter<=$test_counter)
        {
            $this->session->unset_userdata("check".$init_counter);
            $init_counter++;
        }
    }

    function inclusions_add_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('orgs/inclusions_add_proc');
		redirect('/organizations');
    }

    function inclusions_add_proc_2()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('orgs/inclusions_add_proc_2');
		redirect('/organizations');
    }

    function inclusions_delete_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('orgs/inclusions_delete_proc');
		// redirect('/organizations');
    }

	function organizations_add()
	{
		$this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('orgs/orgs_add');
        $this->load->view('must/footer');

        $this->form_validation->set_rules('org_name','Organization Name','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->orgs_session();
            redirect('/organizations/organizations_add_2');            
        }
	}

    function organizations_add_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('orgs/orgs_add_proc');
        // $this->users_session_unset();
		// redirect('/users');
    }

    function organizations_add_2()
	{
        if ($this->session->userdata("org_category")==="Program-based")
        {
            $this->load->view('must/perfect_function');
            $this->load->view('must/header');
            $this->load->view('orgs/orgs_add_2');
            $this->load->view('must/footer');
            
            if ($this->input->post('check1')||$this->input->post('check2')||$this->input->post('check3')||$this->input->post('check4')||$this->input->post('check5'))
            {
                $this->load->view('orgs/orgs_add_proc');
                $this->orgs_session_2();
                redirect('/organizations/inclusions_add_proc');
                
            }
        } else
        {
            $this->load->view('orgs/orgs_add_proc');
            redirect('organizations');
        }
		
        
	}

    function organizations_edit()
    {
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('orgs/orgs_edit', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('org_name','Organization Name','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->orgs_session();
            redirect('/organizations/organizations_edit_2');
        }
    }
    
    function organizations_edit_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('orgs/orgs_edit_proc');
        // $this->users_session_unset();
		redirect('organizations');
    }

    function organizations_edit_2()
	{
        $this->load->view('must/perfect_function');
        if ($this->session->userdata("org_category")==="Program-based")
        {
            print_r($_SESSION);
            
            $this->load->view('must/header');
            $this->load->view('orgs/orgs_edit_2');
            $this->load->view('must/footer');
            
            if ($this->input->post('check1')||$this->input->post('check2')||$this->input->post('check3')||$this->input->post('check4')||$this->input->post('check5'))
            {
                $this->load->view('orgs/orgs_edit_proc');
                $this->orgs_session_2();
                $this->load->view('orgs/inclusions_delete_proc');
                $this->load->view('orgs/inclusions_add_proc_2');
                
                // redirect('/organizations/inclusions_delete_proc');
                // redirect('/organizations/inclusions_delete_proc');
                // $this->load->view('orgs/inclusions_add_proc');
                redirect('organizations');
            }
        } else 
        {
            $this->load->view('orgs/orgs_edit_proc');
            redirect('organizations');
        }
        
	}

    function organizations_delete()
    {
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('orgs/orgs_delete', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->orgs_session();
            redirect('/organizations/organizations_delete_proc');
        }

    }

    function organizations_delete_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('orgs/orgs_delete_proc');
		redirect('/organizations');
    }


}