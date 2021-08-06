<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_model');
	}

	public function Compro()
	{
		$data['menu'] = 'Compro';
		$data['title'] = 'Compro  | Iron Bird Logistics | Reliable Integrated Logistics Services';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('media/compro');
	}

	public function Galeri()
	{
		$data['menu'] = 'Galeri';
		$data['title'] = 'Galeri  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['data'] = $this->M_model->get_galeri();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('media/galeri');
	}

	public function Detgaleri($idgaleri)
	{
		$id = $this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '=', '/'), $idgaleri));
		if ($id) {
			$data['menu'] = 'Galeri';
			$data['title'] = 'Galeri  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
			$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
			$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
			$data['canonical'] = base_url();
			$data['data'] = $this->M_model->get_galeri($id);
			$data['detgaleri'] = $this->M_model->get_detgaleri($id);
			$data['sosmed'] = $this->M_model->fn_sosmedhome();
			$this->load->view('include/css', $data);
			$this->load->view('media/det_galeri');
		}else{
			$this->session->set_flashdata('error', 'Error, bad request!');
			redirect('media/galeri');
		}
	}	

	public function Achievement()
	{
		$data['menu'] = 'Achievement';
		$data['title'] = 'Achievement  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['data'] = $this->M_model->fn_pencapaian();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('media/pencapaian');
	}

	public function Berita()
	{
		$data['menu'] = 'Berita';
		$data['title'] = 'Berita  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$this->load->library('pagination');
		$data['base_url'] = site_url('media/berita'); //site url
		$data['total_rows'] = $this->db->count_all('berita'); //total row
		$data['per_page'] = 4;  //show record per halaman
		$data["uri_segment"] = 3;
		$choice = $data["total_rows"] / $data["per_page"];
		$data["num_links"] = floor($choice);
		$data['first_link']       = 'First';
        $data['last_link']        = 'Last';
        $data['next_link']        = 'Next';
        $data['prev_link']        = 'Prev';
        $data['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $data['full_tag_close']   = '</ul></nav></div>';
        $data['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $data['num_tag_close']    = '</span></li>';
        $data['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $data['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $data['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $data['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $data['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $data['prev_tagl_close']  = '</span>Next</li>';
        $data['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $data['first_tagl_close'] = '</span></li>';
        $data['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $data['last_tagl_close']  = '</span></li>';
		$data['suffix'] = '?' . http_build_query($_GET, '', "&");
		$data['first_url']        = base_url().'media/berita/'.'?'.http_build_query($_GET);
		$this->pagination->initialize($data);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if(isset($_GET['search'])){
			$data['data'] = $this->M_model->get_by_like($data["per_page"], $data['page'],$_GET['search'])->result();
		}else{
			$data['data'] = $this->M_model->get_all_post($data["per_page"], $data['page'])->result();  
		}
		$data['pagination'] = $this->pagination->create_links();
		$data['latest']=$this->M_model->latest(4);
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('media/berita');
	}

	public function Detail()
	{
		$slug = $this->uri->segment(3);
		$data['brt']=$this->M_model->fn_berita($slug);
		if (!$data['brt']) {
			redirect('media/berita');
		}
		$data['active'] = $data['brt']->Slug;
		$data['menu'] = 'Berita';
		$data['title'] = $data['brt']->Judul.' | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['data'] = $this->M_model->fn_berita();
		$data['latest']=$this->M_model->latest(4);
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('media/beritadetail');
	}
}
