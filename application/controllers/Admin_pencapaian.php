<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pencapaian extends CI_Controller 
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
        $data['data'] = $this->M_model->get_pencapaian();
        $this->load->view('bpencapaian/v_pencapaian', $data);
    }

    public function add()
    {
        $this->load->view('bpencapaian/v_addpencapaian');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/archive/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name = slug($this->input->post('Konten',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

        $Konten            =   $this->input->post('Konten');
        $CreatedAt         =   date('Y-m-d H:i:s');
        $Status            =   $this->input->post('Status');

        if ($this->Img->do_upload('Img')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/archive/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            // $config['rotation_angle'] = 'vrt';
            $config['overwrite'] = TRUE;
            $config['width'] = 521;
            $config['height'] = 369;
            $config['new_image'] = './assets/images/archive/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'Img'               => $this->Img->data('file_name'),
                'Konten'            => $Konten,
                'CreatedAt'         => $CreatedAt,
                'CreatedBy'         => $this->session->userdata('UserID'),
                'Status'            => $Status
            );
            $this->M_model->insert('pencapaian', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_pencapaian');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_pencapaian/add');
       }
    }

    public function edit($idpencapaian)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idpencapaian));
        if ($id) {
            $data['data'] = $this->M_model->get_pencapaian($id);
            $this->load->view('bpencapaian/v_editpencapaian', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_pencapaian');
        }
    }

    public function update($idpencapaian)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idpencapaian));
        if ($id) {
            $config['upload_path']  = './assets/images/archive/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('Konten', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

            $Konten            =   $this->input->post('Konten');
            $UpdatedAt         =   date('Y-m-d H:i:s');
            $Status            =   $this->input->post('Status');

            if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/archive/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 400;
                $config['height'] = 267;
                $config['new_image'] = './assets/images/archive/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'Konten'            => $Konten,
                    'Img'               => $this->Img->data('file_name'),
                    'Status'            => $Status
                );
                $this->M_model->update('pencapaian', ['idpencapaian' => $id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_pencapaian');
            } else {
                $data = array(
                    'Konten'            => $Konten,
                    'Status'            => $Status
                );
                $this->M_model->update('pencapaian', ['idpencapaian' => $id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_pencapaian');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_pencapaian');
        }
    }

    public function delete($idpencapaian)
    {
    $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idpencapaian));
        if ($id) {
            $data['data'] = $this->M_model->get_pencapaian($id);
            $this->M_model->delete('pencapaian', ['idpencapaian' => $id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_pencapaian');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_pencapaian');
        }
    }
}
