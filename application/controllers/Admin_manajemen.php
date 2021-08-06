<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_manajemen extends CI_Controller 
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
        $data['data'] = $this->M_model->get_manajemen();
        $this->load->view('bmanajemen/v_manajemen', $data);
    }

    public function add()
    {
        $this->load->view('bmanajemen/v_addmanajemen');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/team/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name = slug($this->input->post('Nama',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

		$Nama           =   $this->input->post('Nama');
		$Jabatan		=	$this->input->post('Jabatan');
        $CreatedAt      =   date('Y-m-d H:i:s');

        if ($this->Img->do_upload('Img')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/team/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            // $config['rotation_angle'] = 'vrt';
            $config['overwrite'] = TRUE;
            $config['width'] = 294;
            $config['height'] = 370;
            $config['new_image'] = './assets/images/team/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'Img'           => $this->Img->data('file_name'),
				'Nama'          => $Nama,
				'Jabatan'		=> $Jabatan,
                'CreatedAt'     => $CreatedAt,
                'CreatedBy'     => $this->session->userdata('UserID')
            );
            $this->M_model->insert('manajemen', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_manajemen');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_manajemen/add');
       }
    }

    public function edit($idmanajemen)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idmanajemen));
        if ($id) {
            $data['data'] = $this->M_model->get_manajemen($id);
            $this->load->view('bmanajemen/v_editmanajemen', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_manajemen');
        }
    }

    public function update($idmanajemen)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idmanajemen));
        if ($id) {
            $config['upload_path']  = './assets/images/team/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('Nama', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

			$Nama           =   $this->input->post('Nama');
			$Jabatan		=	$this->input->post('Jabatan');
            $UpdateAt      	=   date('Y-m-d H:i:s');

            if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/team/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 294;
                $config['height'] = 370;
                $config['new_image'] = './assets/images/team/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
					'Nama'          =>	$Nama,
					'Jabatan'		=>	$Jabatan,
					'Img'           =>	$this->Img->data('file_name'),
					'UpdateAt'		=>	$UpdateAt,
					'UpdatedBy'		=>	$this->session->userdata('UserID')
                );
                $this->M_model->update('manajemen', ['idmanajemen' => $id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_manajemen');
            } else {
                $data = array(
					'Nama'          =>	$Nama,
					'Jabatan'		=>	$Jabatan,
					'UpdateAt'		=>	$UpdateAt,
					'UpdatedBy'		=>	$this->session->userdata('UserID')
                );
                $this->M_model->update('manajemen', ['idmanajemen' => $id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_manajemen');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_manajemen');
        }
    }

    public function delete($idmanajemen)
    {
    $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idmanajemen));
        if ($id) {
            $data['data'] = $this->M_model->get_manajemen($id);
            $this->M_model->delete('manajemen', ['idmanajemen' => $id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_manajemen');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_manajemen');
        }
    }
}
