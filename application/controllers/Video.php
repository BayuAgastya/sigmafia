<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Video extends CI_Controller
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
            'title' => 'Video Pembelajaran',
            'nav_home' => '',
            'nav_howto' => '',
            'nav_about' => '',
            'nav_video' => 'active',
            'nav_soal' => '',
            'nav_contact' => '',
            'isi' => 'home/video_view'
        );
        $data['matik_sd'] = $this->admin_model->get_video_matik('sd');
        $data['matik_smp'] = $this->admin_model->get_video_matik('smp');
        $data['matik_sma'] = $this->admin_model->get_video_matik('sma');

        $data['fisika_sd'] = $this->admin_model->get_video_fisika('sd');
        $data['fisika_smp'] = $this->admin_model->get_video_fisika('smp');
        $data['fisika_sma'] = $this->admin_model->get_video_fisika('sma');

        $data['kimia_sd'] = $this->admin_model->get_video_kimia('sd');
        $data['kimia_smp'] = $this->admin_model->get_video_kimia('smp');
        $data['kimia_sma'] = $this->admin_model->get_video_kimia('sma');

        $this->load->view('konten_layout/wrapper', $data);
    }
}
