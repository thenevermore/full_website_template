<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/18/2016
 * Time: 2:04 PM
 */
class Regional extends CI_Controller {
    public function __construct() {
    	parent::__construct();
        $this->load->model('M_Regional');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['regional'] = $this->M_Regional->getRegional();
        $data['title'] = 'Kantor Regional';

        $this->load->view('templates/header');
        $this->load->view('admin/regional',$data);
        $this->load->view('templates/footer');
    }
}