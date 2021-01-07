<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
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

<a id="topID"></a>
<!-- 상단 시작 { -->
<div id="hd">
	<h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
	<div id="skip_to_container"><a href="#ctWrap">본문 바로가기</a></div>
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
			<ul id="gnb_1dul">
				<?php
				$sql = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '2' order by me_order, me_id ";
				$result = sql_query($sql, false);
				$gnb_zindex = 999; /* gnb_1dli z-index 값 설정용 */
				$menu_datas = array();
				for ($i=0; $row=sql_fetch_array($result); $i++) {
					$menu_datas[$i] = $row;
					
					$sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id ";
					$result2 = sql_query($sql2);
					for ($k=0; $row2=sql_fetch_array($result2); $k++) {
						$menu_datas[$i]['sub'][$k] = $row2;
					}
				}
				$i = 0;
				foreach( $menu_datas as $row ){
					if( empty($row) ) continue; 
				?>
				<li class="gnb_1dli" style="z-index:<?php echo $gnb_zindex--; ?>">
					<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?><u></u></a>
					<?php
					$k = 0;
					foreach( (array) $row['sub'] as $row2 ){
						if( empty($row2) ) continue; 
						if($k == 0)
							echo '<span class="bg">하위분류</span><ul class="gnb_2dul">'.PHP_EOL;
					?>
						<li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
					<?php
						$k++;
					}   //end foreach $row2
					
					if($k > 0)
						echo '</ul>'.PHP_EOL;
					?>
				</li>
				<?php
						$i++;
				}   //end foreach $row
				if ($i == 0) {  ?>
				<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
				<?php } ?>
            </ul>
        </div>
		<p class="clb"></p>
    </nav>
</div>
<aside id="topSpacer"><?php /* !!지우지마세요 : 상단메뉴 고정 시 사용됩니다. */?></aside>
<!-- } 상단 끝 -->
<hr>
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