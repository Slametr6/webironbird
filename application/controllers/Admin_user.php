<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user extends CI_Controller 
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
        $data['data'] = $this->M_model->get_users();
        $this->load->view('busers/v_users', $data);
    }

    public function add()
    {
        $this->load->view('busers/v_addusers');
    }

    public function action_add()
    {
        $UserID       =   $this->input->post('UserID');
        $Name         =   $this->input->post('Name');
        $NickName     =   $this->input->post('NickName');
        $Password     =   password_hash($this->input->post('Password'), PASSWORD_DEFAULT);
        $Email        =   $this->input->post('Email');
        $CreatedAt    =   date('Y-m-d H:i:s');

        $data = array(
            'UserID'        => $UserID,
            'Name'          => $Name,
            'NickName'      => $NickName,
            'Password'      => $Password,
            'Email'         => $Email,
            'CreatedAt'     => $CreatedAt,
        );
        $this->M_model->insert('Logins', $data);
        $this->session->set_flashdata('success', 'Data added successfully!');
        redirect('admin_user');
    }
}
