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
