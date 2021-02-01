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
        <img src="<?php echo G5_IMG_URL ?>/tech_bn.jpg" alt="main_banner">
    </div>
    <div class="tech_cont">
        <img src="<?php echo G5_IMG_URL ?>/tech_cont.jpg" alt="tech_content">
    </div>

    <span class="ver_line"></span>

</article>