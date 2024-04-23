<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilAptikom extends MX_Controller
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
            'conten' => 'v_sejarah',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function visimisi()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_visimisi',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function tugasfungsi()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_tugasfungsi',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function struktur()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_struktur',
        );
        $this->load->view('layout/wrapper', $data);
    }

    
}
