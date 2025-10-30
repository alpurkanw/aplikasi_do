<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Perbaikan: Tambahkan baris ini untuk memuat kelas induk secara manual.
require_once APPPATH . 'core/MY_Kasir_Controller.php';

/**
 * Controller Induk untuk Halaman Admin.
 * Semua controller di dalam folder 'application/controllers/admin/'
 * harus mewarisi kelas ini untuk memastikan otentikasi.
 */
class Cdo extends MY_Kasir_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Logika otentikasi dari MY_Admin_Controller akan dieksekusi di sini.

        $this->load->model('M_pos_barang', 'barang');
        $this->load->model('M_pos_customer', 'cust');
    }

    public function input_do()
    {
        $data["judul"] = "Transaksi Pembukaan DO";


        // $data["dumy"] = "";
        //ambil semua barang
        $data["all_barang"] = addslashes(json_encode($this->barang->getAllBarang()->result_array()));
        // ambil semua customer 
        $data["all_cust"] = addslashes(json_encode($this->cust->getAllCust()->result_array()));
        // $harga_rmh = $this->rmh->getAllCust($id_perum, $id_rumah)->result_array();

        $this->load->view('kasir/open_do', $data);
    }

    public function ambil_do()
    {
        $data["judul"] = "Transaksi Pengambilan DO";


        // $data["dumy"] = "";

        $this->load->view('kasir/ambil_do', $data);
    }
    public function ambil_do_cekcust()
    {
        $data["judul"] = "Transaksi Pengambilan DO";


        // $data["dumy"] = "";

        $this->load->view('kasir/ambil_do_shw_data_do_percust', $data);
    }

    public function lap_sisa_do()
    {
        $data["judul"] = "Laporan Sisa DO";


        // $data["dumy"] = "";

        $this->load->view('kasir/lap_sisa_do', $data);
    }
}
