<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/18/2016
 * Time: 2:05 PM
 */
class M_Regional extends CI_Model {
    public function __construct() {
    	parent::__construct();
        $this->load->database();
    }

    public function getRegional($idkantor = FALSE)
    {
        if ($idkantor === FAlSE){
            $query = $this->db->get_where('KANTOR',array('IDTIPEKANTOR' => '2'));
            return $query->result_array();
        }
        $query = $this->db->get_where('KANTOR',array('IDKANTOR' => $idkantor));
        return $query->row_array();
    }

}