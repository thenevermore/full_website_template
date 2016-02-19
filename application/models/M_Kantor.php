<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/17/2016
 * Time: 2:13 PM
 */
class M_Kantor extends CI_Model {
    public function __construct() {
    	$this->load->database();
    }

    public function get_Kantor($idkantor = FALSE)
    {
        if ($idkantor === FALSE){
            //$query = $this->db->get('KANTOR');
            $query = $this->db->get_where('KANTOR',array('IDTIPEKANTOR' => '2'));
            return $query->result_array();
        }

        $query = $this->db->get_where('KANTOR',array('IDKANTOR' => $idkantor));
        return $query->row_array();


    }
}