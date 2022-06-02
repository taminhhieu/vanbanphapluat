<?php

class Category_post_model extends CI_Model
{
	protected $table =  'category_post';

	function __construct() {
		$this->table = 'category_post';
		parent::__construct($this->table);

	}
	public function getCategory_PostByCategory($url_key)
	{
		$this->db->select('*');
		$this->db->where('url_key',$url_key);
		return $this->db->get($this->table);
	}

}
