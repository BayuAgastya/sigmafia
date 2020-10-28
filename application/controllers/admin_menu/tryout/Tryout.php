<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tryout extends CI_Controller
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
            'title' => 'Bank Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => 'active',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/tryout/tryout'
        );
        $data['data_tryout'] = $this->db->get('tryout');
        $this->load->view('admin_layout/wrapper', $data);
    }

    function page_tambah()
    {
        $data = array(
            'title' => 'Buat Tryout',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => 'active',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/tryout/tryout/tambah'
        );

        $data['data_tingkat'] = $this->db->get('tingkat');
        $this->load->view('admin_layout/wrapper', $data);
    }

    public function save()
    {
        $matpel = $this->input->post('matpel');
        $checkbox = implode(",", $matpel);

        $data = array(
            'id_tingkat' => $this->input->post('id_tingkat'),
            'matpel' => $checkbox,
            'nama_tryout' => $this->input->post('nama_tryout'),
            'jumlah_soal' => $this->input->post('jumlah_soal'),
            'waktu' => $this->input->post('waktu'),
            'jenis' => $this->input->post('jenis')
        );

        $this->admin_model->add_data($data, 'tryout');

        $this->session->set_flashdata('tryout', 'Tryout baru berhasil ditambahkan');
        redirect(base_url('admin_menu/tryout/tryout'));
    }

    function page_detail($id)
    {
        $data = array(
            'title' => 'Detail Tryout',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => 'active',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/tryout/tryout/detail'
        );
        $data['data_bank'] = $this->db->get('bank_soal');
        $data['data_tingkat'] = $this->db->get('tingkat');
        $data['data'] = $this->tryout_model->getTryout($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }
}
