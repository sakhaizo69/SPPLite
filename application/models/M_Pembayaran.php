<?php
class M_Pembayaran extends CI_Model{
	function transaksi_pembayaran(){
		$query = $this->db->query("select * from pembayaran");
		return $query;
	}
	function simpan(){
        $data = array('id_pembayaran' => $this->input->post('id_pembayaran'),
                'id_petugas' => $this->input->post('id_petugas'),
                'nisn' => $this->input->post('nisn'),
            	'tgl_bayar' => $this->input->post('tgl_bayar'),
        		'bulan_bayar' => $this->input->post('bulan_bayar'),
    			'tahun_bayar' => $this->input->post('tahun_bayar'),
				'id_spp' => $this->input->post('id_spp'),
				'jumlah_bayar' => $this->input->post('jumlah_bayar'));
        $insert = $this->db->insert('pembayaran',$data);
    }

    function data_pembayaran_by_id($id){
        $query = $this->db->query("select * from pembayaran where id_pembayaran = '$id'");
        return $query;
    }

    function update(){
		$where = array('id_pembayaran' => $this->input->post('id_pembayaran'));
		$data1 = array('id_pembayaran' => $this->input->post('id_pembayaran'),
                'id_petugas' => $this->input->post('id_petugas'),
                'nisn' => $this->input->post('nisn'),
            	'tgl_bayar' => $this->input->post('tgl_bayar'),
        		'bulan_bayar' => $this->input->post('bulan_bayar'),
    			'tahun_bayar' => $this->input->post('tahun_bayar'),
				'id_spp' => $this->input->post('id_spp'),
				'jumlah_bayar' => $this->input->post('jumlah_bayar'));

		$data2 = array('id_pembayaran' => $this->input->post('id_pembayaran'),
                'id_petugas' => $this->input->post('id_petugas'),
                'nisn' => $this->input->post('nisn'),
            	'tgl_bayar' => $this->input->post('tgl_bayar'),
        		'bulan_bayar' => $this->input->post('bulan_bayar'),
    			'tahun_bayar' => $this->input->post('tahun_bayar'),
				'id_spp' => $this->input->post('id_spp'),
				'jumlah_bayar' => $this->input->post('jumlah_bayar'));

			$this->db->where($where);
			$query = $this->db->update('pembayaran',$data2);
			$this->db->where($where);
			$query = $this->db->update('pembayaran',$data1);	

			if($query > 0){
		$this->session->set_flashdata('suksessimpan','Transaksi Pembayaran Berhasil Diperbarui');
	}	
		}

		function hapus_transaksi_pembayaran($id){
		$query = $this->db->query("delete from pembayaran where id_pembayaran = '$id'");
		if($query > 0){
			$this->session->set_flashdata('suksessimpan','Data Petugas Berhasil Dihapus');
		}else{
			$this->session->set_flashdata('gagalsimpan','Data Petugas Gagal Dihapus');
		}
	}
}
?>