<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
    //menampilkan data program studi
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('prodi_model');//load model
		$data['prodi'] = $this->prodi_model->getAll(); //query select all data
		$this->load->view('prodi/index',$data);
	}

	public function view($id){
		
		$this->load->model('prodi_model');
		$data['prodi'] = $this->prodi_model->findById($id);
		$this->load->view('prodi/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('prodi_model');//load model
		$where = array('id' => $id);
		$this->prodi_model->delete($where,'prodi');// query delete(delete from pasien where id = $id)
		redirect('prodi/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('prodi/tambah_prodi');
	}

	public function save(){
	
		$this->load->model('prodi_model');

		$data['kode'] =$this->input->post('kode');
		$data['nama'] =$this->input->post('nama');
		$this->prodi_model->save($data);
		redirect('prodi/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('prodi_model');
		$data['prodi'] = $this->prodi_model->findById($id);
		$this->load->view('prodi/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('prodi_model');
		$id = $this->input->post('id');
		$data['kode'] =$this->input->post('kode');
		$data['nama'] =$this->input->post('nama');
		
		$this->prodi_model->update($data,$id);
		redirect('prodi/index');
	}


}
