<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Perbaikan: Tambahkan baris ini untuk memuat kelas induk secara manual.
require_once APPPATH . 'core/MY_Admin_Controller.php';


class Crumah extends MY_Admin_Controller

{
    public function __construct()
    {
        parent::__construct();
        // Memuat model M_account untuk berinteraksi dengan tabel 'accounts'
        $this->load->model('M_rumah', 'rmh');
        $this->load->model('M_perumahan', 'perum');

        $this->load->model('M_harga_rumah', 'hrg_rmh');

        // // Memuat library yang dibutuhkan
        $this->load->library('form_validation');
        // $this->load->library('session');
        // print_r($_SESSION);
        // return;
    }


    public function index()
    {
        // $data['account_list'] = $this->M_account->getAllAccounts();
        // $data['title'] = 'Manajemen Akun Keuangan';
        // echo "tes";
        // return;
        $data["list_rumah"] = $this->rmh->getAllRumah()->result_array();

        $this->load->view('admin/rumah_list', $data);
    }

    public function tambah()
    {
        // $data['account_list'] = $this->M_account->getAllAccounts();
        // $data['title'] = 'Manajemen Akun Keuangan';
        // print_r($_REQUEST);
        // return;
        $data['list_perum'] = $this->perum->getAllPerum()->result();

        // $data = "";
        $this->load->view('admin/rumah_tambah', $data);
    }
    public function tambah_proses()
    {

        // cek duplikasi rumah 


        $id_perumahan = $this->input->post('id_perumahan');
        $no_rumah = strtoupper($this->input->post('no_rumah'));

        // sudah ada atau belum rumah itu  
        $is_duplicate = $this->rmh->cek_duplikasi_rumah($id_perumahan, $no_rumah);

        if (!$is_duplicate) {
            $data_rumah = array(
                'id_perumahan' => $this->input->post('id_perumahan'),
                'norumah'     => strtoupper($this->input->post('no_rumah')),
                'keterangan'    => $this->input->post('deskripsi'),
                'harga_jual'   => $this->input->post('harga_jual'),
                'st_terjual'       => '1' //default
            );

            $insert = $this->rmh->addRumah($data_rumah);

            if ($insert) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Rumah **' . $this->input->post('no_rumah') . '** berhasil ditambahkan!</div>');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Terjadi kesalahan database saat mencoba menyimpan Data Rumah.</div>');
            }

            redirect('admin/Crumah/tambah');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Rumah **' . $this->input->post('no_rumah') . '** Sudah pernah didaftarkan</div>');
            redirect('admin/Crumah/tambah');
        }
    }


    public function get_rumah_by_perum()
    {
        $id_perum = $this->input->post('id_perum');

        if ($id_perum) {
            // Panggil Model untuk mengambil data rumah

            $list_rumah = $this->rmh->get_rumah_by_perum_id($id_perum)->result();
            echo json_encode($list_rumah);
        } else {
            echo json_encode([]);
        }
    }


    public function getListHarga($id_perum, $id_rumah)
    {

        $list_harga = $this->rmh->getAllHarga($id_perum, $id_rumah)->result();

        echo json_encode($list_harga);
    }





    // public function add_harga()
    // {
    //     $data['list_perum'] = $this->db->get('tm_perumahan')->result();
    //     $data['jns_harga'] = $this->db->get('tm_jns_harga')->result();

    //     $this->load->view('admin/rumah_add_harga', $data);
    // }


    // public function add_harga_proses()
    // {

    //     // cek duplikasi rumah 


    //     $id_perumahan = $this->input->post('id_perumahan');
    //     $jenis_harga = $this->input->post('jns_harga');
    //     $no_rumah = strtoupper($this->input->post('norumah'));

    //     // sudah ada atau belum rumah itu  
    //     $is_duplicate = $this->rmh->cek_duplikasi_harga($id_perumahan, $no_rumah, $jenis_harga);

    //     // echo $is_duplicate;
    //     // return;

    //     // return; //$id_perumahan, $no_rumah, $jenis_harga
    //     if (!$is_duplicate) {
    //         $data_rumah = array(
    //             'id_perum' => $this->input->post('id_perumahan'),
    //             'id_rumah'     => strtoupper($this->input->post('norumah')),
    //             'id_jns'    => $this->input->post('jns_harga'),
    //             'nominal'   => $this->input->post('nominal')

    //         );

    //         $insert = $this->rmh->addharga($data_rumah);
    //         // hrg_rmh

    //         if ($insert) {
    //             $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Harga Rumah **' . $this->input->post('norumah') . '** berhasil ditambahkan!</div>');
    //         } else {
    //             $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Terjadi kesalahan database saat mencoba menyimpan Data Harga Rumah.</div>');
    //         }

    //         redirect('admin/Crumah/add_harga');
    //     } else {
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data Harga Rumah **' . $this->input->post('norumah') . '** Sudah pernah didaftarkan</div>');
    //         redirect('admin/Crumah/add_harga');
    //     }
    // }


    // public function cek_detail_harga()
    // {
    //     // $data['account_list'] = $this->M_account->getAllAccounts();
    //     // $data['title'] = 'Manajemen Akun Keuangan';
    //     // print_r($_REQUEST);
    //     // return;
    //     $data['list_perum'] = $this->db->get('tm_perumahan')->result();

    //     // $data = "";
    //     $this->load->view('admin/rumah_cek_harga', $data);
    // }



    // public function cek_detail_show_detail_harga($id_perum, $id_rumah)
    // {
    //     $data["judul"] = "Detail Harga Rumah";

    //     $data["harga_rmh"] = $this->rmh->getAllHarga($id_perum, $id_rumah)->result_array();

    //     // $data = "";
    //     $this->load->view('admin/rumah_list_detail_harga', $data);
    // }
}
