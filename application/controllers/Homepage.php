<?php

class Homepage extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model("Category_post_model","Category_post_model");
		$this->load->model("Posts_model","Posts_model");
	}
	public function index() {
		$this->load->view('includes/header');
		$this->load->view('homepage/body_homepage');
		$this->load->view('includes/footer');

	}

//	 function list_post_by_category($url_key)
//	 {
//		 $category = $this->Category_post_model->getCategory_PostByCategory($url_key)->result();
//		 $id_category = $category[0]->id;
//		 $view_data['title_category'] = $category[0]->name;
//		 $view_data['id_category'] = $id_category;
//		 $view_data['list_post'] = $this->Posts_model->getListPostByCategory($id_category,10,0);
//
//		 $this->template->rander("homepage/body_homepage",$view_data);
//
//
//	 }
//	public function ajax_post_categories()
//	{
//		$categories = $this->Category_post_model->get_all()->result();
//		$data = [];
//		foreach ($categories as $category) {
//			$data[] = [$this->load->view("homepage/ajax/sidebar-category-item", ['data' => $category], true)];
//		}
//		echo json_encode(array('status'=> true, 'data'=> $data));
//	}



}
