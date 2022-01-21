<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_siswa extends CI_Controller
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
            'title' => 'Manage Siswa',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => 'active',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/m_siswa'
        );
        $data['data_murid'] = $this->db->get('murid');
        $this->load->view('admin_layout/wrapper', $data);
    }

    function tambah_siswa()
    {
        $nama = $this->input->post('nama');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $alamat_rumah = $this->input->post('alamat_rumah');
        $instagram = $this->input->post('instagram');
        $line = $this->input->post('line');
        $whatsaap = $this->input->post('whatsaap');
        $email = $this->input->post('email');

        $data = array(
            'nama' => $nama,
            'asal_sekolah' => $asal_sekolah,
            'alamat_rumah' => $alamat_rumah,
            'instagram' => $instagram,
            'line' => $line,
            'whatsaap' => $whatsaap,
            'email' => $email
        );

        $this->admin_model->add_data($data, 'murid');
        $this->session->set_flashdata('murid', 'Murid baru berhasil ditambahkan');
        redirect(base_url('admin_menu/m_siswa'));
    }

    function editSiswa()
    {
        $id_murid = $this->input->post('id_murid');
        $nama = $this->input->post('nama');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $alamat_rumah = $this->input->post('alamat_rumah');
        $instagram = $this->input->post('instagram');
        $line = $this->input->post('line');
        $whatsaap = $this->input->post('whatsaap');
        $email = $this->input->post('email');

        $data = array(
            'id_murid' => $id_murid,
            'nama' => $nama,
            'asal_sekolah' => $asal_sekolah,
            'alamat_rumah' => $alamat_rumah,
            'instagram' => $instagram,
            'line' => $line,
            'whatsaap' => $whatsaap,
            'email' => $email
        );

        $where = array(
            'id_murid' => $id_murid
        );

        $this->admin_model->update_data($where, $data, 'murid');
        $this->session->set_flashdata('murid', 'Data murid berhasil diupdate');
        redirect(base_url('admin_menu/m_siswa'));
    }

    function detailPage($id)
    {
        $data = array(
            'title' => 'Detail Siswa',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => 'active',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/detail_siswa'
        );
        $data['data'] = $this->admin_model->UpdateSiswa($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function editPage($id)
    {
        $data = array(
            'title' => 'Edit Siswa',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => 'active',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/edit_siswa'
        );
        $data['data'] = $this->admin_model->UpdateSiswa($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function prosesHapus($id)
    {
        $this->db->where('id_murid', $id);
        $this->db->delete('murid');

        $this->session->set_flashdata('murid', 'Data murid berhasil dihapus');
        redirect(base_url('admin_menu/m_siswa'));
    }
}
