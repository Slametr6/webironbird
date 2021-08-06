<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
    }

	public function index()
	{
		$data['menu'] = 'karir';
		$data['title'] = 'Karir | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$data['data'] = $this->M_model->fn_karir();
		$this->load->view('include/css', $data);
		$this->load->view('karir/loker');
		
	}

	public function detail()
	{
		$slug = $this->uri->segment(3);
		$data['krr']=$this->M_model->fn_karir($slug);
		if (!$data['krr']) {
			redirect('karir');
		}
		$data['active'] = $data['krr']->Slug;
		$data['menu'] = '';
		$data['menu'] = 'karir';
		$data['title'] = $data['krr']->JenisKarir.' | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['data'] = $this->M_model->fn_karir();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('karir/lokerdetail');
	}

	public function Internship()
	{
		$data['menu'] = 'Internship';
		$data['title'] = 'Internship  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['data'] = $this->M_model->fn_internship();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('karir/internship');
	}

}
