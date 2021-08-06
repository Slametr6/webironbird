<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_callback extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $session = $this->session->userdata('logged_in');
        if (!isset($session)) {
            redirect(base_url());
        } else {
            $this->load->model('M_model');
        }
    }

    public function index()
    {
        $data['data'] = $this->M_model->get_callback();
        $this->load->view('bcallback/v_callback', $data);
    }

    public function action_add()
    {
        $this->load->model('M_model');
        $NamaLengkap        =   $this->input->post('NamaLengkap');
        $Subject            =   $this->input->post('Subject');
        $Email              =   $this->input->post('Email');
        $Pesan              =   $this->input->post('Pesan');
        $CreatedAt          =   date('Y-m-d H:i:s');

        $data = array(
            'NamaLengkap'    => $NamaLengkap,
            'Subject'        => $Subject,
            'Email'          => $Email,
            'Pesan'          => $Pesan,
            'CreatedAt'      => $CreatedAt     
        );
        $this->M_model->insert('Callback', $data);
    }
}
