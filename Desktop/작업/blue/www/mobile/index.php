<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

include_once(G5_MOBILE_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/m.main.css?ver='.G5_CSS_VER.'">', 5);
add_stylesheet('<link rel="stylesheet" href="'.G5_PLUGIN_URL.'/bxslider/jquery.bxslider.min.css">', 0);

?>

<!--띠배너 200410-->
<link rel="stylesheet" type="text/css" href="/css/200410_m_top_banner.css" />
<script src="/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/js/function.js" type="text/javascript"></script>
<script src="/js/jquery.cookie.js" type="text/javascript"></script>
<div id="wrap">
<div class="banner">
	<div class="top_banner">
		<a href="http://www.blueoceanmarketing.co.kr/bbs/board.php?bo_table=proposal"><img src="/img/200410_top_banner.png"></a>
	</div>
	<div class="btn_close">
		<label for="top_check">1일간 열지 않음</label>
		<button type="button" class="btnClose"><img src="/img/btn_close_top.png" width="15px" alt="닫기" /></button>
	</div>
</div>
</div><!-- 띠배너 끝-->


	<section id="main_visual_re">
		<div class="bx-visual-wrap">
			<div class="main-txt">
				<a href="tel:02-6951-1288"><img class="tit" src="<?php echo G5_MOBILE_URL ?>/img/m_main_tit.png"></img></a>
				<?php include_once(G5_PATH.'/_inc/m_form.php'); ?>
			</div>
		</div>
	</section>


<!--
	<section class="mainImg">
		<div class="video">
			<div class="main-txt">
				<img class="tit" src="/mobile/img/m_main_tit.png"></img>
				<?php// include_once(G5_PATH.'/_inc/form.php'); ?>
			</div>
			<video class="main_vidio" loop="loop" preload="auto" autoplay muted width="100%" height="auto">
				<img src="../img/main-banner.jpg">
			</video>
		</div>
	</section>
-->
	<hr>
	<div class="mainContentsW100" style="margin:0 auto; text-align:center;">
		<img src="<?php echo G5_MOBILE_URL ?>/img/m_main_img01.jpg">
	</div>

	<div class="mainContentsW100 background-black" style="margin:0 auto; text-align:center;">
		<img src="<?php echo G5_MOBILE_URL ?>/img/m_main_img02.jpg">
	</div>

	<div class="mainContentsW100" style="margin:0 auto; text-align:center;">
		<img src="<?php echo G5_MOBILE_URL ?>/img/m_main_img03.jpg">
	</div>

	<!--
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
	-->

	<hr>
	<section class="mainContentsW100 btnMoreNone latTitNone">
	<!--
		<div class="port">
			<h1><span>블루오션비엔엠의</span></h1>
			<strong>실적사례</strong>
			<p class="centerBar"></p>
		</div>
	-->
		<iframe src="<?php echo G5_URL ?>/_inc/m_slide.html" width="100%" height="500" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
		<!-- 타이틀 없는 100% 꽉차는 박스형 갤러리 -->
		<?php
		/* 박스형 갤러리 게시판 최신글 */
		// 사용방법 : latest('theme/gallery_box', '게시판아이디', 출력라인, 글자수) echo latest('theme/gallery_box', 'work', 8, 24);
		echo latest('gallery_box', 'work', 6, 24);
		?>
	</section>
	<hr>
	<section class="mainContents">
		<div class="mainTwoLatArea">
			<div class="MTLA01">
				<?php
				/* 웹진형 게시판 최신글 */
				// 사용방법 : latest('theme/webzine', '게시판아이디', 출력라인, 글자수);
				echo latest('qna', 'proposal', 5, 24);
			?>
			</div>
			<div class="MTLA02">
				<?php
				/* 웹진형 게시판 최신글 */
				// 사용방법 : latest('theme/webzine', '게시판아이디', 출력라인, 글자수);
				echo latest('qna', 'estimate', 5, 24);
				?>
			</div>
		</div>
	</section>


	<div class="contact-bg">
		<h2>Contact Us</h2><br>
		<p>서울 금천구 가산디지털1로 19 대륭테크노타운18차 610호<br>
		Tel. 02-6951-1288 / E-mail. blueocean3@blueocean-ad.co.kr</p>
		<section class="contact-section" id="contact">
			<div id="map" class="contact-map" id="map-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.693834399626!2d126.88431861558264!3d37.467950137525065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa80e732f5ec6043a!2z64yA66Wt7YWM7YGs64W47YOA7Jq0IDE47LCo!5e0!3m2!1sko!2skr!4v1595234039276!5m2!1sko!2skr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</section>
	</div>
	<hr>
	<?php
	if(defined('_INDEX_')) { /* index에서만 실행 */
		include G5_BBS_PATH.'/newwin.inc.php'; /* 팝업레이어 */
	}
	?>

<!--<script src="<?php echo G5_THEME_URL ?>/plugin/bxslider/jquery.bxslider.min.js"></script>-->
<script src="<?php echo G5_THEME_URL ?>/js/WEBsiting.main.js"></script>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>