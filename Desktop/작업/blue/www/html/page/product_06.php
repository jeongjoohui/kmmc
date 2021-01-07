<?php
include_once("./_common.php"); // 메뉴별 공통 변수, 상수, 코드, 라이브러리

$me_code = "10";

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/product_01.php');
    return;
}

include_once("./_head.php");	// 메뉴별 상단 정의
?>

		<!-- sub_content S -->
<!-- 메인화면 최신글 시작 -->
<!-- 숨김 임시로 기존 블루 이미지 삽입
<div class="contents">
   <div class="product">
       <h1>SNS <strong>마케팅</strong></h1><br>
       <dl>
           <dd>브랜드 블로그는 광고주가 주체가 되어 <span>[브랜드 공식 블로그를 운영]</span>하는 것을 말합니다. <br>
           이를 통해 소비자들과 쌍방향으로 소통을 하게 되고 <strong>브랜드 이미지 제고에 긍정적인 효과</strong>를 이끌어 낼 수 있는 마케팅 수단입니다.<br>
           자신의 브랜드를 브랜드 블로그를 통해 홍보하고 이미지 구축은 물론, <br>소비자들과의 소통을 통해 긍정적인 효과를 이끌어 낼 수 있는 마케팅 수단입니다.</dd>
       </dl>       
    </div> <!--product-->    
<!--</div>--> <!--contents--> 
<!-- 메인화면 최신글 끝 -->


    <center>
        <img src="/blue/images/facebook.jpg">
        <img src="/blue/images/insta.jpg">
        <img src="/blue/images/kakao.jpg">
        <img src="/blue/images/etc.jpg">
    </center>
		<!-- //sub_content E -->

<?php
include_once("./_tail.php");	// 메뉴별 하단 정의
?>