<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model{

	function get_feature_article(){
		//$sql = "SELECT * FROM posts WHERE feature = 1 LIMIT 1";
		$query = $this->db->select()
						->where('feature',1)
						->limit('1')
						->order_by('id','DESC')
						->get('posts')
						->result_array();
		//echo $this->db->last_query();
		//echo "<pre>";print_r($query);die;
		return $query;
	}




} ?>