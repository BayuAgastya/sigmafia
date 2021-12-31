<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_user extends CI_Controller
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
            'title' => 'Manage User',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => 'active',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/m_user'
        );
        $data['data_user'] = $this->admin_model->get_user_role('user');
        $data['data_admin'] = $this->admin_model->get_user_role('admin');

        $this->load->view('admin_layout/wrapper', $data);
    }

    function tambah_admin()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data = array(
            'username' => $username,
            'password' => $password,
            'role' => 'admin',
            'id_murid' => '0',
            'akses_konten' => 'yes'
        );
        $this->admin_model->add_data($data, 'user');

        redirect(base_url('admin_menu/m_user'));
    }

    function tambah_user()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $id = rand();
        $nama = $this->input->post('nama');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $alamat_rumah = $this->input->post('alamat_rumah');
        $instagram = $this->input->post('instagram');
        $line = $this->input->post('line');
        $whatsaap = $this->input->post('whatsaap');
        $email = $this->input->post('email');

        $data = array(
            'id_murid' => $id,
            'nama' => $nama,
            'asal_sekolah' => $asal_sekolah,
            'alamat_rumah' => $alamat_rumah,
            'instagram' => $instagram,
            'line' => $line,
            'whatsaap' => $whatsaap,
            'email' => $email
        );

        $this->admin_model->add_data($data, 'murid');

        $tambah = array(
            'username' => $username,
            'password' => $password,
            'role' => 'user',
            'id_murid' => $id,
            'akses_konten' => 'no'
        );
        $this->admin_model->add_data($tambah, 'user');

        $this->session->set_flashdata('user', 'User baru berhasil ditambahkan');
        redirect(base_url('admin_menu/m_user'));
    }

    function editUser()
    {
        $user_id = $this->input->post('user_id');
        $username = $this->input->post('username');
        /* $password = md5($this->input->post('password')); */
        $id_murid = $this->input->post('id_murid');
        if(!empty($this->input->post('membership'))){
            $date = date_create(date('Y-m-d'));
            date_add($date,date_interval_create_from_date_string($this->input->post('membership')));
            $akses_konten = 'yes';
            $endDate = $date;
        }else{
            $temp = $this->db->get_where('user',array('user_id'=>$user_id))->row_array();
            $akses_konten = $temp['akses_konten'];
            $endDate = $temp['endDate'];
        }

        $data = array(
            'user_id' => $user_id,
            'username' => $username,
            /* 'password' => $password, */
            'id_murid' => $id_murid,
            'akses_konten' => $akses_konten,
            'endDate' => $endDate
        );

        $where = array(
            'user_id' => $user_id
        );

        $this->admin_model->update_data($where, $data, 'user');

        $this->session->set_flashdata('user', 'User berhasil diedit');
        redirect(base_url('admin_menu/m_user'));
    }

    function detailUser($id)
    {
        $data = array(
            'title' => 'Detail User',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => 'active',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/detail_User',
        );
        $data['data'] = $this->admin_model->UpdateSiswa($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function editPage($id)
    {
        $data = array(
            'title' => 'Edit User',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => 'active',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/edit_User'
        );
        $data['data'] = $this->admin_model->UpdateUser($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function prosesHapus($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');

        $this->session->set_flashdata('user', 'User berhasil dihapus');
        redirect(base_url('admin_menu/m_user'));
    }

    function requestPage()
    {
        $data = array(
            'title' => 'Request',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => 'active',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/req_akses',
            'data' => $this->admin_model->data_request()
        );

        $this->load->view('admin_layout/wrapper', $data);
    }

    function requestAccept()
    {
        $id = $this->input->post('id');
        $helper = $this->db->get_where('request_akses', array('id_request' => $id))->row_array();

        $this->admin_model->changeAkses($helper['user_id'],$this->input->post('membership'));
        $nama = './uploads/bukti_trf/' . $helper['bukti_trf'];

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusFileRequest($id);
            $this->session->set_flashdata('request', 'User sudah dapat mengakses konten');
            redirect(base_url('admin_menu/m_user/requestPage'));
        } else {
            echo "File tidak ditemukan";
        }
    }


    function requestDecline($id)
    {
        $data = $this->admin_model->getDataRequest($id)->row();
        $nama = './uploads/bukti_trf/' . $data->bukti_trf;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusFileRequest($id);
            $this->session->set_flashdata('request', 'Request Dibatalkan');
            redirect(base_url('admin_menu/m_user/requestPage'));
        } else {
            echo "Gagal Hapus";
        }
    }
}


 /*  $data = $this->admin_model->accept_access($id);
        $nama = './uploads/bukti_trf/' . $data->bukti_trf;
        if (is_readable($nama)) {
            $this->admin_model->accept_access($id);
            redirect(base_url('admin_menu/m_user/requestPage'));
        } else {
            echo "Gagal Accept";
        } */
