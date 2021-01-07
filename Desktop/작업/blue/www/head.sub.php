<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마 head.sub.php 파일
if(!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH.'/head.sub.php')) {
    require_once(G5_THEME_PATH.'/head.sub.php');
    return;
}

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
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    //echo '<meta name="viewport" content="width=device-width"/>'.PHP_EOL;	
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=Edge">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<meta name="naver-site-verification" content="5c347628146a30a809415f370575b20f47e10d71"/>
<meta name="description" content="마케팅, 블로그 마케팅, 카페 마케팅, 지식IN, 모바일 마케팅, 디스플레이 마케팅, SNS 마케팅, PPL, 언론보도 마케팅, 대중교통 마케팅">
<meta name="keyword" content="마케팅, 블로그 마케팅, 카페 마케팅, 지식IN, 모바일 마케팅, 디스플레이 마케팅, SNS 마케팅, PPL, 언론보도 마케팅, 대중교통 마케팅">
<link rel="canonical" href="<?php echo G5_URL ?>/">
<meta property="og:type" content="website">
<meta property="og:title" content="블루오션비엔엠">
<meta property="og:description" content="마케팅, 블로그 마케팅, 카페 마케팅, 지식IN, 모바일 마케팅, 디스플레이 마케팅, SNS 마케팅, PPL, 언론보도 마케팅, 대중교통 마케팅">
<meta property="og:image" content="<?php echo G5_IMG_URL ?>/logo2.png">
<meta property="og:url" content="<?php echo G5_URL ?>/">
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
<title><?php echo $g5_head_title; ?></title>
<?php
if (defined('G5_IS_ADMIN')) {
    if(!defined('_THEME_PREVIEW_'))
        echo '<link rel="stylesheet" href="'.G5_ADMIN_URL.'/css/admin.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
} else {
	if(G5_IS_MOBILE) {
		echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/m.default.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/mobile.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/m.board.common.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/m.contents.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_PLUGIN_URL.'/featherlight/featherlight.min.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
	} else {
		echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/default.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/board.common.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/contents.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
		echo '<link rel="stylesheet" href="'.G5_PLUGIN_URL.'/featherlight/featherlight.min.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
	}
}
?>
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<!--[if lte IE 9]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/respond.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>
<?php
if (defined('G5_IS_ADMIN')) {
	echo '<script src="'.G5_JS_URL.'/jquery-1.8.3.min.js"></script>'.PHP_EOL;
} else {// 사용자
	echo '<script src="'.G5_JS_URL.'/jquery-1.11.0.min.js"></script>'.PHP_EOL;
	echo '<script src="'.G5_JS_URL.'/jquery.menu.min.js?ver='.G5_JS_VER.'"></script>'.PHP_EOL;
	echo '<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>'.PHP_EOL;
	echo '<script src="'.G5_JS_URL.'/WEBsiting.js?ver=22'.G5_CSS_VER.'2"></script>'.PHP_EOL;
	echo '<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>'.PHP_EOL;
	echo '<script src="'.G5_JS_URL.'/placeholders.min.js"></script>'.PHP_EOL;
	echo '<script src="'.G5_PLUGIN_URL.'/shuffleLetters/jquery.shuffleLetters.min.js"></script>'.PHP_EOL;
	echo '<script src="'.G5_PLUGIN_URL.'/featherlight/featherlight.min.js"></script>'.PHP_EOL;
	echo '<script src="'.G5_JS_URL.'/script.js"></script>'.PHP_EOL;
}
?>
<?php
if(G5_IS_MOBILE) {
    echo '<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>'.PHP_EOL; // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>