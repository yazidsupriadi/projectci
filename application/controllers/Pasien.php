<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function index()
	{	
		$this->load->model('pasien_model');//load model
		$data['pasien'] = $this->pasien_model->getAll(); //query select all data
		$this->load->view('pasien/index',$data);
	}

	public function delete($id){
        
        $this->load->model('pasien_model');//load model
		$where = array('id' => $id);
		$this->pasien_model->delete($where,'pasien');// query delete(delete from pasien where id = $id)
		redirect('pasien/index');
	}

	public function add()
	{
		
		$this->load->library('form_validation');
		$this->load->view('pasien/tambah_pasien');
	}

	public function save()
	{
		
     	    $this->load->model('pasien_model');//load model
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('id','id','required');
			$this->form_validation->set_rules('kode','Kode','required');
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('gender','Jenis Kelamin','required');
			$this->form_validation->set_rules('tmp_lahir','Tempat Lahir','required');
			$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('email','Email','required');

			if ($this->form_validation->run()==true)
        {
			$str=rand();
			$result = md5($str);
			$data['kode'] = $result;
			$data['nama'] = $this->input->post('nama');
			$data['gender'] = $this->input->post('gender');
			$data['tmp_lahir'] = $this->input->post('tmp_lahir');
			$data['tgl_lahir'] = $this->input->post('tgl_lahir');
			$data['email'] = $this->input->post('email');
			$this->pasien_model->save($data);
			redirect('pasien/index');
		}else{
			$this->load->view('pasien/tambah_pasien');
		}
		
	}

	public function update()
	{
		
     	   $this->load->model('pasien_model');//load model
			
			$id = $this->input->post('id');
			$str=rand();
			$result = md5($str);
			$data['kode'] = $result;
			$data['nama'] = $this->input->post('nama');
			$data['gender'] = $this->input->post('gender');
			$data['tmp_lahir'] = $this->input->post('tmp_lahir');
			$data['tgl_lahir'] = $this->input->post('tgl_lahir');
			$data['email'] = $this->input->post('email');
			$this->pasien_model->update($data,$id);
			redirect('pasien/index');
		
		
	}

	
	public function edit($id){
        
        $this->load->model('pasien_model');//load model
		$data['pasien'] = $this->pasien_model->findById($id);
		$this->load->view('pasien/edit',$data);
	
	}


}
