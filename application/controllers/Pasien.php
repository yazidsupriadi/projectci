<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('pasien_model');//load model
		$data['pasien'] = $this->pasien_model->getAll(); //query select all data
		$this->load->view('pasien/index',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('pasien_model');//load model
		$where = array('id' => $id);
		$this->pasien_model->delete($where,'pasien');// query delete(delete from pasien where id = $id)
		redirect('pasien/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('pasien/tambah_pasien');
	}

	public function save(){
	
		$this->load->model('pasien_model');

		$str = rand();
		$result = md5($str);
		$data['id'] = $id;
		$data['kode'] = $result;
		$data['nama'] =$this->input->post('nama');
		$data['gender'] =$this->input->post('gender');
		$data['tmp_lahir'] =$this->input->post('tmp_lahir');
		$data['tgl_lahir'] =$this->input->post('tgl_lahir');
		$data['email'] =$this->input->post('email');
		
		$this->pasien_model->save($data);
		redirect('pasien/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('pasien_model');
		$data['pasien'] = $this->pasien_model->findById($id);
		$this->load->view('pasien/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('pasien_model');
		$id = $this->input->post('id');
		$str = rand();
		$result = md5($str);
		$data['kode'] = $result;
		$data['nama'] =$this->input->post('nama');
		$data['gender'] =$this->input->post('gender');
		$data['tmp_lahir'] =$this->input->post('tmp_lahir');
		$data['tgl_lahir'] =$this->input->post('tgl_lahir');
		$data['email'] =$this->input->post('email');
		
		$this->pasien_model->update($data,$id);
		redirect('pasien/index');
	}


}
