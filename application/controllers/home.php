<?php
  /**
   *
   */
  class Home extends CI_Controller
  {

    function __construct(){
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
    }
    function form1b (){
      //memanggil data database
      $data['mr'] = $this->m_data->tampil_data1()->result();
      $this->load->view("form1b", $data);
    }


    function dashboard (){
      $this->load->view("welcome_message");
    }

    function info (){
      $this->load->view("visirpjmn");
    }

    function kkkompilasi (){
      $this->load->view("selaras/kkkompilasi");
    }

    function kkk3k (){
      $this->load->view("selaras/kkk3k");
    }
    function form (){
      $this->load->view("form");
    }
    function form2 (){
      $this->load->view("form2");
    }
    function kkrkompilasi (){
      $this->load->view("linkage/kkrkompilasi");
    }
    function kkr1a (){
      $this->load->view("linkage/kkr1a");
    }
    function kkr1b (){
      $this->load->view("linkage/kkr1b");
    }
    function kkr2b (){
      $data['link_jprogram'] = $this->m_data->tampil_link2b()->result();
      $this->load->view("linkage/kkr2b", $data);
    }
    function kkr2a (){
      $data['link_program'] = $this->m_data->tampil_link2a()->result();
      $this->load->view("linkage/kkr2a", $data);
    }
    function kkr3a (){
      $data['link_iprogram'] = $this->m_data->tampil_link3a()->result();
      $this->load->view("linkage/kkr3a", $data);
    }
    function kkr3b (){
      $data['link_target'] = $this->m_data->tampil_link3b()->result();
      $this->load->view("linkage/kkr3b", $data);
    }
    function kkr4a (){
      $data['link_sasaran'] = $this->m_data->tampil_link4a()->result();
      $this->load->view("linkage/kkr4a", $data);
    }
    function kkr4b (){
      $data['link_isasaran'] = $this->m_data->tampil_link4b()->result();
      $this->load->view("linkage/kkr4b", $data);
    }
    function kkr4c (){
      $data['link_oiprogram'] = $this->m_data->tampil_link4c()->result();
      $this->load->view("linkage/kkr4c", $data);
    }
    function kkr4d (){
      $data['link_oikegiatan'] = $this->m_data->tampil_link4d()->result();
      $this->load->view("linkage/kkr4d", $data);
    }
    function kkr5a (){
      $data['link_kegprogram'] = $this->m_data->tampil_link5a()->result();
      $this->load->view("linkage/kkr5a", $data);
    }
    function kkr5b (){
      $data['link_sasaranprogram'] = $this->m_data->tampil_link5b()->result();
      $this->load->view("linkage/kkr5b", $data);
    }
    function kkr6 (){
      $data['link_subkegiatan'] = $this->m_data->tampil_link6()->result();
      $this->load->view("linkage/kkr6", $data);
    }
    function form1a (){
      $this->load->view("form1a");
    }
    function form1c (){
      $data['persepsi_rtp'] = $this->m_data->tampil_data2()->result();
      $this->load->view("form1c", $data);
    }
    function form1d (){
      $this->load->view("form1d");
    }
    function form2a (){
      $data['konteks_pemda'] = $this->m_data->tampil_data3()->result();
      $this->load->view("form2a", $data);
    }
    function form2b (){
      $data['iku_stra_opd'] = $this->m_data->tampil_data4()->result();
      $this->load->view("form2b", $data);
    }
    function form2c (){
      $data['iku_op_opd'] = $this->m_data->tampil_data5()->result();
      $this->load->view("form2c", $data);
    }
    function form3a (){
      $this->load->view("form3a");
    }
    function form3b (){
      $data['mr_iden_straopd'] = $this->m_data->tampil_data7()->result();
      $this->load->view("form3b", $data);
    }
    function form3c (){
      $data['mr_iden_opopd'] = $this->m_data->tampil_data8()->result();
      $this->load->view("form3c", $data);
    }
    function form4 (){
      $data['mr_analisis_pemda'] = $this->m_data->tampil_data9()->result();
      $this->load->view("form4", $data);
    }
    function form5 (){
      $data['mr_analisis_pemda'] = $this->m_data->tampil_data9()->result();
      $this->load->view("form5", $data);
    }
    function form6 (){
      $this->load->view("form6");
    }
    function form7 (){
      $data['mr_rtp'] = $this->m_data->tampil_data10()->result();
      $this->load->view("form7", $data);
    }
    function form8 (){
      $data['mr_rtp'] = $this->m_data->tampil_data10()->result();
      $this->load->view("form8", $data);
    }
    function form9 (){
      $data['mr_rtp'] = $this->m_data->tampil_data10()->result();
      $this->load->view("form9", $data);
    }
    function form10 (){
      $data['mr_rtp'] = $this->m_data->tampil_data10()->result();
      $this->load->view("form10", $data);
    }
    function kkm1 (){
      $this->load->view("monitoringprogram/kkm1");
    }
    function kkm2 (){
      $this->load->view("monitoringprogram/kkm2");
    }
    function kkm3 (){
      $this->load->view("monitoringprogram/kkm3");
    }
    function kkm4 (){
      $this->load->view("monitoringprogram/kkm4");
    }
    function kkm5 (){
      $this->load->view("monitoringprogram/kkm5");
    }
    function kkm6 (){
      $this->load->view("monitoringprogram/kkm6");
    }
    function eva1 (){
      $this->load->view("evaluasi/eva1");
    }
    function eva2 (){
      $this->load->view("evaluasi/eva2");
    }


  }

 ?>
