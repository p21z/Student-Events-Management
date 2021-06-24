<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

// ALWAYS UNSET

// EVENTS
    function events_session()
    {
        $events_data = array(
            'url_id' => $this->input->post('url_id'),
            'url_id_2' => $this->input->post('url_id_2'),
            'org_id' => $this->input->post('org_id'),
            'org_name' => $this->input->post('org_name'),
            'event_name' => $this->input->post('event_name'),
            'start_date' => $this->input->post('start_date'),
            'start_time' => $this->input->post('start_time'),
            'end_date' => $this->input->post('end_date'),
            'end_time' => $this->input->post('end_time'),
            'venue' => $this->input->post('venue'),
            'event_description' => $this->input->post('event_description'),
            'statusxx' => $this->input->post('statusxx'),
            'remarks' => $this->input->post('remarks')
        );

        $this->session->set_userdata($events_data);
    }

    function events_session_unset()
    {
        // $this->session->unset_userdata("org_id");
        // $this->session->unset_userdata("org_name");
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("event_name");
        $this->session->unset_userdata("start_date");
        $this->session->unset_userdata("start_time");
        $this->session->unset_userdata("end_date");
        $this->session->unset_userdata("end_time");
        $this->session->unset_userdata("venue");
        $this->session->unset_userdata("event_description");
        $this->session->unset_userdata("statusxx");
        $this->session->unset_userdata("remarks");

        $this->session->unset_userdata("org_id");
        $this->session->unset_userdata("org_name");
        
        $this->session->unset_userdata("alert_msg");

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
            redirect('/events/add_events_proc'.$this->session->userdata('url_id'));
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

    function edit_events()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/edit_events', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('event_name', 'Event name', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->events_session();
            redirect('/events/edit_events_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_events_proc()
    {

        $this->load->view('must/perfect_function');
        $this->load->view('events/edit_events_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function edit_events_status()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/edit_events_status', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('statusxx', 'Status', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->events_session();
            redirect('/events/edit_events_status_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_events_status_proc()
    {

        $this->load->view('must/perfect_function');
        $this->load->view('events/edit_events_status_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function edit_events_remarks()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/edit_events_remarks', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('remarks', 'Remarks', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->events_session();
            redirect('/events/edit_events_remarks_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_events_remarks_proc()
    {

        $this->load->view('must/perfect_function');
        $this->load->view('events/edit_events_remarks_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function delete_events()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/delete_events', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->events_session();
            redirect('/events/delete_events_proc');
        }
    }

    function delete_events_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/delete_events_proc');
        // $this->users_session_unset();
		redirect('/organizations_view/pending_events/'.$this->session->userdata("url_id"));
    }

    function event_details()
    {
        $this->common_function_room_session_unset();
        $this->cash_requisition_unset();
        $this->catering_requisition_unset();
        $this->in_campus_activity_unset();
        $this->in_campus_activity_unset();
        $this->travel_permit_unset();
        $this->trip_ticket_unset();
        $this->events_session_unset();

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

// CATERING REQUISITION
    function catering_requisition_session()
    {
        
        $cash_requisition_data_1 = array
        (
        'url_id' => $this->input->post('url_id'),
        'url_id_2' => $this->input->post('url_id_2'),
        'url_id_3' => $this->input->post('url_id_3'),
        'event_id' => $this->input->post('event_id'),
        'datexx' => $this->input->post('datexx'),
        'time_needed' => $this->input->post('time_needed'),
        'occasion' => $this->input->post('occasion'),
        'num_guest' => $this->input->post('num_guest'),
        'menu' => $this->input->post('menu'),
        'venue' => $this->input->post('venue'),
        'remarks' => $this->input->post('remarks'),
        );

        $this->session->set_userdata($cash_requisition_data_1);
    }

    function catering_requisition_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("event_id");
        $this->session->unset_userdata("datexx");
        $this->session->unset_userdata("time_needed");
        $this->session->unset_userdata("occasion");
        $this->session->unset_userdata("num_guest");
        $this->session->unset_userdata("menu");
        $this->session->unset_userdata("venue");
        $this->session->unset_userdata("remarks");
    }

    function add_catering_requisition()
    {
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('events/cat_req/add_catering_requisition', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('datexx', 'Date', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->catering_requisition_session();
            redirect('/events/add_catering_requisition_room_proc/'.$this->input->post('url_id'));
        }
    }

    function add_catering_requisition_room_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/cat_req/add_catering_requisition_room_proc', $url_info);
        $this->load->view('must/footer');
        redirect('/events/event_details/'.$this->session->userdata('url_id_2'));
        
    }

    function edit_catering_requisition()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/cat_req/edit_catering_requisition', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('datexx', 'Date', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->catering_requisition_session();
            redirect('/events/edit_catering_requisition_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_catering_requisition_proc()
    {

        $this->load->view('must/perfect_function');
        
        $this->load->view('events/cat_req/edit_catering_requisition_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function delete_catering_requisition()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/cat_req/delete_catering_requisition', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->cash_requisition_session();
            redirect('/events/delete_catering_requisition_proc');
        }
    }

    function delete_catering_requisition_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/cat_req/delete_catering_requisition_proc');
        // $this->users_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));
    }
// IN CAMPUS ACTIVITY
    function in_campus_activity_session()
    {
        
        $cash_requisition_data_1 = array
        (
        'url_id' => $this->input->post('url_id'),
        'url_id_2' => $this->input->post('url_id_2'),
        'url_id_3' => $this->input->post('url_id_3'),
        'event_id' => $this->input->post('event_id'),
        'organizer' => $this->input->post('organizer'),
        'nature' => $this->input->post('nature'),
        'datexx' => $this->input->post('datexx'),
        'timexx' => $this->input->post('timexx'),
        'speaker' => $this->input->post('speaker'),
        'venue' => $this->input->post('venue'),
        'num_participants' => $this->input->post('num_participants'),
        'program_budget' => $this->input->post('program_budget'),
        'objective_1' => $this->input->post('objective_1'),
        'objective_2' => $this->input->post('objective_2'),
        'objective_3' => $this->input->post('objective_3')
        );

        $this->session->set_userdata($cash_requisition_data_1);
    }

    function in_campus_activity_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("event_id");
        $this->session->unset_userdata("organizer");
        $this->session->unset_userdata("nature");
        $this->session->unset_userdata("objective_1");
        $this->session->unset_userdata("objective_2");
        $this->session->unset_userdata("objective_3");
        $this->session->unset_userdata("datexx");
        $this->session->unset_userdata("timexx");
        $this->session->unset_userdata("speaker");
        $this->session->unset_userdata("venue");
        $this->session->unset_userdata("num_participants");
        $this->session->unset_userdata("program_budget");
    }

    function add_in_campus_activity()
    {
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('events/in_cmp/add_in_campus_activity', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('datexx', 'Date', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->in_campus_activity_session();
            redirect('/events/add_in_campus_activity_proc/'.$this->input->post('url_id'));
        }
    }

    function add_in_campus_activity_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/in_cmp/add_in_campus_activity_proc', $url_info);
        $this->load->view('must/footer');
        redirect('/events/event_details/'.$this->session->userdata('url_id_2'));
        
    }

    function edit_in_campus_activity()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/in_cmp/edit_in_campus_activity', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('organizer', 'Organizer', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->in_campus_activity_session();
            redirect('/events/edit_in_campus_activity_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_in_campus_activity_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        echo "jndfg";
        $this->load->view('events/in_cmp/edit_in_campus_activity_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function delete_in_campus_activity()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/in_cmp/delete_in_campus_activity', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->in_campus_activity_session();
            redirect('/events/delete_in_campus_activity_proc');
        }
    }

    function delete_in_campus_activity_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/in_cmp/delete_in_campus_activity_proc');
        // $this->users_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));
    }

// TRAVEL PERMIT

    function travel_permit_session()
    {
        
        $cash_requisition_data_1 = array
        (
        'url_id' => $this->input->post('url_id'),
        'url_id_2' => $this->input->post('url_id_2'),
        'url_id_3' => $this->input->post('url_id_3'),
        'event_id' => $this->input->post('event_id'),
        'name' => $this->input->post('name'),
        'place' => $this->input->post('place'),
        'venue' => $this->input->post('venue'),
        'datexx' => $this->input->post('datexx'),
        'date_return' => $this->input->post('date_return'),
        'relation1' => $this->input->post('relation1'),
        'relation2' => $this->input->post('relation2'),
        'others' => $this->input->post('others')
        );

        $this->session->set_userdata($cash_requisition_data_1);
    }

    function travel_permit_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("event_id");
        $this->session->unset_userdata("name");
        $this->session->unset_userdata("place");
        $this->session->unset_userdata("venue");
        $this->session->unset_userdata("datexx");
        $this->session->unset_userdata("date_return");
        $this->session->unset_userdata("relation1");
        $this->session->unset_userdata("relation2");
        $this->session->unset_userdata("others");
    }

    function add_travel_permit()
    {
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('events/tra_prmt/add_travel_permit', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('datexx', 'Date', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->travel_permit_session();
            redirect('/events/add_travel_permit_proc/'.$this->input->post('url_id'));
        }
    }

    function add_travel_permit_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/tra_prmt/add_travel_permit_proc', $url_info);
        $this->load->view('must/footer');
        redirect('/events/event_details/'.$this->session->userdata('url_id_2'));
    }

    function edit_travel_permit()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/tra_prmt/edit_travel_permit', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('datexx', 'Date', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->travel_permit_session();
            redirect('/events/edit_travel_permit_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_travel_permit_proc()
    {

        $this->load->view('must/perfect_function');
        $this->load->view('events/tra_prmt/edit_travel_permit_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function delete_travel_permit()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/tra_prmt/delete_travel_permit', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->travel_permit_session();
            redirect('/events/delete_travel_permit_proc');
        }
    }

    function delete_travel_permit_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/tra_prmt/delete_travel_permit_proc');
        // $this->users_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));
    }

// STUDENT LIST

    function student_list_session()
    {
        
        $cash_requisition_data_1 = array
        (
        'url_id' => $this->input->post('url_id'),
        'url_id_2' => $this->input->post('url_id_2'),
        'url_id_3' => $this->input->post('url_id_3'),
        'event_id' => $this->input->post('event_id'),
        'stud_name' => $this->input->post('stud_name'),
        'year' => $this->input->post('year'),
        'program' => $this->input->post('program'),
        'section' => $this->input->post('section')
        );

        $this->session->set_userdata($cash_requisition_data_1);
    }

    function student_list_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("event_id");
        $this->session->unset_userdata("stud_name");
        $this->session->unset_userdata("year");
        $this->session->unset_userdata("program");
        $this->session->unset_userdata("section");

    }

    function add_student_list()
    {
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        // $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        // $this->load->view('test4', $url_info);
        $this->load->view('events/stud_list/add_student_list', $url_info);
        $this->load->view('must/footer');

        // $this->form_validation->set_rules('stud_name', 'Name', 'required');
        // if ($this->form_validation->run()==TRUE)
        // {
        //     $this->student_list_session();
        //     redirect('/events/add_student_list_proc/'.$this->input->post('url_id'));
        // }
    }

    function student_list_view()
    {
        $this->student_list_unset();
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        // $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        // $this->load->view('test4', $url_info);
        $this->load->view('events/stud_list/student_list_view', $url_info);
        $this->session->unset_userdata("alert_msg");
        $this->load->view('must/footer');

        // $this->form_validation->set_rules('stud_name', 'Name', 'required');
        // if ($this->form_validation->run()==TRUE)
        // {
        //     $this->student_list_session();
        //     redirect('/events/add_student_list_proc/'.$this->input->post('url_id'));
        // }
    }

    function add_student_list_proc()
    {
        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('events/stud_list/add_student_list_proc', $url_info);
        $this->load->view('must/footer');
        
    }

    function edit_student_list()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/stud_list/edit_student_list', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('stud_name', 'Name', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->student_list_session();
            redirect('/events/edit_student_list_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_student_list_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('events/stud_list/edit_student_list_proc');
        // $this->events_session_unset();
		redirect('/events/student_list_view/'.$this->session->userdata("url_id_2"));

    }

    function delete_student_list()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/stud_list/delete_student_list', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->student_list_session();
            redirect('/events/delete_student_list_proc');
        }
    }

    function delete_student_list_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/stud_list/delete_student_list_proc');
		redirect('/events/student_list_view/'.$this->session->userdata("url_id_2"));
    }

// TRIP TICKET

    function trip_ticket_session()
    {
        
        $cash_requisition_data_1 = array
        (
        'url_id' => $this->input->post('url_id'),
        'url_id_2' => $this->input->post('url_id_2'),
        'url_id_3' => $this->input->post('url_id_3'),
        'event_id' => $this->input->post('event_id'),
        'request_unit' => $this->input->post('request_unit'),
        'person' => $this->input->post('person'),
        'driver' => $this->input->post('driver'),
        'vehicle' => $this->input->post('vehicle'),
        'activity' => $this->input->post('activity'),
        'date_use' => $this->input->post('date_use'),
        'dept_time' => $this->input->post('dept_time'),
        'eta' => $this->input->post('eta')
        );

        $this->session->set_userdata($cash_requisition_data_1);
    }

    function trip_ticket_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("event_id");
        $this->session->unset_userdata("request_unit");
        $this->session->unset_userdata("person");
        $this->session->unset_userdata("driver");
        $this->session->unset_userdata("vehicle");
        $this->session->unset_userdata("activity");
        $this->session->unset_userdata("date_use");
        $this->session->unset_userdata("dept_time");
        $this->session->unset_userdata("eta");

    }

    function add_trip_ticket()
    {
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/header');
        $this->load->view('events/trp_tckt/add_trip_ticket', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('person', 'Person', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->trip_ticket_session();
            redirect('/events/add_trip_ticket_proc/'.$this->input->post('url_id'));
        }
    }

    function add_trip_ticket_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/header');
        $this->load->view('events/trp_tckt/add_trip_ticket_proc', $url_info);
        $this->load->view('must/footer');
        redirect('/events/event_details/'.$this->session->userdata('url_id_2'));
        
    }

    function edit_trip_ticket()
    {
        // make edit
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/header');
        $this->load->view('must/perfect_function');

        $this->load->view('events/trp_tckt/edit_trip_ticket', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('person', 'Person', 'required');
        if ($this->form_validation->run()==TRUE)
        {
            $this->trip_ticket_session();
            redirect('/events/edit_trip_ticket_proc/'.$this->input->post('url_id'));
        }
    }

    function edit_trip_ticket_proc()
    {

        $this->load->view('must/perfect_function');
        $this->load->view('events/trp_tckt/edit_trip_ticket_proc');
        // $this->events_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));

    }

    function delete_trip_ticket()
    {

        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $url_info['url_id_3'] = $this->uri->segment(5);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/trp_tckt/delete_trip_ticket', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->trip_ticket_session();
            redirect('/events/delete_trip_ticket_proc');
        }
    }

    function delete_trip_ticket_proc()
    {
        print_r($_SESSION);
        $this->load->view('must/perfect_function');
        $this->load->view('events/trp_tckt/delete_trip_ticket_proc');
        // $this->users_session_unset();
		redirect('/events/event_details/'.$this->session->userdata("url_id_2"));
    }
    
    
//EVENTS_VIEW
    function all_events_view()
    {
        $this->load->view('must/perfect_function');
        $this->events_session_unset();
        $this->load->view('must/header');
        $this->load->view('events/events_view/all_events_view');
        $this->load->view('must/footer');
        
    } 

    function archived_events_view()
    {
        $this->load->view('must/perfect_function');
        $this->events_session_unset();
        $this->load->view('must/header');
        $this->load->view('events/events_view/archived_events_view');
        $this->load->view('must/footer');
        
    }

    function pending_events_view()
    {
        $this->load->view('must/perfect_function');
        $this->events_session_unset();
        $this->load->view('must/header');
        $this->load->view('events/events_view/pending_events_view');
        $this->load->view('must/footer');
        
    }

    function approved_events_view()
    {
        $this->load->view('must/perfect_function');
        $this->events_session_unset();
        $this->load->view('must/header');
        $this->load->view('events/events_view/approved_events_view');
        $this->load->view('must/footer');
        
    }

// CHANGE PICTURE

    function change_picture()
    {
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('events/change_picture', $url_info);
        $this->load->view('must/footer');
    }

    function change_profile_proc()
        {
            $url_info['url_id'] = $this->uri->segment(3);
            $this->load->view('must/perfect_function');
            $this->load->view('must/header');
            $this->load->view('events/change_profile_proc', $url_info);
            $this->load->view('must/footer');
            // redirect('/profile') ;   
        }



}
