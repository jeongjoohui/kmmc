<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
include_once(G5_PATH.'/_inc/current_code.php');// 페이지 코드값(co_id, bo_table)
//include_once(G5_PATH.'/_head.php');
?>
<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="naver-site-verification" content="5c347628146a30a809415f370575b20f47e10d71"/>
<meta name="description" content="맞춤형홈페이지제작,쇼핑몰,프로그램개발,퍼블리싱,반응형,브랜딩,웹디자인">
<meta name="keyword" content="맞춤형홈페이지제작,쇼핑몰,프로그램개발,퍼블리싱,반응형,브랜딩,웹디자인">
<link rel="canonical" href="http://www.purpleinocean.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="홈페이지 제작 퍼플이노션">
<meta property="og:description" content="맞춤형홈페이지제작,쇼핑몰,프로그램개발,퍼블리싱,반응형,브랜딩,웹디자인">
<meta property="og:image" content="http://www.purpleinocean.com/html/img/logo2.png">
<meta property="og:url" content="http://www.purpleinocean.com/">
<!-- Mirae Log Analysis Script Ver 1.0   -->
<script TYPE="text/javascript">
var mi_adkey = "no1jl";
var mi_date = parseInt(new Date().toISOString().slice(0,13).replace(/-/g,"").replace(/t/gi,"").replace(/:/gi,""))+Math.abs(new Date().getTimezoneOffset()/60) ;
var mi_script = "<scr"+"ipt "+"type='text/javascr"+"ipt' src='http://log1.toup.net/mirae_log.js?t="+mi_date+"' async='true'></scr"+"ipt>"; 
document.writeln(mi_script);
</script>
<!-- Mirae Log Analysis Script END  -->
<!-- 전환페이지 설정 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script> 
<script type="text/javascript"> 
var _nasa={};
_nasa["cnv"] = wcs.cnv("1","10"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
</script>
<!-- 공통 적용 스크립트 , 모든 페이지에 노출되도록 설치. 단 전환페이지 설정값보다 항상 하단에 위치해야함 --> 
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"> </script> 
<script type="text/javascript"> 
if (!wcs_add) var wcs_add={};
wcs_add["wa"] = "s_1425e9a13ee3";
if (!_nasa) var _nasa={};
wcs.inflow();
wcs_do(_nasa);
</script>
<title>회사소개 | 블루오션비엔엠</title>
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/default.css?ver=1831">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/board.common.css?ver=1831">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/js/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/mobile.css?ver=1831">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/contents.css?ver=1831">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/plugin/featherlight/featherlight.min.css?ver=1831">
<!--[if lte IE 9]><script src="http://blueocean-ad.co.kr/js/html5.js"></script><script src="http://blueocean-ad.co.kr/html/js/respond.js"></script><![endif]-->
<script>var g5_url = "http://blueocean-ad.co.kr"; var g5_bbs_url = "http://blueocean-ad.co.kr/bbs"; var g5_is_member = ""; var g5_is_admin = ""; var g5_is_mobile = ""; var g5_bo_table = ""; var g5_sca = ""; var g5_editor = ""; var g5_cookie_domain = "";</script>
<script src="http://blueocean-ad.co.kr/html/js/jquery-1.11.0.min.js"></script>
<script src="http://blueocean-ad.co.kr/html/js/jquery.menu.min.js?ver=171222"></script>
<script src="http://blueocean-ad.co.kr/js/common.js?ver=171222"></script>
<script src="http://blueocean-ad.co.kr/html/js/WEBsiting.js?ver=221712222"></script>
<script src="http://blueocean-ad.co.kr/js/wrest.js?ver=171222"></script>
<script src="http://blueocean-ad.co.kr/js/placeholders.min.js"></script>
<script src="http://blueocean-ad.co.kr/html/plugin/shuffleLetters/jquery.shuffleLetters.min.js"></script>
<script src="http://blueocean-ad.co.kr/html/plugin/featherlight/featherlight.min.js"></script>
<script src="http://blueocean-ad.co.kr/html/js/script.js"></script>
</head>
<body>




<div id="ctWrap">	
	<?php if (!defined("_INDEX_")) {  /*인덱스에서 사용하지 않음*/ ?>
	<!-- container 시작 -->
	<div id="container">
	<?php }  //인덱스에서 사용하지 않음?>