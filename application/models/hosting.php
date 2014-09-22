<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hosting extends CI_Model {

	function __construct() {
		$this->_class_name = strtolower(get_class($this));
		$this->_table = $this->_class_name;
	}

	function get_all() {
		$this->db->join('client', 'client.id = hosting.clientId');
		$this->db->select('*,hosting.id as id');
		$this->db->order_by('lastName');
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	function get($id) {
		$this->db->where('id',$id);
		$query = $this->db->get($this->_table);
		return $query->row();
	}

	function find($id) {
		$this->db->where('clientId',$id);
		$query = $this->db->get($this->_table);

		return $query->result();
	}

	function update($id,$data) {
		$this->db->where('id', $id);
		$update = $this->db->update($this->_table, $data); 
		return $update;
	}

	function get_next($lastName) {
		$this->db->where('lastName >',$lastName);
		$this->db->order_by('lastName');
		$query = $this->db->get($this->_table,1);
		return $query->num_rows() ? $query->row() : false;
	}

	function get_previous($lastName) {
		$this->db->where('lastName <',$lastName);
		$this->db->order_by('lastName','DESC');
		$query = $this->db->get($this->_table,1);
		return $query->num_rows() ? $query->row() : false;
	}

}

?>