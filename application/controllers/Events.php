<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

// EVENTS
    function events_session()
    {
        $events_data = array(
            'org_id' => $this->input->post('org_id'),
            'org_name' => $this->input->post('org_name'),
            'event_name' => $this->input->post('event_name'),
            'start_date' => $this->input->post('start_date'),
            'start_time' => $this->input->post('start_time'),
            'end_date' => $this->input->post('end_date'),
            'end_time' => $this->input->post('end_time'),
            'venue' => $this->input->post('venue'),
            'event_description' => $this->input->post('event_description')
        );

        $this->session->set_userdata($events_data);
    }

    function events_session_unset()
    {
        // $this->session->unset_userdata("org_id");
        // $this->session->unset_userdata("org_name");
        $this->session->unset_userdata("event_name");
        $this->session->unset_userdata("start_date");
        $this->session->unset_userdata("start_time");
        $this->session->unset_userdata("end_date");
        $this->session->unset_userdata("end_time");
        $this->session->unset_userdata("venue");
        $this->session->unset_userdata("event_description");

    }

	function add_events()
	{
		$this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');

        $this->load->view('events/add_events', $url_info);

        $this->load->view('must/footer');

        $this->form_validation->set_rules('event_name', 'Event name', 'required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->events_session();
            redirect('/events/add_events_proc');
        }
	}

    function add_events_proc()
    {
        // print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/add_events_proc');
        $this->events_session_unset();
		redirect('/organizations_view/pending_events/'.$this->session->userdata("org_id"));
    }

    function event_details()
    {
        $this->common_function_room_session_unset();
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');

        $this->load->view('events/event_details', $url_info);

        $this->load->view('must/footer');
    }
// COMMON FUNCTION ROOM
    function common_function_room_session()
    {
        
        $common_function_room_data_1 = array
        (
        'url_id' => $this->input->post('url_id'),
        'url_id_2' => $this->input->post('url_id_2'),
        'url_id_3' => $this->input->post('url_id_3'),
        'func_room' => $this->input->post('func_room'),
        'num_users' => $this->input->post('num_users'),
        'purpose' => $this->input->post('purpose'),
        'fund_source' => $this->input->post('fund_source'),
        'amount' => $this->input->post('amount'),
        'person_respo' => $this->input->post('person_respo'),
        'specs' => $this->input->post('specs')
        );

        $this->session->set_userdata($common_function_room_data_1);
    }

    function common_function_room_session_2()
    {
        
        $common_function_room_data_2 = array
        (
        'date_start' => $this->input->post('date_start'),
        'time_start' => $this->input->post('time_start'),
        'date_end' => $this->input->post('date_end'),
        'time_end' => $this->input->post('time_end')
        );

        $this->session->set_userdata($common_function_room_data_2);
    }

    function common_function_room_session_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("func_room");
        $this->session->unset_userdata("num_users");
        $this->session->unset_userdata("purpose");
        $this->session->unset_userdata("fund_source");
        $this->session->unset_userdata("amount");
        $this->session->unset_userdata("person_respo");
        $this->session->unset_userdata("specs");
        $this->session->unset_userdata("date_start");
        $this->session->unset_userdata("time_start");
        $this->session->unset_userdata("date_end");
        $this->session->unset_userdata("time_end");
    }

    function add_common_function_room()
    {
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('events/rsrv_cfr/add_common_function_room', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('func_room', 'Facility/Function Room', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->common_function_room_session();
            redirect('/events/add_common_function_room_2/'.$this->input->post('url_id'));
        }
    }

    function add_common_function_room_2()
    {
        
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/rsrv_cfr/add_common_function_room_2', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('date_start', 'Date Start', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->common_function_room_session_2();
            redirect('/events/add_common_function_room_proc/'.$this->session->userdata('url_id'));
        }
    }

    function add_common_function_room_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/rsrv_cfr/add_common_function_room_proc', $url_info);
        $this->load->view('must/footer');
        redirect('/events/event_details/'.$this->session->userdata('url_id_2'));
        
    }

    function edit_common_function_room()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/rsrv_cfr/edit_common_function_room', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('func_room', 'Facility/Function Room', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->common_function_room_session();
            redirect('/events/edit_common_function_room_2/'.$this->input->post('url_id'));
        }
    }

    function edit_common_function_room_2()
    {
        
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/rsrv_cfr/edit_common_function_room_2', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('date_start', 'Date Start', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->common_function_room_session_2();
            redirect('/events/edit_common_function_room_proc/'.$this->session->userdata('url_id'));
        }
    }

    function edit_common_function_room_proc()
    {

        $this->load->view('must/perfect_function');
        $this->load->view('events/rsrv_cfr/edit_common_function_room_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function delete_common_function_room()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/rsrv_cfr/delete_common_function_room', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->common_function_room_session();
            redirect('/events/delete_common_function_room_proc');
        }
    }

    function delete_common_function_room_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/rsrv_cfr/delete_common_function_room_proc');
        // $this->users_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));
    }
