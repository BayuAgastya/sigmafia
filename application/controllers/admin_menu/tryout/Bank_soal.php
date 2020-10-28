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

        $this->tryout_model->add_data($data, 'bank_soal');

        $this->session->set_flashdata('bank_soal', 'Soal baru berhasil ditambahkan');
        redirect(base_url('admin_menu/tryout/bank_soal'));


        // $config['upload_path']   = './uploads/bank_soal/';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        // $config['encrypt_name']         = true;
        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('file')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/tryout/bank_soal', $error);
        // } else {
        //     $upload_data = $this->upload->data();
        //     $fl_soal = $upload_data['file_name'];
        //     $fl_a = $upload_data['file_name'];
        //     $fl_b = $upload_data['file_name'];
        //     $fl_c = $upload_data['file_name'];
        //     $fl_d = $upload_data['file_name'];
        //     $fl_e = $upload_data['file_name'];

        //     $insert = $this->admin_model->dataSoalTryout($fl_soal, $fl_a, $fl_b, $fl_c, $fl_d, $fl_e);
        //     if ($insert) {
        //         $this->session->set_flashdata('soal', 'Soal Ditambahkan');
        //         redirect(base_url('admin_menu/tryout/bank_soal'));
        //     } else {
        //         echo "Gagal Upload Soal";
        //     }
        // }
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
}
