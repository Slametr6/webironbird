    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_service extends CI_Controller 
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
        $data['data'] = $this->M_model->get_services();
        $this->load->view('bservice/v_service', $data);
    }

    public function add()
    {
        $this->load->view('bservice/v_addservice');
    }

    public function action_add()
    {
        $config['upload_path']      = './assets/images/services/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name = slug($this->input->post('NamaService',TRUE));
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'Img');
        $this->Img->initialize($config);

        $config['upload_path']      = './assets/images/services/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['overwrite']        = TRUE;
        $new_name = uniqid();
        $config['file_name']        = $new_name;
        $this->load->library('upload', $config, 'ImgDetail');
        $this->ImgDetail->initialize($config);

        $NamaService       =   $this->input->post('NamaService');
        $Konten            =   $this->input->post('Konten');
        $UpdatedAt         =   date('Y-m-d H:i:s');
        $Status            =   $this->input->post('Status');

        if ($this->Img->do_upload('Img') && $this->ImgDetail->do_upload('ImgDetail')) {
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/services/' . $this->Img->data('file_name');
            $config['maintain_ratio'] = FALSE;
            $config['overwrite'] = TRUE;
            $config['width'] = 400;
            $config['height'] = 267;
            $config['new_image'] = './assets/images/services/' . $this->Img->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/images/services/' . $this->ImgDetail->data('file_name');
            $config['maintain_ratio'] = FALSE;
            $config['overwrite'] = TRUE;
            $config['width'] = 800;
            $config['height'] = 400;
            $config['new_image'] = './assets/images/services/' . $this->ImgDetail->data('file_name');
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data = array(
                'NamaService'       => $NamaService,
                'Konten'            => $Konten,
                'Img'               => $this->Img->data('file_name'),
                'UpdatedBy'         => $this->session->userdata('UserID'),
                'UpdatedAt'         => $UpdatedAt,
                'Slug'              => slug($this->input->post('NamaService',TRUE)),
                'ImgDetail'         => $this->ImgDetail->data('file_name'),
                'Status'            => $Status
            );
            $this->M_model->insert('Layanan', $data);
            $this->session->set_flashdata('success', 'Data added successfully!');
            redirect('admin_service');
        }else{
           $this->session->set_flashdata('error', $this->Img->display_errors());
           redirect('admin_service/add');
       }
   }

   public function edit($i)
   {
    $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $data['data'] = $this->M_model->get_services($id);
            $this->load->view('bservice/v_editservice', $data);
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_service');
        }
    }

    public function update($i)
    {
        $id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $i));
        if ($id) {
            $config['upload_path']  = './assets/images/services/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('NamaService', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'Img');
            $this->Img->initialize($config);

            $config['upload_path']  = './assets/images/services/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $new_name = slug($this->input->post('NamaService', TRUE));
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config, 'ImgDetail');
            $this->ImgDetail->initialize($config);

            $NamaService       =   $this->input->post('NamaService');
            $Konten            =   $this->input->post('Konten');
            $UpdatedAt         =   date('Y-m-d H:i:s');
            $Status            =   $this->input->post('Status');

            if ($this->Img->do_upload('Img') && $this->ImgDetail->do_upload('ImgDetail')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/services/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 400;
                $config['height'] = 267;
                $config['new_image'] = './assets/images/services/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/services/' . $this->ImgDetail->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 800;
                $config['height'] = 400;
                $config['new_image'] = './assets/images/services/' . $this->ImgDetail->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'NamaService'       => $NamaService,
                    'Konten'            => $Konten,
                    'Img'               => $this->Img->data('file_name'),
                    'UpdatedBy'         => $this->session->userdata('UserID'),
                    'UpdatedAt'         => $UpdatedAt,
                    'Slug'              => slug($this->input->post('NamaService',TRUE)),
                    'ImgDetail'         => $this->ImgDetail->data('file_name'),
                    'Status'            => $Status
                );
                $this->M_model->update('Layanan', ['id' => $id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_service');
            } else if ($this->Img->do_upload('Img')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/services/' . $this->Img->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 400;
                $config['height'] = 267;
                $config['new_image'] = './assets/images/services/' . $this->Img->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'NamaService'       => $NamaService,
                    'Konten'            => $Konten,
                    'Img'               => $this->Img->data('file_name'),
                    'UpdatedBy'         => $this->session->userdata('UserID'),
                    'UpdatedAt'         => $UpdatedAt,
                    'Slug'              => slug($this->input->post('NamaService',TRUE)),
                    'Status'            => $Status
                );
                $this->M_model->update('Layanan', ['id' => $id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_service');
            } else if ($this->ImgDetail->do_upload('ImgDetail')) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/services/' . $this->ImgDetail->data('file_name');
                $config['maintain_ratio'] = FALSE;
                $config['overwrite'] = TRUE;
                $config['width'] = 800;
                $config['height'] = 400;
                $config['new_image'] = './assets/images/services/' . $this->ImgDetail->data('file_name');
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data = array(
                    'NamaService'       => $NamaService,
                    'Konten'            => $Konten,
                    'UpdatedBy'         => $this->session->userdata('UserID'),
                    'UpdatedAt'         => $UpdatedAt,
                    'Slug'              => slug($this->input->post('NamaService',TRUE)),
                    'ImgDetail'         => $this->ImgDetail->data('file_name'),
                    'Status'            => $Status
                );
                $this->M_model->update('Layanan', ['id' => $id], $data);
                $this->session->set_flashdata('success', 'Data added successfully!');
                redirect('admin_service');
            } else {
                $data = array(
                    'NamaService'       => $NamaService,
                    'Konten'            => $Konten,
                    'UpdatedBy'         => $this->session->userdata('UserID'),
                    'UpdatedAt'         => $UpdatedAt,
                    'Slug'              => slug($this->input->post('NamaService',TRUE)),
                    'Status'            => $Status
                );
                $this->M_model->update('Layanan', ['id' => $id], $data);
                $this->session->set_flashdata('success', 'Data updated successfully!');
                redirect('admin_service');
            }
        } else {
            $this->session->set_flashdata('error', 'Error, bad request!');
            redirect('admin_service');
		}
	}
	public function delete($id) {
		$id = $this->encryption->decrypt(str_replace(array('-','_','~'), array('+','=','/'), $id));
		if ($id) {
			$data['data'] = $this->M_model->get_services($id);
			$this->M_model->delete('Layanan', ['id' => $id], $data);
			$this->session->set_flashdata('succes', 'Data deleted succesfully');
			redirect('admin_service');
		} else {
			$this->session->set_flashdata('error', 'Error, bad request');
			redirect('admin_service');
		}
	}
}
