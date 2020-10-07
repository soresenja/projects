<?php
  /**
   *
   */
  class kkk6 extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_dana'] = $this->m_data->tampil_kkk6()->result();
      $this->load->view("selaras/kkk6", $data);
    }
    function input (){
      $this->load->view("selaras/kkk6_form");
    }
}

?>
