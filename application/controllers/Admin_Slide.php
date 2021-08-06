<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Slide extends CI_Controller 
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
        $data['data'] = $this->M_model->get_slide();
        $this->load->view('bslide/v_slide', $data);
    }

    public function add()
    {
        $this->load->view('bslide/v_addslide');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/slider/';
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
            $config['source_image'] = './assets/images/slider/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            // $config['rotation_angle'] = 'vrt';
            $config['overwrite'] = TRUE;
            $config['width'] = 1200;
            $config['height'] = 537;
            $config['new_image'] = './assets/images/slider/' . $this->Img->data('file_name');
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
            $this->M_model->insert('Slide', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_slide');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_slide/add');
       }
    }

    public function edit($idSlide)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idSlide));
        if ($id) {
            $data['data'] = $this->M_model->get_slide($id);
            $this->load->view('bslide/v_editslide', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_slide');
        }
    }

    public function update($idSlide)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idSlide));
        if ($id) {
            $config['upload_path']  = './assets/images/slider/';
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
                $config['source_image'] = './assets/images/slider/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 1200;
                $config['height'] = 537;
                $config['new_image'] = './assets/images/slider/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'Konten'            => $Konten,
                    'Img'               => $this->Img->data('file_name'),
                    'Status'            => $Status,
                    'UpdatedAt'         => $UpdatedAt
                );
                $this->M_model->update('slide', ['idSlide' => $id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_slide');
            } else {
                $data = array(
                    'Konten'            => $Konten,
                    'Status'            => $Status,
                    'UpdatedAt'         => $UpdatedAt
                );
                $this->M_model->update('Slide', ['idSlide' => $id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_slide');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_slide');
        }
    }

    public function delete($idSlide)
    {
    	$id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idSlide));
        if ($id) {
            $data['data'] = $this->M_model->get_slide($id);
            $this->M_model->delete('Slide', ['idSlide' => $id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_slide');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_slide');
        }
    }
}
