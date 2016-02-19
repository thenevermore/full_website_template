<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/19/2016
 * Time: 9:28 AM
 */
class Front extends CI_Controller {
    public function __construct() {
    	parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/front');
        $this->load->view('front/templates/footer');
    }

    public function about()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/about');
        $this->load->view('front/templates/footer');
    }
    public function contact()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/contact');
        $this->load->view('front/templates/footer');
    }
    public function services()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/services');
        $this->load->view('front/templates/footer');
    }
    public function portofolio_dua()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/portofolio-2-col');
        $this->load->view('front/templates/footer');
    }




    public function home()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/home');
    }

}