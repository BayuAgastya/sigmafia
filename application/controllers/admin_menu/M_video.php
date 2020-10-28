<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_video extends CI_Controller
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
            'title' => 'Manage Video',
            'nav_dashboard' => '',
            'nav_video' => 'active',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/m_video'
        );
        $data['matik_sd'] = $this->admin_model->get_video_matik('sd');
        $data['matik_smp'] = $this->admin_model->get_video_matik('smp');
        $data['matik_sma'] = $this->admin_model->get_video_matik('sma');

        $data['fisika_sd'] = $this->admin_model->get_video_fisika('sd');
        $data['fisika_smp'] = $this->admin_model->get_video_fisika('smp');
        $data['fisika_sma'] = $this->admin_model->get_video_fisika('sma');

        $data['kimia_sd'] = $this->admin_model->get_video_kimia('sd');
        $data['kimia_smp'] = $this->admin_model->get_video_kimia('smp');
        $data['kimia_sma'] = $this->admin_model->get_video_kimia('sma');

        $this->load->view('admin_layout/wrapper', $data);
    }

    function tambah_video()
    {
        if ($this->input->post('tingkat') == 'sd') {
            $judul = $this->input->post('judul');
            $url = $this->input->post('url');
            $deskripsi = $this->input->post('deskripsi');
            $tingkat = $this->input->post('tingkat');

            $data = array(
                'judul' => $judul,
                'url' => $url,
                'deskripsi' => $deskripsi,
                'tingkat' => 'sd'
            );

            if ($this->input->post('materi') == 'matematika') {
                $this->admin_model->add_data($data, 'video_matik');
                $this->session->set_flashdata('video', 'Video Matematika Berhasil Ditambahkan');
            } elseif ($this->input->post('materi') == 'fisika') {
                $this->admin_model->add_data($data, 'video_fisika');
                $this->session->set_flashdata('video', 'Video Fisika Berhasil Ditambahkan');
            } else {
                $this->admin_model->add_data($data, 'video_kimia');
                $this->session->set_flashdata('video', 'Video Kimia Berhasil Ditambahkan');
            }

            redirect(base_url('admin_menu/m_video'));
        } elseif ($this->input->post('tingkat') == 'smp') {
            $judul = $this->input->post('judul');
            $url = $this->input->post('url');
            $deskripsi = $this->input->post('deskripsi');
            $tingkat = $this->input->post('tingkat');

            $data = array(
                'judul' => $judul,
                'url' => $url,
                'deskripsi' => $deskripsi,
                'tingkat' => 'smp'
            );

            if ($this->input->post('materi') == 'matematika') {
                $this->admin_model->add_data($data, 'video_matik');
                $this->session->set_flashdata('video', 'Video Matematika Berhasil Ditambahkan');
            } elseif ($this->input->post('materi') == 'fisika') {
                $this->admin_model->add_data($data, 'video_fisika');
                $this->session->set_flashdata('video', 'Video Fisika Berhasil Ditambahkan');
            } else {
                $this->admin_model->add_data($data, 'video_kimia');
                $this->session->set_flashdata('video', 'Video Kimia Berhasil Ditambahkan');
            }
            redirect(base_url('admin_menu/m_video'));
        } else {
            $judul = $this->input->post('judul');
            $url = $this->input->post('url');
            $deskripsi = $this->input->post('deskripsi');
            $tingkat = $this->input->post('tingkat');

            $data = array(
                'judul' => $judul,
                'url' => $url,
                'deskripsi' => $deskripsi,
                'tingkat' => 'sma'
            );

            if ($this->input->post('materi') == 'matematika') {
                $this->admin_model->add_data($data, 'video_matik');
                $this->session->set_flashdata('video', 'Video Matematika Berhasil Ditambahkan');
            } elseif ($this->input->post('materi') == 'fisika') {
                $this->admin_model->add_data($data, 'video_fisika');
                $this->session->set_flashdata('video', 'Video Fisika Berhasil Ditambahkan');
            } else {
                $this->admin_model->add_data($data, 'video_kimia');
                $this->session->set_flashdata('video', 'Video Kimia Berhasil Ditambahkan');
            }
            redirect(base_url('admin_menu/m_video'));
        }
    }

    /*  EDIT PAGE ============================================================================= */

    function editVideoMatik($id)
    {
        $data = array(
            'title' => 'edit Video',
            'nav_dashboard' => '',
            'nav_video' => 'active',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/edit_video',
            'pilihanUp' => 'updateMatik'
        );
        $data['data'] = $this->admin_model->UpdateVideoMatik($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function editVideoFisika($id)
    {
        $data = array(
            'title' => 'edit Video',
            'nav_dashboard' => '',
            'nav_video' => 'active',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/edit_video',
            'pilihanUp' => 'updateFisika'
        );
        $data['data'] = $this->admin_model->UpdateVideoFisika($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    function editVideoKimia($id)
    {
        $data = array(
            'title' => 'edit Video',
            'nav_dashboard' => '',
            'nav_video' => 'active',
            'nav_soal' => '',
            'nav_materi' => '',
            'nav_bank' => '',
            'nav_tryout' => '',
            'nav_user' => '',
            'nav_siswa' => '',
            'nav_alumni' => '',
            'isi' => 'admin/edit_video',
            'pilihanUp' => 'updateKimia'
        );
        $data['data'] = $this->admin_model->UpdateVideoKimia($id)->row();
        $this->load->view('admin_layout/wrapper', $data);
    }

    /*  EDIT FUNCTION ============================================================================= */

    function updateMatik()
    {
        $id_video = $this->input->post('id_video');
        $judul = $this->input->post('judul');
        $url = $this->input->post('url');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'judul' => $judul,
            'url' => $url,
            'deskripsi' => $deskripsi
        );

        $where = array(
            'id_video' => $id_video
        );
        $this->admin_model->update_data($where, $data, 'video_matik');
        $this->session->set_flashdata('video', 'Video Matematika Berhasil Diupdate');
        redirect(base_url('admin_menu/m_video'));
    }

    function updateFisika()
    {
        $id_video = $this->input->post('id_video');
        $judul = $this->input->post('judul');
        $url = $this->input->post('url');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'judul' => $judul,
            'url' => $url,
            'deskripsi' => $deskripsi
        );

        $where = array(
            'id_video' => $id_video
        );
        $this->admin_model->update_data($where, $data, 'video_fisika');
        $this->session->set_flashdata('video', 'Video Fisika Berhasil Diupdate');
        redirect(base_url('admin_menu/m_video'));
    }

    function updateKimia()
    {
        $id_video = $this->input->post('id_video');
        $judul = $this->input->post('judul');
        $url = $this->input->post('url');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'judul' => $judul,
            'url' => $url,
            'deskripsi' => $deskripsi
        );

        $where = array(
            'id_video' => $id_video
        );
        $this->admin_model->update_data($where, $data, 'video_kimia');
        $this->session->set_flashdata('video', 'Video Kimia Berhasil Diupdate');
        redirect(base_url('admin_menu/m_video'));
    }

    /*  DELETE FUNCTION ============================================================================= */

    function hapusVideoMatik($id)
    {
        $this->db->where('id_video', $id);
        $this->db->delete('video_matik');

        $this->session->set_flashdata('video', 'Video Matematika Berhasil Dihapus');
        redirect(base_url('admin_menu/m_video'));
    }
    function hapusVideoFisika($id)
    {
        $this->db->where('id_video', $id);
        $this->db->delete('video_fisika');

        $this->session->set_flashdata('video', 'Video Fisika Berhasil Dihapus');
        redirect(base_url('admin_menu/m_video'));
    }
    function hapusVideoKimia($id)
    {
        $this->db->where('id_video', $id);
        $this->db->delete('video_kimia');

        $this->session->set_flashdata('video', 'Video Kimia Berhasil Dihapus');
        redirect(base_url('admin_menu/m_video'));
    }

    /*  ============================================================================= */
}
