<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Admin_Controller.php';

/**
 * Controller Induk untuk Halaman Admin.
 * Semua controller di dalam folder 'application/controllers/admin/'
 * harus mewarisi kelas ini untuk memastikan otentikasi.
 */
class Claporan extends MY_Admin_Controller

{


    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_material'); // <-- baris penting ini
        // $this->load->model('M_sopir'); // <-- baris penting ini
        // $this->load->model('M_financial'); // <-- baris penting ini
    }

    public function out_perrumah_form()
    {
        $data["judul"] = "Detail Harga Rumah";
        // $data['menus'] = $this->Menu_model->get_all();
        // $data['materials'] = $this->M_material->getAllMaterials();
        $this->load->view('admin/lap_out_perrumah_form', $data);
    }
}
