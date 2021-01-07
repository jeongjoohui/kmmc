<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 

switch($bo_table) {
	case "work" :
		$me_code = '40';
	break;
	case "proposal" :
		$me_code = '50';
	break;
	case "estimate" :
		$me_code = '60';
	break;
	default:
		break;
}

$bo_title = $menu_info[$Depth1Code]['info'][$Depth2Code][0];
?>