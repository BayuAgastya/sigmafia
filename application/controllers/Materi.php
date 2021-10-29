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
        $data['sd_matik4'] = $this->admin_model->get_materi_sd('4', '1');
        $data['sd_matik5'] = $this->admin_model->get_materi_sd('5', '1');
        $data['sd_matik6'] = $this->admin_model->get_materi_sd('6', '1');

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
        $data['smp_matik7'] = $this->admin_model->get_materi_smp('7', '1');
        $data['smp_matik8'] = $this->admin_model->get_materi_smp('8', '1');
        $data['smp_matik9'] = $this->admin_model->get_materi_smp('9', '1');
        $data['smp_fisika7'] = $this->admin_model->get_materi_smp('7', '2');
        $data['smp_fisika8'] = $this->admin_model->get_materi_smp('8', '2');
        $data['smp_fisika9'] = $this->admin_model->get_materi_smp('9', '2');
        $data['smp_kimia7'] = $this->admin_model->get_materi_smp('7', '3');
        $data['smp_kimia8'] = $this->admin_model->get_materi_smp('8', '3');
        $data['smp_kimia9'] = $this->admin_model->get_materi_smp('9', '3');

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
        $data['sma_matik10'] = $this->admin_model->get_materi_sma('10', '1');
        $data['sma_matik11'] = $this->admin_model->get_materi_sma('11', '1');
        $data['sma_matik12'] = $this->admin_model->get_materi_sma('12', '1');
        $data['sma_fisika10'] = $this->admin_model->get_materi_sma('10', '2');
        $data['sma_fisika11'] = $this->admin_model->get_materi_sma('11', '2');
        $data['sma_fisika12'] = $this->admin_model->get_materi_sma('12', '2');
        $data['sma_kimia10'] = $this->admin_model->get_materi_sma('10', '3');
        $data['sma_kimia11'] = $this->admin_model->get_materi_sma('11', '3');
        $data['sma_kimia12'] = $this->admin_model->get_materi_sma('12', '3');

        $this->load->view('konten_layout/wrapper', $data);
    }

    public function materiViewSD($id)
    {
        $data = array(
            'title' => 'Materi View',
        );
        $data['data'] = $this->admin_model->viewMateri($id)->row();

        $this->load->view('home/materi/view', $data);
    }
}
