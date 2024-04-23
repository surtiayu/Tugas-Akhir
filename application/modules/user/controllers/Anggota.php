<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends MX_Controller
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
            'conten' => 'v_anggota',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function verifikasi_anggota()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_anggota_verifikasi',
        );
        $this->load->view('layout/wrapper', $data);
    }

    
}
