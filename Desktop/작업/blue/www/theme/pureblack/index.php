<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/main.css?ver='.G5_CSS_VER.''.date("H:i:s").'">', 5);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/plugin/bxslider/jquery.bxslider.min.css">', 0);

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<?php /* 메인페이지 비쥬얼 슬라이더 */ ?>
<section class="mainVisualImage hiddAction">
	<ul>
		<li>
			<img src="<?php echo G5_THEME_IMG_URL ?>/mainImg01.jpg" alt="">
			<h2 class="mvTit01">그누보드5.3 기반</h2>
			<div class="mvTit02">
				<p class="mvTit02txt">퓨어블랙 반응형 홈페이지 테마</p>
				<a href="#" class="mvLink"><b>자세히보기</b></a>
			</div>
		</li>
		<li>
			<img src="<?php echo G5_THEME_IMG_URL ?>/mainImg02.jpg" alt="">
			<h2 class="mvTit01">PURE BLACK</h2>
			<div class="mvTit02">
				<p class="mvTit02txt">그누보드5 반응형 홈페이지 테마</p>
				<a href="#" class="mvLink"><b>자세히보기</b></a>
			</div>
		</li>
		<li>
			<img src="<?php echo G5_THEME_IMG_URL ?>/mainImg03.jpg" alt="">
			<h2 class="mvTit01">GNUBOARD5.3 BASE</h2>
			<div class="mvTit02">
				<p class="mvTit02txt">퓨어블랙 반응형 테마</p>
				<a href="#" class="mvLink"><b>자세히보기</b></a>
			</div>
		</li>
	</ul>
</section>

<hr>

<section class="mainBasicCont01">
	<!-- 
		main.css 참조 
		검색엔진 노출을 위하여 메인페이지의 본 영역에 홈페이지에 대한 간략한 소개, 기본 정보 등 을 기재해 주시면 좋습니다.
	-->
	<h2>퓨어블랙(PURE BLACK)</h2>
	<h3>그누보드5.3 기반의 반응형 홈페이지 테마!</h3>

	<p class="centerBar"></p>

	<p class="MBC01txt">
		<strong>퓨어블랙(PURE BLACK) 테마는   <span class="pc_br"></span>그누보드5 5.3버전 기반의 반응형 웹사이트 테마입니다.</strong><br><br>
		퓨어블랙 테마는 기본적인 트랜디한 레이아웃에 어떤 컨셉이든 잘 어울리는  <span class="pc_br"></span>심플한 구조로 제작되어 있어 퓨어블랙 테마로 만들 수 있는 웹사이트의 종류는 정말 다양합니다.<br>
		어떤 업종! 어떤 종류의 홈페이지도 뚝딱 만들어 낼 수 있는 퓨어블랙 테마로 홈페이지 제작에 도전해 보세요!
	</p>
</section>

<hr>

<section class="mainContentsW100 btnMoreNone latTitNone">
	<!-- 타이틀 없는 100% 꽉차는 박스형 갤러리 -->
	<?php
	/* 박스형 갤러리 게시판 최신글 */
	// 사용방법 : latest('theme/gallery_box', '게시판아이디', 출력라인, 글자수);
	echo latest('theme/gallery_box', 'gallery_box', 10, 24);
	?>
</section>

<hr>

<section class="mainContentsW100 background-dark">
	<div class="mainContents">
		<ul class="main_figure_list">
			<li>
				<i class="fa fa-desktop"></i>
				<strong>WEBSITE</strong>
				<span>웹사이트 제작 및 관리</span>
			</li>
			<li>
				<i class="fa fa-code"></i>
				<strong>MOBILE</strong>
				<span>모바일 웹사이트 제작 및 관리</span>
			</li>
			<li>
				<i class="fa fa-shopping-cart"></i>
				<strong>E-commerce</strong>
				<span>쇼핑몰 제작 및 운영대행</span>
			</li>
			<li>
				<i class="fa fa-android"></i>
				<strong>Application</strong>
				<span>웹 어플리케이션 개발 및 운영</span>
			</li>
		</ul>
	</div>
</section>

<hr>

<section class="mainContents">

	<div class="mainTwoLatArea">
		<div class="MTLA01">
			<?php
			/* 웹진형 게시판 최신글 */
			// 사용방법 : latest('theme/webzine', '게시판아이디', 출력라인, 글자수);
			echo latest('theme/webzine', 'basic', 3, 24);
			?>
		</div>
		<div class="MTLA02">
			<?php
			/* 웹진형 게시판 최신글 */
			// 사용방법 : latest('theme/webzine', '게시판아이디', 출력라인, 글자수);
			echo latest('theme/webzine', 'webzine', 3, 24);
			?>
		</div>
	
	</div>
</section>


<section class="mainContentsW100 background-gray">
	<div class="mainContents">

		<div class="mainThreeLatArea">
			<div class="MTLA01">
				<?php
				/* 일반형 게시판 최신글 */
				// 사용방법 : latest('theme/basic', '게시판아이디', 출력라인, 글자수);
				echo latest('theme/basic', 'basic', 5, 24);
				?>
			</div>
			<div class="MTLA02">
				<?php
				/* 일반형 게시판 최신글 */
				// 사용방법 : latest('theme/basic', '게시판아이디', 출력라인, 글자수);
				echo latest('theme/basic', 'faq', 5, 24);
				?>
			</div>
			<div class="MTLA03">
				<?php
				/* 질문답변 게시판 최신글 */
				// 사용방법 : latest('theme/qna', '게시판아이디', 출력라인, 글자수);
				echo latest('theme/qna', 'qna', 5, 24);
				?>
			</div>
		
		</div>

	</div>
</section>


<section class="mainContents">
	<?php
	/* 제품소개 게시판 최신글 */
	// 사용방법 : latest('theme/product', '게시판아이디', 출력라인, 글자수);
	echo latest('theme/product', 'product_gallery', 10, 24);
	?>
</section>

<hr>



    <?php
    if(defined('_INDEX_')) { /* index에서만 실행 */
        include G5_BBS_PATH.'/newwin.inc.php'; /* 팝업레이어 */
    }
    ?>

<script src="<?php echo G5_THEME_URL ?>/plugin/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/WEBsiting.main.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>