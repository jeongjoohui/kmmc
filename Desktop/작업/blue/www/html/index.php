<?php
include_once('../common.php');
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
<meta name="description" content="종합광고대행사 블루오션비엔엠, 마케팅,컨설팅,브랜딩 전문 업체">
<meta name="keyword" content="종합광고대행사 블루오션비엔엠, 마케팅,컨설팅,브랜딩 전문 업체">
<link rel="canonical" href="http://www.blueocean-ad.co.kr">
<meta property="og:type" content="website">
<meta property="og:title" content="종합마케팅 블루오션비엔엠">
<meta property="og:description" content="종합광고대행사 블루오션비엔엠, 마케팅,컨설팅,브랜딩 전문 업체">
<meta property="og:image" content="http://www.blueocean-ad.co.kr/html/img/logo2.png">
<meta property="og:url" content="http://www.blueocean-ad.co.kr">
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
<title>블루오션비엔엠</title>
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/default.css?ver=1644">
<!-- 메인에서만 필요 { -->
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/plugin/bxslider/jquery.bxslider.min.css?ver=171222">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/skin/latest/qna/style.css?ver=171222">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/skin/latest/basic/style.css?ver=171222">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/skin/latest/product/style.css?ver=171222">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/plugin/owlcarousel/owl.carousel.css?ver=171222">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/main.css?ver=17122216:44:32">
<!-- } 메인에서만 필요 -->
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/board.common.css?ver=1644">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/js/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/mobile.css?ver=1644">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/css/contents.css?ver=1644">
<link rel="stylesheet" href="http://blueocean-ad.co.kr/html/plugin/featherlight/featherlight.min.css?ver=1644">
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
<div id="ctWrap">
	<section class="mainImg">
		<div class="video">
			<div class="main-txt">
				<img class="tit" src="../img/main_tit.png"></img>
				﻿<!--<div class="hidden-xs main-speedform"  >-->
				<div class="main-speedform">
					<form name="fwrite" method="post" onSubmit="return submitChk(this)"; > 
					<input type=hidden name="sca" value="" />
					<fieldset>
						<ul>
							<li><label for="wr_1"></label><input type="text" id="wr_1" name="wr_1" placeholder="회사명" title="회사명"  maxlength="30" required /></li>
							<li><label for="wr_name"></label><input type="text" id="wr_name" name="wr_name" placeholder="이름" title="성함"   maxlength="30" required /></li>
							<li><label for="wr_3"></label><input type="text" id="wr_3" name="wr_3" placeholder="연락처" title="연락처"   maxlength="30" required /></li>
							<!-- <li class="tex_area"><label for="text"></label><textarea name="conts" id="text" placeholder="의뢰내용" title="의뢰내용"  ></textarea></li> -->
						</ul>
						<p class="tex_area"><label for="wr_content"></label><textarea name="wr_content" id="wr_content_id" placeholder="의뢰내용" title="의뢰내용"></textarea></p>
						<p class="checkbox"><input type="checkbox" name="chk" id="check" required /> <label for="check">개인정보보호정책에 동의합니다.</label></p>
					</fieldset>
					<p class="btn-area">
						<!--<a><input type="submit" value="상담의뢰" id="postBtn" accesskey="s" class="postBtn" style="background:none; border:none; color:#fff; "></a>-->
						<input type="submit" value="상 담 의 뢰" id="postBtn" accesskey="s" class="btn_consul">
						
					</p>
					</form>  
				</div><!-- class="main-speedform" -->
				<script language="javascript">
				function submitChk(f) {
					f.action = "./form_ok.php";
					return true;
				}
				</script>
			</div><!-- class="main-txt" -->
			<video class="main_vidio" loop="loop" preload="auto" autoplay muted width="100%" height="auto">
			<img src="../img/main-banner.jpg">
			</video>
		</div><!-- 빠진건지 일부러 뺀건지 -->
	</section>





	<hr>
	<section class="mainBasicCont01">
	<!-- 
	main.css 참조 
	검색엔진 노출을 위하여 메인페이지의 본 영역에 홈페이지에 대한 간략한 소개, 기본 정보 등 을 기재해 주시면 좋습니다.
	-->
		<h2>About Us</h2>
		<!-- <h3>그누보드5.3 기반의 반응형 홈페이지 테마!</h3> -->
		<p class="centerBar"></p>
		<h3>병원은 브랜드에 불과합니다. 우린 원장님을 알립니다.</h3>
		<p class="MBC01txt">
			<strong><span class="pc_br"></span></strong><br> 
			우리는 단지 외형만 화려한 병원의 브랜드를 넘어서 <em>원장님의 경험과 환자에 대한 생각을 마케팅합니다.</em><br class="br_none"/>
			환자의 경험에 대한 본질을 생각하며 연구하며 마케팅에 대한 이해와 공감을 바탕으로<br class="br_none"/>
			클라이언트의 1차적 만족을 넘어 소비자의 만족까지 생각하는 우리와 함께하세요.
		</p>
		<div class="mainAbout">
			<ul class="pb">
				<li>
					<i class="fa fa-hospital-o fa-3"></i>
					<dl>
						<dt>Strategy</dt>
						<dd>우리 병원에 딱 맞는<br>마케팅 전략을 제시합니다.</dd>
					</dl>
				</li>
				<li>
					<i class="fa fa-window-close-o fa-3"></i>
					<dl>
						<dt>Plan</dt>
						<dd>우리는 의료광고법을 알고 기본과 원칙을<br>준수하며 책임감 있는 광고를 준비 합니다.</dd>
					</dl>
				</li>
				<li>
					<img src="../img/com_icon3.png">
					<dl>
						<dt>Listen</dt>
						<dd>원활한 의사소통의 기본인 경청을 통해<br/>고객의 정확한 니즈를 파악합니다.</dd>
					</dl>
				</li>
			</ul>
			<ul>
				<li>
					<i class="fa fa-handshake-o fa-3"></i>
					<dl>
						<dt>Work</dt>
						<dd>우리는 직접 일합니다.<br>유창한 말솜씨로 계약만 하고<br>대행을 주지 않습니다.</dd>
					</dl>
				</li>
				<li>
					<i class="fa fa-building-o fa-3"></i>
					<dl>
						<dt>Real</dt>
						<dd>우리는 직접 자사 브랜드를 운영하며<br>매출을 발생 시킵니다.<br>직접 해본 업체가 "진짜" 입니다.</dd>
					</dl>
				</li>
				<li>
					<i class="fa fa-users fa-3"></i>
					<dl>
						<dt>false</dt>
						<dd>우리에겐 "거짓"이란 없습니다.<br>특허받은 프로그램으로<br>실시간 마케팅 현황을 알수 있습니다.</dd>
					</dl>
				</li>
			</ul>
		</div><!-- mainAbout -->
	</section>
	<hr>
	<div class="fe-full">
		<img src="../img/marketing_01.png">
	</div>
	<section class="mainContentsW100 background-dark">
		<h2>마케팅 절차</h2>
		<div class="mainContents">
			<ul class="main_figure_list">
				<li>
					<i class="fa fa-list-alt "></i>
					<strong>마케팅 컨설팅</strong>
					<span>고객 니즈에 맞는<br>1:1 맞춤 컨설팅</span>
				</li>
				<li>
					<i class="fa fa-desktop"></i>
					<strong>사이트 분석 </strong>
					<span>오랜 경험과 노하우를 바탕으로<br>웹페이지의 문제점을 정량적 정성적 분석</span>
				</li>
				<li>
					<i class="fa fa-search"></i>
					<strong>S T P 분석</strong>
					<span>시장 및 대상분할, 목표 설정 명확화<br>진입 목표와 전략 계획 수립</span>
				</li>
				<li>
					<i class="fa fa-bar-chart "></i>
					<strong>분석결과 보고</strong>
					<span>현시점 부족한<br>마케팅 결과 보고</span>
				</li>
				<li>
					<i class="fa fa-refresh" aria-hidden="true"></i>
					<strong>개선 방향 설정</strong>
					<span>마케팅 전문가들이<br>면밀히 분석한 개선 방향 설정</span> 
				</li>
				<li>
					<i class="fa fa-hand-o-right"></i>
					<strong>마케팅 방향성 제시</strong>
					<span>성공을 위한 첫걸음!<br>병원의 마케팅 방향성 제시</span>
				</li>
				<li>
					<i class="fa fa-file-archive-o"></i>
					<strong>빅데이터 분석</strong>
					<span>병원 광고의 다양한 데이터를 수집하여<br>우리 병원의 노출 극대화 분석</span> 
				</li>
				<li>
					<i class="fa fa-paper-plane"></i>
					<strong>노출 광고 스타트</strong>
					<span>병원 마케팅의 특화된 마케팅 상품을<br>접목하여 포털 사이트 노출 극대화</span> 
				</li>
				<li>
					<i class="fa fa-server"></i>
					<strong>특허 프로그램 보고 서비스</strong>
					<span>자사 특허 보고 프로그램을 이용하여<br>실시간 마케팅 보고</span>  
				</li> 
			</ul>
		</div>
	</section>
	<hr>
	<section class="mainContentsW100 btnMoreNone latTitNone"> 
		<div class="port">
			<h1><span>블루오션비엔엠의</span></h1>
			<strong>실적사례</strong>
			<p class="centerBar"></p>
		</div>
		<iframe src="http://blueocean-ad.co.kr/html/slide.html" width="100%" height="400" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
		<!-- 타이틀 없는 100% 꽉차는 박스형 갤러리 -->
	</section>
	<hr>
	<section class="mainContents">
		<div class="mainTwoLatArea">
			<div class="MTLA01">
				<div class="qnaLat">
					<h2 class="qnaLatTit"><a href="http://blueocean-ad.co.kr/bbs/board.php?bo_table=proposal">견적문의 <u></u></a></h2>
					<ul>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=proposal&amp;wr_id=259">
							<span class="qnaIco qnaIco2"><i class="fa fa-smile-o" aria-hidden="true"></i> 답변완료</span>
							<i class="fa fa-lock" aria-hidden="true"></i><span class="sound_only">비밀글</span> <b>강서 한의원 견적문의 드립니다.</b>
							<span class="lt_date">01-29</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=proposal&amp;wr_id=223">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<b>척추관절 한의원 (프렌차이즈)</b>
							<span class="lt_date">01-28</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=proposal&amp;wr_id=223">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<b>척추관절 한의원 (프렌차이즈)</b>
							<span class="lt_date">01-28</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=proposal&amp;wr_id=223">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<b>척추관절 한의원 (프렌차이즈)</b>
							<span class="lt_date">01-28</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=proposal&amp;wr_id=223">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<b>척추관절 한의원 (프렌차이즈)</b>
							<span class="lt_date">01-28</span>
							</a>
						</li>
					</ul>
					<a href="http://blueocean-ad.co.kr/bbs/board.php?bo_table=proposal" class="lt_more">견적문의 더보기 <i class="fa fa-plus" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="MTLA02">
				<div class="qnaLat">
					<h2 class="qnaLatTit"><a href="http://blueocean-ad.co.kr/bbs/board.php?bo_table=estimate">컨설팅문의 <u></u></a></h2>
					<ul>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=estimate&amp;wr_id=11">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<i class="fa fa-lock" aria-hidden="true"></i><span class="sound_only">비밀글</span> <b>문의합니다.</b>            <span class="lt_date">01-30</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=estimate&amp;wr_id=9">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<i class="fa fa-lock" aria-hidden="true"></i><span class="sound_only">비밀글</span> <b>문의합니다.</b>            <span class="lt_date">01-30</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=estimate&amp;wr_id=9">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<i class="fa fa-lock" aria-hidden="true"></i><span class="sound_only">비밀글</span> <b>문의합니다.</b>            <span class="lt_date">01-30</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=estimate&amp;wr_id=9">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<i class="fa fa-lock" aria-hidden="true"></i><span class="sound_only">비밀글</span> <b>문의합니다.</b>            <span class="lt_date">01-30</span>
							</a>
						</li>
						<li>
							<a href="http://www.blueocean-ad.co.kr/bbs/board.php?bo_table=estimate&amp;wr_id=9">
							<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
							<i class="fa fa-lock" aria-hidden="true"></i><span class="sound_only">비밀글</span> <b>문의합니다.</b>            <span class="lt_date">01-30</span>
							</a>
						</li>
					</ul>
					<a href="http://blueocean-ad.co.kr/bbs/board.php?bo_table=estimate" class="lt_more">컨설팅문의 더보기 <i class="fa fa-plus" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-bg">
		<h2>Contact Us</h2><br>
		<p>경기도 부천시 조마루로 285번길 60(상동, 상지프라자) 3층 블루오션비엔엠<br>
		Tel. 1544-1799 / E-mail. blueocean3@blueocean-ad.co.kr</p>
		<section class="contact-section" id="contact"  >
			<div id="map" class="contact-map" id="map-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.3344631046693!2d126.77300701570987!3d37.50002897981042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7d36402c0b07%3A0x3c59d2ab989e3403!2z6rK96riw64-EIOu2gOyynOyLnCDsm5Drr7jqtawg7KSRMeuPmSDsobDrp4jro6jroZwyODXrsojquLggNjA!5e0!3m2!1sko!2skr!4v1579245433785!5m2!1sko!2skr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</section>
	</div>
	<hr>
	
	
	<!-- 팝업레이어 시작 { -->
	<div id="hd_pop">
		<h2>팝업레이어 알림</h2>
		<span class="sound_only">팝업레이어 알림이 없습니다.</span>
	</div>
	<script>
	$(function() {
		$(".hd_pops_reject").click(function() {
			var id = $(this).attr('class').split(' ');
			var ck_name = id[1];
			var exp_time = parseInt(id[2]);
			$("#"+id[1]).css("display", "none");
			set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
		});
		$('.hd_pops_close').click(function() {
			var idb = $(this).attr('class').split(' ');
			$('#'+idb[1]).css('display','none');
		});
		$("#hd").css("z-index", 1000);
	});
	</script>
	<!-- } 팝업레이어 끝 -->
	<!--<script src="http://blueocean-ad.co.kr/html/plugin/bxslider/jquery.bxslider.min.js"></script>-->
	<script src="http://blueocean-ad.co.kr/html/js/WEBsiting.main.js"></script>
	<aside id="sideBar">
		<h2 class="sound_only">사이트 전체메뉴</h2>
		<!-- SNB // -->
		<ul id="snb">
			<!-- <li class="snbHome"><h2><a href="http://blueocean-ad.co.kr"><b>HOME</b></a></h2></li> -->
			<li class="snb  ">
				<h2><a href="/page/company_1.php" target="_self"><b>회사소개</b> <sub>blueocean-ad.co.kr</sub></a></h2>
			</li>
			<li class="snb  ">
				<h2><a href="/page/consulting_1.php" target="_self"><b>컨설팅</b> <sub>blueocean-ad.co.kr</sub></a></h2>
			</li>
			<li class="snb  ">
				<h2><a href="/page/marketing_1.php" target="_self"><b>마케팅상품</b> <sub>blueocean-ad.co.kr</sub></a></h2>
			</li>
			<li class="snb bo_tablework ">
				<h2><a href="/bbs/board.php?bo_table=work" target="_self"><b>실적사례</b> <sub>blueocean-ad.co.kr</sub></a></h2>
			</li>
			<li class="snb bo_tableproposal ">
				<h2><a href="/bbs/board.php?bo_table=proposal" target="_self"><b>견적문의</b> <sub>blueocean-ad.co.kr</sub></a></h2>
			</li>
			<li class="snb bo_tableestimate ">
				<h2><a href="/bbs/board.php?bo_table=estimate" target="_self"><b>컨설팅문의</b> <sub>blueocean-ad.co.kr</sub></a></h2>
			</li>
			<li class="snb noInfoPageTit"></li>
		</ul>
		<!-- // SNB -->
		<!-- 서브메뉴바 하단 정보// -->
		<!--
		<dl class="snbCS">
			<dt>CS CENTER</dt>
			<dd>
				<strong><i class="fa fa-phone-square"></i> <span>관리자 전화번호</span> </strong>
				<b><span> E-mail. <a href='mailto:blueocean3@blueocean-ad.co.kr'>blueocean3@blueocean-ad.co.kr</a></span> </b>
				<b><span>관리자정보여분필드1</span> </b>
				<br>
				<span>관리자정보여분필드2</span>
			</dd>
		</dl> -->
		<div id="snbMvAr">
			<a href="http://blueocean-ad.co.kr" id="btnHome">HOME</a>
			<a id="snbClose"><i class="fa fa-close"></i><i class="sound_only">사이드메뉴 닫기</i></a>
			<div class="snbMvArBtn">
				<a href="http://blueocean-ad.co.kr/bbs/login.php"><b>LOGIN</b></a>
				<a href="http://blueocean-ad.co.kr/bbs/register.php">JOIN</a>
			</div>
		</div>
		<!-- //서브메뉴바 하단 정보 -->
	</aside>
	<aside class="clb"></aside>
