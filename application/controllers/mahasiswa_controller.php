<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_controller extends CI_Controller {
	public function __construct() {
		parrent::__construct();
		$this->load->model('mahasiswa_model');
	}

	public function index() {
		$data = [
			'data_mhs' => this->mahasiswa_model -> view_data_mhs()
		];

		$this->load->view('mahasiswa', $data);
	 }

	 public function delete($nim) {
		$this->mahasiswa_model -> hapus_mhs($nim);
		$this->session->set_flashdata('pesan', '<div class = "alert alert-success" roel = "alert">
		Berhasil Dihapus
		</div>');
		redirect(base_url('mahasiswa_controller'));
	 }

	 public function tambah() {
		$this->load->view('tambah_mahasiswa');

		if(isset($_POST['submit'])) {
			$this->_inputmahasiswa();
		}
	 }

	 private function _inputmahasiswa() {
		$nim = $this->input->post('nim');
		$nm_mhs = $this->input->post('nm_mhs');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jk = $this->input->post('jk');

		$data = array(
			'nim' => $nim,
			'nm_mhs' => $nm_mhs,
			'tmp_lahir' => $tempat_lahir,
			'tgl_lahir' => $tanggal_lahir,
			'jenkel' => $jk
		);

		$this->mahasiswa_model->input_mhs($data);
		$this->session->set_flashdata('pesan', '<div class = "alert alert-success" roel = "alert">
		Save Berhasil
		</div>');
		redirect(base_url('mahasiswa_controller'));
	 }
}
?>
