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
            'nav_kehadiran' => '',
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
            $akses_konten = 'yes';
            $endDate = date('Y-m-d',strtotime('+ '.$this->input->post('membership')));
        }else{
            $temp = $this->db->get_where('user',array('user_id'=>$user_id))->row_array();
            if($temp['akses_konten'] == 'yes'){
                $akses_konten = 'yes';
                $endDate = date('Y-m-d',strtotime($temp['endDate'].' + '.$this->input->post('membership')));
            }else{
                $akses_konten = $temp['akses_konten'];
                $endDate = $temp['endDate'];
            }
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
            'nav_kehadiran' => '',
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
            'nav_kehadiran' => '',
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
            'nav_kehadiran' => '',
            'isi' => 'admin/req_akses',
            'data' => $this->admin_model->data_request()
        );

        $this->load->view('admin_layout/wrapper', $data);
    }

    function requestAccept()
    {
        $user_id = $this->input->post('id');
        if(!empty($this->input->post('membership'))){
            $akses_konten = 'yes';
            $endDate = date('Y-m-d',strtotime('+ '.$this->input->post('membership')));
        }else{
            $temp = $this->db->get_where('user',array('user_id'=>$user_id))->row_array();
            if($temp['akses_konten'] == 'yes'){
                $akses_konten = 'yes';
                $endDate = date('Y-m-d',strtotime($temp['endDate'].' + '.$this->input->post('membership')));
            }else{
                $akses_konten = $temp['akses_konten'];
                $endDate = $temp['endDate'];
            }
        }

        $data = array(
            'akses_konten' => $akses_konten,
            'endDate' => $endDate
        );

        $where = array(
            'user_id' => $user_id
        );

        $this->admin_model->update_data($where, $data, 'user');
        $this->admin_model->delete_data('request_akses',array('id_request'=>$this->input->post('id_request')));
        redirect(base_url('admin_menu/m_user/requestPage'));
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

    function kehadiran(){
        $data = array(
            'title' => 'Request',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => 'active',
            'isi' => 'admin/kehadiran',
            'data' => $this->admin_model->add_kehadiran(null)->result_array(),
            'kalender' => $this->admin_model->get_kehadiran()
        );

        $kalender = $data['kalender']->row_array();
        if($kalender['tanggal_hadir']==null){
            $kalender['tanggal_hadir'] = date('Y-m-d');
        }
        $date1 = new DateTime("2021-01-01");
        $date2 = new DateTime($kalender['tanggal_hadir']);
        $interval = $date1->diff($date2);   
        
        $data['year'] = $interval->y;

        // var_dump(date('m',$kalender['tanggal_hadir']));
        $this->load->view('admin_layout/wrapper', $data);
    }

    function detail_kehadiran($id,$month){
        $months = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $m = $month - 1;


        $data = array(
            'title' => 'Request',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => 'active',
            'isi' => 'admin/detail_kehadiran',
            'bulan' => $months[$m],
            'data' => $this->admin_model->where_kehadiran($id,$month)->result(),
            'murid' => $this->db->get_where('murid',array('id_murid'=>$id))->row_array()
        );

        // var_dump(date('m',$kalender['tanggal_hadir']));
        $this->load->view('admin_layout/wrapper', $data);

    }

    function hapus_kehadiran(){
        $id = $this->input->post('id');
        if($this->tryout_model->delete_data('kehadiran',array('id_kehadiran'=>$id))){
            $result = array(
                'parameter' => 404
            );
        }else{
            $result = array(
                'parameter' => 202
            );
        }

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    function update_kehadiran(){
        $tanggal_hadir = $this->input->post('tanggal_hadir');
        if($tanggal_hadir == "" or $tanggal_hadir == null){
            $tanggal_hadir = date('Y-m-d');
        }
        $murid = $this->input->post('murid');
        foreach($murid as $data){
            $input = array(
                'id_murid' => $data,
                'tanggal_hadir' => $tanggal_hadir
            );

            $this->admin_model->add_data($input,'kehadiran');
        }

        // var_dump($tanggal_hadir);

        redirect(base_url('admin_menu/m_user/kehadiran'));
    }

    function get_kehadiran(){
        
        $result = $this->admin_model->get_kehadiran()->result_array();

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    function get_data_kehadiran(){
        $tanggal_hadir = $this->input->post('tanggal_hadir');

        $result = $this->admin_model->add_kehadiran($tanggal_hadir)->result_array();

        echo json_encode($result, JSON_PRETTY_PRINT);
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
