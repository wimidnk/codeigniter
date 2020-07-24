<?php
	class Post_model extends CI_model{
		public function _construct(){
			$this->load->database();
		}

		public function get_posts($url_link = FALSE){
			if($url_link === FALSE){
				$query = $this->db->get('posts');
				return $query->result_array();

			}
			$query = $this->db->get_where('posts', array('url_link' => $url_link));
			return $query ->row_array();
		}

	}