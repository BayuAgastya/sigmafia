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
            'isi' => 'home/tryout/work_sheet',
            'id' => $id
        );

        $data['relation'] = $this->tryout_model->data_lembarKerja($id);

        $data['to'] = $this->tryout_model->getTryout($id)->row();
        $this->load->view('admin_layout/component');
        $this->load->view('admin_layout/konten', $data);
    }

    function finish()
    {
        $relation = $this->tryout_model->data_lembarKerja($this->input->post('id'))->result_array();
        $jawaban = $this->input->post('jawaban');

        $value = 0;
        $wrong = 0;
        $total = 0;
        $correct = 0;

        foreach ($relation as $r) {
            if (!empty($jawaban[$r['id_bank']])) {
                $total++;
                $id = $r['id_bank'];
                $temp = substr($jawaban[$id], -1);
                if (strtoupper($temp) == $r['jawaban']) {
                    $value += $r['bobot'];
                    $correct++;
                } else {
                    $wrong++;
                }
            }
        }

        $data = array(
            'title' => 'Tryout Sigmafia',
            'isi' => 'home/tryout/results',
            'nilai' => $value,
            'salah' => $wrong,
            'benar' => $correct,
            'total' => $total
        );

        $this->load->view('konten_layout/konten', $data);
        $this->load->view('konten_layout/head.php');
    }
}
