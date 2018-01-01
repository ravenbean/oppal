<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_transaction');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['page'] = "transaksi";
		$data['judul'] = "Data Transaksi";
		$data['deskripsi'] = "Data Transaksi Siswa";

		$data['transaksi'] = $this->M_transaction->select_all();
		$this->template->views('transaksi/home', $data);
	}

	public function tampil() {
		$data['dataTransaksi'] = $this->M_transaction->select_all();
		$this->load->view('transaksi/list_data', $data);
	}
}

/* End of file Transaction.php */
/* Location: ./application/controllers/Transaction.php */