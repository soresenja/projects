<?php
  /**
   *
   */
  class kkk3b extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_misi'] = $this->m_data->tampil_kkk3b();
      $this->load->view("selaras/kkk3b", $data);
    }
    function input (){
      $this->load->view("selaras/kkk3b_form");
    }
    function hapus($id_sync_misi){
      $where = array('id_sync_misi' => $id_sync_misi);
      $this->m_data->hapus_data($where,'sync_misi');
      redirect('kkk3b/index');
    }
    function simpan(){
      $id_misirpjmn = $this->input->post('id_misirpjmn');
  		$misi_rpjmd = $this->input->post('misi_rpjmd');
  		$selaras = $this->input->post('selaras');
  		$keterangan = $this->input->post('keterangan');

  		$data = array(
        'id_misirpjmn' => $id_misirpjmn,
  			'misi_rpjmd' => $misi_rpjmd,
  			'selaras' => $selaras,
  			'keterangan' => $keterangan,

  			);

  		$this->m_data->input_data($data,'sync_misi');
  		redirect('kkk3b/index');
  	}
}

?>
