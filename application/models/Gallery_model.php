<?php
class Gallery_model {
    function __get_gallery($faculty) {
    	$path = 'gallery/get/'.$faculty;
    	$data = __fetchData($path, []);
		return $data;
	}
}
