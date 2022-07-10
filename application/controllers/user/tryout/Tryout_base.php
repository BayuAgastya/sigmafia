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

    function check_code(){
        $data = $this->tryout_model->validation_tryout($this->input->post('id_tryout'))->row_array();
        if(!empty($data)){
            if($data['kode'] == $this->input->post('code')){
                if($data['status'] == 1){
                    $result = array(
                        'parameter' => 200
                    );
                }else{
                    $result = array(
                        'parameter' => 202
                    );
                }
            }else{
                $result = array(
                    'parameter' => 400
                );
            }
        }else{
            $result = array(
                'parameter' => 404
            );
        }

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    public function riwayat()
    {
        $data = array(
            'title' => 'Riwayat Nilai',
            'nav_home' => '',
            'nav_howto' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_contact' => '',
            'isi' => 'home/tryout/riwayat'
        );

        $data['data_hasil'] = $this->tryout_model->riwayat_tryout($this->session->userdata('user_id'));
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
        $bobot = 0;
        $data_bank = $this->tryout_model->data_lembarKerja($id)->result();
        foreach($data_bank as $databank){
            $bobot += $databank->bobot;
        }
        $data['bobot'] = $bobot;
        $data['to'] = $this->tryout_model->getTryout($id)->row();
        $this->load->view('konten_layout/konten', $data);
        $this->load->view('konten_layout/head.php');
    }

    function start($id)
    {
        $now = date('Y-m-d H:i:s');

        $data = array(
            'title' => 'Tryout Sigmafia',
            'isi' => 'home/tryout/work_sheet',
            'id' => $id,
            'now' => $now
        );

        $data['relation'] = $this->tryout_model->data_lembarKerja($id);

        $data['to'] = $this->tryout_model->getTryout($id)->row();
        $this->load->view('admin_layout/component');
        $this->load->view('admin_layout/konten', $data);
    }

    function detail_riwayat($id){
        $data_hasil = $this->db->get_where('hasil_tryout',array('id_hasil'=>$id))->row_array();
        $jawaban = $this->tryout_model->detail_jawaban($data_hasil['id_tryout'],$id)->result();
        $p = array();

        $data = array(
            'title' => 'Tryout Sigmafia',
            'isi' => 'home/tryout/detail_sheet',
            'id' => $id
        );

        foreach($jawaban as $j){
            $p[$j->id_bank] = $j->jawaban_user;
        }
        // var_dump($p);

        $data['data'] = $p;
        $data['relation'] = $this->tryout_model->data_lembarKerja($data_hasil['id_tryout']);
        $data['to'] = $this->tryout_model->getTryout($data_hasil['id_tryout'])->row();

        $this->load->view('admin_layout/component');
        $this->load->view('admin_layout/konten', $data);
    }

    function finish()
    {
        $relation = $this->tryout_model->data_lembarKerja($this->input->post('id'))->result_array();
        $jawaban = $this->input->post('jawaban');
        $now = $this->input->post('now');
        $detail_tryout = $data = $this->tryout_model->validation_tryout($this->input->post('id'))->row();;
        $user_id = $this->session->userdata('user_id');

        $value = 0;
        $wrong = 0;
        $total = 0;
        $total_bobot = 0;
        $correct = 0;
        $nilai = 0;
        $i = 0;

        foreach ($relation as $r) {
            $total++;
            $id = $r['id_bank'];
            $total_bobot += $r['bobot'];
            $temp = null;
            if (!empty($jawaban[$r['id_bank']])) {
                $temp = substr($jawaban[$id], -1);
                if (strtoupper($temp) == $r['jawaban']) {
                    $value += $r['bobot'];
                    $correct++;
                } else {
                    $wrong++;
                }
            }else{
                $wrong++;
            }
            $detail_jawaban[$i] = array(
                'id_bank' => $r['id_bank'],
                'jawaban_user' => $temp,
                'id_tryout' => $r['id_tryout'],
                'id_user' => $user_id
            );
            $i++;
        }

        if($value < 1){
            $nilai = 0;
        }else{
            $nilai = ($value / $total_bobot) * 100;
        }

        $this->tryout_model->simpan_hasil($this->input->post('id'), $user_id, $correct, $value, $total_bobot, $now, $nilai);
        $id_hasil = array(
            'id_hasil' => $this->db->insert_id()
        );  

        for($i=0;$i<count($detail_jawaban);$i++){
            $conclusion = null;
            $conclusion = array_merge($detail_jawaban[$i], $id_hasil);
            $this->db->insert('bank_jawaban',$conclusion);
        }


        $murid = $this->db->get_where('user',array('user_id'=>$user_id))->row_array();
        $this->tryout_model->update_data(array('id_relation_tryout_murid'=>$detail_tryout->id_relation_tryout_murid),array('id_tryout'=>$this->input->post('id'),'id_murid'=>$murid['id_murid'],'status'=>1),'relation_tryout_murid');
        
        $data = array(
            'title' => 'Tryout Sigmafia',
            'isi' => 'home/tryout/results',
            'nilai' => $value,
            'salah' => $wrong,
            'benar' => $correct,
            'total' => $total,
            'detail' => $detail_tryout,
            'id_riwayat' => $id_hasil
        );


        $this->load->view('konten_layout/konten', $data);
        $this->load->view('konten_layout/head.php');
    }
}