</div><!-- // #ctWrap 닫음 -->
<!-- } 콘텐츠 끝 -->
<hr>
<!-- 하단 시작 { -->
<footer id="footer">
	<dl>
		<dt><img src="http://blueocean-ad.co.kr/html/img/footerLogo.png" alt="블루오션비엔엠"></dt>
		<dd>
			<a href="#" data-featherlight="http://blueocean-ad.co.kr/html/privacy.php .term_area" data-featherlight="iframe">개인정보처리방침</a>
			<!--a href="#" data-featherlight="http://blueocean-ad.co.kr/html/term.php .term_area" data-featherlight-type="ajax">이용약관</a-->
			<a href="#" data-featherlight="http://blueocean-ad.co.kr/html/noEmail.php .term_area" data-featherlight-type="ajax">이메일주소 무단수집거부</a>
		</dd>
	</dl>
	<address>
		대표 : 이창윤 / 사업자등록번호 : 627-86-00153 /	경기도 부천시 조마루로 285번길 60, 3층(상지프라자)<br>
		Tel.1544-1799 / Fax.032-327-9985 / E-mail.blueocean3@blueocean-ad.co.kr
	</address>
	<p><span>Copyright</span> &copy; <b>blueocean-ad.co.kr</b> <span>All rights reserved.</span></p>
</footer>
<button type="button" id="top_btn" class="fa fa-arrow-up" aria-hidden="true"><span class="sound_only">페이지 상단으로 이동</span></button>
<script>$(function() { /* 모바일용 메뉴바 */ var articleMgnb = $("#snb li.snb"); articleMgnb.addClass("hide"); $("#snb li.active").removeClass("hide").addClass("show"); $("#snb li.active .snb2dul").show(); $(".snb2dDown").click(function(){ var myArticle = $(this).parents("#snb li.snb"); if(myArticle.hasClass("hide")){ articleMgnb.addClass("hide").removeClass("show"); articleMgnb.find(".snb2dul").slideUp("fast"); myArticle.removeClass("hide").addClass("show"); myArticle.find(".snb2dul").slideDown("fast"); } else { myArticle.removeClass("show").addClass("hide");myArticle.find(".snb2dul").slideUp("fast"); } }); });</script>
<!-- } 하단 끝 -->
<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->
</body>
</html>




