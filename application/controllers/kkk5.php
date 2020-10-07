<?php
  /**
   *
   */
  class kkk5 extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_program'] = $this->m_data->tampil_kkk5()->result();
      $this->load->view("selaras/kkk5", $data);
    }
    function input (){
      $this->load->view("selaras/kkk5_form");
    }
}

?>
