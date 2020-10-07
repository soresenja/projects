<?php
  /**
   *
   */
  class kkk1 extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      //memanggil data dari database
      $data['sync_rpjmd'] = $this->m_data->tampil_kkk1();
      $this->load->view("selaras/kkk1", $data);
    }
    function input (){
      $this->load->view("selaras/kkk1_form");
    }
    function hapus($id_sync_rpjmd){
  		$where = array('id_sync_rpjmd' => $id_sync_rpjmd);
  		$this->m_data->hapus_data($where,'sync_rpjmd');
  		redirect('kkk1/index');
  	}
    function simpan(){
      $id_isu_rpjmn = $this->input->post('a');
      $rpjmd = $this->input->post('b');
      $selaras = $this->input->post('c');
      $keterangan = $this->input->post('d');

      $data = array(
        'id_isu_rpjmn' => $id_isu_rpjmn,
        'rpjmd' => $rpjmd,
        'selaras' => $selaras,
        'keterangan' => $keterangan,

        );

      $this->m_data->input_data($data,'sync_rpjmd');
      redirect('kkk1/index');
    }
}

?>
