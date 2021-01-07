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
<div class="visible-xs">
	<div id="m_quick">
		<a href="tel:1544-1799" target="_blank">
		<div>
			<i class="fa fa-phone" aria-hidden="true"></i><br>	전화걸기
		</div>
		</a>
		<a href="/bbs/write.php?bo_table=estimate" target="_blank">
		<div>
			<i class="fa fa-pencil" aria-hidden="true"></i><br>	견적문의
		</div>
		</a>
	</div>
</div>
<style>
#m_quick {position:fixed; bottom:0; height:50px; background-color:#0f4c81; border-top:1px solid #1aa7df; width:100%; z-index:10000; font-family:'notoR'}
#m_quick div {float:left; width:49.8%; font-size:11px; color:#fff; text-align:center; letter-spacing:-1px; border-right:1px solid #1aa7df ; height:50px}
#m_quick img {margin-top:7px; margin-bottom:2px; width:20px;}
#m_quick .tab {width:300px; margin:0 auto;}
#m_quick i {padding:10px 8px 5px 8px; font-size:15px; color:#fff}
</style>
<a id="topID"></a>
<!-- 상단 시작 { -->
<div id="hd">
	<h1 id="hd_h1">블루오션비엔엠</h1>
	<div id="skip_to_container"><a href="#ctWrap">본문 바로가기</a></div>
	<a id="snbOpen"><b><i class="fa fa-bars" aria-hidden="true"></i> <span class="sound_only">사이드메뉴 열기</span></b></a>
	<nav id="gnb">
		<h2>메인메뉴</h2>
		<div class="gnb_wrap">
			<div id="logo"><a href="http://blueocean-ad.co.kr"><img src="http://blueocean-ad.co.kr/html/img/logo2.png" alt="블루오션비엔엠"></a></div>
			<div class="pb-btn">
				<a href="https://www.instagram.com/blueocean_bnm/" target="_blank"><img src="http://blueocean-ad.co.kr/html/img/insta.png" alt="" style="margin-right: 8px;"/></a>
				<a href="https://blog.naver.com/blueoceanbm" target="_blank"><img src="http://blueocean-ad.co.kr/html/img/blog.png" alt="" style="margin-right: 8px;"/></a>
				<a href="https://pf.kakao.com/_XRFKj" target="_blank"><img src="http://blueocean-ad.co.kr/html/img/kakao.png" alt="" style="margin-right: 8px;"/></a>
			</div>
			<ul id="gnb_1dul">
				<li class="gnb_1dli" style="z-index:999"><a href="/page/company_1.php" target="_self" class="gnb_1da">회사소개<u></u></a></li>
				<li class="gnb_1dli" style="z-index:998"><a href="/page/consulting_1.php" target="_self" class="gnb_1da">컨설팅<u></u></a></li>
				<li class="gnb_1dli" style="z-index:997"><a href="/page/marketing_1.php" target="_self" class="gnb_1da">마케팅상품<u></u></a></li>
				<li class="gnb_1dli" style="z-index:996"><a href="/bbs/board.php?bo_table=work" target="_self" class="gnb_1da">실적사례<u></u></a></li>
				<li class="gnb_1dli" style="z-index:995"><a href="/bbs/board.php?bo_table=proposal" target="_self" class="gnb_1da">견적문의<u></u></a></li>
				<li class="gnb_1dli" style="z-index:994"><a href="/bbs/board.php?bo_table=estimate" target="_self" class="gnb_1da">컨설팅문의<u></u></a></li>
			</ul>
		</div>
		<p class="clb"></p>
	</nav>
</div>
<aside id="topSpacer"></aside>
<aside id="sideBarCover"></aside>
<!-- } 상단 끝 -->
<hr>
<!-- 콘텐츠 시작 { -->
<?php if (!defined("_INDEX_")) {  /*인덱스에서 사용하지 않음*/ ?>
<div id="page_title" class="<?php echo $sbtImg ?>"><!-- subTopBg_00 -->
	<div class="page_title_in">
		<h2>
			<strong title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?><?php echo $me_code; ?></strong>
			<span class="locationBar" title="현재위치"><span> <em class="fa fa-home" aria-hidden="true"></em> HOME <i class="fa fa-angle-right" aria-hidden="true"></i> </span> <span class="loc1D"><!-- 1차메뉴 --></span> <span class="loc2D"><!-- 2차메뉴 --></span></span>
		</h2>
	</div>
</div>
<?php }  //인덱스에서 사용하지 않음?>



<div id="ctWrap">	
	<?php if (!defined("_INDEX_")) {  /*인덱스에서 사용하지 않음*/ ?>
	<!-- container 시작 -->
	<div id="container">
	<?php }  //인덱스에서 사용하지 않음?>