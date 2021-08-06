<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_karir extends CI_Controller 
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
        $data['data'] = $this->M_model->get_karir();
        $this->load->view('bkarir/v_loker', $data);
    }

    public function add()
    {
        $this->load->view('bkarir/v_addloker');
    }

    public function action_add()
    {
        $JenisKarir       =   $this->input->post('JenisKarir');
        $TglMulai         =   $this->input->post('TglMulai');
        $TglBerakhir      =   $this->input->post('TglBerakhir');
        $Kualifikasi      =   $this->input->post('Kualifikasi');
        $CreatedBy        =   $this->session->userdata('UserID');
        $CreatedAt        =   date('Y-m-d H:i:s');
        $Slug             =   slug($this->input->post('JenisKarir',TRUE));
        $Status           =   $this->input->post('Status');

        $data = array(
            'JenisKarir'      => $JenisKarir,
            'TglMulai'        => $TglMulai,
            'TglBerakhir'     => $TglBerakhir,
            'Kualifikasi'     => $Kualifikasi,
            'CreatedBy'       => $CreatedBy,
            'CreatedAt'       => $CreatedAt,
            'Slug'            => $Slug,
            'Status'          => $Status
        );
        $this->M_model->insert('Karir', $data);
        $this->session->set_flashdata('success', 'Data added successfully!');
        redirect('admin_karir');
    }

    public function edit($i)
    {
    $idKarir = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idKarir) {
            $data['data'] = $this->M_model->get_karir($idKarir);
            $this->load->view('bkarir/v_editkarir', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_karir');
        }
    }

    public function update($i)
    {
    $idKarir = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idKarir) {
            $JenisKarir       =   $this->input->post('JenisKarir');
            $TglMulai         =   $this->input->post('TglMulai');
            $TglBerakhir      =   $this->input->post('TglBerakhir');
            $Kualifikasi      =   $this->input->post('Kualifikasi');
            $CreatedBy        =   $this->session->userdata('UserID');
            $Slug             =   slug($this->input->post('JenisKarir',TRUE));
            $Status           =   $this->input->post('Status');
            $UpdatedAt        =   date('Y-m-d H:i:s');

            $data = array(
                'JenisKarir'      => $JenisKarir,
                'TglMulai'        => $TglMulai,
                'TglBerakhir'     => $TglBerakhir,
                'Kualifikasi'     => $Kualifikasi,
                'CreatedBy'       => $CreatedBy,
                'Slug'            => $Slug,
                'Status'          => $Status,
                'UpdatedAt'       => $UpdatedAt
            );
            $this->M_model->update('Karir', ['idKarir' => $idKarir], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('admin_karir');
            
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_karir');
        }
    }

    public function delete($i)
    {
    $idKarir = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idKarir) {
            $data['data'] = $this->M_model->get_karir($idKarir);
            $this->M_model->delete('Karir', ['idKarir' => $idKarir], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_karir');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_karir');
        }
    }

}
