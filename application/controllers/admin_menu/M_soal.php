<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_soal extends CI_Controller
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
            'title' => 'Manage Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => 'active',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/m_soal',
            'error' => ''
        );

        $data['matik_sd'] = $this->admin_model->get_soal_matik('sd');
        $data['matik_smp'] = $this->admin_model->get_soal_matik('smp');
        $data['matik_sma'] = $this->admin_model->get_soal_matik('sma');

        $data['fisika_sd'] = $this->admin_model->get_soal_fisika('sd');
        $data['fisika_smp'] = $this->admin_model->get_soal_fisika('smp');
        $data['fisika_sma'] = $this->admin_model->get_soal_fisika('sma');

        $data['kimia_sd'] = $this->admin_model->get_soal_kimia('sd');
        $data['kimia_smp'] = $this->admin_model->get_soal_kimia('smp');
        $data['kimia_sma'] = $this->admin_model->get_soal_kimia('sma');

        $this->load->view('admin_layout/wrapper', $data);
    }

    function upload()
    {
        if ($this->input->post('tingkat') == 'sd') {
            $config['upload_path']          = './uploads/soal/matik/';
            $config['allowed_types']        = 'pdf||ppt';
            $config['max_size']             = '0';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/m_soal', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];
                $tingkat = 'sd';

                $insert = $this->admin_model->insertSoalMatik($name, $tingkat);
                if ($insert) {
                    $this->session->set_flashdata('soal', 'File Matematika Berhasil Ditambahkan');
                    redirect(base_url('admin_menu/m_soal'));
                } else {
                    echo "Gagal";
                }
            }
        } elseif ($this->input->post('tingkat') == 'smp') {
            if ($this->input->post('materi') == 'matematika') {
                $config['upload_path']          = './uploads/soal/matik/';
                $config['allowed_types']        = 'pdf||ppt';
                $config['max_size']             = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_soal', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'smp';

                    $insert = $this->admin_model->insertSoalMatik($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('soal', 'File Matematika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_soal'));
                    } else {
                        echo "Gagal";
                    }
                }
            } elseif ($this->input->post('materi') == 'fisika') {
                $config['upload_path']          = './uploads/soal/fisika/';
                $config['allowed_types']        = 'pdf||ppt';
                $config['max_size']             = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_soal', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'smp';

                    $insert = $this->admin_model->insertSoalFisika($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('soal', 'File Fisika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_soal'));
                    } else {
                        echo "Gagal";
                    }
                }
            } else {
                $config['upload_path']          = './uploads/soal/kimia/';
                $config['allowed_types']        = 'pdf||ppt';
                $config['max_size']             = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_soal', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'smp';

                    $insert = $this->admin_model->insertSoalKimia($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('soal', 'File Kimia Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_soal'));
                    } else {
                        echo "Gagal";
                    }
                }
            }
        } else {
            if ($this->input->post('materi') == 'matematika') {
                $config['upload_path']          = './uploads/soal/matik/';
                $config['allowed_types']        = 'pdf||ppt';
                $config['max_size']             = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_soal', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'sma';

                    $insert = $this->admin_model->insertSoalMatik($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('soal', 'File Matematika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_soal'));
                    } else {
                        echo "Gagal";
                    }
                }
            } elseif ($this->input->post('materi') == 'fisika') {
                $config['upload_path']          = './uploads/soal/fisika/';
                $config['allowed_types']        = 'pdf||ppt';
                $config['max_size']             = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_soal', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'sma';

                    $insert = $this->admin_model->insertSoalFisika($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('soal', 'File Fisika Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_soal'));
                    } else {
                        echo "Gagal";
                    }
                }
            } else {
                $config['upload_path']          = './uploads/soal/kimia/';
                $config['allowed_types']        = 'pdf||ppt';
                $config['max_size']             = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/m_soal', $error);
                } else {
                    $upload_data = $this->upload->data();
                    $name = $upload_data['file_name'];
                    $tingkat = 'sma';

                    $insert = $this->admin_model->insertSoalKimia($name, $tingkat);
                    if ($insert) {
                        $this->session->set_flashdata('soal', 'File Kimia Berhasil Ditambahkan');
                        redirect(base_url('admin_menu/m_soal'));
                    } else {
                        echo "Gagal";
                    }
                }
            }
        }
    }

    /*  DELETE FUNCTION ============================================================================= */

    function hapusSoalMatik($id)
    {
        $data = $this->admin_model->getSoalMatik($id)->row();
        $nama = './uploads/soal/matik/' . $data->soal;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusFileMatik($id);
            $this->session->set_flashdata('soal', 'File Matematika Berhasil Dihapus');
            redirect(base_url('admin_menu/m_soal'));
        } else {
            echo "Gagal Hapus";
        }
    }

    function hapusSoalFisika($id)
    {
        $data = $this->admin_model->getSoalFisika($id)->row();
        $nama = './uploads/soal/fisika/' . $data->soal;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusFileFisika($id);
            $this->session->set_flashdata('soal', 'File Fisika Berhasil Dihapus');
            redirect(base_url('admin_menu/m_soal'));
        } else {
            echo "Gagal Hapus";
        }
    }

    function hapusSoalKimia($id)
    {
        $data = $this->admin_model->getSoalKimia($id)->row();
        $nama = './uploads/soal/kimia/' . $data->soal;

        if (is_readable($nama) && unlink($nama)) {
            $delete = $this->admin_model->hapusFileKimia($id);
            $this->session->set_flashdata('soal', 'File Kimia Berhasil Dihapus');
            redirect(base_url('admin_menu/m_soal'));
        } else {
            echo "Gagal Hapus";
        }
    }


    /*  EDIT PAGE ============================================================================= */

    function editSoalMatik($id)
    {
        $data = array(
            'title' => 'edit Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => 'active',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/edit_soal',
            'soalUp' => 'updateSoalMatik'
        );
        $data['data'] = $this->admin_model->getSoalMatik($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }
    function editSoalFisika($id)
    {
        $data = array(
            'title' => 'edit Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => 'active',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/edit_soal',
            'soalUp' => 'updateSoalFisika'
        );
        $data['data'] = $this->admin_model->getSoalFisika($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }
    function editSoalKimia($id)
    {
        $data = array(
            'title' => 'edit Soal',
            'nav_dashboard' => '',
            'nav_video' => '',
            'nav_soal' => 'active',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'nav_kehadiran' => '',
            'isi' => 'admin/edit_soal',
            'soalUp' => 'updateSoalKimia'
        );
        $data['data'] = $this->admin_model->getSoalKimia($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }


    /*  EDIT FUNCTION ============================================================================= */

    function updateSoalMatik()
    {
        $id = $this->input->post('id_soal');

        $data = $this->admin_model->getSoalMatik($id)->row();
        $nama = './uploads/soal/matik/' . $data->soal;

        if (is_readable($nama) && unlink($nama)) {
            $config['upload_path']          = './uploads/soal/matik/';
            $config['allowed_types']        = 'pdf||ppt';
            $config['max_size']             = '0';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/m_soal', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'soal' => $name
                );
                $update = $this->admin_model->updateFileMatik($id, $data, $name);
                if ($update) {
                    $this->session->set_flashdata('soal', 'File Matematika Berhasil Diedit');
                    redirect(base_url('admin_menu/m_soal'));
                } else {
                    echo "Gagal Update";
                }
            }
        } else {
            echo "Gagal";
        }
    }

    function updateSoalFisika()
    {
        $id = $this->input->post('id_soal');

        $data = $this->admin_model->getSoalFisika($id)->row();
        $nama = './uploads/soal/fisika/' . $data->soal;

        if (is_readable($nama) && unlink($nama)) {
            $config['upload_path']          = './uploads/soal/fisika/';
            $config['allowed_types']        = 'pdf||ppt';
            $config['max_size']             = '0';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/m_soal', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'soal' => $name
                );
                $update = $this->admin_model->updateFileFisika($id, $data, $name);
                if ($update) {
                    $this->session->set_flashdata('soal', 'File Fisika Berhasil Diedit');
                    redirect(base_url('admin_menu/m_soal'));
                } else {
                    echo "Gagal Update";
                }
            }
        } else {
            echo "Gagal";
        }
    }

    function updateSoalKimia()
    {
        $id = $this->input->post('id_soal');

        $data = $this->admin_model->getSoalKimia($id)->row();
        $nama = './uploads/soal/kimia/' . $data->soal;

        if (is_readable($nama) && unlink($nama)) {
            $config['upload_path']          = './uploads/soal/kimia/';
            $config['allowed_types']        = 'pdf||ppt';
            $config['max_size']             = '0';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/m_soal', $error);
            } else {
                $upload_data = $this->upload->data();
                $name = $upload_data['file_name'];

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'soal' => $name
                );
                $update = $this->admin_model->updateFileKimia($id, $data, $name);
                if ($update) {
                    $this->session->set_flashdata('soal', 'File Kimia Berhasil Diedit');
                    redirect(base_url('admin_menu/m_soal'));
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
