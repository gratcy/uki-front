<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function __get_date($str, $type=1) {
	$str = strtotime($str);
	if ($type == 1) return date('d/m/Y', $str);
	elseif ($type == 2) return date('d ',$str).__get_month(date('m',$str)).date(' Y', $str);
	elseif ($type == 3) return date('d/m/Y H:i', $str);
	elseif ($type == 4) return date('d/m/Y H:i:s', $str);
    elseif ($type == 5) return date('d ',$str).__get_month(date('m',$str)).date(' Y H:i',$str);
    else return __get_day(date('Y-m-d', $str)) . ', ' . date('d/m/Y', $str);
}

function __get_upload_file($file, $type=1) {
    $CI =& get_instance();
    if (!$file) return '';
    if ($type == 1)
		return $CI -> config -> config['upload']['host'] . $CI -> config -> config['upload']['media']['path'] . $file;
	elseif ($type == 2)
		return $CI -> config -> config['upload']['host'] . $CI -> config -> config['upload']['gallery']['path'] . $file;
	else
		return $CI -> config -> config['upload']['host'] . $CI -> config -> config['upload']['slideshow']['path'] . $file;
}

function __get_month($date) {
    $date = (int) date('m', strtotime($date));
    $arr = array('Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    return $arr[$date];
}

function __get_day($date) {
    $date = (int) date('w', strtotime($date));
    $arr = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
    return $arr[$date];
}