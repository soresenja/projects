<?php
  /**
   *
   */
  class kkk3c extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_tujuan'] = $this->m_data->tampil_kkk3c();
      $this->load->view("selaras/kkk3c", $data);
    }
    function input (){
      $this->load->view("selaras/kkk3c_form");
    }
    function hapus($id_sync_tujuan){
      $where = array('id_sync_tujuan' => $id_sync_tujuan);
      $this->m_data->hapus_data($where,'sync_tujuan');
      redirect('kkk3c/index');
    }
    function simpan(){
      $id_tujuanrpjmn = $this->input->post('a');
  		$tu_rpjmd = $this->input->post('b');
  		$selaras = $this->input->post('c');
  		$keterangan = $this->input->post('d');

  		$data = array(
        'id_tujuanrpjmn' => $id_tujuanrpjmn,
  			'tu_rpjmd' => $tu_rpjmd,
  			'selaras' => $selaras,
  			'keterangan' => $keterangan,

  			);

  		$this->m_data->input_data($data,'sync_tujuan');
  		redirect('kkk3c/index');
  	}

}

?>
