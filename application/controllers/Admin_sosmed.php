<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sosmed extends CI_Controller 
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
        $data['data'] = $this->M_model->get_sosmed();
        $this->load->view('v_editsosmed', $data);
    }

    public function update($i)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $link       =   $this->input->post('link');
            $instagram  =   $this->input->post('instagram');
            $whatsapp   =   $this->input->post('whatsapp');
            $UpdatedAt  = date('Y-m-d H:i:s');

            $data = array(
                'link'          => $link,
                'instagram'     => $instagram,
                'whatsapp'      => $whatsapp,
                'UpdatedAt'     => $UpdatedAt,
                'UpdatedBy'     => $this->session->userdata('UserID'),
            );
            $this->M_model->update('Sosmed', ['idsosmed' => $id], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('Admin_sosmed');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('cabang');
        }
    }
}
