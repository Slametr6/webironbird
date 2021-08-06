<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_berita extends CI_Controller 
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
        $data['data'] = $this->M_model->get_berita();
        $this->load->view('bberita/v_berita', $data);
    }

    public function add()
    {
        $this->load->view('bberita/v_addberita');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/blog/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name                   = slug($this->input->post('Judul',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Imgberita');
        $this->Imgberita->initialize($config);

        $Judul             =   $this->input->post('Judul');
        $CreatedAt         =   date('Y-m-d H:i:s');
		$Konten            =   $this->input->post('Konten');
		$Kategori		   =   $this->input->post('Kategori');
		$Status			   =   $this->input->post('Status');

		if ($this->Imgberita->do_upload('Imgberita')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/blog/' . $this->Imgberita->data('file_name');
            $config['maintain_ratio'] = FALSE;
            $config['overwrite'] = TRUE;
            $config['width'] = 400;
            $config['height'] = 267;
            $config['new_image'] = './assets/images/blog/' . $this->Imgberita->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'Judul'             => $Judul,
                'Slug'              => slug($this->input->post('Judul',TRUE)),
                'Imgberita'         => $this->Imgberita->data('file_name'),
                'CreatedAt'         => $CreatedAt,
				'Konten'            => $Konten,
				'Kategori'			=> $Kategori,
				'Status'			=> $Status,
            );
            $this->M_model->insert('Berita', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_berita');
		} else {
        	$this->session->set_flashdata('error', $this->Imgberita->display_errors());
			redirect('admin_berita/add');
		}
	}

	public function edit($i)
	{
    	$idberita = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idberita) {
            $data['data'] = $this->M_model->get_berita($idberita);
            $this->load->view('bberita/v_editberita', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_berita');
        }
    }

    public function update($i)
    {
        $idberita = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($idberita) {
            $config['upload_path']  = './assets/images/blog/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('Judul', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Imgberita');
            $this->Imgberita->initialize($config);

            $Judul       	   =   $this->input->post('Judul');
			$Konten            =   $this->input->post('Konten');
			$Kategori		   =   $this->input->post('Kategori');
            $UpdatedAt         =   date('Y-m-d H:i:s');
            $Status            =   $this->input->post('Status');

            if ($this->Imgberita->do_upload('Imgberita')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/blog/' . $this->Imgberita->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 400;
                $config['height'] = 267;
                $config['new_image'] = './assets/images/blog/' . $this->Imgberita->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'Judul'       		=> $Judul,
					'Konten'            => $Konten,
					'Kategori'			=> $Kategori,
                    'Imgberita'         => $this->Imgberita->data('file_name'),
                    'UpdatedBy'         => $this->session->userdata('UserID'),
                    'UpdatedAt'         => $UpdatedAt,
                    'Slug'              => slug($this->input->post('Judul',TRUE)),
                    'Status'            => $Status
                );
                $this->M_model->update('Berita', ['idberita' => $idberita], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_berita');
            } else {
                $data = array(
                    'Judul'       		=> $Judul,
					'Konten'            => $Konten,
					'Kategori'			=> $Kategori,
                    'UpdatedBy'         => $this->session->userdata('UserID'),
                    'UpdatedAt'         => $UpdatedAt,
                    'Slug'              => slug($this->input->post('Judul',TRUE)),
                    'Status'            => $Status
                );
                $this->M_model->update('Berita', ['idberita' => $idberita], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_berita');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_berita');
        }
	}
	
	public function delete($idberita) {
		$id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idberita));
		if ($id) {
			$data['data'] = $this->M_model->get_berita($id);
			$this->M_model->delete('Berita', ['idberita' => $id], $data);
			$this->session->set_flashdata('success', 'Data deleted successfully');
			redirect('admin_berita');
		} else {
			$this->session->set_flashdata('error', 'Error, bad request');
			redirect('admin_berita');
		}
	}
}
