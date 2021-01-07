<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 글 등록시 문구 변경 및 이동경로 목록으로 변경한다.
// 관리자는 변경하지 않는다.
if (!$is_admin) {// 관리자는 그냥 패쓰
	if ($w == '' || $w == 'w') {// 글 작성에 대해서만 작동되게 한다.
		alert("문의가 성공적으로 접수되었습니다.\\n빠른시간내에 연락드리겠습니다. 감사합니다.", G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.$qstr);
	}
}
?>
