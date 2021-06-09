<?php


class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }


    public function login(){
        $this->load->view('login/login');
    }


    public function aksi_login(){

       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $where = array(
        'username' => $username,
        'password' => md5($password)
        );
      $check = $this->login_model->login("user",$where)->num_rows();

       if($check > 0){
       
        $data_session = array(
            'nama' => $username,
            'status' => "login"
            );

        $this->session->set_userdata($data_session);

        redirect('pasien');
       }else{
         redirect('login/login');
       }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login/login');
    }


}



?>