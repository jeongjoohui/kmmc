<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>
<?php
include_once(G5_PATH.'/_inc/bbs_info.inc.php');

/* 메뉴명 불러오기 */
if($me_code) {
	$sqlone = " select me_name, me_code, me_link from {$g5['menu_table']} where me_use = '1' and length(me_code) = '2' and me_code = '".substr($me_code, 0, 2)."' limit 1 ";	
	$OneMenu = sql_fetch($sqlone);
	$OneMenuName = $OneMenu['me_name'];
	$OneMenuCode = $OneMenu['me_code'];
	$OneMenuLink = $OneMenu['me_link'];
	
	$sqltwo = " select me_name, me_code, me_link from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and me_code = '{$me_code}' limit 1 ";
	$TwoMenu = sql_fetch($sqltwo);
	$TwoMenuName = $TwoMenu['me_name'];
	$TwoMenuCode = $TwoMenu['me_code'];
	$TwoMenuLink = $TwoMenu['me_link'];

	if($TwoMenuName) {
		$g5['title'] = $OneMenuName." > ".$TwoMenuName;
	} else {
		$g5['title'] = $OneMenuName;
	}
	
	//서브 비쥬얼 이미지 코드 
	switch($OneMenuCode) {
		case "10" :// 회사소개
			$sbtImg = "subTopBg_01";
		break;
		case "20" :// 컨설팅
			$sbtImg = "subTopBg_02";
		break;
		case "30" :// 마케팅상품
			$sbtImg = "subTopBg_03";
		break;
		case "40" :// 실적사례
			$sbtImg = "subTopBg_04";
		break;
		case "50" :// 견적문의
			$sbtImg = "subTopBg_05";
		break;
		case "60" :// 컨설팅문의
			$sbtImg = "subTopBg_06";
		break;
	default:// 기본
			$sbtImg = "subTopBg_01";
		break;
	}
}
?>