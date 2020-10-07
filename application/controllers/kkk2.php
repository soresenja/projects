<?php
  /**
   *
   */
  class kkk2 extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_arah'] = $this->m_data->tampil_kkk2();
      $this->load->view("selaras/kkk2", $data);
    }
    function input (){
      $this->load->view("selaras/kkk2_form");
    }
    function hapus($id_sync_arah){
  		$where = array('id_sync_arah' => $id_sync_arah);
  		$this->m_data->hapus_data($where,'sync_arah');
  		redirect('kkk2/index');
  	}
    function simpan(){
      $id_arahrpjmn = $this->input->post('a');
      $arah_rpjmd = $this->input->post('b');
      $selaras = $this->input->post('c');
      $keterangan = $this->input->post('d');

      $data = array(
        'id_arahrpjmn' => $id_arahrpjmn,
        'arah_rpjmd' => $arah_rpjmd,
        'selaras' => $selaras,
        'keterangan' => $keterangan,

        );

      $this->m_data->input_data($data,'sync_arah');
      redirect('kkk2/index');
    }
}

?>
