<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_data');
    }


    function index()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_dashboard',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function show_user()
    {
        $data = array(
            'title' => 'Sistem Informasi Pegawai',
            'conten' => 'v_show_user',
            'data' => $this->M_data->show_user(),
        );
        $this->load->view('layout/wrapper', $data);
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', 'info');
        $url = base_url('login.js');
        redirect($url);
    }
}
