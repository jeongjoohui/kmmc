<?php
include_once('./_common.php');

if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');



?>

<!-- section1 -->
<section id="main_banner">
    <div id="main_video">

    </div>
    <img src="<?php echo G5_IMG_URL ?>/main_banner.png" alt="">
    <div class="main_txt">
        <h2>OHA BIOTECH</h2>
        <h3>오하이이오텍은<br>숨쉬기편하고 안전한 마스크만을<br>생산합니다.</h3>

        <!-- <button class="main_btn">자세히보기 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></button> -->
    </div>
</section>
<!-- section2 -->
<section id="section2" class="clearfix">
    <span class="ver_line"></span>
    <h2 class="title"><a href="<?php echo get_pretty_url('content', 'company');  ?>">OHA BIOTECH STORY</a></h2>
    <h3 class="sub_title">오하바이오텍을 소개합니다.</h3>
    <a href="<?php echo get_pretty_url('content', 'company');  ?>" class="more_btn">VIEW MORE +</a>
    <ul class="pic_li_cont">
        <li class="cont1"><img src="<?php echo G5_IMG_URL ?>/company_thum.jpg" alt="">
            <h4>오하바이오텍이란?</h4>
            <p>오하바이오텍은...</p>
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">
                <div class="img_hover1" style="display:none;">
                    MORE VEIW +</div>
            </a>
        </li>
        <li class="cont2">
            <img src="<?php echo G5_IMG_URL ?>/tech_thum.jpg" alt="">
            <h4>기술소개</h4>
            <p>오하바이오텍은 기술</p>
            <a href="<?php echo get_pretty_url('content', 'technology'); ?>">
                <div class="img_hover2" style="display:none;">MORE VEIW + </div>
            </a>
        </li>
        <li class="cont3">
            <img src="<?php echo G5_IMG_URL ?>/news_thum.jpg" alt="">
                <h4>언론보도</h4>
                <p>오하바이오텍 언론보도</p>
                <a href=""><div class="img_hover3" style="display:none;">MORE VEIW + </div></a>
        </li>
    </ul>
</section>
<!-- section3 -->
<section id="section3" class="clearfix">
    <h2 class="title"><a href="<?php echo get_pretty_url($bo_table); ?>">NEW AVRRIVAL</a></h2>
    <h3 class="sub_title">오하바이오텍에서 새롭게 출시된 신상품을 소개합니다.
    </h3>
    <!-- swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product1'); ?>"><img src="<?php echo G5_IMG_URL ?>/3d_w.jpg" alt="kf94_3d"></a></div>
            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product1'); ?>"><img src="<?php echo G5_IMG_URL ?>/3d_b.jpg" alt="kf94_3d"></a></div>

            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product2'); ?>"><img src="<?php echo G5_IMG_URL ?>/2d_w.jpg" alt="kf94_2d"></a></div>

            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product2'); ?>"><img src="<?php echo G5_IMG_URL ?>/2d_b.jpg" alt="kf94_2d"></a></div>

            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product3'); ?>"><img src="<?php echo G5_IMG_URL ?>/den_w.jpg" alt="dental"></a></div>

            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product3'); ?>"><img src="<?php echo G5_IMG_URL ?>/den_b.jpg" alt="dental"></a></div>

            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product1'); ?>"><img src="<?php echo G5_IMG_URL ?>/2dc_w.jpg" alt="kf94_3d_kids"></a></div>
            <div class="swiper-slide"><a href="<?php echo get_pretty_url('content', 'product1'); ?>"><img src="<?php echo G5_IMG_URL ?>/2dc_b.jpg" alt="kf94_3d_kids"></a></div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- section4 -->
<section id="section4" class="clearfix">
    <img src="<?php echo G5_IMG_URL ?>/section4_banner.jpg" alt="">
</section>
<!-- section5 -->
<section id="section5" class="clearfix">
    <h2 class="title"><a href="<?php echo get_pretty_url('content', 'company');  ?>">CONTACT US</a></h2>
    <h3 class="sub_title">궁금한 사항이나 기타 문의사항이 있으신 경우 언제든 연락 부탁드립니다.</h3>
    <div class="contact_us clearfix">
        <div class="cont_lf">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.482663924989!2d126.87886161564623!3d37.47293493724003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b61e5708cf261%3A0xc9b3d8e99b0684f3!2zKOyjvCnsmKTtlZjrsJTsnbTsmKTthY0!5e0!3m2!1sko!2skr!4v1610514401301!5m2!1sko!2skr"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="cont_rt">
            <h3>OHA BIOTECH</h3>
            <ul class="list_tit">
                <li>COMPANY</li>
                <li>OWNER</li>
                <li>TEL</li>
                <li>E-MAIL</li>
                <li>ADDRESS</li>
            </ul>
            <ul class="list_cont">
                <li>(주) 오하바이오텍</li>
                <li>송순근</li>
                <li>02-830-5758</li>
                <li>ohabiotech@gmail.com</li>
                <li>(08588) 서울시 금천구 가산디지털2로 53, 한라시그마밸리 1303호</li>
            </ul>
        </div>
    </div>

    <!--<div class="hidden-xs main-speedform"  >-->
    <div class="main-speedform">
        <form name="fwrite" method="post" onSubmit="return submitChk(this)" ;>
            <input type=hidden name="sca" value="" />
            <fieldset>
                <ul>
                    <li><label for="wr_1"></label><input type="text" id="wr_1" name="wr_1" placeholder="업체명" title="업체명"
                            maxlength="30" required /></li>

                    <li><label for="wr_name"></label><input type="text" id="wr_name" name="wr_name" placeholder="이름"
                            title="성함" maxlength="30" required /></li>

                    <li><label for="wr_email"></label><input type="text" id="wr_email" name="wr_email" placeholder="이메일"
                            title="이메일" maxlength="30" required /></li>

                    <li><label for="wr_3"></label><input type="text" id="wr_3" name="wr_3" placeholder="연락처" title="연락처"
                            maxlength="30" required /></li>

                </ul>
                <p class="tex_area"><label for="wr_content"></label><textarea name="wr_content" id="wr_content_id"
                        placeholder="의뢰내용" title="의뢰내용"></textarea></p>
                <p class="checkbox"><input type="checkbox" name="chk" id="check" required /> <label
                        for="check">개인정보보호정책에 동의합니다.</label></p>
            </fieldset>
            <p class="btn-area">
                <input type="submit" value="문 의 하 기" id="postBtn" accesskey="s" class="btn_consul">

            </p>
        </form>
    </div><!-- class="main-speedform" -->
    <span class="ver_line"></span>
</section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>