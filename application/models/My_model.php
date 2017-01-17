<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

	function getserviceCategory(){
		$this->db->where('STATUS', 1);
		$query = $this->db->get('service_category');

		return $query->result();
	}

	function getServiceformenu($sid){
		$this->db->where('SID', $sid);
		$query = $this->db->get('services');

		if($query->num_rows() != 0){
			$result = $query->row();
			$service = $result->SERVICE;
		} else {
			$service = 'Error Page';
		}

		return $service;
	}

	function getServiceCategoryID($categid){
		$this->db->where('CATEGID', $categid);
		$query = $this->db->get('service_category');

		if($query->num_rows() != 0){
			$result = $query->row();
			$categid = $result->CATEGID;
		} else {
			$categid = 'Error Page';
		}

		return $categid;	
	}

	function getServices($categid){
		$this->db->where('CATEGID', $categid);
		$query = $this->db->get('services');

		return $query->result();
	}
	function getServiceDetail($sid){
		$this->db->select('a.SERVICE, b.*');
		$this->db->from('services a');
		$this->db->join('service_detail b', 'a.SID = b.SID');
		$this->db->where('a.STATUS', 1);
		$this->db->where('b.SID', $sid);
		$query = $this->db->get();
		return $query->row();
	}
}