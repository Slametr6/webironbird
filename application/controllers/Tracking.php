<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller 
{
	public function index()
	{
		$data['menu'] = 'Tracking';
		$data['title'] = 'Order Tracking | Iron Bird Logistics | Your Reliable Logistic Solution Partner';
		$data['description'] = 'Iron Bird main customers are Japanese, American and European company which has top priority on Safety culture, 24 hours a day and seven days a week services';
		$data['keywords'] = 'Logistics, Transportation, Freight Forwarding, Warehousing, Technology, Number One Logistics, Blue Bird Group';
		$data['canonical'] = base_url();
		$data['sosmed'] = $this->M_model->fn_sosmedhome();
		$this->load->view('include/css', $data);
		$this->load->view('service/tracking');
	}
}
