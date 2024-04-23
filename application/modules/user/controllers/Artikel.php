<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends MX_Controller
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
            'conten' => 'v_artikel',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function kategori_artikel()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_kategori_artikel',
        );
        $this->load->view('layout/wrapper', $data);
    }

    
}
