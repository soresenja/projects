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

    // edit 9 okt 2020
    function input_tujuan(){
      $data['tujuan_rpj'] = $this->m_data->tampil_tujuanrpj()->result_array();
      $this->load->view("selaras/kkk3c_form",$data);
    }
    // end

    // edit 10/08/2020
      function edit($id){
        if ($id===null) {
          redirect('kkk3c');
        }else{
          $data['data'] = $this->m_data->tampil_kkk3c_one($id);
          $this->load->view("selaras/kkk3c_edit_form",$data);
        }
      }
      function edit_data(){
        $data = [
          'id_tujuanrpjmn' => $this->input->post('a'),
          'tu_rpjmd' => $this->input->post('b'),
          'selaras' => $this->input->post('c'),
          'keterangan' => $this->input->post('d'),
        ];
        $id = [
          'id_sync_tujuan' => $this->input->post('id')
        ];

        $this->m_data->update_kkk3c($id,$data);
        redirect('kkk3c');
      }
    // end edit
}

?>
