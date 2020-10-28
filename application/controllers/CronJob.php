<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class CronJob extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('input');
    // }
    public function index()
    {
        $check = $this->db->get('user')->result();
        foreach ($check as $user) {
            if ($user->endDate == date("Y-m-d")) {
                $where = array(
                    'user_id' => $user->user_id
                );
                $change = array(
                    'akses_konten' => 'no',
                    'endDate' => strtotime('0000-00-00')
                );

                $this->admin_model->update_data($where, $change, 'user');
            }
        }
    }
}
