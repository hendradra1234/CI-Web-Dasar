<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mahasiswa_model extends CI_Model
{
	public function view_data_mhs() {
		return $this->db->get('tbl_mahasiswa')->result_array();
	}

	public function hapus_mhs($nim) {
		$this->db->where('nim', $nim);
		$this->db->delete('tbl_mahasiswa');
	}

	public function input_mhs($dt_mhs) {
		$this->db->insert('tbl_mahasiswa', $dt_mhs);
	}
}
?>
