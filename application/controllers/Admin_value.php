<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_value extends CI_Controller 
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
        $data['data'] = $this->M_model->get_value();
        $this->load->view('v_editvalue', $data);
    }

    public function update($i)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $Integrity		=   $this->input->post('Integrity');
            $Execution		=   $this->input->post('Execution');
			$Innovation     =   $this->input->post('Innovation');
			$Commitment		= 	$this->input->post('Commitment');
            $CustomerFocus  =   $this->input->post('CustomerFocus');
            $UpdateAt       = date('Y-m-d H:i:s');

            $data = array(
                'Integrity'			=> $Integrity,
                'Execution'			=> $Execution,
                'Innovation'        => $Innovation,
				'CustomerFocus'     => $CustomerFocus,
				'Commitment'		=> $Commitment,
                'UpdateAt'          => $UpdateAt,
                'UpdatedBy'         => $this->session->userdata('UserID'),
            );
            $this->M_model->update('Value', ['idvalue' => $id], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('Admin_value');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('Admin_value');
        }
    }
}
