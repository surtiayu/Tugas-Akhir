<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(['M_data']);
	}
	public function index()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'index',
		);
		$this->load->view('layout/wrapper', $data);
	}


	public function sejarah()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_sejarah',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function visimisi()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_visimisi',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function tugasfungsi()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_tugasfungsi',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function Struktur()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_struktur',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function keanggotaan()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_keanggotaan',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function evotting()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_evotting',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function login()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_login',
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function kontak()
	{
		$data = array(
			'title' => 'Sistem Informasi Aptikom',
			'conten' => 'v_kontak',
		);
		$this->load->view('layout/wrapper', $data);
	}
}
