<?php
  /**
   *
   */
  class kkk3a extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_visi'] = $this->m_data->tampil_kkk3a();
      $this->load->view("selaras/kkk3a", $data);
    }
    function input (){
    //  $data['namavisi'] = $this->m_data->selectUser('');
    $data['misi_rpjm']  = $this->m_data->tampil_misir()->result_array(); 
    $data['judul'] ="Form Langkah 3a";
    $this->load->view("selaras/kkk3a_form",$data);

    }
    function hapus($id_sync_visi){
      $where = array('id_sync_visi' => $id_sync_visi);
      $this->m_data->hapus_data($where,'sync_visi');
      redirect('kkk3a/index');
    }

  	// dari aksi form
  	function tambah_aksi(){
      $visirpjmn = $this->input->post('visirpjmn');
  		$visi_rpjmd = $this->input->post('visi_rpjmd');
  		$selaras = $this->input->post('selaras');
  		$keterangan = $this->input->post('keterangan');

  		$data = array(
        'visirpjmn' => $visirpjmn,
  			'visi_rpjmd' => $visi_rpjmd,
  			'selaras' => $selaras,
  			'keterangan' => $keterangan,

  			);

  		$this->m_data->input_data($data,'sync_visi');
  		redirect('kkk3a/index');
  	}
}

?>
