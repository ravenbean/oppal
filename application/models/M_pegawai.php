<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {
	public function select_all_pegawai() {
		$sql = "SELECT * FROM pegawai";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all($company_id) {

		$sql = "SELECT user.User_ID AS id, user.Name AS pegawai, user.Balance AS saldo FROM user WHERE COMPANY_ID='".$company_id."'";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT ID AS id, user.User_ID AS user_id, user.Name AS nama,user.pin as pin, user.Balance AS saldo, user.pict_url as foto, user.is_active AS status FROM user WHERE user.user_id like '%".$id."'";

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

	public function update($data,$filename,$user_data) {
        date_default_timezone_set('Asia/Jakarta');
        $companyId = $user_data->company_id;
        $admin_name = $user_data->nama;
        $now = date('Y-m-d H:i:s') ;
        $id = $companyId.'-'.$data['idPeserta'];

		$sql = "UPDATE user SET name='" .$data['nama'] ."', user_id='" .$id ."', pin='" .$data['pin'] ."'
		        , is_active=" .$data['status'] .", Pict_Url='" .$filename ."'
		        , updated_date='" .$now. "', updated_by='" .$admin_name. "' 
	    	    WHERE id='" .$data['id'] ."'";

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
        $sql = "SELECT balance FROM user WHERE user_id ='".$id."'";

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
        $id = $companyId.'-'.$data['idPeserta'];

        $sql = "INSERT INTO user (`ID`,`User_ID`, `Company_ID`, `Name`,`Pict_Url`,`PIN`, `User_Type`, `Is_Active`, `Balance`, `Created_Date`, `Created_By`, `Updated_Date`, `Updated_By`)
                VALUES ('','$id',' $companyId ','" .$data['nama'] ."','".$filename ."',".$data['pin'] .",'murid'," .$data['status'] ."," .$data['saldo'] .",'".$now."','". $admin_name ."','". $now."','".$admin_name."')";
//		$sql = "INSERT INTO user VALUES('','" .$data['nama'] ."','','','','',1," .$data['idPeserta'] ."," .$data['saldo'] .",'".$filename ."','".$data['pin'] ."')";

		$this->db->query($sql);
        unset($sql);
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