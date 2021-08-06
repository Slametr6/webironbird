<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_galeri extends CI_Controller 
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
        $data['data'] = $this->M_model->get_galeri();
        $this->load->view('bgaleri/v_galeri', $data);
    }

    public function add()
    {
        $this->load->view('bgaleri/v_addgaleri');
    }

    public function action_add()
    {
        $idgaleri             =   uniqid();
        $NamaKonten           =   $this->input->post('NamaKonten');
        $ImgThum              =   $this->input->post('ImgThum');
        $CreatedAt            =   date('Y-m-d H:i');

        $filesCount = count($_FILES['Img']['name']);
        for($i = 0; $i < $filesCount; $i++){
            $_FILES['file']['name']     = $_FILES['Img']['name'][$i];
            $_FILES['file']['type']     = $_FILES['Img']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['Img']['tmp_name'][$i];
            $_FILES['file']['error']    = $_FILES['Img']['error'][$i];
            $_FILES['file']['size']     = $_FILES['Img']['size'][$i];

            $uploadPath = './assets/images/portfolio/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);            

            if (!$this->upload->do_upload('file')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin_galeri/add');
            }else{
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/portfolio/' . $this->upload->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 360;
                $config['height'] = 240;
                $config['new_image'] = './assets/images/portfolio/' . $this->upload->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/portfolio/' . $this->upload->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 600;
                $config['height'] = 480;
                $config['new_image'] = './assets/images/portfolio/' . $this->upload->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                
                $data = array(
                    'idgaleri'   => $idgaleri,
                    'NamaKonten' => $NamaKonten,
                    'CreatedAt'  => $CreatedAt,
                    'CreatedBy'  => $this->session->userdata('UserID'),
                    'ImgThum'    => $this->upload->data('file_name')
                );

                $fileData = $this->upload->data();
                $uploadData[$i]['id'] = uniqid();
                $uploadData[$i]['idgaleri'] = $idgaleri;
                $uploadData[$i]['Img'] = $fileData['file_name'];
            }
        }
        if (!empty($uploadData)) {
            $this->M_model->insertimg($uploadData);
            $this->M_model->insert('Gallery', $data);
            $this->session->set_flashdata('success', 'Berhasil Menambah Data');
            redirect('admin_galeri');
        }
    }

    public function view($idgaleri)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idgaleri));
        if ($id) {
            $data['data'] = $this->M_model->get_galeri($id);
            $data['detgaleri'] = $this->M_model->get_detgaleri($id);
            $this->load->view('bgaleri/v_detgaleri', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_galeri');
        }
    }
	
	public function deletedet($id)
    {
    $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $id));
        if ($id) {
			$data['data'] = $this->M_model->get_detgaleri($id);
            $this->M_model->delete('det_galeri', ['id' => $id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_galeri');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_galeri');
        }
	}

	public function delete($idgaleri)
    {
    $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idgaleri));
        if ($id) {
			$data['data'] = $this->M_model->get_galeri($id);
            $this->M_model->delete('gallery', ['idgaleri' => $id], $data);
            $this->session->set_flashdata('success', 'Data deleted successfully!');
            redirect('admin_galeri');
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_galeri');
        }
	}
	
}
