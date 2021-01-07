<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
//include_once(G5_LIB_PATH.'/outlogin.lib.php');
//include_once(G5_LIB_PATH.'/poll.lib.php');
//include_once(G5_LIB_PATH.'/visit.lib.php');
//include_once(G5_LIB_PATH.'/connect.lib.php');
//include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<div class="visible-xs">
	<div id="m_quick">
		<a href="tel:02-6951-1288">
			<div><i class="fa fa-phone" aria-hidden="true"></i><br>	전화걸기</div>
		</a>
		<a href="/bbs/write.php?bo_table=proposal" target="_blank">
			<div><i class="fa fa-pencil" aria-hidden="true"></i><br> 견적문의	</div>
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
	<h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
	<div id="skip_to_container"><a href="#ctWrap">본문 바로가기</a></div>
	<a id="snbOpen"><b><i class="fa fa-bars" aria-hidden="true"></i> <span class="sound_only">사이드메뉴 열기</span></b></a>
    <nav id="gnb">
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">
			<div id="logo">
				<a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo2.png" alt="<?php echo $config['cf_title']; ?>"></a>
			</div>
			<div class="pb-btn">
				<!--<a href="https://www.instagram.com/blueocean_bnm/" target="_blank"><img src="<?php echo G5_IMG_URL ?>/insta.png" alt="" style="margin-right: 8px;"/></a>
				<a href="https://blog.naver.com/blueoceanbm" target="_blank"><img src="<?php echo G5_IMG_URL ?>/blog.png" alt="" style="margin-right: 8px;"/></a>-->
                <a href="https://pf.kakao.com/_XRFKj" target="_blank"><img src="<?php echo G5_IMG_URL ?>/kakao.png" alt="" style="margin-right: 8px;"/></a>
			</div>
        </div>
		<p class="clb"></p>
    </nav>
</div>
<aside id="topSpacer"><?php /* !!지우지마세요 : 상단메뉴 고정 시 사용됩니다. */?></aside>
<aside id="sideBarCover"><?php /* mobile nav cover !!지우지마세요 : 모바일 화면에서 출력되는 메뉴배경입니다. */?></aside>
<!-- } 상단 끝 --><hr>

<!-- 콘텐츠 시작 { -->

<?php if (!defined("_INDEX_")) {  /*인덱스에서 사용하지 않음*/ ?>
<div id="page_title" class="<?php echo $sbtImg ?>">
	<div class="page_title_in">
		<h2>
			<strong title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></strong>
			<span class="locationBar" title="현재위치"><span> <em class="fa fa-home" aria-hidden="true"></em> HOME <i class="fa fa-angle-right" aria-hidden="true"></i> </span> <span class="loc1D"><!-- 1차메뉴 --></span> <span class="loc2D"><!-- 2차메뉴 --></span></span>
		</h2>
	</div>
</div>
<?php }  //인덱스에서 사용하지 않음?>

<div id="ctWrap">

<?php if (!defined("_INDEX_")) {  /*인덱스에서 사용하지 않음*/ ?>
	<div id="container">
<?php }  //인덱스에서 사용하지 않음?>
