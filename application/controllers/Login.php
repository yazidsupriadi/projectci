<?php


class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }


    public function login(){
        $this->load->view('login/login');
    }
}



?>