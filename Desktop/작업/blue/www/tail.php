<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>



	<?php if (!defined("_INDEX_")) {  //인덱스에서 사용하지 않음?>
	</div>
	<!-- container 끝 -->
	<div class="btn_estimate">
		<center>
			<a href="/bbs/write.php?bo_table=estimate#"><img src="../img/btn_proposal.png"></a>
		</center>
	</div><!-- // #container 닫음 -->
	<?php }  //인덱스에서 사용하지 않음?>
	<aside id="sideBar">
		<h2 class="sound_only">사이트 전체메뉴</h2>
		<!-- SNB // -->
		<?php /* 주의사항 아래 코드를 수정하시면 페이지 현재위치 및 서브메뉴,모바일메뉴가 정상작동되지 않을 수 있습니다. */ ?>
		<ul id="snb">
			<!-- <li class="snbHome"><h2><a href="<?php echo G5_URL ?>"><b>HOME</b></a></h2></li> -->
			<?php
			$sql = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '2' order by me_order, me_id ";
			$result = sql_query($sql, false);
			
			for ($i=0; $row=sql_fetch_array($result); $i++) {
				$gnbM = explode("?",$row[me_link]);
				$gnbM_kind_id = explode("=",$gnbM[1]);
				$gnbM_kind = $gnbM_kind_id[0];
				$gnbM_idA = $gnbM_kind_id[1];
				$gnbM_lt = explode("&",$gnbM_idA);
				$gnbM_id = $gnbM_lt[0];
				$gnbM_idL = $gnbM_kind_id[2];
			?>
			<li class="snb <?php echo $gnbM_kind; ?><?php echo $gnbM_id; ?><?php echo $gnbM_idL; ?>
			<?php
			$sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id ";
			$result2 = sql_query($sql2);
			for ($k=0; $row2=sql_fetch_array($result2); $k++) {
				$gnbM2 = explode("?",$row2[me_link]);
				$gnbM_kind_id2 = explode("=",$gnbM2[1]);
				$gnbM_kind2 = $gnbM_kind_id2[0];
				$gnbM_idA2 = $gnbM_kind_id2[1];
				$gnbM_lt2 = explode("&",$gnbM_idA2);
				$gnbM_id2 = $gnbM_lt2[0];
				$gnbM_idL2 = $gnbM_kind_id2[2];
				if($k == 0)  echo ' ';
				echo $gnbM_kind2;
				echo $gnbM_id2;
				echo $gnbM_idL2;
				echo ' ';
				}
			?>">
				<h2><a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><b><?php echo $row['me_name'] ?></b> <sub><?php echo $_SERVER['HTTP_HOST']; ?></sub></a></h2>
				<?php 
				$sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id ";
				$result2 = sql_query($sql2);
				
				for ($k=0; $row2=sql_fetch_array($result2); $k++) {
					$gnbM2 = explode("?",$row2[me_link]);
					$gnbM_kind_id2 = explode("=",$gnbM2[1]);
					$gnbM_kind2 = $gnbM_kind_id2[0];
					$gnbM_idA2 = $gnbM_kind_id2[1];
					$gnbM_lt2 = explode("&",$gnbM_idA2);
					$gnbM_id2 = $gnbM_lt2[0];
					$gnbM_idL2 = $gnbM_kind_id2[2];
					if($k == 0) echo '<em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul">';
				?>
				<li class="snb2d snb2d_<?php echo $gnbM_kind2; ?><?php echo $gnbM_id2; ?><?php echo $gnbM_idL2; ?>">
					<a href="<?php echo $cube_link ; ?><?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" ><b><i class="fa fa-angle-right"></i> <?php echo $row2['me_name'] ?></b></a>
				</li>
				<?php } if($k > 0) echo '</ul>'; ?>
			</li>
			<?php } ?>
			<li class="snb noInfoPageTit"></li>
		</ul>
		<!-- // SNB -->
	</aside>
	<aside class="clb"></aside>
