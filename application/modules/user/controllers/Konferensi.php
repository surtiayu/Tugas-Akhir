<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konferensi extends MX_Controller
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
            'conten' => 'v_konferensi',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function kategori_konferensi()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_kategori_konferensi',
        );
        $this->load->view('layout/wrapper', $data);
    }

    
}
