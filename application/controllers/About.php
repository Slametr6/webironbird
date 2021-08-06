<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
    }

	public function Milestone()
	{
		$data['menu'] = 'Milestone';
		$data['title'] = 'Our Milestone  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('about/milestone');
	}

	public function Company()
	{
		$data['menu'] = 'Company';
		$data['title'] = 'Our Company  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$data['visimisi'] = $this->M_model->get_visimisi();
		$data['value'] = $this->M_model->get_value();
		$data['manajemen'] = $this->M_model->get_manajemen();
		$data['kantor']	=	$this->M_model->get_kantor();
		$this->load->view('include/css', $data);
		$this->load->view('about/company');
	}

	public function Values()
	{
		$data['menu'] = 'Values';
		$data['title'] = 'Our Values  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('about/values');
	}

	public function Fleet()
	{
		$data['menu'] = 'Fleet';
		$data['title'] = 'Our Fleet  | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('about/fleet');
	}
}
