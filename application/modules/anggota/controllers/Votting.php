<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Votting extends MX_Controller
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
            'conten' => 'v_calonketua',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function hasil_votting()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_hasil_votting',
        );
        $this->load->view('layout/wrapper', $data);
    }

    
}
