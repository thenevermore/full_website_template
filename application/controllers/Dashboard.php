<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/17/2016
 * Time: 1:50 PM
 */
class Dashboard extends CI_Controller {
    public function __construct() {
    	parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('M_Login');
        $this->auth->cek_auth(); //ngambil auth dari library
    }

    public function index()
    {
        $ambil_akun = $this->M_Login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'	=> $ambil_akun,
        );
        /*Implementasi level akses, belum dipakai*/
        /*
        $stat = $this->session->userdata('lvl');
        if($stat==1){//admin
            $this->load->view('dashboard_admin',$data);
        }else{ //user
            $this->load->view('dashboard_user',$data);
        }
        */
        $this->load->view('templates/admin/header');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates/admin/footer');
    }
    function login()
    {
        $session = $this->session->userdata('isLogin');
        if($session == FALSE)
        {
            $this->load->view('login/login');
        }else
        {
            redirect('dashboard');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

}

