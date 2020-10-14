<?php
  /**
   *
   */
   class Login extends CI_Controller{

 	function __construct(){
 		parent::__construct();
 		$this->load->model('M_login');

 	}

 	function index(){
 		$this->load->view('login');
 	}

 	function aksi_login(){
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');
 		$where = array(
 			'username' => $username,
 			'pass' => $password
 			);
 		$cek = $this->M_login->cek_login($where)->num_rows();
 		if($cek > 0){
 		$data['login'] = $this->M_login->cek_login($where)->row_array();
 			$data_session = array(
 				'username' => $username,
 				'nama' => $data['login']['nama'],
 				'status' => "login",
 				'level' => $data['login']['level']
			);
 			$this->session->set_userdata($data_session);

 			redirect(base_url("crud"));

 		}else{
 			// echo "Username dan password salah !";
 		}
 	}

 	function logout(){
 		$this->session->sess_destroy();
 		redirect(base_url('login'));
 	}
 }

 ?>
