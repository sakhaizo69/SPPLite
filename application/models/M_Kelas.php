<?php
class M_Kelas extends CI_Model{
	function data_kelas(){
		$query = $this->db->query("select * from kelas");
		return $query;
	}
	function simpan(){
        $data = array('id_kelas' => $this->input->post('id_kelas'),
                'nama_kelas' => $this->input->post('nama_kelas'),
                'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'));
        $insert = $this->db->insert('kelas',$data);
    }

    function data_kelas_by_id($id){
        $query = $this->db->query("select * from kelas where id_kelas = '$id'");
        return $query;
    }

    function update(){
		$where = array('id_kelas'=>$this->input->post('id_kelas'));
		$data1 = array('id_kelas'=>$this->input->post('id_kelas'),
		'nama_kelas'=>$this->input->post('nama_kelas'),
		'kompetensi_keahlian'=>$this->input->post('kompetensi_keahlian'));

		$data2 = array('id_kelas'=>$this->input->post('id_kelas'),
		'nama_kelas'=>$this->input->post('nama_kelas'),
		'kompetensi_keahlian'=>$this->input->post('kompetensi_keahlian'));
		
		$this->db->where($where);
		$query = $this->db->update('kelas',$data2);
		$this->db->where($where);
		$query = $this->db->update('kelas',$data1);

		if($query > 0){
		$this->session->set_flashdata('suksessimpan','Data Kelas Berhasil Diperbarui');
	}
	
}
	function hapus_data_kelas($id){
		$query = $this->db->query("delete from kelas where id_kelas = '$id'");
		if($query > 0){
			$this->session->set_flashdata('suksessimpan','Data Petugas Berhasil Dihapus');
		}else{
			$this->session->set_flashdata('gagalsimpan','Data Petugas Gagal Dihapus');
		}
	}
}
?>