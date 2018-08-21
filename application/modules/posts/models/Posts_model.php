<?php
class Posts_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function __get_posts_detail($faculty, $id) {
		$sql = $this -> db -> query("SELECT * FROM posts_tab WHERE pstatus=1 AND pfaculty=".$faculty." AND pid=".$id, FALSE);
		return $sql -> result();
	}
}
