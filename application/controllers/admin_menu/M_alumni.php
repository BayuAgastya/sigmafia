<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_alumni extends CI_Controller
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
            'title' => 'Manage Alumni',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => 'active',
            'isi' => 'admin/m_alumni'
        );
        $data['data_alumnus'] = $this->db->get('alumnus');
        $this->load->view('admin_layout/wrapper', $data);
    }

    function tambah_alumni()
    {
        $nama = $this->input->post('nama');
        $universitas = $this->input->post('universitas');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nama' => $nama,
            'universitas' => $universitas,
            'jurusan' => $jurusan
        );
        $this->admin_model->add_data($data, 'alumnus');
        $this->session->set_flashdata('alumni', 'Alumni baru berhasil ditambahkan');
        redirect(base_url('admin_menu/m_alumni'));
    }

    function editAlumni()
    {
        $id_alumnus = $this->input->post('id_alumnus');
        $nama = $this->input->post('nama');
        $universitas = $this->input->post('universitas');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nama' => $nama,
            'universitas' => $universitas,
            'jurusan' => $jurusan
        );

        $where = array(
            'id_alumnus' => $id_alumnus
        );

        $this->admin_model->update_data($where, $data, 'alumnus');
        $this->session->set_flashdata('alumni', 'Data alumni berhasil diupdate');
        redirect(base_url('admin_menu/m_alumni'));
    }
    function editPage($id)
    {
        $data = array(
            'title' => 'Edit Alumni',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => 'active',
            'isi' => 'admin/edit_alumnus'
        );
        $data['data'] = $this->admin_model->UpdateAlumnus($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function prosesHapus($id)
    {
        $this->db->where('id_alumnus', $id);
        $this->db->delete('alumnus');

        $this->session->set_flashdata('alumni', 'Data alumni berhasil dihapus');
        redirect(base_url('admin_menu/m_alumni'));
    }
}
