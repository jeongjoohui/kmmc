<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
//include_once(G5_PATH.'/_tail.php');
?>

	</div>
	<!-- container 끝 -->
	<div class="btn_estimate">
		<center>
			<a href="/bbs/write.php?bo_table=estimate#"><img src="../img/btn_proposal.png"></a>
		</center>
	</div><!-- // #container 닫음 -->
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

<?php include_once(G5_PATH.'/tail.sub.php'); ?>