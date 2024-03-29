<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('tryout_model');
        $this->load->helper('url');
        $data['data_murid'] = $this->db->get('murid');
    }

    public function index()
    {
        $data = array(
            'title' => 'Sigmafia',
            'isi' => 'home/index_home'
        );
        $data['data_alumnus'] = $this->db->get('alumnus');
        $data['data_murid'] = $this->db->get('murid');
        $data['video_matik'] = $this->db->get('video_matik');
        $data['video_fisika'] = $this->db->get('video_fisika');
        $data['video_kimia'] = $this->db->get('video_kimia');
        $data['soal_matik'] = $this->db->get('soal_matik');
        $data['soal_fisika'] = $this->db->get('soal_fisika');
        $data['soal_kimia'] = $this->db->get('soal_kimia');
        $data['materi_matik'] = $this->db->get('materi_matik');
        $data['materi_fisika'] = $this->db->get('materi_fisika');
        $data['materi_kimia'] = $this->db->get('materi_kimia');

        $this->load->view('home_layout/wrapper', $data);
    }

    function profile()
    {
        $data = array(
            'title' => 'Profile',
            'nav_home' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_contact' => '',
            'isi' => 'home/profile_view',
            'data_murid' => $this->admin_model->get_murid($this->session->userdata('user_id'))->row_array()
        );
        $this->load->view('konten_layout/wrapper', $data);
    }

    function profile_edit()
    {
        $data = array(
            'title' => 'Profile',
            'nav_home' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_contact' => '',
            'isi' => 'home/profile_edit',
            'data_murid' => $this->admin_model->get_murid($this->session->userdata('user_id'))->row_array()
        );
        $this->load->view('konten_layout/wrapper', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('main', 'Logout Berhasil');
        redirect('home');
    }

    function tambah_murid()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $id = rand();
        $nama = $this->input->post('nama');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $alamat_rumah = $this->input->post('alamat_rumah');
        $instagram = $this->input->post('instagram');
        $line = $this->input->post('line');
        $whatsaap = $this->input->post('whatsaap');
        $email = $this->input->post('email');

        $data = array(
            'id_murid' => $id,
            'nama' => $nama,
            'asal_sekolah' => $asal_sekolah,
            'alamat_rumah' => $alamat_rumah,
            'instagram' => $instagram,
            'line' => $line,
            'whatsaap' => $whatsaap,
            'email' => $email
        );

        $this->admin_model->add_data($data, 'murid');

        $tambah = array(
            'username' => $username,
            'password' => $password,
            'role' => 'user',
            'id_murid' => $id,
            'akses_konten' => 'no'
        );
        $this->admin_model->add_data($tambah, 'user');

        $this->session->set_flashdata('main', 'Daftar Akun Berhasil');
        redirect('home');
    }

    function editSiswaProfile()
    {
        $id_murid = $this->input->post('id_murid');
        $nama = $this->input->post('nama');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $alamat_rumah = $this->input->post('alamat_rumah');
        $instagram = $this->input->post('instagram');
        $line = $this->input->post('line');
        $whatsaap = $this->input->post('whatsaap');
        $email = $this->input->post('email');

        $data = array(
            'id_murid' => $id_murid,
            'nama' => $nama,
            'asal_sekolah' => $asal_sekolah,
            'alamat_rumah' => $alamat_rumah,
            'instagram' => $instagram,
            'line' => $line,
            'whatsaap' => $whatsaap,
            'email' => $email
        );

        $where = array(
            'id_murid' => $id_murid
        );

        $this->admin_model->update_data($where, $data, 'murid');
        $this->session->set_flashdata('main', 'Data murid berhasil diupdate');
        redirect(base_url('home/profile'));
    }

    function upload()
    {
        $config['upload_path']   = './uploads/bukti_trf/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            echo "Gagal";
        } else {
            $upload_data = $this->upload->data();
            $name = $upload_data['file_name'];

            $insert = $this->admin_model->insertBuktiTrf($name);
            if ($insert) {
                $this->session->set_flashdata('main', 'Request ditambahkan');
                redirect(base_url('home'));
            } else {
                echo "Gagal";
            }
        }
    }

    function data_evaluasi()
    {
        $data = array(
            'title' => 'Evaluasi',
            'nav_home' => '',
            'nav_about' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_contact' => '',
            'isi' => 'home/evaluasi',
            'data_murid' => $this->admin_model->get_murid($this->session->userdata('user_id'))->row_array()
        );

        if (empty($this->input->get('tanggal-evaluasi')) and $this->input->get('tanggal-evaluasi') == 0) {
            $month = date('m');
            $year = date('Y');
        } else {
            $month = $this->input->get('tanggal-evaluasi');
            $year = date('Y');
        }

        // $data['evaluations'] = $this->admin_model->count_relation_evaluation($this->session->userdata('user_id'),$month,$year)->result_array();

        $data['minggu1'] = 0;
        $data['minggu2'] = 0;
        $data['minggu3'] = 0;
        $data['minggu4'] = 0;
        $user = $this->db->get_where('user', array('user_id' => $this->session->userdata('user_id')))->row_array();
        $id_murid = $user['id_murid'];

        if (empty($this->input->get('tanggal-evaluasi')) and $this->input->get('tanggal-evaluasi') == 0) {
            $data['minggu1'] = $this->admin_model->get_weekly($id_murid, date('Y-m-01'), date('Y-m-07'));
            $data['minggu2'] = $this->admin_model->get_weekly($id_murid, date('Y-m-08'), date('Y-m-14'));
            $data['minggu3'] = $this->admin_model->get_weekly($id_murid, date('Y-m-15'), date('Y-m-21'));
            $data['minggu4'] = $this->admin_model->get_weekly($id_murid, date('Y-m-22'), date('Y-m-t'));
        } else {
            $data['minggu1'] = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-01'), date('Y-' . $month . '-07'));
            $data['minggu2'] = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-08'), date('Y-' . $month . '-14'));
            $data['minggu3'] = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-15'), date('Y-' . $month . '-21'));
            $data['minggu4'] = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-22'), date('Y-m-t', date('Y-' . $month . '-01')));
        }

        $nilai = 0;
        $total_nilai = 0;

        $array = array();
        foreach ($this->admin_model->count_relation_evaluation($id_murid, $month, $year)->result_array() as $ini) {
            $result = $this->admin_model->hasil_evaluasi($this->session->userdata('user_id'), $ini['id_tryout'], $month, $year);
            if (!empty($result)) {
                $array[] = array(
                    'nama_tryout' => $result['nama_tryout'],
                    'nilai' => $result['nilai'],
                    'nilai_bobot' => $result['nilai_bobot'],
                    'status' => $result['status']
                );
                $nilai += $result['nilai_bobot'];
                $total_nilai += $result['total_bobot'];
            } else {
                $array[] = array(
                    'nama_tryout' => $result['nama_tryout'],
                    'nilai' => '0.00',
                    'nilai_bobot' => '0',
                    'status' => 'Belum Tryout'
                );
                foreach ($this->tryout_model->data_lembarKerja($data['id_tryout'])->result_array() as $lk) {
                    $total_nilai += $lk['bobot'];
                }
            }
        }
        $data['evaluations'] = $array;
        if ($nilai == 0 and $total_nilai == 0) {
            $data['jumlah'] = 0;
        } else {
            $data['jumlah'] = ($nilai / $total_nilai) * 100;
        }

        $data['kehadiran'] = (($data['minggu1'] + $data['minggu2'] + $data['minggu3'] + $data['minggu4']) * 10 / 80) * 100;
        if ($data['kehadiran'] > 100) {
            $data['kehadiran'] = 100;
        }

        $data['total'] = (((($data['minggu1'] + $data['minggu2'] + $data['minggu3'] + $data['minggu4']) * 10) + $nilai) / (80 + $total_nilai)) * 100;

        if ($data['kehadiran'] < 50) {
            $kk = 'Sangat Buruk';
        } else if ($data['kehadiran'] < 60) {
            $kk = 'Buruk';
        } else if ($data['kehadiran'] < 80) {
            $kk = 'Baik';
        } else {
            $kk = 'Sangat Baik';
        }

        if ($data['jumlah'] < 50) {
            $kn = 'Sangat Buruk';
        } else if ($data['jumlah'] < 60) {
            $kn = 'Buruk';
        } else if ($data['jumlah'] < 80) {
            $kn = 'Baik';
        } else {
            $kn = 'Sangat Baik';
        }

        if ($data['kehadiran'] == 0 and $data['jumlah'] == 0) {
            $data['comment'] = "Tidak ada data yang ditemukan";
        } else {
            $data['comment'] = "Nilai tryout anda " . $kn . ", Kehadiran anda " . $kk . "";
        }

        $this->load->view('konten_layout/wrapper', $data);
    }

    function evaluasi()
    {
        //get data;
        $minggu1 = 0;
        $minggu2 = 0;
        $minggu3 = 0;
        $minggu4 = 0;

        if (empty($this->input->get('tanggal-evaluasi')) and $this->input->get('tanggal-evaluasi') == 0) {
            $month = date('m');
            $year = date('Y');
        } else {
            $month = $this->input->get('tanggal-evaluasi');
            $year = date('Y');
        }

        $user = $this->db->get_where('user', array('user_id' => $this->session->userdata('user_id')))->row_array();
        $id_murid = $user['id_murid'];
        // if($id_murid == null){
        //     $this->session->set_flashdata('main', 'Tidak ditemukan Data Evaluasi');
        //     redirect(base_url('profile'));
        //     return;
        // }

        if (empty($this->input->get('tanggal-evaluasi')) and $this->input->get('tanggal-evaluasi') == 0) {
            $minggu1 = $this->admin_model->get_weekly($id_murid, date('Y-m-01'), date('Y-m-07'));
            $minggu2 = $this->admin_model->get_weekly($id_murid, date('Y-m-08'), date('Y-m-14'));
            $minggu3 = $this->admin_model->get_weekly($id_murid, date('Y-m-15'), date('Y-m-21'));
            $minggu4 = $this->admin_model->get_weekly($id_murid, date('Y-m-22'), date('Y-m-t'));
        } else {
            $minggu1 = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-01'), date('Y-' . $month . '-07'));
            $minggu2 = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-08'), date('Y-' . $month . '-14'));
            $minggu3 = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-15'), date('Y-' . $month . '-21'));
            $minggu4 = $this->admin_model->get_weekly($id_murid, date('Y-' . $month . '-22'), date('Y-' . $month . '-t'));
        }
        $nilai = 0;
        $total_nilai = 0;
        $this->load->library('Linegraph');

        $pdf = new PDF_LineGraph();
        $pdf->SetFont('Arial', 'B', 10);
        $minggu_kehadiran = array(
            'Kehadiran' => array(
                'Minggu 1' => $minggu1,
                'Minggu 2' => $minggu2,
                'Minggu 3' => $minggu3,
                'Minggu 4' => $minggu4
            )
        );
        $colors = array(
            'Kehadiran' => array(255, 165, 0)
        );

        $bulan = array(
            1 =>   'JANUARI',
            'FEBRUARI',
            'MARET',
            'APRIL',
            'MEI',
            'JUNI',
            'JULI',
            'AGUSTUS',
            'SEPTEMBER',
            'OKTOBER',
            'NOVEMBER',
            'DESEMBER'
        );

        $socialmedia = base_url('assets/main/img/socialmedia.png');
        $image = base_url('assets/main/img/Logo Sigmafia 2020-01.png');
        $image = str_replace(" ", "%20", $image);

        $pdf->AddPage();
        $pdf->Cell(68, 10, "", 0, 0, 'L', false);
        $pdf->Cell(40, 20, $pdf->Image($image, $pdf->GetX(), $pdf->GetY(), 53.108), 0, 1, 'L', false);
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, "EVALUASI " . $bulan[(int)date('m')] . " " . date('Y'), 0, 1, 'C', false);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(0, 10, "Tryout", 0, 1, 'L', false);

        $pdf->Cell(10, 10, 'No', 1, 0);
        $pdf->Cell(80, 10, 'Nama Tryout', 1, 0);
        $pdf->Cell(25, 10, 'Nilai', 1, 0);
        $pdf->Cell(35, 10, 'Score', 1, 0);
        $pdf->Cell(40, 10, 'Status', 1, 1);

        $no = 1;
        foreach ($this->admin_model->count_relation_evaluation($id_murid, $month, $year)->result_array() as $data) {
            $result = $this->admin_model->hasil_evaluasi($id_murid, $data['id_tryout'], $month, $year);
            $pdf->Cell(10, 10, $no, 1, 0);
            // var_dump($data);
            if (!empty($result)) {
                $pdf->Cell(80, 10, $result['nama_tryout'], 1, 0);
                $pdf->Cell(25, 10, $result['nilai'], 1, 0);
                $pdf->Cell(35, 10, $result['nilai_bobot'], 1, 0);
                $pdf->Cell(40, 10, $result['status'], 1, 1);
                $nilai += $result['nilai_bobot'];
                $total_nilai += $result['total_bobot'];
            } else {
                $pdf->Cell(80, 10, $result['nama_tryout'], 1, 0);
                $pdf->Cell(25, 10, '0.00', 1, 0);
                $pdf->Cell(35, 10, '0', 1, 0);
                $pdf->Cell(40, 10, 'Belum Tryout', 1, 1);
                foreach ($this->tryout_model->data_lembarKerja($data['id_tryout'])->result_array() as $lk) {
                    $total_nilai += $lk['bobot'];
                }
            }
            $no++;
        }

        $pdf->Cell(0, 10, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(0, 10, "Kehadiran", 0, 1, 'L', false);
        $pdf->LineGraph(190, 50, $minggu_kehadiran, 'HvB', $colors, 4);
        $pdf->Cell(0, 70, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 45, "", 1, 0, 'L', false);
        $pdf->Cell(0, 0, "", 0, 1);

        $pdf->Cell(80, 10, '', 0, 0, 'L');
        $pdf->Cell(80, 10, 'Kartu Evaluasi', 0, 1, 'L');

        if ($nilai == 0 and $total_nilai == 0) {
            $jumlah = 0;
        } else {
            $jumlah = ($nilai / $total_nilai) * 100;
        }
        $pdf->Cell(10, 5, "", 0, 0, "L");
        $pdf->Cell(60, 5, "Rata-rata Nilai Tryout", 0, 0, "L");
        $pdf->Cell(5, 5, ":", 0, 0, "L");
        $pdf->Cell(40, 5, round($jumlah, 2), 0, 1, "L");

        $kehadiran = (($minggu1 + $minggu2 + $minggu3 + $minggu4) * 10 / 80) * 100;
        if ($kehadiran > 100) {
            $kehadiran = 100;
        }
        $pdf->Cell(10, 5, "", 0, 0, "L");
        $pdf->Cell(60, 5, "Kehadiran", 0, 0, "L");
        $pdf->Cell(5, 5, ":", 0, 0, "L");
        $pdf->Cell(40, 5, $kehadiran . "%", 0, 1, "L");

        $total = (((($minggu1 + $minggu2 + $minggu3 + $minggu4) * 10) + $nilai) / (80 + $total_nilai)) * 100;
        $pdf->Cell(10, 5, "", 0, 0, "L");
        $pdf->Cell(60, 5, "Total", 0, 0, "L");
        $pdf->Cell(5, 5, ":", 0, 0, "L");
        $pdf->Cell(40, 5, round($total, 2), 0, 1, "L");

        if ($kehadiran < 50) {
            $kk = 'Sangat Buruk';
        } else if ($kehadiran < 60) {
            $kk = 'Buruk';
        } else if ($kehadiran < 80) {
            $kk = 'Baik';
        } else {
            $kk = 'Sangat Baik';
        }

        if ($jumlah < 50) {
            $kn = 'Sangat Buruk';
        } else if ($jumlah < 60) {
            $kn = 'Buruk';
        } else if ($jumlah < 80) {
            $kn = 'Baik';
        } else {
            $kn = 'Sangat Baik';
        }

        $pdf->Cell(10, 5, "", 0, 0, "L");
        $pdf->Cell(60, 5, "Keterangan", 0, 0, "L");
        $pdf->Cell(5, 5, ":", 0, 0, "L");
        if ($kehadiran == 0 and $jumlah == 0) {
            $pdf->Cell(40, 5, "Tidak ada Data di temukan", 0, 1, "L");
        } else {
            $pdf->Cell(40, 5, "Nilai tryout anda " . $kn . ", Kehadiran anda " . $kk . "", 0, 1, "L");
        }

        $pdf->Cell(10, 5, "", 0, 1, "L");
        $pdf->Cell(10, 5, "", 0, 0, "L");
        $pdf->Cell(10, 5, $bulan[(int)date('m')] . " " . date('Y'), 0, 1, "L");

        $pdf->Cell(0, 0, "", 0, 1);

        $pdf->Cell(10, 20, "", 0, 1, "L");
        $pdf->Cell(20, 20, $pdf->Image($socialmedia, $pdf->GetX(), $pdf->GetY(), 40.40), 0, 0, 'L', false);

        $pdf->Output('evaluasi-' . $user['id_murid'] . '-' . date('Y-m-d') . '', 'I');
    }
}
