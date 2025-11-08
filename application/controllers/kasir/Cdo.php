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
        $this->load->model('M_do_trx_do', 'trx');
    }

    public function input_do()
    {
        $data["judul"] = "Transaksi Pembukaan DO";


        // $data["dumy"] = "";
        //ambil semua barang
        // $data["all_barang"] = addslashes(json_encode($this->barang->getAllBarang()->result_array()));
        $data["all_barang"] = $this->barang->getAllBarang()->result_array();
        // ambil semua customer 
        // $data["all_cust"] = addslashes(json_encode($this->cust->getAllCust()->result_array()));
        $data["all_cust"] = $this->cust->getAllCust()->result_array();
        // $harga_rmh = $this->rmh->getAllCust($id_perum, $id_rumah)->result_array();

        $this->load->view('kasir/open_do', $data);
    }


    public function input_do_proses()
    {
        $data["judul"] = "Transaksi Pembukaan DO";

        $data_json = json_decode($this->input->post('data_json'), TRUE);



        $cust = json_decode(json_encode($data_json["customer_data"]), TRUE);

        // print_r($cust);
        $notaopen =  $this->trx->generate_no_do("IN");
        // echo $notaopen;

        // return;

        // echo $cust["nama"];

        // {"id":5,"nama":"jara pudin","alamat":"desa karang tinggi simpang pasar pekan karang tinggi \/pas depan simpang","notelp":"085669339683"}
        // return;
        // $data_insert 


        // ambil no DO


        foreach ($data_json["items_pembelian"] as $key => $value) {

            $data_insert[] = [
                "notaopen" => $notaopen,
                "idbar" => $value["id_barang"],
                "namabar" => $value["nama_barang"],
                "jum_beli" => $value["qty"],
                "harga_jual" => $value["harga_jual"],
                "harga_beli" => $value["harga_beli"],
                "tglinp" => date('Ymd'),
                "userinput" => $_SESSION["usernm"],
                "idcust" => $cust["id"],
                "namacust" => $cust["nama"],
                "alamat" => $cust["alamat"],
                "notelp" => $cust["notelp"],
                "tgl_ambil" => 0,
            ];
        }


        $this->db->insert_batch('do_trx_do', $data_insert);

        // Fungsi insert_batch() mengembalikan jumlah baris yang terpengaruh (affected rows)
        // Kita bisa periksa apakah ada baris yang berhasil dimasukkan
        $resp["status"] = $this->db->affected_rows() > 0;

        echo json_encode($resp);
    }



    public function ambil_do_pilihcust()
    {
        $data["judul"] = "Transaksi Pengambilan DO";


        // $data["dumy"] = "";

        $data["all_cust"] = $this->cust->getAllCust()->result_array();

        $this->load->view('kasir/ambil_do_pilihcust', $data);
    }

    public function ambil_do_openForm()
    {
        $data["judul"] = "Transaksi Pengambilan DO";
        $data["cust"] = explode("|", $this->input->post('customer'));

        // $data["all_cust"] = $this->cust->getAllCust()->result_array();

        $data["DOlist"] = $this->trx->getAllDoPerCust($data["cust"][0])->result_array();

        $this->load->view('kasir/ambil_do_openForm', $data);
    }


    // public function ambil_do_cekcust()
    // {
    //     $data["judul"] = "Transaksi Pengambilan DO";


    //     // $data["dumy"] = "";

    //     $this->load->view('kasir/ambil_do_shw_data_do_percust', $data);
    // }

    // public function lap_sisa_do()
    // {
    //     $data["judul"] = "Laporan Sisa DO";


    //     // $data["dumy"] = "";

    //     $this->load->view('kasir/lap_sisa_do', $data);
    // }
}
