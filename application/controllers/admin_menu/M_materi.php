<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_materi extends CI_Controller
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

    public function index()
    {
        $data = array(
            'title' => 'Materi SMA',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => 'active',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/m_materi',
            'error' => ''
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

        $this->load->view('admin_layout/wrapper', $data);
    }

    public function materi_sd()
    {
        $data = array(
            'title' => 'Materi SD',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => 'active',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/materi/materi_sd',
            'error' => ''
        );

        $data['sd_matik4'] = $this->admin_model->get_materi_sd('4', '1');
        $data['sd_matik5'] = $this->admin_model->get_materi_sd('5', '1');
        $data['sd_matik6'] = $this->admin_model->get_materi_sd('6', '1');

        $this->load->view('admin_layout/wrapper', $data);
    }

    public function materi_smp()
    {
        $data = array(
            'title' => 'Materi SMP',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => 'active',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/materi/materi_smp',
            'error' => ''
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

        $this->load->view('admin_layout/wrapper', $data);
    }

    public function materi_sma()
    {
        $data = array(
            'title' => 'Materi SMA',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => 'active',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/materi/materi_sma',
            'error' => ''
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

        $this->load->view('admin_layout/wrapper', $data);
    }


    function upload()
    {
        if ($this->input->post('tingkat') == 'sd') {
            $config['upload_path']          = './uploads/materi/matik/';
            $config['allowed_types']        = 'pdf';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin_menu/m_materi', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];
                $tingkat = 'sd';

                $insert = $this->admin_model->insertMateriMatik($name, $tingkat);
                if ($insert) {
                    $this->session->set_flashdata('materi', 'File Matematika Berhasil Ditambahkan');
                    redirect(base_url('admin_menu/m_materi'));
                } else {
                    echo "Gagal";
                }
            }
        } elseif ($this->input->post('tingkat') == 'smp') {
            if ($this->input->post('materi') == 'matematika') {
                $config['upload_path']          = './uploads/materi/matik/';
                $config['allowed_types']        = 'pdf';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_materi', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'smp';

                    $insert = $this->admin_model->insertMateriMatik($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('materi', 'File Matematika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_materi'));
                    } else {
                        echo "Gagal";
                    }
                }
            } elseif ($this->input->post('materi') == 'fisika') {
                $config['upload_path']          = './uploads/materi/fisika/';
                $config['allowed_types']        = 'pdf';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_materi', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'smp';

                    $insert = $this->admin_model->insertMateriFisika($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('materi', 'File Fisika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_materi'));
                    } else {
                        echo "Gagal";
                    }
                }
            } else {
                $config['upload_path']          = './uploads/materi/kimia/';
                $config['allowed_types']        = 'pdf';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_materi', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'smp';

                    $insert = $this->admin_model->insertMateriKimia($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('materi', 'File Kimia Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_materi'));
                    } else {
                        echo "Gagal";
                    }
                }
            }
        } else {
            if ($this->input->post('materi') == 'matematika') {
                $config['upload_path']          = './uploads/materi/matik/';
                $config['allowed_types']        = 'pdf';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_materi', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'sma';

                    $insert = $this->admin_model->insertMateriMatik($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('materi', 'File Matematika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_materi'));
                    } else {
                        echo "Gagal";
                    }
                }
            } elseif ($this->input->post('materi') == 'fisika') {
                $config['upload_path']          = './uploads/materi/fisika/';
                $config['allowed_types']        = 'pdf';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_materi', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'sma';

                    $insert = $this->admin_model->insertMateriFisika($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('materi', 'File Fisika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_materi'));
                    } else {
                        echo "Gagal";
                    }
                }
            } else {
                $config['upload_path']          = './uploads/materi/kimia/';
                $config['allowed_types']        = 'pdf';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_materi', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'sma';

                    $insert = $this->admin_model->insertMateriKimia($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('materi', 'File Kimia Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_materi'));
                    } else {
                        echo "Gagal";
                    }
                }
            }
        }
    }

    function upload2()
    {
        $config['upload_path']          = './uploads/materi/gambar/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('thumbnail_materi')) {
            echo $this->upload->display_errors();
            return;
        } else {
            $uploaded_data = $this->upload->data();

            $config['upload_path']          = './uploads/materi/file/';
            $config["allowed_types"] = "pdf";
            $config['overwrite']            = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $uploaded_file = $this->upload->data();
                $insert = array(
                    'id_tingkat' => $this->input->post('id_tingkat'),
                    'id_matpel' => $this->input->post('id_matpel'),
                    'kelas' => $this->input->post('kelas'),
                    'judul_materi' => $this->input->post('judul_materi'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'thumbnail_materi' => $uploaded_data['file_name'],
                    'file' => $uploaded_file['file_name']
                );

                if ($this->admin_model->add_data($insert, 'materi')) {
                    $id = $this->db->insert_id();
                    $link = $this->input->post('link');
                    $judul = $this->input->post('judul_video');
                    $hitung = count($link);
                    for ($i = 0; $i < $hitung; $i++) {
                        if (!empty($link[$i])) {
                            $insert2 = array(
                                'id_materi' => $id,
                                'judul_video' => $judul[$i],
                                'link_video' => $link[$i]
                            );
                            $this->admin_model->add_data($insert2, 'video_materi');
                        }
                    }
                    redirect(base_url('admin_menu/dashboard'));
                } else {
                    echo $this->upload->display_errors();
                    return;
                }
            } else {
                echo $this->upload->display_errors();
                return;
            }
        }
    }


    /*  DELETE FUNCTION ============================================================================= */

    function hapusMateriMatik($id)
    {
        $data = $this->admin_model->getMateriMatik($id)->row();
        $nama = './uploads/materi/matik/' . $data->materi;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusMatikFile($id);
            $this->session->set_flashdata('materi', 'File Matematika Berhasil Dihapus');
            redirect(base_url('admin_menu/m_materi'));
        } else {
            echo "Gagal Hapus";
        }
    }

    function hapusMateriFisika($id)
    {
        $data = $this->admin_model->getMateriFisika($id)->row();
        $nama = './uploads/materi/fisika/' . $data->materi;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusFisikaFile($id);
            $this->session->set_flashdata('materi', 'File Fisika Berhasil Dihapus');
            redirect(base_url('admin_menu/m_materi'));
        } else {
            echo "Gagal Hapus";
        }
    }

    function hapusMateriKimia($id)
    {
        $data = $this->admin_model->getMateriKimia($id)->row();
        $nama = './uploads/materi/kimia/' . $data->materi;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusKimiaFile($id);
            $this->session->set_flashdata('materi', 'File Kimia Berhasil Dihapus');
            redirect(base_url('admin_menu/m_materi'));
        } else {
            echo "Gagal Hapus";
        }
    }


    /*  EDIT PAGE ============================================================================= */

    function editMateriMatik($id)
    {
        $data = array(
            'title' => 'edit materi',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => '',
            'nav_materi' => 'active',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/edit_materi',
            'materiUp' => 'updateMateriMatik'
        );
        $this->load->view('admin_layout/wrapper', $data);
    }
    function editMateriFisika($id)
    {
        $data = array(
            'title' => 'edit materi',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_materi' => 'active',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_soal' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/edit_materi',
            'materiUp' => 'updateMateriFisika'
        );
        $data['data'] = $this->admin_model->getMateriFisika($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }
    function editMateriKimia($id)
    {
        $data = array(
            'title' => 'edit materi',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_materi' => 'active',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_soal' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/edit_materi',
            'materiUp' => 'updateMateriKimia'
        );
        $data['data'] = $this->admin_model->getMateriKimia($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }


    /*  EDIT FUNCTION ============================================================================= */

    function updateMateriMatik()
    {
        $id = $this->input->post('id_materi');

        $data = $this->admin_model->getMateriMatik($id)->row();
        $nama = './uploads/materi/matik/' . $data->materi;

        if (is_readable($nama) && unlink($nama)) {
            $config['upload_path']          = './uploads/materi/matik/';
            $config['allowed_types']        = 'pdf';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/m_materi', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'materi' => $name
                );
                $update = $this->admin_model->updateMatikFile($id, $data, $name);
                if ($update) {
                    $this->session->set_flashdata('materi', 'File Matematika Berhasil Diedit');
                    redirect(base_url('admin_menu/m_materi'));
                } else {
                    echo "Gagal Update";
                }
            }
        } else {
            echo "Gagal";
        }
    }

    function updateMateriFisika()
    {
        $id = $this->input->post('id_materi');

        $data = $this->admin_model->getMateriFisika($id)->row();
        $nama = './uploads/materi/fisika/' . $data->materi;

        if (is_readable($nama) && unlink($nama)) {
            $config['upload_path']          = './uploads/materi/fisika/';
            $config['allowed_types']        = 'pdf';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/m_materi', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'materi' => $name
                );
                $update = $this->admin_model->updateFisikaFile($id, $data, $name);
                if ($update) {
                    $this->session->set_flashdata('materi', 'File Fisika Berhasil Diedit');
                    redirect(base_url('admin_menu/m_materi'));
                } else {
                    echo "Gagal Update";
                }
            }
        } else {
            echo "Gagal";
        }
    }

    function updateMateriKimia()
    {
        $id = $this->input->post('id_materi');

        $data = $this->admin_model->getMateriKimia($id)->row();
        $nama = './uploads/materi/kimia/' . $data->materi;

        if (is_readable($nama) && unlink($nama)) {
            $config['upload_path']          = './uploads/materi/kimia/';
            $config['allowed_types']        = 'pdf';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/m_materi', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'materi' => $name
                );
                $update = $this->admin_model->updateKimiaFile($id, $data, $name);
                if ($update) {
                    $this->session->set_flashdata('materi', 'File Kimia Berhasil Diedit');
                    redirect(base_url('admin_menu/m_materi'));
                } else {
                    echo "Gagal Update";
                }
            }
        } else {
            echo "Gagal";
        }
    }



    /*  ============================================================================= */
}
