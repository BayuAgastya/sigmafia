<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Materi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url');
    }
    public function index()
    {
        $data = array(
            'title' => 'Materi',
            'nav_home' => '',
            'nav_howto' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => 'active',
            'nav_contact' => '',
            'isi' => 'home/materi_view'
        );
        $data['matik_sd'] = $this->admin_model->get_materi_matik('sd');
        $data['matik_smp'] = $this->admin_model->get_materi_matik('smp');
        $data['matik_sma'] = $this->admin_model->get_materi_matik('sma');

        $data['fisika_sd'] = $this->admin_model->get_materi_fisika('sd');
        $data['fisika_smp'] = $this->admin_model->get_materi_fisika('smp');
        $data['fisika_sma'] = $this->admin_model->get_materi_fisika('sma');

        $data['kimia_sd'] = $this->admin_model->get_materi_kimia('sd');
        $data['kimia_smp'] = $this->admin_model->get_materi_kimia('smp');
        $data['kimia_sma'] = $this->admin_model->get_materi_kimia('sma');

        $this->load->view('konten_layout/wrapper', $data);
    }
}
