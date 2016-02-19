<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/17/2016
 * Time: 2:09 PM
 */
class Login extends CI_Controller {
    public function __construct() {
    	parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('M_Login');

    }

    public function index()
    {
        $session = $this->session->userdata('isLogin'); /*mengabil dari session apakah sudah login atau belum*/
        if($session == FALSE) /*jika session false maka akan menampilkan halaman login*/
        {
            $this->load->view('login/login');
        }else /*jika session true maka di redirect ke halaman dashboard*/
        {
            redirect('admin/dashboard');
        }
    }
    public function do_login()
    {
        $idpetugas = $this->input->post("idpetugas");
        $password = $this->input->post("password");

        $cek = $this->M_Login->cek_user($idpetugas,md5($idpetugas.$password)); /*melakukan persamaan data dengan database*/
        if(count($cek) == 1){ /*cek data berdasarkan username & pass*/
            /* mengecek level hak akses, belum digunakan*/
            /*
             foreach ($cek as $cek) {
                $level = $cek['level'];
            }
            */
            $this->session->set_userdata(array(
                'isLogin'   => TRUE, /*set data telah login*/
                'uname'  => $idpetugas, /*set session username*/
                /*'lvl'      => $level,*/ /*set session hak akses*/
            ));
            $this->session->set_flashdata('flashSuccess', 'Selamat Datang..');
            redirect('dashboard','refresh');  /*redirect ke halaman dashboard*/
        }else{ /*jika data tidak ada yng sama dengan database*/
            $this->session->set_flashdata('flashError', 'Login Gagal..!');
            redirect('login','refresh');
        }

    }

    public function logout()
    {
        $this->Auth->logout();
    }
}