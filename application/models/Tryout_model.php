<?php defined('BASEPATH') or exit('No direct script access allowed');
class Tryout_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('date');
    }

    /*  BASE============================================================================= */

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function add_data($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    function delete_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    /*  ============================================================================= */
    function dataSoalTryout($fl_soal, $fl_a, $fl_b, $fl_c, $fl_d, $fl_e)
    {
        $data = array(
            'bobot' => $this->input->post('bobot'),
            'soal' => $this->input->post('soal'),
            'file_soal' => $fl_soal,
            'sumber' => $this->input->post('sumber'),
            'opsi_a' => $this->input->post('opsi_a'),
            'opsi_b' => $this->input->post('opsi_b'),
            'opsi_c' => $this->input->post('opsi_c'),
            'opsi_d' => $this->input->post('opsi_d'),
            'opsi_e' => $this->input->post('opsi_e'),
            'file_a' => $fl_a,
            'file_b' => $fl_b,
            'file_c' => $fl_c,
            'file_d' => $fl_d,
            'file_e' => $fl_e,
            'jawaban' => $this->input->post('jawaban'),
            'pembahasan' => $this->input->post('pembahasan'),
            'created_on' => date('y-m-d')
        );

        return $this->db->insert('bank_soal', $data);
    }

    /*  ============================================================================= */
    function getSoal($id_bank)
    {
        $this->db->where('id_bank', $id_bank);
        return $this->db->get('bank_soal');
    }

    function getTryout($id_tryout)
    {
        $this->db->where('id_tryout', $id_tryout);
        return $this->db->get('tryout');
    }

    function getHasilTO($id_hasil)
    {
        $this->db->where('id_hasil', $id_hasil);
        return $this->db->get('hasil_tryout');
    }
    /*  ============================================================================= */

    public function getHasilByTo($id)
    {
        $query = $this->db->get_where('hasil_tryout', array('id_tryout' => $id));
        return $query->result();
    }

    public function getSoalByTo($soal)
    {
        $query = $this->db->get_where('bank_soal', array('id_bank' => $soal));
        return $query->result();
    }

    public function riwayat_tryout($id){
        $this->db->select('tryout.*,hasil_tryout.*');
        $this->db->from('tryout','hasil_tryout');
        $this->db->join('hasil_tryout','hasil_tryout.id_tryout=tryout.id_tryout');
        $this->db->where('hasil_tryout.id_user='.$id);
        return $this->db->get();
    }

    public function data_murid()
    {
        $this->db->select('murid.*');
        $this->db->from('murid');
        $this->db->join('relation_tryout_murid', 'murid.id_murid=relation_tryout_murid.id_murid','left');

        return $this->db->get();
    }

    public function validation_tryout($where){
        $this->db->select('tryout.*');
        $this->db->from('tryout');
        $this->db->join('relation_tryout_murid','relation_tryout_murid.id_tryout=tryout.id_tryout');
        $this->db->where('tryout.id_tryout',$where);

        return $this->db->get();
    }

    public function data_murid_where($where)
    {
        $this->db->select('murid.id_murid');
        $this->db->from('murid');
        $this->db->join('relation_tryout_murid', 'murid.id_murid=relation_tryout_murid.id_murid');
        $this->db->where('relation_tryout_murid.id_tryout',$where);
        $where_clause = $this->db->get_compiled_select();
        // $this->db->select('murid.*');
        // $this->db->from('murid');
        // $this->db->join('relation_tryout_murid', 'murid.id_murid=relation_tryout_murid.id_murid','left');
        // $this->db->where('relation_tryout_murid.id_murid', null);
        // $this->db->or_where_not_in('relation_tryout_murid.id_tryout', array($where));
        // $this->db->query(`SELECT murid.* FROM murid WHERE NOT IN murid.id_murid (SELECT murid.id_murid FROM murid INNER JOIN relation_tryout_murid ON murid.id_murid=relation_tryout_murid.id_murid WHERE relation_tryout_murid.id_tryout=`.$where.`)`);
        $this->db->select('*');
        $this->db->from('murid');
        $this->db->where("`id_murid` NOT IN ($where_clause)",NULL,FALSE);

        return $this->db->get();
    }

    public function get_riwayat_tryout($id){
        return $this->db->get_where('hasil_tryout',array('id_tryout'=>$id));
    }

    public function detail_jawaban($id_tryout,$id_hasil){
        $this->db->select('*');
        $this->db->from('bank_jawaban');
        $this->db->where('id_tryout',$id_tryout);
        $this->db->where('id_hasil',$id_hasil);

        return $this->db->get();
    }

    public function simpan_hasil($id,$user_id,$total,$correct,$value,$bobot,$now,$nilai){
        $tryout = $this->db->get_where('tryout',array('id_tryout'=>$id))->row();
        if($nilai >= 70){
            $status = 'Lolos';
        }else{
            $status = 'Tidak Lolos';
        }
        $data = array(
            'id_tryout' => $id,
            'id_user' => $user_id,
            'urut_soal' => $tryout->jumlah_soal,
            'urut_jawaban' => $total,
            'jml_benar' => $correct,
            'nilai' => $nilai,
            'nilai_bobot' => $value,
            'total_bobot' => $bobot,
            'tgl_mulai' => $now,
            'tgl_selesai' => date('Y-m-d H:i:s'),
            'status' => $status
        );
        $this->db->insert('hasil_tryout',$data);
    }

    public function getRelation($id)
    {
        $query = $this->db->get_where('relation_tryout', array('id_tryout' => $id));
        return $query->result();
    }

    public function data_lembarKerja($id)
    {
        $this->db->select('*');
        $this->db->from('relation_tryout');
        $this->db->join('tryout', 'tryout.id_tryout=relation_tryout.id_tryout');
        $this->db->join('bank_soal', 'bank_soal.id_bank=relation_tryout.id_bank');
        $this->db->where('relation_tryout.id_tryout', $id);

        return $this->db->get();
    }

    // public function data_request()
    // {
    //     $this->db->select('*');
    //     $this->db->from('request_akses');
    //     $this->db->join('user', 'user.user_id=request_akses.user_id');
    //     $this->db->join('murid', 'murid.id_murid=user.id_murid');

    //     return $this->db->get();
    // }

    // <div class="form-group col-sm-12">
    // <label>Mata Pelajaran</label>
    // <?= form_dropdown('matpel', get_combo('matpel', 'id_matpel', 'nama_matpel', array(">> Pilih Mata Pelajaran")), $data_matpel, array('class' => "form-control", 'id' => "matpel"))
    // </div>
}
