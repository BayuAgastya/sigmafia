<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Bank_soal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('admin_model');
        $this->load->model('tryout_model');
        $this->form_validation->set_error_delimiters('', '');
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
            'nav_bank' => 'active',
            'nav_tryout' => '',

            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            
            'nav_kehadiran' => '',
            'isi' => 'admin/tryout/bank_soal'
        );
        $data['data_bank'] = $this->db->get('bank_soal');
        $data['data_guru'] = $this->db->get('guru');
        $data['data_tingkat'] = $this->db->get('tingkat');
        $data['data_matpel'] = $this->db->get('matpel');

        $this->load->view('admin_layout/wrapper', $data);
    }

    function page_tambah()
    {
        $data = array(
            'title' => 'Tambah Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => 'active',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/tryout/bank_soal/tambah'
        );

        $data['data_guru'] = $this->db->get('guru');
        $data['data_matpel'] = $this->db->get('matpel');
        $data['data_tingkat'] = $this->db->get('tingkat');
        $this->load->view('admin_layout/wrapper', $data);
    }

    function page_detail($id)
    {
        $data = array(
            'title' => 'Detail Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => 'active',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/tryout/bank_soal/detail'
        );

        $data['data'] = $this->tryout_model->getSoal($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    public function save()
    {
        $data = array(
            'id_guru' => $this->input->post('id_guru'),
            'id_matpel' => $this->input->post('id_matpel'),
            'id_tingkat' => $this->input->post('id_tingkat'),
            'soal' => $this->input->post('soal'),
            'sumber' => $this->input->post('sumber'),
            'opsi_a' => $this->input->post('opsi_a'),
            'opsi_b' => $this->input->post('opsi_b'),
            'opsi_c' => $this->input->post('opsi_c'),
            'opsi_d' => $this->input->post('opsi_d'),
            'opsi_e' => $this->input->post('opsi_e'),
            'jawaban' => $this->input->post('jawaban'),
            'bobot' => $this->input->post('bobot'),
            'pembahasan' => $this->input->post('pembahasan'),
            'created_on' => date('y-m-d')
        );

        if(!empty($_FILES['file_soal']['name'])){
            $config['upload_path']   = './uploads/bank_soal/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_soal')) {
                $error = array('error' => $this->upload->display_errors());
            }else{
                $file_soal = $this->upload->data();
                $file_soal_nama = $file_soal['file_name'];
                $data['file_soal'] = $file_soal_nama;
            }
        }else{
            $data['file_soal'] = null;
        }
        
        if(!empty($_FILES['file_a']['name'])){
            if (!$this->upload->do_upload('file_a')) {
                $file_a_nama = null;
            }else{
                $file_a = $this->upload->data();
                $file_a_nama = $file_a['file_name'];
            }
        }else{
            $file_a_nama = null;
        }
        $data['file_a'] = $file_a_nama;

        if(!empty($_FILES['file_b']['name'])){
            if (!$this->upload->do_upload('file_b')) {
                $file_b_nama = null;
            }else{
                $file_b = $this->upload->data();
                $file_b_nama = $file_b['file_name'];
            }
        }else{
            $file_b_nama = null;
        }
        $data['file_b'] = $file_b_nama;

        if(!empty($_FILES['file_c']['name'])){
            if (!$this->upload->do_upload('file_c')) {
                $file_c_nama = null;
            }else{
                $file_c = $this->upload->data();
                $file_c_nama = $file_c['file_name'];
            }
        }else{
            $file_c_nama = null;
        }
        $data['file_c'] = $file_c_nama;

        if(!empty($_FILES['file_d']['name'])){
            if (!$this->upload->do_upload('file_d')) {
                $file_d_nama = null;
            }else{
                $file_d = $this->upload->data();
                $file_d_nama = $file_d['file_name'];
            }
        }else{
            $file_d_nama = null;
        }
        $data['file_d'] = $file_d_nama;

        if(!empty($_FILES['file_e']['name'])){
            if (!$this->upload->do_upload('file_e')) {
                $file_e_nama = null;
            }else{
                $file_e = $this->upload->data();
                $file_e_nama = $file_e['file_name'];
            }
        }else{
            $file_e_nama = null;
        }
        $data['file_e'] = $file_e_nama;
        
        if ($this->tryout_model->add_data($data, 'bank_soal')) {
            redirect(base_url('admin_menu/tryout/bank_soal'));
        } else {
            redirect(base_url('admin_menu/tryout/bank_soal'));
        }
    }

    function page_edit($id)
    {
        $data = array(
            'title' => 'Edit Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => 'active',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/tryout/bank_soal/edit'
        );
        $data['data'] = $this->admin_model->UpdateAlumnus($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function editsoal()
    {
        redirect(base_url('admin_menu/tryout/bank_soal'));
    }

    function hapus($id)
    {
        $this->db->where('id_bank', $id);
        $this->db->delete('bank_soal');

        $this->session->set_flashdata('bank_soal', 'Data alumni berhasil dihapus');
        redirect(base_url('admin_menu/tryout/bank_soal'));
    }

    function bank_soal_check(){
        $sd = $this->input->post('sd');
        $smp = $this->input->post('smp');
        $sma = $this->input->post('sma');
        $matematika = $this->input->post('matematika');
        $kimia = $this->input->post('kimia');
        $fisika = $this->input->post('fisika');
        $search = $this->input->post('search');

        $result = $this->admin_model->bank_soal_check($sd,$smp,$sma,$matematika,$kimia,$fisika,$search);
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
}
