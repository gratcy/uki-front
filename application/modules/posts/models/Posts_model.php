<?php
class Posts_model {
    function __get_posts_detail($faculty, $id) {
    	$path = 'posts/detail/'.$faculty.'/' . $id;
    	$data = __fetchData($path, []);
		return $data;
	}

    function __get_posts_categories($faculty, $cid, $notCid) {
    	$params['category'] = $cid;
    	$params['limit'] = $limit;
    	$params['notCategory'] = $notCid;
    	$path = 'posts/get/'.$faculty.'/';
    	$data = __fetchData($path, $params);
		return $data;
	}
}
