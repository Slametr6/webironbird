<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        } else {
            $this->load->view('v_login');
        }
    }

    function cek_login()
    {
        $this->load->model('M_auth');
        $session = $this->session->userdata('logged_in');
        if (isset($session)) {
            redirect('dashboard');
        } else {
            $UserID = $this->input->post('UserID');
            $Password = $this->input->post('Password');
            $masuk = $this->M_auth->cek_user($UserID);
            if ($masuk) {
                if (password_verify($Password, $masuk->Password)) {
                    $sess_data['logged_in'] = true;
                    $sess_data['UserID'] = $masuk->UserID;
                    $sess_data['Email'] = $masuk->Email;
                    $sess_data['NickName'] = $masuk->NickName;
                    $this->session->set_userdata($sess_data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Maaf, password Anda salah!');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('error', 'Maaf, akun Anda tidak terdeteksi!');
                redirect('admin');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
