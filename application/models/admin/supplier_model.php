<?php
class supplier_model extends ci_model{

	function select_all(){
		return $this->db->get('supplier');
	}
}