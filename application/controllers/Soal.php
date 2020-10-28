<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Soal extends CI_Controller
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
            'title' => 'Soal-Soal',
            'nav_home' => '',
            'nav_howto' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => 'active',
            'nav_materi' => '',
            'nav_contact' => '',
            'isi' => 'home/soal_view'
        );
        $data['matik_sd'] = $this->admin_model->get_soal_matik('sd');
        $data['matik_smp'] = $this->admin_model->get_soal_matik('smp');
        $data['matik_sma'] = $this->admin_model->get_soal_matik('sma');

        $data['fisika_sd'] = $this->admin_model->get_soal_fisika('sd');
        $data['fisika_smp'] = $this->admin_model->get_soal_fisika('smp');
        $data['fisika_sma'] = $this->admin_model->get_soal_fisika('sma');

        $data['kimia_sd'] = $this->admin_model->get_soal_kimia('sd');
        $data['kimia_smp'] = $this->admin_model->get_soal_kimia('smp');
        $data['kimia_sma'] = $this->admin_model->get_soal_kimia('sma');

        $this->load->view('konten_layout/wrapper', $data);
    }
}
