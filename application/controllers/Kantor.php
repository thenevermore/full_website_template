<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/17/2016
 * Time: 2:24 PM
 */
class Kantor extends CI_Controller {
    public function __construct() {
    	parent::__construct();
        $this->load->model('M_Kantor');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['kantor'] = $this->M_Kantor->get_Kantor();
        $data['title'] = 'Kantor Pos';

        $this->load->view('templates/header');
        $this->load->view('admin/kantor',$data);
        $this->load->view('templates/footer');
    }

    public function view($idkantor = NULL)
    {
        $data['kantor'] = $this->M_Kantor->get_Kantor($idkantor);
        $data['title'] = 'Kantor Pos Detil';


        $this->load->view('admin/kantordetil',$data);

    }
}