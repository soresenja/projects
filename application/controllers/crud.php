<?php

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
    $this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('daftar_user',$data);
	}
	//perintah menampilkan form v_input
	function tambah(){
		$this->load->view('user_input');
	}
	// dari aksi form v_input
	function tambah_aksi(){
		$provinsi = $this->input->post('provinsi');
		$kabkota = $this->input->post('kabkota');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$unit = $this->input->post('unit');
		$level = $this->input->post('level');

		$data = array(
			'provinsi' => $provinsi,
			'kabkota' => $kabkota,
			'username' => $username,
			'pass' => $pass,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'unit' => $unit,
			'level' => $level,

			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
	function hapus($id_user){
		$where = array('id_user' => $id_user);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
}
?>
