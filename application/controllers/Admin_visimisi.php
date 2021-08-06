<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_visimisi extends CI_Controller 
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
        $data['data'] = $this->M_model->get_visimisi();
        $this->load->view('v_editvisimisi', $data);
    }

    public function update($i)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $Visi		=   $this->input->post('Visi');
            $Misi		=   $this->input->post('Misi');
            $UpdateAt       = date('Y-m-d H:i:s');

            $data = array(
                'Visi'			=> $Visi,
                'Misi'			=> $Misi,
                'UpdateAt'      => $UpdateAt,
                'UpdatedBy'     => $this->session->userdata('UserID'),
            );
            $this->M_model->update('Visimisi', ['idvisimisi' => $id], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('Admin_visimisi');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('Admin_visimisi');
        }
    }
}
