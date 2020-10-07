<?php
  /**
   *
   */
  class input extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function input (){
      $data['sync_irkprkpd'] = $this->m_data->tampil_kkk9()->result();
      $this->load->view("selaras/kkk9", $data);
    }
    function input (){
      $this->load->view("selaras/kkk9_form");
    }
}

?>
