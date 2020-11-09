<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class tryout_base extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->admin_model->is_role() != "user") {
            redirect("home/");
        }
    }
    public function index()
    {
        $data = array(
            'title' => 'Tryout',
            'nav_home' => '',
            'nav_howto' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_contact' => '',
            'isi' => 'home/tryout/list'
        );

        $data['data_bank'] = $this->db->get('bank_soal');
        $data['data_tryout'] = $this->db->get('tryout');
        $this->load->view('konten_layout/wrapper', $data);
    }

    function prep($id)
    {
        $data = array(
            'title' => 'Tryout',
            'nav_home' => '',
            'nav_howto' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_contact' => '',
            'isi' => 'home/tryout/prep_page'
        );
        $data['data_bank'] = $this->db->get('bank_soal');
        $data['to'] = $this->tryout_model->getTryout($id)->row();
        $this->load->view('konten_layout/konten', $data);
        $this->load->view('konten_layout/head.php');
    }

    function start($id)
    {
        $data = array(
            'title' => 'Tryout Sigmafia',
            'isi' => 'home/tryout/work_sheet'
        );

        $data['relation'] = $this->tryout_model->data_lembarKerja($id);

        $data['to'] = $this->tryout_model->getTryout($id)->row();
        $this->load->view('admin_layout/component');
        $this->load->view('admin_layout/konten', $data);
    }
}
