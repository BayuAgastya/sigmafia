<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Contact',
            'nav_home' => '',
            'nav_howto' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_contact' => 'active',
            'isi' => 'home/contact_view'
        );
        $this->load->view('home_layout2/wrapper', $data);
    }
}
