<?php
  /**
   *
   */
  class kkk3d extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function index (){
      $data['sync_sasaran'] = $this->m_data->tampil_kkk3d();
      $this->load->view("selaras/kkk3d", $data);
    }
    function input (){
      $data['combo_tujuan'] = $this->m_data->sync_tujuan('selaras')->result_array();
      $data['combo_sasaran'] = $this->m_data->sync('selaras', 'sync_sasaran')->result_array();
      $data['combo_indikator'] = $this->m_data->sync('selaras', 'sync_indikator')->result_array();
      $this->load->view("selaras/kkk3d_form",$data);
    }
    function hapus($id_sync_sasaran){
      $where = array('id_sync_sasaran' => $id_sync_sasaran);
      $this->m_data->hapus_data($where,'sync_sasaran');
      redirect('kkk3d/index');
    }
    function simpan(){
      $id_tujuanrpjmn = $this->input->post('a');
      $id_sasaranrpjmn = $this->input->post('b');
      $id_indikatorrpjmn = $this->input->post('c');
      $sa_rpjmd = $this->input->post('d');
      $i_rpjmd = $this->input->post('e');
      $selaras = $this->input->post('c');
      $keterangan = $this->input->post('d');

      $data = array(
        'id_tujuanrpjmn' => $id_tujuanrpjmn,
        'id_sasaranrpjmn' => $id_sasaranrpjmn,
        'id_indikatorrpjmn' => $id_indikatorrpjmn,
        'sa_rpjmd' => $sa_rpjmd,
        'i_rpjmd' => $i_rpjmd,
        'selaras' => $selaras,
        'keterangan' => $keterangan,

        );

      $this->m_data->input_data($data,'sync_sasaran');
      redirect('kkk3d/index');
    }
}

?>
