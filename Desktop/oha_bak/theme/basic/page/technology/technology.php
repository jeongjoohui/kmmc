<?php
include_once('./_common.php');

$g5['title'] = "기술소개";
$title_view = "no"; 

if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
include_once('header.php'); //회사소개의 공통 상단을 연결합니다.

?>

<div>
    기술소개 페이지
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>