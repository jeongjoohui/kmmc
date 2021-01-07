<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/main.css?ver='.G5_CSS_VER.'">', 5);
add_stylesheet('<link rel="stylesheet" href="'.G5_PLUGIN_URL.'/bxslider/jquery.bxslider.min.css">', 0);
?> 

	<section id="main_visual_re">
		<div class="bx-visual-wrap">
			<div class="main-txt">
				<img class="tit" src="<?php echo G5_IMG_URL ?>/main_tit.png"></img>
				<?php include_once(G5_PATH.'/_inc/form.php'); ?>
			</div>
		</div>
	</section>

	<?php /* 메인페이지 비쥬얼 */ ?>

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
		</div>
	</section>
	<hr>

	<div class="mainContentsW100 background-black" style="margin:0 auto; text-align:center;">
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
			<h1><span>블루오션비엔엔의</span></h1>
			<strong>실적사례</strong>
			<p class="centerBar"></p>
		</div>
		<iframe src="<?php echo G5_URL ?>/_inc/slide.html" width="100%" height="400" frameborder=0 framespacing=0 marginheight=0 marginwidth=0 scrolling=no vspace=0></iframe>
		<!-- 타이틀 없는 100% 꽉차는 박스형 갤러리 -->
		<?php
		/* 박스형 갤러리 게시판 최신글 */
		// 사용방법 : latest('theme/gallery_box', '게시판아이디', 출력라인, 글자수) echo latest('theme/gallery_box', 'work', 8, 24);
		echo latest('gallery_box', 'work', 10, 24);
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
		<section class="contact-section" id="contact"  >
			<div id="map" class="contact-map" id="map-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.693834399626!2d126.88431861558264!3d37.467950137525065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa80e732f5ec6043a!2z64yA66Wt7YWM7YGs64W47YOA7Jq0IDE47LCo!5e0!3m2!1sko!2skr!4v1595234039276!5m2!1sko!2skr" width="1280" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
	<script src="<?php echo G5_JS_URL ?>/WEBsiting.main.js"></script>

<?php
include_once(G5_PATH.'/tail.php');
?>