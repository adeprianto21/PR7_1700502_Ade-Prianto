<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta_model extends CI_Model {

	public function left_join() {
		$this->db->select('lokomotif.kd_kereta, lokomotif.nama, kursi.kd_kursi, kursi.kd_gerbong');
		$this->db->from('lokomotif');
		$this->db->join('kursi', 'lokomotif.kd_kereta = kursi.kd_kereta','left');
		return $this->db->get()->result();
	}

	public function right_join() {
		$this->db->select('gerbong.kd_gerbong, gerbong.kd_kereta, gerbong.nama, kursi.kd_kursi');
		$this->db->from('gerbong');
		$this->db->join('kursi', 'gerbong.kd_gerbong = kursi.kd_gerbong','right');
		return $this->db->get()->result();
	}

	public function inner_join() {
		$this->db->select('lokomotif.kd_kereta, lokomotif.nama, gerbong.kd_gerbong, gerbong.nama as nama_gerbong, kursi.kd_kursi');    
		$this->db->from('lokomotif');
		$this->db->join('gerbong', 'lokomotif.kd_kereta = gerbong.kd_kereta');
		$this->db->join('kursi', 'gerbong.kd_gerbong = kursi.kd_gerbong');
		return $this->db->get()->result();
	}

}
