<?php
class Events_model {
    function __get_events($faculty) {
    	$path = 'events/get/'.$faculty;
    	$data = __fetchData($path, []);
		return $data;
	}

    function __get_events_detail($faculty, $id) {
    	$path = 'events/detail/'.$faculty.'/' . $id;
    	$data = __fetchData($path, []);
		return $data;
	}
}
