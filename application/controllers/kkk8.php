<?php
  /**
   *
   */
  class kkk8 extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_prorkprkpd'] = $this->m_data->tampil_kkk8()->result();
      $this->load->view("selaras/kkk8", $data);
    }
    function input (){
      $this->load->view("selaras/kkk8_form");
    }
}

?>
