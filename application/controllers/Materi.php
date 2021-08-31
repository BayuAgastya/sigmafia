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

    public function sd()
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
            'isi' => 'home/materi/sd'
        );
        $data['sd_matik'] = $this->admin_model->get_materi_sd('1', '1');

        $this->load->view('konten_layout/wrapper', $data);
    }

    public function smp()
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
            'isi' => 'home/materi/smp'
        );
        $data['smp_matik'] = $this->admin_model->get_materi_smp('1', '2');
        $data['smp_fisika'] = $this->admin_model->get_materi_smp('2', '2');
        $data['smp_kimia'] = $this->admin_model->get_materi_smp('3', '2');

        $this->load->view('konten_layout/wrapper', $data);
    }

    public function sma()
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
            'isi' => 'home/materi/sma'
        );
        $data['sma_matik'] = $this->admin_model->get_materi_sma('1', '3');
        $data['sma_fisika'] = $this->admin_model->get_materi_sma('2', '3');
        $data['sma_kimia'] = $this->admin_model->get_materi_sma('3', '3');

        $this->load->view('konten_layout/wrapper', $data);
    }
}
