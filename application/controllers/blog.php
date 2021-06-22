<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('blog_model');  // load the blog model
        
    }

	public function index()
	{
		//$data['featured'] = $this->blog_model->get_feature_article();
		$this->load->view('blog');
	}

	public function details()
	{
		$this->load->view('blog-details');
	}

	public function category(){
		$this->load->view('blog-category-list');
	}

	public function archive(){
		$this->load->view('blog-archive-list');
	}
}