</div><!-- // #ctWrap 닫음 -->
<!-- } 콘텐츠 끝 -->
<hr>
<!-- 하단 시작 { -->
<footer id="footer">
	<dl>
		<dt><img src="<?php echo G5_IMG_URL; ?>/footerLogo.png" alt="<?php echo $config['cf_title'] ?>"></dt>
		<dd>
			<a href="#" data-featherlight="<?php echo G5_URL ?>/privacy.php .term_area" data-featherlight="iframe">개인정보처리방침</a>
			<!--a href="#" data-featherlight="<?php echo G5_URL ?>/term.php .term_area" data-featherlight-type="ajax">이용약관</a-->
			<a href="#" data-featherlight="<?php echo G5_URL ?>/noEmail.php .term_area" data-featherlight-type="ajax">이메일주소 무단수집거부</a>
		</dd>
	</dl>
	<address>
		대표 : 이창윤 / 사업자등록번호 : 627-86-00153 /	서울 금천구 가산디지털1로 19 대륭테크노타운18차 610호<br>
		Tel.02-6951-1288 / Fax.02-2629-4655 / E-mail.blueocean3@blueocean-ad.co.kr
	</address>
	<p><span>Copyright</span> &copy; <b><?php echo $_SERVER['HTTP_HOST']; ?></b> <span>All rights reserved.</span></p>
</footer>
<button type="button" id="top_btn" class="fa fa-arrow-up" aria-hidden="true"><span class="sound_only">페이지 상단으로 이동</span></button>

<?php if (!defined("_INDEX_")) {  /*인덱스에서 사용하지 않음*/ ?>
<!-- 현재위치 및 서브메뉴 활성화 설정// -->
<?php /* 주의사항 아래 코드를 수정하시면 페이지 현재위치 및 서브메뉴,모바일메뉴가 정상작동되지 않을 수 있습니다. */ ?>
<script>
<?php if ($co_id){ ?>$(function(){$('.snb.co_id<?php echo $co_id;?>, .snb .snb2d_co_id<?php echo $co_id;?>').addClass('active');});/*  컨텐츠관리 : co_id<?php echo $co_id;?>  */<?php } else { if ($bo_table){ ?>$(function(){$('.snb.bo_table<?php echo $bo_table;?>, .snb .snb2d_bo_table<?php echo $bo_table;?>').addClass('active');});/*  보테이블 : bo_table<?php echo $bo_table;?>  */<?php } else { ?>$(function(){$('.snb.gr_id<?php echo $gr_id;?>, .snb .snb2d_gr_id<?php echo $gr_id;?>').addClass('active');});/*  그룹아이디 : gr_id<?php echo $gr_id;?>  */<?php } } ?>

<?php if ($co_id || $bo_table || $gr_id){ ?>$(document).ready(function(){ if ( $("#snb > li").is(".snb.active") ) { $('.loc1D').text( $('<?php if ($co_id){ ?>#snb .co_id<?php echo $co_id;?> h2 a b<?php } else { if ($bo_table){ ?>#snb .bo_table<?php echo $bo_table;?> h2 a b<?php } else if ($gr_id) { ?>#snb .gr_id<?php echo $gr_id;?> h2 a b<?php } } ?>').text());$('.loc2D').html( $('<?php if ($co_id){ ?>.snb2d_co_id<?php echo $co_id;?> a b<?php } else { if ($bo_table){ ?>.snb2d_bo_table<?php echo $bo_table;?> a b<?php } else { ?>.snb2d_gr_id<?php echo $gr_id;?> a b<?php } } ?>').html());$('.faArr').html('<i class="fa fa-angle-right"></i>');var index = $("#snb > li").index("#snb > li.active");<?php if ($menuNum){ ?>$( "#page_title" ).addClass("subTopBg_0<?php echo $menuNum ?>");<?php } else { ?>$( "#page_title" ).addClass("subTopBg_0"+($("<?php if ($co_id){ ?>#snb > li.co_id<?php echo $co_id ?><?php } else { if ($bo_table){ ?>#snb > li.bo_table<?php echo $bo_table ?><?php } else { ?>#snb > li.gr_id<?php echo $gr_id ?><?php } } ?>").index() + 1) );<?php } ?> } else { $('.loc1D').text('<?php echo get_head_title($g5[title]); ?>'); $('.noInfoPageTit').html('<h2><a><b><?php echo get_head_title($g5[title]); ?></b><sub><?php echo $_SERVER["HTTP_HOST"]; ?></sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); } });  <?php } else { ?> $(document).ready(function(){ $('.loc1D').text('<?php echo get_head_title($g5[title]); ?>'); $('.noInfoPageTit').html('<h2><a><b><?php echo get_head_title($g5[title]); ?></b><sub><?php echo $_SERVER["HTTP_HOST"]; ?></sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); });<?php } ?>
</script>
<!-- //현재위치 및 서브메뉴 활성화 설정 -->
<?php } ?>
<script>$(function() { /* 모바일용 메뉴바 */ var articleMgnb = $("#snb li.snb"); articleMgnb.addClass("hide"); $("#snb li.active").removeClass("hide").addClass("show"); $("#snb li.active .snb2dul").show(); $(".snb2dDown").click(function(){ var myArticle = $(this).parents("#snb li.snb"); if(myArticle.hasClass("hide")){ articleMgnb.addClass("hide").removeClass("show"); articleMgnb.find(".snb2dul").slideUp("fast"); myArticle.removeClass("hide").addClass("show"); myArticle.find(".snb2dul").slideDown("fast"); } else { myArticle.removeClass("show").addClass("hide");myArticle.find(".snb2dul").slideUp("fast"); } }); });</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<!-- Enliple Common Tracker v3.6 [공용] start -->
<script type="text/javascript">
<!--
function mobRf() {
    var rf = new EN();
    rf.setData("userid", "blueocean01");
    rf.setSSL(true);
    rf.sendRf();
}
//-->
</script>
<script src="https://cdn.megadata.co.kr/js/en_script/3.6/enliple_min3.6.js" defer="defer" onload="mobRf()"></script>
<!-- Enliple Common Tracker v3.6 [공용] end -->

<?php
include_once(G5_PATH."/tail.sub.php");
?>