<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

    function attendee_session()
    {
        $attendee_data = array(
            'url_id' => $this->input->post('url_id'),
            'url_id_2' => $this->input->post('url_id_2'),
            'url_id_3' => $this->input->post('url_id_3'),
            'statusxx' => $this->input->post('statusxx')

        );

        $this->session->set_userdata($attendee_data);
    }

    function attendee_session_unset()
    {
        $this->session->unset_userdata("url_id");
        $this->session->unset_userdata("url_id_2");
        $this->session->unset_userdata("url_id_3");
        $this->session->unset_userdata("statusxx");
    }

    function all()
    {
        $this->attendee_session_unset();

        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

        // $this->load->view('attendance/auto_absent_3_1', $url_info);
        // $this->load->view('attendance/auto_absent_3', $url_info);
        // $this->load->view('attendance/auto_absent_3_2', $url_info);
        

        $this->session->set_userdata('nav_active', 'All');

        $this->load->view('must/header');

        $this->load->view('attendance/head', $url_info);
        $this->load->view('attendance/auto_absent_4', $url_info);
        $this->load->view('attendance/all_attendance', $url_info);
        $this->load->view('attendance/foot', $url_info);

        $this->load->view('must/footer');
        
    }

    function quorum()
    {
        $this->attendee_session_unset();
        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

        $this->load->view('must/header');
        $this->load->view('attendance/quorum', $url_info);
        $this->load->view('must/footer');
        
    }

    function present()
    {
        $this->attendee_session_unset();
        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Present');

        $this->load->view('must/header');

        $this->load->view('attendance/head', $url_info);
        $this->load->view('attendance/present_attendance', $url_info);
        $this->load->view('attendance/foot', $url_info);

        $this->load->view('must/footer');
        
    }

    function late()
    {
        $this->attendee_session_unset();
        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Late');

        $this->load->view('must/header');

        $this->load->view('attendance/head', $url_info);
        $this->load->view('attendance/late_attendance', $url_info);
        $this->load->view('attendance/foot', $url_info);

        $this->load->view('must/footer');
        
    }

    function absent()
    {
        $this->attendee_session_unset();
        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
        $this->session->set_userdata('nav_active', 'Absent');

        $this->load->view('must/header');

        $this->load->view('attendance/head', $url_info);
        $this->load->view('attendance/absent_attendance', $url_info);
        $this->load->view('attendance/foot', $url_info);

        $this->load->view('must/footer');
        
    }

    function add_attendee()
    {   
        $this->attendee_session_unset();
        $this->session->unset_userdata("nav_active");

        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);

        $this->load->view('must/header');

        $this->load->view('attendance/head', $url_info);
        $this->load->view('attendance/add_attendance', $url_info);
        $this->load->view('attendance/foot', $url_info);

        $this->load->view('must/footer');
        
    }
    

    function add_attendee_details()
    {   
        $this->attendee_session_unset();
        $this->session->unset_userdata("nav_active");

        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);

        $this->load->view('must/header');
        $this->load->view('attendance/add_attendance_details', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('statusxx','Statusxx','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->attendee_session();
            redirect('/attendance/add_attendee_proc');
        }
        
    }

    function add_attendee_proc()
    {

        $this->load->view('must/perfect_function');
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('attendance/add_attendance_proc', $url_info);
        
        redirect('attendance/add_attendee/'.$this->session->userdata("url_id"));

    }

    function edit_attendee()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('attendance/edit_attendee', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('username','Username','required');
        if ($this->form_validation->run() == TRUE)
        {
            $this->attendee_session();
            redirect('/attendance/edit_attendee_proc');
        }
    }

    function edit_attendee_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('attendance/edit_attendee_proc');
        redirect('attendance/all/'.$this->session->userdata("url_id"));
    }

    // PASTED
    function delete_attendee()
    {   
        $url_info['url_id'] = $this->uri->segment(3);
        $url_info['url_id_2'] = $this->uri->segment(4);
        $this->load->view('must/perfect_function');
        $this->load->view('must/header');
        $this->load->view('attendance/delete_attendee', $url_info);
        $this->load->view('must/footer');

        $this->form_validation->set_rules('url_id_3','URL ID','required');
        if ($this->form_validation->run() == TRUE)
        {
            
            $this->attendee_session();
            redirect('/attendance/delete_attendee_proc');
        }
    }
    
    function delete_attendee_proc()
    {
        $this->load->view('must/perfect_function');
        $this->load->view('attendance/delete_attendee_proc');
		redirect('attendance/all/'.$this->session->userdata("url_id"));
    }



}
