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
            
            'nav_kehadiran' => '',
            'isi' => 'admin/tryout/hasil_tryout/detail'
        );
        $data['data'] = $this->tryout_model->getTryout($id)->row();

        $nilai = 0;
        $bobot = array();
        $data['bobot_total'] = 0;
        $riwayat = $this->tryout_model->get_riwayat_tryout($id)->result_array();
        foreach($this->tryout_model->data_lembarKerja($id)->result_array() as $lk){
            $data['bobot_total'] += $lk['bobot'];
        }
        foreach($riwayat as $r){
            $nilai += $r['nilai'];
            $bobot[] = $r['nilai_bobot'];
        }
        if(empty($bobot)){
            $data['min'] = 0;
            $data['max'] = 0;
            $data['average'] = 0;
        }else{
            $data['min'] = min($bobot);
            $data['max'] = max($bobot);
            $data['average'] = $nilai/count($riwayat);
        }
        $data['data_hasil'] = $this->db->get('hasil_tryout');
        $data['hasil'] = $this->tryout_model->getHasilByTo($id);
        $this->load->view('admin_layout/wrapper', $data);
    }

    function delete_detail_user_tryout(){
        $id = $this->input->post('id');
        if($this->tryout_model->delete_data('hasil_tryout',array('id_hasil'=>$id))){
            $result = array(
                'parameter' => 404
            );
        }else{
            $result = array(
                'parameter' => 202
            );
        }

        echo json_encode($result, JSON_PRETTY_PRINT);
    }
}