// CASH/CHEQUE REQ
    function cash_requisition_session()
    {
        
        $cash_requisition_data_1 = array
        (
        'url_id' => $this->input->post('url_id'),
        'url_id_2' => $this->input->post('url_id_2'),
        'url_id_3' => $this->input->post('url_id_3'),
        'event_id' => $this->input->post('event_id'),
        'busfare' => $this->input->post('busfare'),
        'taxifare' => $this->input->post('taxifare'),
        'otherfare' => $this->input->post('otherfare'),
        'food_allowance' => $this->input->post('food_allowance'),
        'reg_fee' => $this->input->post('reg_fee'),
        'accommodation' => $this->input->post('accommodation'),
        'honorarium' => $this->input->post('honorarium'),
        'rel_of_acco' => $this->input->post('rel_of_acco'),
        'monthly_bills' => $this->input->post('monthly_bills'),
        'supplies' => $this->input->post('supplies'),
        'purpose' => $this->input->post('purpose'),
        'pay_to' => $this->input->post('pay_to'),
        'date_need' => $this->input->post('date_need'),
        'datexx' => $this->input->post('datexx')
        // continue listing sessions
        );

        $this->session->set_userdata($cash_requisition_data_1);
    }

    function cash_requisition_session_2()
    {
        
        $cash_requisition_data_2 = array
        (
        
        );

        $this->session->set_userdata($cash_requisition_data_2);
    }

    function cash_requisition_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("event_id");
        $this->session->unset_userdata("busfare");
        $this->session->unset_userdata("taxifare");
        $this->session->unset_userdata("otherfare");
        $this->session->unset_userdata("food_allowance");
        $this->session->unset_userdata("reg_fee");
        $this->session->unset_userdata("accommodation");
        $this->session->unset_userdata("honorarium");
        $this->session->unset_userdata("rel_of_acco");
        $this->session->unset_userdata("monthly_bills");
        $this->session->unset_userdata("supplies");
        $this->session->unset_userdata("purpose");
        $this->session->unset_userdata("pay_to");
        $this->session->unset_userdata("date_need");
        $this->session->unset_userdata("datexx");
        
        
    }

    function add_cash_requisition()
    {
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('events/csh_req/add_cash_requisition', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('pay_to', 'Pay to', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->cash_requisition_session();
            redirect('/events/add_cash_requisition_room_proc/'.$this->input->post('url_id'));
        }
    }

    function add_cash_requisition_room_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/csh_req/add_cash_requisition_room_proc', $url_info);
        $this->load->view('must/footer');
        redirect('/events/event_details/'.$this->session->userdata('url_id_2'));
        
    }

    function edit_cash_requisition()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/csh_req/edit_cash_requisition', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('pay_to', 'Pay to', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->cash_requisition_session();
            redirect('/events/edit_cash_requisition_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_cash_requisition_proc()
    {

        $this->load->view('must/perfect_function');
        
        $this->load->view('events/csh_req/edit_cash_requisition_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function delete_cash_requisition()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/csh_req/delete_cash_requisition', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->cash_requisition_session();
            redirect('/events/delete_cash_requisition_proc');
        }
    }

    function delete_cash_requisition_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/csh_req/delete_cash_requisition_proc');
        // $this->users_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));
    }





}
