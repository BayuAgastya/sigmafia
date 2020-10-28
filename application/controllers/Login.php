<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model admin
        $this->load->model('admin_model');
    }

    public function index()
    {

        if ($this->admin_model->is_logged_in()) {
            //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
            redirect("admin_menu/dashboard");
        } else {

            //jika session belum terdaftar

            //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

            //cek validasi
            if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->admin_model->check_login('user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'   => $apps->user_id,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                            'role'      => $apps->role,
                            'id_murid'  => $apps->id_murid,
                            'akses_konten' => $apps->akses_konten,
                            'endDate' => $apps->endDate
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if ($this->session->userdata("role") == "admin") {
                            $this->session->set_flashdata('admin', 'Selamat datang di menu admin');
                            redirect('admin_menu/dashboard/');
                        } else {
                            $this->session->set_flashdata('main', 'Login Berhasil');
                            redirect('home/');
                        }
                    }
                } else {

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }
            } else {

                $this->load->view('login');
            }
        }
    }
}
