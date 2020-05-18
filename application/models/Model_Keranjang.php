<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Keranjang extends CI_Model {

	function get()
	{
		$trans = $this->CekKeranjang();
		
		if ($trans['status']) {
			$this->db->join('barangs', 'temp_detail_transaksi.id_barang = barangs.id_barang');
			
			$detail_trans	= $this->db->get_where('temp_detail_transaksi', ['id_transaksi' => $trans['result']->id_transaksi])->result();			

			if (count($detail_trans) == 0) {
				return ['status' => 0];
			}

			$total_sewa		= 0;

			foreach ($detail_trans as $key => $value) {
				$detail_trans[$key]->jumlah_harga_sewa = $value->harga_sewa * $value->jumlah_barang;
				$total_sewa += $value->harga_sewa;
			}

			return [
				'status'	=> 1,	
				'total_sewa'=> $total_sewa,
				'result'	=> $detail_trans,
			];
		} else {
			return ['status' => 0];
		}		
	}

	function insert()
	{
		$id_user		= $this->session->userdata('id_user');
		$id_barang		= (int)$this->input->post('id_barang');
		$jumlah_barang	= (int)$this->input->post('jumlah_barang');

		// temp
		// $id_barang		= 1;
		// $jumlah_barang	= 1;
		
		$trans = $this->CekKeranjang($id_user);
		
		if ($trans['status']) {
			$id_transaksi = $trans['result']->id_transaksi;
		} else {
			$data_trans = [
				'id_user' 				=> $id_user,
				'status_transaksi' 		=> 0,
			];
			
			$this->db->insert('transaksi', $data_trans);
			$id_transaksi = $this->db->insert_id();
		}

		$where_detail_trans = [
			'id_transaksi'	=> $id_transaksi,
			'id_barang'		=> $id_barang,
		];
		$detail_trans = $this->db->get_where('temp_detail_transaksi', $where_detail_trans, 1);

		if ($detail_trans->num_rows() == 0) {
			$data_detail_trans = [
				'id_transaksi'	=> $id_transaksi,
				'id_barang'		=> $id_barang,
				'jumlah_barang'	=> $jumlah_barang,
			];

			if ($this->db->insert('temp_detail_transaksi', $data_detail_trans)) {
				return 1;
			} else {
				return 0;
			}
		} else {			
			$jumlah_barang += $detail_trans->row()->jumlah_barang;
			
			if ($this->db->update('temp_detail_transaksi', ['jumlah_barang' => $jumlah_barang], $where_detail_trans)) {
				return 1;
			} else {
				return 0;
			}
		}
	}

	function delete()
	{
		$id_temp_detail_transaksi	= $this->input->post('id_temp_detail_transaksi');
		
		if($this->db->delete('temp_detail_transaksi', ['id_temp_detail_transaksi' => $id_temp_detail_transaksi])){
			return 1;
		} else {
			return 0;
		}
	}

	function checkout()
	{
		$data_checkout = [
			'id_transaksi' 			=> $this->input->post('id_transaksi'),
			'tgl_pemesanan'			=> time(),
			'tgl_sewa'				=> $this->input->post('tgl_sewa'),
			'tujuan_sewa' 			=> $this->input->post('tujuan_sewa'),
			'total_sewa' 			=> $this->input->post('total_sewa'),
			// 'tgl_selesai' 			=> $this->input->post('tgl_selesai'),
			// 'jarak'					=> $this->input->post('jarak'),
			// 'metode_pengambilan'	=> $this->input->post('metode_pengambilan'),
			// 'biaya_pengiriman'		=> $this->input->post('biaya_pengiriman'),
			// 'alamat_pengiriman'		=> $this->input->post('alamat_pengiriman'),
		];
	}

	private function CekKeranjang($id_user = '')
	{
		if ($id_user == '') {
			$id_user = $this->session->userdata('id_user');
		}

		$trans = $this->db->get_where('transaksi', [
			'id_user' => $id_user,
			'status_transaksi' => 0
		], 1);

		if ($trans->num_rows() == 0) {
			return ['status' => 0];
		} else {
			return [
				'status' => 1,
				'result' => $trans->row()
			];
		}
	}
}

/* End of file Model_Keranjang.php */
