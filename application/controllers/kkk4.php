<?php
  /**
   *
   */
  class kkk4 extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_indikator'] = $this->m_data->tampil_kkk4()->result();
      $this->load->view("selaras/kkk4", $data);
    }
    function input (){
      $this->load->view("selaras/kkk4_form");
    }
    function hapus($id_sync_indikator){
      $where = array('id_sync_indikator' => $id_sync_indikator);
      $this->m_data->hapus_data($where,'sync_indikator');
      redirect('kkk4/index');
    }
}

?>
