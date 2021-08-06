<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Real extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_model');
	}

	public function cek_nip()
	{
		$UserID = $this->input->get('UserID');
		$user = $this->M_model->get_user_by_nip($UserID);
		if (isset($user)) {
			echo json_encode(['status' => 1, $user]);
		} else {
			echo json_encode(['status' => 0, $user]);
		}
	}

	public function cek_email()
	{
		$email = $this->input->get('email');
		$user = $this->M_model->get_user_by_email($email);
		if (isset($user)) {
			echo json_encode(['status' => 1]);
		} else {
			echo json_encode(['status' => 0]);
		}
	}
}
