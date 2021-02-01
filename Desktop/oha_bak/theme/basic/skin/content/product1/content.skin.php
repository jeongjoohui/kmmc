<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>
<nav id="gnb">
    <h2>메인메뉴</h2>
    <div class="gnb_wrap">
        <ul id="gnb_1dul">

            <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>
            <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"
                    class="gnb_1da"><?php echo $row['me_name'] ?></a>
                <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
            <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"
                    class="gnb_2da"><?php echo $row2['me_name'] ?></a>
            </li>
            <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
            </li>
            <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
            <!-- <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a
                        href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수
                    있습니다.<?php } ?></li> -->
            <?php } ?>
        </ul>
        <div id="gnb_all">
            <h2>전체메뉴</h2>
            <ul class="gnb_al_ul">
                <?php
                    
                    $i = 0;
                    foreach( $menu_datas as $row ){
                    ?>
                <li class="gnb_al_li">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"
                        class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                    <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){
                            if($k == 0)
                                echo '<ul>'.PHP_EOL;
                        ?>
                <li><a href="<?php echo $row2['me_link']; ?>"
                        target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
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
                <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a
                        href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수
                    있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
            <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <div id="gnb_all_bg"></div>
    </div>
</nav>


<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con" class="producut_bn">
        <?/*php echo $str;*/ ?>
        <img src="<?php echo G5_IMG_URL ?>/kf94_3d.jpg" alt="main_banner">
    </div>
    <span class="ver_line"></span>

</article>