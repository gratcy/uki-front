<?php
class Pages_model {
    function __get_pages_detail($faculty, $id) {
    	$path = 'page/detail/'.$faculty.'/' . $id;
    	$data = __fetchData($path, []);
		return $data;
	}
}
