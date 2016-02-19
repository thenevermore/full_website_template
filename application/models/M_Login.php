<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/18/2016
 * Time: 3:24 PM
 */
class M_Login extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->tbl = "PETUGAS";
    }

    function cek_user($idpetugas="",$password="")
    {
        $query = $this->db->get_where($this->tbl,array('IDPETUGAS' => $idpetugas, 'PASSPETUGAS' => $password));
        $query = $query->result_array();
        return $query;
    }
    function ambil_user($idpetugas)
    {
        $query = $this->db->get_where($this->tbl, array('IDPETUGAS' => $idpetugas));
        $query = $query->result_array();
        if($query){
            return $query[0];
        }
    }
}