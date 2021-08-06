<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kantor extends CI_Controller 
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
        $data['data'] = $this->M_model->get_kantor();
        $this->load->view('bkantor/v_kantor', $data);
    }

    public function add()
    {
        $this->load->view('bkantor/v_addkantor');
    }

    public function action_add()
    {
        $JenisKantor	=   $this->input->post('JenisKantor');
        $Alamat         =   $this->input->post('Alamat');
        $NoTelp      	=   $this->input->post('NoTelp');
		$Email      	=   $this->input->post('Email');
		$Lokasi			=	$this->input->post('Lokasi');
        $CreatedBy      =   $this->session->userdata('UserID');
        $CreatedAt      =   date('Y-m-d H:i:s');

        $data = array(
            'JenisKantor'	=> $JenisKantor,
            'Alamat'        => $Alamat,
            'NoTelp'     	=> $NoTelp,
			'Email'     	=> $Email,
			'Lokasi'		=>	$Lokasi,
            'CreatedBy'     => $CreatedBy,
            'CreatedAt'     => $CreatedAt
        );
        $this->M_model->insert('Kantor', $data);
        $this->session->set_flashdata('success', 'Data added successfully!');
        redirect('admin_kantor');
    }

    public function edit($i)
    {
    $idkantor = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idkantor) {
            $data['data'] = $this->M_model->get_kantor($idkantor);
            $this->load->view('bkantor/v_editkantor', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_kantor');
        }
    }

    public function update($i)
    {
    $idkantor = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idkantor) {
            $JenisKantor	=   $this->input->post('JenisKantor');
            $Alamat         =   $this->input->post('Alamat');
            $NoTelp      	=   $this->input->post('NoTelp');
			$Email      	=   $this->input->post('Email');
			$Lokasi			=	$this->input->post('Lokasi');
            $UpdatedBy      =   $this->session->userdata('UserID');
            $UpdatedAt      =   date('Y-m-d H:i:s');

            $data = array(
                'JenisKantor'	=> $JenisKantor,
                'Alamat'        => $Alamat,
                'NoTelp'     	=> $NoTelp,
				'Email'     	=> $Email,
				'Lokasi'		=> $Lokasi,
                'UpdatedBy'     => $UpdatedBy,
                'UpdatedAt'     => $UpdatedAt
            );
            $this->M_model->update('Kantor', ['idkantor' => $idkantor], $data);
            $this->session->set_flashdata('success', 'Data updated successfully!');
            redirect('admin_kantor');
            
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_kantor');
        }
    }

    public function delete($i)
    {
    $idkantor = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idkantor) {
            $data['data'] = $this->M_model->get_kantor($idkantor);
            $this->M_model->delete('Karir', ['idkantor' => $idkantor], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_kantor');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_kantor');
        }
    }

}
