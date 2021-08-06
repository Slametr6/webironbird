<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_alasan extends CI_Controller 
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
        $data['data'] = $this->M_model->get_alasan();
        $this->load->view('v_editalasan', $data);
    }

    public function update($i)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $LayananPengirimanCepat     =   $this->input->post('LayananPengirimanCepat');
            $KeselamatanDanKenyamanan   =   $this->input->post('KeselamatanDanKenyamanan');
            $PelayananTerbaik           =   $this->input->post('PelayananTerbaik');
            $CustomerFocus              =   $this->input->post('CustomerFocus');
            $UpdatedAt                  = date('Y-m-d H:i:s');

            $data = array(
                'LayananPengirimanCepat'   => $LayananPengirimanCepat,
                'KeselamatanDanKenyamanan' => $KeselamatanDanKenyamanan,
                'PelayananTerbaik'         => $PelayananTerbaik,
                'CustomerFocus'            => $CustomerFocus,
                'UpdatedAt'                => $UpdatedAt,
                'UpdatedBy'                => $this->session->userdata('UserID'),
            );
            $this->M_model->update('Alasan', ['idalasan' => $id], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('Admin_alasan');   
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('Admin_alasan');
        }
    }
}
