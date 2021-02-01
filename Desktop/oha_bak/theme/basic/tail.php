<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

</div>
<div id="aside">
    <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
</div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">COMPANY</a>
            <a href="<?php echo get_pretty_url('content', 'privacyprovision'); ?>">AGREEMENT</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">PRIVACT POLICY</a>
            <!-- <a href="<?php echo get_device_change_url(); ?>">모바일버전</a> -->
        </div>
        <p class="ft_tel">1588-0000</p>
        <p class="ft_work">MON - FRI : 10:00 ~ 18:00 / LUNCH : 12:30 ~ 13:30 / SAT,SUN,HOLY OFF</p>
        <p class="ft_info">
            회사명 : <span>(주) 오하바이오텍</span> 대표자 : <span>송순근</span> 개인정보보호책임자 : <span>송순근</span><br>
            주소 : <span>(08588) 서울특별시 금천구 가산디지털2로 53, 한라시그마밸리 1303호</span>  전화번호 :  <span>02-830-5670</span> 이메일 : <span>ohabiotech@gmail.com</span><br>
            사업자 등록번호 : <span>임시번호</span> 통신판매업신고번호 : <span>임시번호</span><br><br><br>
            
            오하바이오텍에서 제공하는 모든컨텐츠는 저작권법에 보호받는 저작물로서<br>
            무단으로 복제, 배포하는 경우에는 저작권법에 의하여 처벌을 받을 수 있습니다.
        </p>

    </div>
    <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
    <div id="ft_copy">Copyright &copy; <b> backyak99mask.co.kr</b> All rights reserved.</div>


    <button type="button" id="top_btn">
        <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
        $(function () {
            $("#top_btn").on("click", function () {
                $("html, body").animate({
                    scrollTop: 0
                }, '500');
                return false;
            });
        });
    </script>
</div>

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
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie(
            "ck_font_resize_add_class"));
    });
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");