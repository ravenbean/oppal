<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaction extends CI_Model {
	public function select_all() {
		$data = $this->db->get('vw_Transaction');

		return $data->result();
	}

	// public function select_by_id($id) {
	// 	$sql = "SELECT * FROM posisi WHERE id = '{$id}'";

	// 	$data = $this->db->query($sql);

	// 	return $data->row();
	// }

	// public function select_by_pegawai($id) {
	// 	$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_posisi={$id}";

	// 	$data = $this->db->query($sql);

	// 	return $data->result();
	// }

	public function insert($data) {
		$sql = "INSERT INTO Transaction (Store_ID, From_User_ID, To_User_ID, Transaction_Type, Transaction_Date, Transaction_Value, Payment_Status) VALUES(".$data['store_id'].", ".$data['from_user_id'].", ".$data['to_user_id'].", '".$data['transaction_type']."', '".$data['transaction_date']."', '".$data['transaction_value']."', '".$data['payment_status']."' )";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('Transaction', $data);
		
		return $this->db->affected_rows();
	}

	// public function update($data) {
	// 	$sql = "UPDATE posisi SET nama='" .$data['posisi'] ."' WHERE id='" .$data['id'] ."'";

	// 	$this->db->query($sql);

	// 	return $this->db->affected_rows();
	// }

	public function delete($id) {
		$sql = "DELETE FROM Transaction WHERE Transaction_ID=" .$id ."";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	// public function check_nama($nama) {
	// 	$this->db->where('nama', $nama);
	// 	$data = $this->db->get('posisi');

	// 	return $data->num_rows();
	// }

	public function total_rows() {
		$data = $this->db->get('Transaction');

		return $data->num_rows();
	}
}

/* End of file M_posisi.php */
/* Location: ./application/models/M_posisi.php */