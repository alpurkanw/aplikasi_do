<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_do_trx_do extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }


    public function getDoOpenPerPeriode($tgl_awal, $tgl_akhir)
    {
        // return $this->db->get($this->table)->result_array();
        $db = DB_DO;
        $sql = " select * from $db.do_trx_do where tglinp between $tgl_awal and $tgl_akhir ";

        return $this->db->query($sql);
    }


    public function getsisaDO_allbar()
    {
        // return $this->db->get($this->table)->result_array();
        $db = DB_DO;
        $sql = " select * from $db.do_trx_do  ";

        return $this->db->query($sql);
    }


    public function generate_no_do($inout)
    {
        if ($inout = "IN") {


            // DO/IN/25/11/00001
            $table = DB_DO . ".do_trx_do";
            $this->db->select('MAX(SUBSTRING(notaopen, 13, 5)) as last_num');
            $this->db->like('notaopen', 'DO/IN/' . date('y') . '/' . date('m') . '/', 'after'); // Cari DO di bulan & tahun ini
            $query = $this->db->get($table);
            $row = $query->row();

            // Dapatkan nomor urut terakhir, tambahkan 1
            $last_num = (int)$row->last_num;
            $new_num = $last_num + 1;

            // Format menjadi 5 digit (misal: 1 -> 0001)
            $formatted_num = str_pad($new_num, 5, '0', STR_PAD_LEFT);

            // Gabungkan menjadi nomor DO baru
            $no_do = 'DO/IN/' . date('y') . '/' . date('m') . '/' . $formatted_num;
        } else {
            $table = DB_DO . ".do_trx_do";
            $this->db->select('MAX(SUBSTRING(notaopen, 13, 5)) as last_num');
            $this->db->like('notaopen', 'DO/OUT/' . date('y') . '/' . date('m') . '/', 'after'); // Cari DO di bulan & tahun ini
            $query = $this->db->get($table);
            $row = $query->row();

            // Dapatkan nomor urut terakhir, tambahkan 1
            $last_num = (int)$row->last_num;
            $new_num = $last_num + 1;

            // Format menjadi 5 digit (misal: 1 -> 0001)
            $formatted_num = str_pad($new_num, 5, '0', STR_PAD_LEFT);

            // Gabungkan menjadi nomor DO baru
            $no_do = 'DO/OUT/' . date('y') . '/' . date('m') . '/' . $formatted_num;
        }




        return $no_do;
    }


    public function getAllDoPerCust($id_cust)
    {


        $sql = " SELECT notaopen,tglinp, idbar, namabar, SUM(jum_beli) jumbar, harga_jual FROM do_trx_do where idcust = $id_cust group by notaopen,idbar, harga_jual order by tglinp ";

        return $this->db->query($sql);
        // return $this->db->query($sql);
    }

    // public function getAllHargaPerId($id_perum, $id_rumah, $jns_jenis)
    // {
    //     // $this->db->where('id_perum', $id_perum);
    //     // $this->db->where('id_rumah', $id_rumah); // Asumsi nama kolom di DB adalah 'norumah'

    //     // return $this->db->get('tm_harga_rumah');

    //     $sql = " select a.*, b.*,c.*, d.* from tm_harga_rumah a
    //     left join tm_rumah b on b.id = a.id_rumah
    //     left join tm_perumahan c on c.id = a.id_perum
    //     left join tm_jns_harga d on d.id = a.id_jns
    //     where a.id_perum = $id_perum and a.id_rumah = $id_rumah and a.id_jns = $jns_jenis
    //     ";

    //     return $this->db->query($sql);
    //     // return $this->db->query($sql);
    // }

    // public function getAccountById($id)
    // {
    //     return $this->db->get_where($this->table, [$this->primaryKey => $id])->row_array();
    // }


    // public function addRumah($data)
    // {
    //     return $this->db->insert($this->table, $data);
    // }




    // public function cek_duplikasi_rumah($id_perumahan, $no_rumah)
    // {

    //     // 1. Tentukan kondisi WHERE untuk kedua kolom
    //     $this->db->where('id_perumahan', $id_perumahan);
    //     $this->db->where('norumah', $no_rumah); // Asumsi nama kolom di DB adalah 'norumah'

    //     // 2. Jalankan query SELECT pada tabel tm_rumah
    //     $query = $this->db->get('tm_rumah');

    //     // 3. Hitung hasilnya
    //     // Jika num_rows() > 0, berarti data sudah ada (duplikat)
    //     return $query->num_rows();
    // }




    // public function get_rumah_by_perum_id($id_perumahan)
    // {

    //     $sql = " select * from tm_rumah 
    //     where id_perumahan=$id_perumahan
    //     ";

    //     return $this->db->query($sql);



    //     // Kembalikan hasil dalam bentuk array of objects
    //     // return $query->result();
    // }



    // /**
    //  * Menghapus data akun dari database.
    //  *
    //  * @param int $id ID Akun
    //  * @return bool
    //  */
    // public function deleteAccount($id)
    // {
    //     return $this->db->delete($this->table, [$this->primaryKey => $id]);
    // }
}
