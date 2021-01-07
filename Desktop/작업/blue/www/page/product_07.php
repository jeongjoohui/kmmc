<?php
include_once("./_common.php"); // 메뉴별 공통 변수, 상수, 코드, 라이브러리

$me_code = "3070";//언론보도 마케팅

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/product_07.php');
    return;
}

include_once("./_head.php");	// 메뉴별 상단 정의
?>

		<!-- sub_content S -->
		<center>
			<img src="<?php echo G5_IMG_URL ?>/blue/media.jpg">
			<img src="<?php echo G5_IMG_URL ?>/blue/process_news.jpg">
		</center>
		<!-- //sub_content E -->

<?php
include_once("./_tail.php");	// 메뉴별 하단 정의
?>