<?php defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('date');

        /* if ($this->admin_model->is_logged_in()) {
            $endDate = $this->input->post('endDate');
            if (date('y-m-d', strtotime('now') > $endDate)) {

                $user_id = $this->input->post('user_id');
                $change = array(
                    'akses_konten' => 'no'
                );
                $this->db->where('user_id', $user_id);
                return $this->db->update('user', $change);
            }
        } */
    }

    /*  login============================================================================= */

    //fungsi cek session logged in
    function is_logged_in()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi cek role
    function is_role()
    {
        return $this->session->userdata('role');
    }

    //fungsi cek akses_konten
    function is_akses()
    {
        return $this->session->userdata('akses_konten');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
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

    /*  UPDATE ALUMNUS============================================================================= */

    function UpdateAlumnus($id_alumnus)
    {
        $this->db->where('id_alumnus', $id_alumnus);
        return $this->db->get('alumnus');
    }

    /*  UPDATE SISWA============================================================================= */

    function UpdateSiswa($id_murid)
    {
        $this->db->where('id_murid', $id_murid);
        return $this->db->get('murid');
    }

    /*  UPDATE VIDEO============================================================================= */

    function UpdateVideoMatik($id_video)
    {
        $this->db->where('id_video', $id_video);
        return $this->db->get('video_matik');
    }
    function UpdateVideoFisika($id_video)
    {
        $this->db->where('id_video', $id_video);
        return $this->db->get('video_fisika');
    }
    function UpdateVideoKimia($id_video)
    {
        $this->db->where('id_video', $id_video);
        return $this->db->get('video_kimia');
    }


    /*  INSERT FILE============================================================================= */

    function insertSoalMatik($soal, $tingkat)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'soal' => $soal,
            'tingkat' => $tingkat
        );

        return $this->db->insert('soal_matik', $data);
    }
    function insertSoalFisika($soal, $tingkat)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'soal' => $soal,
            'tingkat' => $tingkat
        );

        return $this->db->insert('soal_fisika', $data);
    }
    function insertSoalKimia($soal, $tingkat)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'soal' => $soal,
            'tingkat' => $tingkat
        );

        return $this->db->insert('soal_kimia', $data);
    }
    /* ------------------------------------------------------------------------------------------------- */
    function insertMateriMatik($materi, $tingkat)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'materi' => $materi,
            'tingkat' => $tingkat
        );

        return $this->db->insert('materi_matik', $data);
    }
    function insertMateriFisika($materi, $tingkat)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'materi' => $materi,
            'tingkat' => $tingkat
        );

        return $this->db->insert('materi_fisika', $data);
    }
    function insertMateriKimia($materi, $tingkat)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'materi' => $materi,
            'tingkat' => $tingkat
        );

        return $this->db->insert('materi_kimia', $data);
    }

    /*   GET ID ============================================================================= */

    function getSoalMatik($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->get('soal_matik');
    }
    function getSoalFisika($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->get('soal_fisika');
    }
    function getSoalKimia($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->get('soal_kimia');
    }
    /* ------------------------------------------------------------------------------------------------- */
    function getMateriMatik($id_materi)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->get('materi_matik');
    }
    function getMateriFisika($id_materi)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->get('materi_fisika');
    }
    function getMateriKimia($id_materi)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->get('materi_kimia');
    }

    /*  DELETE FILE ============================================================================= */

    function hapusFileMatik($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->delete('soal_matik');
    }
    function hapusFileFisika($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->delete('soal_fisika');
    }
    function hapusFileKimia($id_soal)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->delete('soal_kimia');
    }
    /* ------------------------------------------------------------------------------------------------- */
    function hapusMatikFile($id_materi)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->delete('materi_matik');
    }
    function hapusFisikaFile($id_materi)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->delete('materi_fisika');
    }
    function hapusKimiaFile($id_materi)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->delete('materi_kimia');
    }

    /*  UPDATE FILE ============================================================================= */

    function updateFileMatik($id_soal, $data)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->update('soal_matik', $data);
    }
    function updateFileFisika($id_soal, $data)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->update('soal_fisika', $data);
    }
    function updateFileKimia($id_soal, $data)
    {
        $this->db->where('id_soal', $id_soal);
        return $this->db->update('soal_kimia', $data);
    }
    /* ------------------------------------------------------------------------------------------------- */
    function updateMatikFile($id_materi, $data)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->update('materi_matik', $data);
    }
    function updateFisikaFile($id_materi, $data)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->update('materi_fisika', $data);
    }
    function updateKimiaFile($id_materi, $data)
    {
        $this->db->where('id_materi', $id_materi);
        return $this->db->update('materi_kimia', $data);
    }


    /*  ============================================================================= */
    /*  ============================================================================= */

    public function get_murid($where)
    {
        $this->db->select('murid.*,user.*');
        $this->db->from('murid,user');
        $this->db->where('user.user_id', $where);
        $this->db->where('user.id_murid=murid.id_murid');

        return $this->db->get();
    }

    function UpdateUser($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->get('user');
    }

    function insertBuktiTrf($bukti_trf)
    {
        $data = array(
            'bukti_trf' => $bukti_trf,
            'user_id' => $this->session->userdata('user_id')
        );

        return $this->db->insert('request_akses', $data);
    }

    public function data_request()
    {
        $this->db->select('*');
        $this->db->from('request_akses');
        $this->db->join('user', 'user.user_id=request_akses.user_id');
        $this->db->join('murid', 'murid.id_murid=user.id_murid');

        return $this->db->get();
    }


    function getDataRequest($id)
    {
        $this->db->where('id_request', $id);
        return $this->db->get('request_akses');
    }

    function hapusFileRequest($id)
    {
        $this->db->where('id_request', $id);
        return $this->db->delete('request_akses');
    }

    function changeAkses($user)
    {

        $change = array(
            'akses_konten' => 'yes',
            'endDate' => date('Y-m-d', strtotime('next month')) /*  INSERT WAKTU 1 BULAN DARI SEKARANG (endDate) */
        );

        $this->db->where('user_id', $user);
        return $this->db->update('user', $change);
    }

    function expired($user)
    {
        $change = array(
            'akses_konten' => 'no'
        );
        $this->db->where('user_id', $user);
        return $this->db->update('user', $change);
    }


    public function hitungJumlahData($table)
    {
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungTotalData($table1, $table2, $table3)
    {
        $query1 = $this->db->get($table1);
        $query2 = $this->db->get($table2);
        $query3 = $this->db->get($table3);

        $jumlah1 = $query1->num_rows();
        $jumlah2 = $query2->num_rows();
        $jumlah3 = $query3->num_rows();

        $total = $jumlah1 + $jumlah2 + $jumlah3;

        if ($total > 0) {
            return $total;
        } else {
            return 0;
        }
    }

    /*  ============================================================================= */
    /*  ============================================================================= */
    public function get_materi_matik($tingkat)
    {
        $query = $this->db->get_where('materi_matik', array('tingkat' => $tingkat));
        return $query->result();
    }
    public function get_materi_fisika($tingkat)
    {
        $query = $this->db->get_where('materi_fisika', array('tingkat' => $tingkat));
        return $query->result();
    }
    public function get_materi_kimia($tingkat)
    {
        $query = $this->db->get_where('materi_kimia', array('tingkat' => $tingkat));
        return $query->result();
    }

    /*  ============================================================================= */
    public function get_soal_matik($tingkat)
    {
        $query = $this->db->get_where('soal_matik', array('tingkat' => $tingkat));
        return $query->result();
    }
    public function get_soal_fisika($tingkat)
    {
        $query = $this->db->get_where('soal_fisika', array('tingkat' => $tingkat));
        return $query->result();
    }
    public function get_soal_kimia($tingkat)
    {
        $query = $this->db->get_where('soal_kimia', array('tingkat' => $tingkat));
        return $query->result();
    }

    /*  ============================================================================= */
    public function get_video_matik($tingkat)
    {
        $query = $this->db->get_where('video_matik', array('tingkat' => $tingkat));
        return $query->result();
    }
    public function get_video_fisika($tingkat)
    {
        $query = $this->db->get_where('video_fisika', array('tingkat' => $tingkat));
        return $query->result();
    }
    public function get_video_kimia($tingkat)
    {
        $query = $this->db->get_where('video_kimia', array('tingkat' => $tingkat));
        return $query->result();
    }
    /*  ============================================================================= */
    public function get_user_role($role)
    {
        $query = $this->db->get_where('user', array('role' => $role));
        return $query->result();
    }
    /*  ============================================================================= */
    // INI CRONEJOB
    // public function expiredUser()
    // {
    //     $check = $this->db->get('user')->result();
    //     foreach($check as $user){
    //         if($user[])
    //     }
    // }

    public function get_materi_smp($matpel, $kelas)
    {
        $query = $this->db->get_where('materi', array(
            'id_matpel' => $matpel,
            'id_tingkat' => '2',
            'kelas' => $kelas
        ));
        return $query->result();
    }

    public function get_materi_sma($matpel, $tingkat)
    {
        $query = $this->db->get_where('materi', array('id_matpel' => $matpel, 'id_tingkat' => $tingkat));
        return $query->result();
    }
}
