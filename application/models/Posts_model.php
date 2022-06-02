<?php

class Posts_model extends CI_Model
{

	protected $table = 'posts';

	function __construct()
	{
		$this->table = 'posts';
		parent::__construct($this->table);
	}
	function getListPostByCategory($id_category = null,$limit = null,$offset = null){
		$this->db->select('*');
		$this->db->where('deleted=0');
		$this->db->where($this->table.'.id_category',$id_category);
		$this->db->order_by("id", "desc");
		$query = $this->db->get($this->table,$limit,$offset);
		return $query->result();
	}
}
