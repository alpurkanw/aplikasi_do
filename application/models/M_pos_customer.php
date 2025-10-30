<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pos_customer extends CI_Model
{
    protected $table = 'tm_rumah';
    protected $table_harga = 'tm_harga_rumah';

    protected $primaryKey = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    // /**
    //  * Mengambil semua data akun dari database.
    //  *
    //  * @return array
    //  */
    public function getAllCust()
    {
        // return $this->db->get($this->table)->result_array();
        $db_do = DB_DO;
        $sql = " select * from $db_do.do_tm_cust ";

        return $this->db->query($sql);
    }
}
