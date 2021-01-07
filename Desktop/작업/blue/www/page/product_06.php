<?php
include_once("./_common.php"); // 메뉴별 공통 변수, 상수, 코드, 라이브러리

$me_code = "3060";//SNS 마케팅

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/product_06.php');
    return;
}

include_once("./_head.php");	// 메뉴별 상단 정의
?>

		<!-- sub_content S -->
		<center>
			<img src="<?php echo G5_IMG_URL ?>/blue/facebook.jpg">
			<img src="<?php echo G5_IMG_URL ?>/blue/insta.jpg">
            <img src="<?php echo G5_IMG_URL ?>/blue/youtube.jpg">
			<img src="<?php echo G5_IMG_URL ?>/blue/kakao.jpg">
			<img src="<?php echo G5_IMG_URL ?>/blue/etc.jpg">
		</center>
		<!-- //sub_content E -->

<?php
include_once("./_tail.php");	// 메뉴별 하단 정의
?>