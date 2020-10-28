<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Hasil_tryout extends CI_Controller
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

    function page_detail($id)
    {
        $data = array(
            'title' => 'Hasil Tryout',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => 'active',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/tryout/hasil_tryout/detail'
        );
        $data['data'] = $this->tryout_model->getTryout($id)->row();
        $data['data_hasil'] = $this->db->get('hasil_tryout');
        $data['hasil'] = $this->tryout_model->getHasilByTo($id);
        $this->load->view('admin_layout/wrapper', $data);
    }
}
