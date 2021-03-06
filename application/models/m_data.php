<?php

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
 //input data
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//function selectUser(){
	//	$this->db->select('*');
		//return $this->db->from('sync_visi')
			//->join('daftar_visirpjmn', 'daftar_visirpjmn.visi=sync_visi.visirpjmn')
		//	->get()
			//->result();
	//	}
	//memanggil data database controller
	function tampil_kkk1(){
		$this->db->order_by('id_sync_rpjmd', 'ASC');
			 return $this->db->from('sync_rpjmd')
				 ->join('daftar_isurpjmn', 'daftar_isurpjmn.id_isu_rpjmn=sync_rpjmd.id_isu_rpjmn')
				 ->get()
				 ->result();
	}
	function tampil_kkk2(){
		$this->db->order_by('id_sync_arah', 'ASC');
			 return $this->db->from('sync_arah')
				 ->join('daftar_arahrpjmn', 'daftar_arahrpjmn.id_arahrpjmn=sync_arah.id_arahrpjmn')
				 ->get()
				 ->result();
	}
	function tampil_kkk3a(){
		//join database
		$this->db->order_by('id_sync_visi', 'ASC');
			 return $this->db->from('sync_visi')
				 ->join('daftar_visirpjmn', 'daftar_visirpjmn.id_visirpjmn=sync_visi.visirpjmn')
				 ->get()
				 ->result();
	}

	function tampil_kkk3b(){

		$this->db->order_by('id_sync_misi', 'ASC');
			 return $this->db->from('sync_misi')
				 ->join('daftar_misirpjmn', 'daftar_misirpjmn.id_misirpjmn=sync_misi.id_misirpjmn')
				 ->get()
				 ->result();
	}
	function tampil_kkk3c(){
		$this->db->order_by('id_sync_tujuan', 'ASC');
			 return $this->db->from('sync_tujuan')
				 ->join('daftar_tujuanrpjmn', 'daftar_tujuanrpjmn.id_tujuanrpjmn=sync_tujuan.id_tujuanrpjmn')
				 ->get()
				 ->result();
	}

	function tampil_kkk3d(){
		$this->db->order_by('id_sync_sasaran', 'ASC');
			 return $this->db->from('sync_sasaran')
			 	->join('daftar_indikator_rpjmn', 'daftar_indikator_rpjmn.id_indikatorrpjmn=sync_sasaran.id_indikatorrpjmn')
				 ->join('daftar_tujuanrpjmn', 'daftar_tujuanrpjmn.id_tujuanrpjmn=sync_sasaran.id_tujuanrpjmn')
				 ->join('daftar_sasaranrpjmn', 'daftar_sasaranrpjmn.id_sasaranrpjmn=sync_sasaran.id_sasaranrpjmn')
				 ->get()
				 ->result();
	}
	// 08/10/2020
	function tampil_kkk3c_one($id){
		$this->db->order_by('id_sync_tujuan', 'ASC');
			 return $this->db->from('sync_tujuan')
				 ->join('daftar_tujuanrpjmn', 'daftar_tujuanrpjmn.id_tujuanrpjmn=sync_tujuan.id_tujuanrpjmn')
				 ->where('id_sync_tujuan',$id)
				 ->get()
				 ->row();
	}
	function update_kkk3c($id , $where){
		$this->db->where($id);
		$this->db->update('sync_tujuan',$where);
	}
	// End
	// 7 Oktober 2020
	function tampil_misir(){
		return $this->db->get('daftar_misirpjmn');
	}
	function sync_visi($selaras=null){
		$this->db->select('*');
		$this->db->from('sync_visi');
		($selaras!=null)?$this->db->where('selaras !=',''):'';
		return $this->db->get();
	}
	function daftar_visirpjmn(){
		return $this->db->get('daftar_misirpjmn');
	}
	// end edit

	//9 okt 2020
	function tampil_tujuanrpj(){
		return $this->db->get('daftar_tujuanrpjmn');
	}
	//end Edit

	//10 Okt 2020
	function sync_selaras(){
		$this->db->select('*');
		$this->db->from('sync_visi');
		$this->db->where('selaras','selaras');
		return $this->db->get();
	}
	//end edit

	// 13/10/2020
	function sync($selaras=null , $tabel=null){
		$this->db->select('*');
		$this->db->from($tabel);
		($selaras!=null)?$this->db->where('selaras',$selaras):'';
		return $this->db->get();
	}

	function sync_tujuan($selaras=null){
		$this->db->select('*');
		$this->db->from('sync_tujuan st');
		$this->db->join('daftar_tujuanrpjmn dt','st.id_tujuanrpjmn = dt.id_tujuanrpjmn');
		($selaras!=null)?$this->db->where('selaras',$selaras):'';
		$this->db->group_by('st.id_tujuanrpjmn');
		return $this->db->get();
	}
	// end edit

	function tampil_kkk4(){
		return $this->db->get('sync_indikator');
	}
	function tampil_kkk5(){
		return $this->db->get('sync_program');
	}
	function tampil_kkk6(){
		return $this->db->get('sync_dana');
	}
	function tampil_kkk7(){
		return $this->db->get('sync_rkprkpd');
	}
	function tampil_kkk8(){
		return $this->db->get('sync_prorkprkpd');
	}
	function tampil_kkk9(){
		return $this->db->get('sync_irkprkpd');
	}
	function tampil_data1(){
		return $this->db->get('mr');
	}
	function tampil_data2(){
		return $this->db->get('persepsi_rtp');
	}
	function tampil_data3(){
		return $this->db->get('konteks_pemda');
	}
	function tampil_data4(){
		return $this->db->get('iku_stra_opd');
	}
	function tampil_data5(){
		return $this->db->get('iku_op_opd');
	}
	function tampil_data7(){
		return $this->db->get('mr_iden_straopd');
	}
	function tampil_data8(){
		return $this->db->get('mr_iden_opopd');
	}
	function tampil_data9(){
		return $this->db->get('mr_analisis_pemda');
	}
	function tampil_data10(){
		return $this->db->get('mr_rtp');
	}
	function tampil_link2b(){
		return $this->db->get('link_jprogram');
	}
	function tampil_link2a(){
		return $this->db->get('link_program');
	}
	function tampil_link3a(){
		return $this->db->get('link_iprogram');
	}
	function tampil_link3b(){
		return $this->db->get('link_target');
	}
	function tampil_link4a(){
		return $this->db->get('link_sasaran');
	}
	function tampil_link4b(){
		return $this->db->get('link_isasaran');
	}
	function tampil_link4c(){
		return $this->db->get('link_oiprogram');
	}
	function tampil_link4d(){
		return $this->db->get('link_oikegiatan');
	}
	function tampil_link5a(){
		return $this->db->get('link_kegprogram');
	}
	function tampil_link5b(){
		return $this->db->get('link_sasaranprogram');
	}
	function tampil_link6(){
		return $this->db->get('link_subkegiatan');
	}

}

?>
