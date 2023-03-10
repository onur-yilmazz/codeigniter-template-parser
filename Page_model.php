<?php 
	class Page_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

	    public function get_content($link=false){
	        $this->db->select('*');    
	        $this->db->from('page');
	        $this->db->where('link',$link);
	        return $this->db->get()->row();
	    }


	    /** Parse Query **/
	    public function get_keywords($id){
	        return $this->db->query("SELECT * FROM keywords where page_id=$id ORDER BY id ASC");
	    }

	    public function content_gallery($id){
	        return $this->db->query("SELECT * FROM images where page_id=$id ORDER BY id ASC");
	    }

	}


?>
