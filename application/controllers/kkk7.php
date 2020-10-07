<?php
  /**
   *
   */
  class kkk7 extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_rkprkpd'] = $this->m_data->tampil_kkk7()->result();
      $this->load->view("selaras/kkk7", $data);
    }
    function input (){
      $this->load->view("selaras/kkk7_form");
    }
}

?>
