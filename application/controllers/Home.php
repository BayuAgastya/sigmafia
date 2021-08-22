<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url');
        $data['data_murid'] = $this->db->get('murid');
    }

    public function index()
    {
        $data = array(
            'title' => 'Sigmafia',
            'isi' => 'home/index_home'
        );
        $data['data_alumnus'] = $this->db->get('alumnus');
        $data['data_murid'] = $this->db->get('murid');
        $data['video_matik'] = $this->db->get('video_matik');
        $data['video_fisika'] = $this->db->get('video_fisika');
        $data['video_kimia'] = $this->db->get('video_kimia');
        $data['soal_matik'] = $this->db->get('soal_matik');
        $data['soal_fisika'] = $this->db->get('soal_fisika');
        $data['soal_kimia'] = $this->db->get('soal_kimia');
        $data['materi_matik'] = $this->db->get('materi_matik');
        $data['materi_fisika'] = $this->db->get('materi_fisika');
        $data['materi_kimia'] = $this->db->get('materi_kimia');

        $this->load->view('home_layout/wrapper', $data);
    }

    public function how_to()
    {
        $data = array(
            'title' => 'How To',
            'nav_home' => '',
            'nav_howto' => 'active',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_contact' => '',
            'isi' => 'home/how_to_view'
        );

        $this->load->view('home_layout2/wrapper', $data);
    }

    public function blog_detail()
    {
        $data = array(
            'title' => 'How To',
            'nav_home' => '',
            'nav_howto' => 'active',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_contact' => '',
            'isi' => 'home/blog/skype'
        );

        $this->load->view('konten_layout/wrapper', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('main', 'Logout Berhasil');
        redirect('home');
    }

    function tambah_murid()
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

        $this->session->set_flashdata('main', 'Daftar Akun Berhasil');
        redirect('home');
    }


    function profile()
    {
        $data = array(
            'title' => 'Profile',
            'nav_home' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_contact' => '',
            'isi' => 'home/profile_view',
            'data_murid' => $this->admin_model->get_murid($this->session->userdata('user_id'))->row_array()
        );
        $this->load->view('konten_layout/wrapper', $data);
    }

    function profile_edit()
    {
        $data = array(
            'title' => 'Profile',
            'nav_home' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_contact' => '',
            'isi' => 'home/profile_edit',
            'data_murid' => $this->admin_model->get_murid($this->session->userdata('user_id'))->row_array()
        );
        $this->load->view('konten_layout/wrapper', $data);
    }

    function editSiswaProfile()
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
        $this->session->set_flashdata('main', 'Data murid berhasil diupdate');
        redirect(base_url('home/profile'));
    }

    function upload()
    {
        $config['upload_path']          = './uploads/bukti_trf/';
        $config['allowed_types']        = 'jpg||png||jpeg';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('home', $error);
        } else {
            $upload_data = $this->upload->data();
            $name = $upload_data['file_name'];

            $insert = $this->admin_model->insertBuktiTrf($name);
            if ($insert) {
                $this->session->set_flashdata('main', 'Request ditambahkan');
                redirect(base_url('home'));
            } else {
                echo "Gagal";
            }
        }
    }
}
