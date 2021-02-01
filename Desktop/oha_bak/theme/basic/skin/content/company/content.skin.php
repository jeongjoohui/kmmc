<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con" class="comp_bn">
        <?/*php echo $str;*/ ?>
        <img src="<?php echo G5_IMG_URL ?>/company_bn.jpg" alt="main_banner">
    </div>
    <div class="comp_cont">
        <h2>
            <img src="<?php echo G5_IMG_URL ?>/subpage_logo.png" alt="sublogo">
        </h2>
        <h3>방문해주셔서 감사합니다. <strong>주식회사 오하바이오텍입니다.</strong></h3>
        <p>안녕하세요 저희 홈페이지를 방문해주셔서 감사합니다.<br>
            우리들의 건강과 환경을 지켜나가고 개선할 수 있는 방법에 대해 항상 고민합니다.<br>
            우리는 수명유지에 없어서는 안되는 소금을 당사의 기술력으로 연구를 꾸준히 해왔으며<br>
            현재는 마스크필터에 적용한 (KIFA 등 공인인증 시험기관)<br>
            각종바이러스 99% 이상 사멸되는시험성적(특허기술)을 얻었으며 <br>
            고효율 항균 마스크용 필터를 개발했습니다.<br><br><br>

            저희는 기술, 디자인, 생산에 대해 항상 고민합니다.<br>
            기술에 대한 연구를 토대로 자체 생산설비라인을 도입하였고 앞으로도 꾸준히 성장할 것이며<br>
            여러분들에게 새로운 제품과 기술로 보답 드리겠습니다.</p>

            <p class="signatue">대표이사&nbsp;&nbsp;<strong>송 &nbsp;순&nbsp; 근</strong></p>
    </div>
    <span class="ver_line"></span>

</article>