<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url');
        if ($this->admin_model->is_role() != "admin") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'nav_dashboard' => 'active',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/dashboard'
        );

        $data['data_alumnus'] = $this->db->get('alumnus');
        $data['data_murid'] = $this->db->get('murid');
        $data['data_user'] = $this->db->get('user');
        $data['data_request'] = $this->db->get('request_akses');

        $data['video_matik'] = $this->db->get('video_matik');
        $data['video_fisika'] = $this->db->get('video_fisika');
        $data['video_kimia'] = $this->db->get('video_kimia');
        $data['soal_matik'] = $this->db->get('soal_matik');
        $data['soal_fisika'] = $this->db->get('soal_fisika');
        $data['soal_kimia'] = $this->db->get('soal_kimia');
        $data['materi_matik'] = $this->db->get('materi_matik');
        $data['materi_fisika'] = $this->db->get('materi_fisika');
        $data['materi_kimia'] = $this->db->get('materi_kimia');

        $data['request'] = $this->admin_model->hitungJumlahData('request_akses');
        $data['murid'] = $this->admin_model->hitungJumlahData('murid');
        $data['alumnus'] = $this->admin_model->hitungJumlahData('alumnus');
        $data['user'] = $this->admin_model->hitungJumlahData('user');
        $data['video'] = $this->admin_model->hitungTotalData('video_matik', 'video_fisika', 'video_kimia');
        $data['soal'] = $this->admin_model->hitungTotalData('soal_matik', 'soal_fisika', 'soal_kimia');
        $data['materi'] = $this->admin_model->hitungTotalData('materi_matik', 'materi_fisika', 'materi_kimia');


        $this->load->view('admin_layout/wrapper', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
