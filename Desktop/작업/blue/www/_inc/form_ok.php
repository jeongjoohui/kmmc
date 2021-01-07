<?php
include_once('./_common.php');

$bo_table = "consult";

$write_table = "";
if ($bo_table) {
    $board = sql_fetch(" select * from {$g5['board_table']} where bo_table = '$bo_table' ");
    if ($board['bo_table']) {
        set_cookie("ck_bo_table", $board['bo_table'], 86400 * 1);
        $gr_id = $board['gr_id'];
        $write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름
        //$comment_table = $g5['write_prefix'] . $bo_table . $g5['comment_suffix']; // 코멘트 테이블 전체이름
        if (isset($wr_id) && $wr_id)
            $write = sql_fetch(" select * from $write_table where wr_id = '$wr_id' ");
    }
}

$msg = array();

$ca_name = '';
$wr_reply = "";
$wr_subject = "문의합니다.";
$secret = "secret";

$wr_content = '';
if (isset($_POST['wr_content'])) {
    $wr_content = substr(trim($_POST['wr_content']),0,65536);
    $wr_content = preg_replace("#[\\\]+$#", "", $wr_content);
}
if ($wr_content == '') {
    $msg[] = '<strong>내용</strong>을 입력하세요.';
}

$msg = implode('<br>', $msg);
if ($msg) {
    alert($msg);
}

// 090710
if (substr_count($wr_content, '&#') > 50) {
    alert('내용에 올바르지 않은 코드가 다수 포함되어 있습니다.');
    exit;
}

$upload_max_filesize = ini_get('upload_max_filesize');

if (empty($_POST)) {
    alert("파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size=".ini_get('post_max_size')." , upload_max_filesize=".$upload_max_filesize."\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.");
}

$wr_num = get_next_num($write_table);


    $sql = " insert into $write_table
                set wr_num = '$wr_num',
                     wr_reply = '$wr_reply',
                     wr_comment = 0,
                     ca_name = '$ca_name',
                     wr_option = '$html,$secret,$mail',
                     wr_subject = '$wr_subject',
                     wr_content = '$wr_content',
                     wr_link1 = '$wr_link1',
                     wr_link2 = '$wr_link2',
                     wr_link1_hit = 0,
                     wr_link2_hit = 0,
                     wr_hit = 0,
                     wr_good = 0,
                     wr_nogood = 0,
                     mb_id = '{$member['mb_id']}',
                     wr_password = '$wr_password',
                     wr_name = '$wr_name',
                     wr_email = '$wr_email',
                     wr_homepage = '$wr_homepage',
                     wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_ip = '{$_SERVER['REMOTE_ADDR']}',
                     wr_1 = '$wr_1',
                     wr_2 = '$wr_2',
                     wr_3 = '$wr_3',
                     wr_4 = '$wr_4',
                     wr_5 = '$wr_5',
                     wr_6 = '$wr_6',
                     wr_7 = '$wr_7',
                     wr_8 = '$wr_8',
                     wr_9 = '$wr_9',
                     wr_10 = '$wr_10' ";
    sql_query($sql);

$wr_id = sql_insert_id();

// 부모 아이디에 UPDATE
sql_query(" update $write_table set wr_parent = '$wr_id' where wr_id = '$wr_id' ");

// 새글 INSERT
sql_query(" insert into $g5[board_new_table] ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '$bo_table', '$wr_id', '$wr_id', '$g4[time_ymdhis]', '$member[mb_id]' ) ");

// 게시글 1 증가
sql_query("update $g5[board_table] set bo_count_write = bo_count_write + 1 where bo_table = '$bo_table'");


// 메일발송 사용 (수정글은 발송하지 않음)
if (!($w == 'u' || $w == 'cu') && $config['cf_email_use'] && $board['bo_use_email']) {

    //$wr_email = 'consult@blueocean-ad.co.kr'; 21.01.07 수정
    $wr_email = 'koreammc@koreammc.com';

	// 관리자의 정보를 얻고
	$super_admin = get_admin('super');
	$group_admin = get_admin('group');
	$board_admin = get_admin('board');
	//$wr_subject = get_text(stripslashes($wr_subject));

	/*
	$tmp_html = 0;
    if (strstr($html, 'html1'))
        $tmp_html = 1;
    else if (strstr($html, 'html2'))
        $tmp_html = 2;
	*/
	$tmp_html = 2;

    $wr_content = conv_content(conv_unescape_nl(stripslashes($wr_content)), $tmp_html);

    $warr = array( ''=>'입력', 'u'=>'수정', 'r'=>'답변', 'c'=>'코멘트', 'cu'=>'코멘트 수정' );
    $str = $warr[$w];

    $subject = '['.$config['cf_title'].'] '.$board['bo_subject'].' 게시판에 '.$str.'글이 올라왔습니다.';

    $link_url = G5_BBS_URL.'/board.php?bo_table='.$bo_table.'&amp;wr_id='.$wr_id;

    include_once(G5_LIB_PATH.'/mailer.lib.php');
	
	ob_start();
    include_once ("./consult_mail.php");
    $content = ob_get_contents();
    ob_end_clean();

    $array_email = array();
    // 게시판관리자에게 보내는 메일
    if ($config['cf_email_wr_board_admin']) $array_email[] = $board_admin['mb_email'];
    // 게시판그룹관리자에게 보내는 메일
    if ($config['cf_email_wr_group_admin']) $array_email[] = $group_admin['mb_email'];
    // 최고관리자에게 보내는 메일
   if ($config['cf_email_wr_super_admin']) $array_email[] = $super_admin['mb_email'];
	
    // 2/6추가 된 부분
    //$array_email[] = 'blueocean3@bizmeka.com'; 21.01.07 수정
    $array_email[] = 'koreammc@koreammc.com';

	// 중복된 메일 주소는 제거
	$unique_email = array_unique($array_email);
	$unique_email = array_values($unique_email);
	for ($i=0; $i<count($unique_email); $i++) {
		mailer($wr_name, $wr_email, $unique_email[$i], $subject, $content, 1);
	}


}
/*
if (G5_IS_MOBILE) {
	alert("문의가 성공적으로 접수되었습니다.\\n\\n빠른시간내에 연락드리겠습니다. 감사합니다.",G5_MOBILE_URL);
} else {
	alert("문의가 성공적으로 접수되었습니다.\\n\\n빠른시간내에 연락드리겠습니다. 감사합니다.",G5_URL);
}
*/

echo '
<!-- Enliple Tracker v3.6 [결제전환] start -->
<script src="https://cdn.megadata.co.kr/js/en_script/3.6/enliple_min3.6.js"></script>
<script type="text/javascript">
    var cn = new EN();
    cn.setData("uid", "blueocean01");
    cn.setData("ordcode", "");
    cn.setData("qty", "1");
    cn.setData("price", "1");
    cn.setData("pnm", encodeURIComponent(encodeURIComponent("counsel")));
    cn.setSSL(true);
    cn.sendConv();
</script>
<!-- Enliple Tracker v3.6 [결제전환] end -->
';

alert("문의가 성공적으로 접수되었습니다.\\n\\n빠른시간내에 연락드리겠습니다. 감사합니다.",G5_URL);
?>