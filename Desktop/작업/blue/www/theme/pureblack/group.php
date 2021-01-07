<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$g5['title'] = $group['gr_subject'];
include_once(G5_THEME_PATH.'/head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<div class="latest_wr">

<!-- 그룹 포함게시판 바로가기// -->
<div class="groupBBtnWR">
<?php
//  최신글
$sqlBtn = " select bo_table, bo_subject
            from {$g5['board_table']}
            where gr_id = '{$gr_id}'
              and bo_list_level <= '{$member['mb_level']}'
              and bo_device <> 'mobile' ";
$sqlBtn .= " order by bo_order ";
$result = sql_query($sqlBtn);
for ($i=0; $row=sql_fetch_array($result); $i++) {
	echo latest('theme/groupbtn', $row['bo_table'], 1, 1);/* 그룹에 포함된 게시판 바로가기 버튼 */ 
} ?>
</div>
<!-- // 그룹 포함게시판 바로가기 -->

<!-- 그룹 최신글 시작 -->
<?php 

$sql = " select bo_table, bo_subject, bo_skin
            from {$g5['board_table']}
            where gr_id = '{$gr_id}'
              and bo_list_level <= '{$member['mb_level']}'
              and bo_device <> 'mobile' ";
$sql .= " order by bo_order ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++) { ?>
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(theme/스킨, 게시판아이디, 출력라인, 글자수);
	// 본 그룹 최신글은 각 게시판에 적용된 게시판 스킨을 기준으로 하여 해당 최신글 스킨이 적용됩니다.
	// 테마에 포함되지 않은 스킨일 경우에는 기본 최신글 스킨이 적용됩니다.
	if ($row['bo_skin'] =='theme/gallery'){
		echo latest('theme/gallery', $row['bo_table'], 6, 25);/* 갤러리 최신글스킨 출력 */
	} else if ($row['bo_skin'] =='theme/gallery_box'){
		echo latest('theme/gallery_box', $row['bo_table'], 6, 25);/* 갤러리박스형 최신글스킨 출력 */
	} else if ($row['bo_skin'] =='theme/qna'){
		echo latest('theme/qna', $row['bo_table'], 6, 25);/* Q&A 최신글스킨 출력 */
	} else if ($row['bo_skin'] =='theme/webzine'){
		echo latest('theme/webzine', $row['bo_table'], 6, 25);/* 웹진 최신글스킨 출력 */
	} else if ($row['bo_skin'] =='theme/product'){
		echo latest('theme/product', $row['bo_table'], 6, 25);/* 제품속 최신글스킨 출력 */
	} else {
		echo latest('theme/basic', $row['bo_table'], 6, 25);/* 기본 최신글스킨 출력 */
	}
    ?>
<?php
}
?>
<?php if ($i == 0) {?><p class="noDataArea"><b>No table</b>  <strong><?php echo $group['gr_subject'];?></strong> 그룹에 등록된 게시판이 없습니다.</p><?php } ?>
<!-- 그룹 최신글 끝 -->
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
