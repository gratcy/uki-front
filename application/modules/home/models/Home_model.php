<?php
class Home_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function __get_slideshow($faculty) {
		$sql = $this -> db -> query("SELECT * FROM slideshow_tab WHERE sstatus=1 AND sfaculty=".$faculty." ORDER BY sid DESC LIMIT 5", FALSE);
		return $sql -> result();
	}

    function __get_menus($faculty, $parent) {
		$sql = $this -> db -> query("SELECT * FROM pages_tab WHERE pstatus=1 AND pfaculty=".$faculty." AND pparent=".$parent." ORDER BY pid ASC", FALSE);
		return $sql -> result();
	}

	function __get_last_category($faculty, $cid, $limit) {
		$sql = $this -> db -> query("SELECT * FROM posts_tab WHERE pstatus=1 AND pfaculty=".$faculty." AND pcid=".$cid." ORDER BY pid DESC LIMIT " . $limit, FALSE);
		return $sql -> result();
	}

	function __get_last_posts($faculty, $limit) {
		$sql = $this -> db -> query("SELECT * FROM posts_tab WHERE pstatus=1 AND pfaculty=".$faculty." ORDER BY pid DESC LIMIT " . $limit, FALSE);
		return $sql -> result();
	}

	function __get_last_testimonial($faculty, $limit) {
		$sql = $this -> db -> query("SELECT * FROM testimonial_tab WHERE tstatus=1 AND tfaculty=".$faculty." ORDER BY tid DESC LIMIT " . $limit, FALSE);
		return $sql -> result();
	}
}
