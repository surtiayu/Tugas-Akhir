<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MX_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_data');
    }
    function index()
    {

        if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '1') {
            echo "<script>window.location='" . base_url('dashboard.js') . "';</script>";
        } else if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '2') {
            echo "<script>window.location='" . base_url('halaman-pegawai.js') . "';</script>";
        } else if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '3') {
            echo "<script>window.location='" . base_url('halaman-pegawai.js') . "';</script>";
        } else if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '4') {
            echo "<script>window.location='" . base_url('halaman-pegawai.js') . "';</script>";
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username Harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $this->auth();
        }
    }

    function auth()
    {
        $username = str_replace("'", "", htmlspecialchars($this->input->post('username'), ENT_QUOTES));
        $password = str_replace("'", "", htmlspecialchars($this->input->post('password'), ENT_QUOTES));
        $cadmin = $this->M_data->cekadmin($username, $password);

        if ($cadmin->num_rows() > 0) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $username);
            $xcadmin = $cadmin->row_array();
            $cek = $this->db->query("select*from users where username='$username'")->row();
            if ($cek->aktif == '1') {

                if ($xcadmin['id_role'] == '1') {
                    $this->session->set_userdata('akses', '1');
                    $idadmin = $xcadmin['id_user'];
                    $username = $xcadmin['username'];
                    $nama = $xcadmin['nama'];
                    $pt = $xcadmin['id_role'];
                    $this->session->set_userdata('id_role', $pt);
                    $this->session->set_userdata('id_user', $idadmin);
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('nama', $nama);
                    redirect('dashboard.js');
                } else if ($xcadmin['id_role'] == '2' || $xcadmin['id_role'] == '3' || $xcadmin['id_role'] == '4') {
                    $this->session->set_userdata('akses', '2');
                    $idadmin = $xcadmin['id_user'];
                    $username = $xcadmin['username'];
                    $nama = $xcadmin['nama'];
                    $pt = $xcadmin['id_role'];
                    $this->session->set_userdata('id_role', $pt);
                    $this->session->set_userdata('id_user', $idadmin);
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('nama', $nama);
                    redirect('dashboard.js');
                } else if ($xcadmin['id_role'] == '5') {
                    $this->session->set_userdata('akses', '3');
                    $idadmin = $xcadmin['id_user'];
                    $username = $xcadmin['username'];
                    $nama = $xcadmin['nama'];
                    $pt = $xcadmin['id_role'];
                    $this->session->set_userdata('id_role', $pt);
                    $this->session->set_userdata('id_user', $idadmin);
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('nama', $nama);
                    redirect('halaman-pegawai.js');
                    $this->session->set_flashdata('message', 'success');
                }
            } else {
                $this->session->set_flashdata('message', 'warning');

                redirect('login.js');
            }
        } else {
            $this->session->set_flashdata('message', 'error');
            redirect('login.js');
        }
    }

    function gagallogin()
    {
        echo $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
        redirect('login.js');
    }


    public function reset_password()
    {

        $iduser = $this->session->userdata('id_user');
        $password = $this->input->post('xpassword');
        $konfirm_password = $this->input->post('xpassword1');
        if (empty($password) && empty($konfirm_password)) {
            $this->session->set_flashdata('message', 'error');
            redirect('dashboard.js');
        } elseif ($password != $konfirm_password) {
            $this->session->set_flashdata('message', 'error');
            redirect('dashboard.js');
        } else {
            $data = array(
                'password' => md5($password),
                'pass_64' => base64_encode($password),
            );
            $where = array('id_user' => $iduser);
            $this->db->where($where);
            $this->db->update('users', $data);

            $this->session->set_flashdata('message', 'info');
            redirect('dashboard.js');
        }
    }

    function show_user()
    {
        $data = array(
            'title' => 'Sistem Informasi Pegawai',
            'conten' => 'v_user',
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
