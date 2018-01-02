<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {
	public function select_all_pegawai() {
		$sql = "SELECT * FROM pegawai";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {
		$sql = "SELECT user.User_ID AS id, user.Name AS pegawai, user.Balance AS saldo FROM user";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT user.User_ID AS id, user.Name AS nama, user.Balance AS saldo, user.pict_url as foto FROM user WHERE user.user_id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_posisi($id) {
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_posisi = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_kota($id) {
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_kota = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE user SET name='" .$data['nama'] ."', user_id=" .$data['idPeserta'] ." WHERE user_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function topup($data){
  	   $latest_saldo = $this->get_latest_saldo($data['id']);

	    //calculate saldo
        $saldo = $latest_saldo->balance + $data['jumlah'];
        $sql = "UPDATE user SET balance='" .$saldo."' WHERE user_id='" .$data['id'] ."'";

        $this->db->query($sql);

        return $this->db->affected_rows();
    }

    public function get_latest_saldo($id){
        $sql = "SELECT balance FROM user WHERE user_id =".$id;

        $data = $this->db->query($sql);

        return $data->row();
    }

	public function delete($id) {
		$sql = "DELETE FROM pegawai WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data,$filename,$user_data) {
        date_default_timezone_set('Asia/Jakarta');
        $companyId = $user_data->company_id;
        $admin_name = $user_data->nama;
        $now = date('Y-m-d H:i:s') ;

        $sql = "INSERT INTO user (`User_ID`, `Company_ID`, `Name`,`Pict_Url`,`PIN`, `User_Type`, `Is_Active`, `Balance`, `Created_Date`, `Created_By`, `Updated_Date`, `Updated_By`)
                VALUES (" .$data['idPeserta'] ."," .$companyId .",'" .$data['nama'] ."','".$filename ."',".$data['pin'] .",'murid','Y'," .$data['saldo'] .",'".$now."','". $admin_name ."','". $now."','".$admin_name."')";
//		$sql = "INSERT INTO user VALUES('','" .$data['nama'] ."','','','','',1," .$data['idPeserta'] ."," .$data['saldo'] .",'".$filename ."','".$data['pin'] ."')";

		$this->db->query($sql);

		return $this->db->error();
 	}

	public function insert_batch($data) {
		$this->db->insert_batch('pegawai', $data);
		
		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}
}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */