<?php
class Home_model {
    function __get_slideshow($faculty) {
    	$params['limit'] = 5;
    	$path = 'slideshow/get/'.$faculty.'/';
    	$data = __fetchData($path, $params);
		return $data;
	}

    function __get_menus($faculty) {
    	$path = 'page/get/menus/'.$faculty.'/';
    	$data = __fetchData($path, []);
		return $data;
	}

	function __get_last_category($faculty, $cid, $limit) {
    	$params['category'] = $cid;
    	$params['limit'] = $limit;
    	$params['notCategory'] = 0;
    	$path = 'posts/get/'.$faculty.'/';
    	$data = __fetchData($path, $params);
		return $data;
	}

	function __get_last_posts($faculty, $categorynot, $limit) {
    	$params['category'] = 0;
    	$params['limit'] = $limit;
    	$params['notCategory'] = $categorynot;
    	$path = 'posts/get/'.$faculty.'/';
    	$data = __fetchData($path, $params);
		return $data;
	}

	function __get_last_events($faculty, $limit) {
    	$params['limit'] = $limit;
    	$path = 'events/get/'.$faculty.'/';
    	$data = __fetchData($path, $params);
		return $data;
	}

	function __get_last_testimonial($faculty, $limit) {
    	$params['limit'] = $limit;
    	$path = 'testimonial/get/'.$faculty.'/';
    	$data = __fetchData($path, $params);
		return $data;
	}
}
