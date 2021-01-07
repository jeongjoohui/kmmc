<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 13;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

$qstr2 .="&sca=$sca"; // 중복 정렬

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <ul id="bo_cate_ul">
     <table width="100%">
  <tr>
    <td>
<form name="fsearch" method="get">
 		<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table?>"><img src="<?php echo $board_skin_url ?>/img/btn_all.png" border="0"></a> 
   		<i class="fa fa-search" aria-hidden="true"></i> 
   		<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    	<input type="hidden" name="sca" value="<?php echo $sca ?>">
        <select name="sfl" style="height:20px;">
            <option value="wr_subject">거 래 처</option>
            <option value="wr_content">상세내용</option>
            <option value="wr_1">거래일자</option>
            <option value="wr_2">거래내용</option>
            <option value="wr_5">결제날짜</option>
            <option value="wr_8">비고</option>
    		<option value="wr_9">검색년도</option>
        	<option value="wr_10">검색년월</option>
			<option value="ca_name||wr_10">분류 년 월</option>
        </select>
        <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" style="height:20px" size="15" maxlength="20">
    <input type=image src="<?php echo $board_skin_url ?>/img/btn_search.png" border="0" align="absmiddle">
    </form>
	<? // JSY ADD END ?></td>
    <td style="text-align:right"><a href="#" onClick="javascript:window.open('<?php echo $board_skin_url ?>/no_ok.php?bo_table=<?php echo $bo_table?>','pop','width=800,height=768,left=0,top=0,scrollbars=yes,resizable=yes,toolbar=no,menubar=no,location=no,location=no,status=no')" onFocus=blur()><img src="<?php echo $board_skin_url ?>/img/btn_left.png" border="0"></a>
		&nbsp;
		<a href="#" onClick="javascript:window.open('<?php echo $board_skin_url ?>/fr_and_to_date.php?bo_table=<?php echo $bo_table?>','pop','width=800,height=768,left=0,top=0,scrollbars=yes,resizable=yes,toolbar=no,menubar=no,location=no,location=no,status=no')" onFocus=blur()><img src="<?php echo $board_skin_url ?>/img/btn_right.png" border="0"></a>
        </td>
  </tr>
</table>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <th scope="col">
                <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
            </th>
            <?php } ?>
            <th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2)?>번호</th>
            <th scope="col">분류</th>
	<?// bbs/list.php 에서 |wr_1 추가 할 것 (wr_datetime|wr_hit|wr_good|wr_nogood|wr_1) ?>
            <th scope="col"><?php echo subject_sort_link('wr_1', $qstr2,1)?>회계날짜</th>
            <th scope="col">거래내용</th>
            <th scope="col">거래처</th>
            <th scope="col"><font color="blue">수입금액</font></th>
            <th scope="col"><font color="blue">부가세액</font></th>
            <th scope="col"><font color="blue">수입합계</font></th>
            <th scope="col"><font color="red">비용금액</font></th>
            <th scope="col"><font color="red">부가세액</font></th>
            <th scope="col"><font color="red">비용합계</font></th>
            <th scope="col">결제날짜</th>
            <th scope="col">비고</th>
            <?php if ($is_good) { ?><th scope="col"><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천 <i class="fa fa-sort" aria-hidden="true"></i></a></th><?php } ?>
            <?php if ($is_nogood) { ?><th scope="col"><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천 <i class="fa fa-sort" aria-hidden="true"></i></a></th><?php } ?>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
        	$bg = $i%2 ? 0 : 1;
         ?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> onMouseOver="this.style.backgroundColor='whitesmoke';" onMouseOut="this.style.backgroundColor='#ffffff';">
            <?php if ($is_checkbox) { ?>
            <td class="td_chk" style="padding-left:5px;">
                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
            </td>
            <?php } ?>
            
            <td class="td_num2">
            <?php
            if ($list[$i]['is_notice']) // 공지사항
                echo '<strong class="notice_icon"><i class="fa fa-bullhorn" aria-hidden="true"></i><span class="sound_only">공지</span></strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">열람중</span>";
            else
                echo $list[$i]['num'];
             ?>
            </td>

             <td class="td_w36"><?php if ($is_category && $list[$i]['ca_name']) { ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?></td>
            
            <td class="td_w60" onclick=location.href="<?php echo $list[$i]['href'] ?>"><font color="green"><?php echo date("ymd", strtotime($list[$i]['wr_1']))?></font></td>
            
            <td class="td_w130" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['wr_2']?></td>
            
            <td class="td_w" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px" onclick=location.href="<?php echo $list[$i]['href'] ?>">

                        <?php echo $list[$i]['icon_reply'] ?>
                        <?php
                            if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                         ?>
                        <?php echo $list[$i]['subject'] ?>
                       
                    <?php
                    if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                    if (isset($list[$i]['icon_new'])) echo rtrim($list[$i]['icon_new']);
                    ?>

            </td>
            <?php if ($list[$i][ca_name] == "매출") { ?>
            <td class="td_num_blue_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'])?></td>
            <td class="td_num_blue_v" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_4'])?></td>
            <td class="td_num_blue_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'] + $list[$i]['wr_4'])?></td>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_v" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
			<?php } ?>

            <?php if ($list[$i][ca_name] == "매입") { ?>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_v" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_red_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'])?></td>
            <td class="td_num_red_v" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_4'])?></td>
            <td class="td_num_red_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'] + $list[$i]['wr_4'])?></td>
            <?php } ?>
            
            <?php if ($list[$i][ca_name] == "자증") { ?>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_v" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_red_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'])?></td>
            <td class="td_num_red_v" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_4'])?></td>
            <td class="td_num_red_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'] + $list[$i]['wr_4'])?></td>
            <?php } ?>
            
            <?php if ($list[$i][ca_name] == "자감") { ?>
            <td class="td_num_blue_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'])?></td>
            <td class="td_num_blue_v" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_4'])?></td>
            <td class="td_num_blue_p" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo number_format($list[$i]['wr_3'] + $list[$i]['wr_4'])?></td>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_v" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <td class="td_num_gray_p" onclick=location.href="<?php echo $list[$i]['href'] ?>">0</td>
            <?php } ?>
            
            <?php if ($list[$i]['wr_5'] == '') { ?>
            <td class="td_w60" onclick=location.href="<?php echo $list[$i]['href'] ?>">- - -</td>
            <?php } else { ?>
            <td class="td_w60" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo date("ymd", strtotime($list[$i]['wr_5']))?></td>
            <?php } ?>
            <td class="td_w36" onclick=location.href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['wr_8']?></td>

            <?php  // 검색내역총계(페이지합)
        		if ($list[$i][ca_name] == "매출" || $list[$i][ca_name] == "자감") {
                	$sub_suip1 += $list[$i]['wr_3'];
                	$sub_suip2 += $list[$i]['wr_4'];
        				}
        		if ($list[$i][ca_name] == "매입" || $list[$i][ca_name] == "자증") {
                	$sub_jich1 += $list[$i]['wr_3'];
                	$sub_jich2 += $list[$i]['wr_4'];
        				}
            		$sub_sum_total1 = $sub_suip1 - $sub_jich1;
            		$sub_sum_total2 = $sub_suip2 - $sub_jich2;
    		?>

        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">거래 내역이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>
	
	<?php if ($write_pages) { ?>
	<div style="margin:-20px 0 -20px 0"><?php echo $write_pages; ?></div>
	<?php } ?>
	
<?php  // 매출총계
   $sumsu1 = sql_fetch("select sum(wr_3) as sum_su1 from $write_table  where ca_name='매출' || ca_name='자감'");
   $sumsu2 = sql_fetch("select sum(wr_4) as sum_su2 from $write_table  where ca_name='매출' || ca_name='자감'");
   $suip1 = $sumsu1[sum_su1]; // 수입금액합계
   $suip2 = $sumsu2[sum_su2]; // 매출세액합계
       // 매입총계
   $sumji1 = sql_fetch("select sum(wr_3) as sum_ji1 from $write_table  where ca_name='매입' || ca_name='자증'");
   $sumji2 = sql_fetch("select sum(wr_4) as sum_ji2 from $write_table  where ca_name='매입' || ca_name='자증'");
   $jich1 = $sumji1[sum_ji1]; //비용금액합계
   $jich2 = $sumji2[sum_ji2]; //매입세액합계
   $sum_total1 = $suip1 - $jich1;
   $sum_total2 = $suip2 - $jich2;
   $sum_amount1 = $sum_total1 * 1.1;
   $sum_amount2 = $sum_total2 * 1.1;
?>
	
<div style="margin-bottom:5px">
	<table width="100%" style="margin-top:8px;f">
		<tr>
			<td align="center"><table width="100%" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black" bordercolor="#990066" style="background-color:#fff">
			  <tr>
			    <td align="center"><font color="green">페이지 합계</font></td>
			    <td align="center">공 급 금 액</td>
			    <td align="center">부 가 세 액</td>
			    <td align="center">합 계</td>
		      </tr>
			  <tr>
			    <td align="center">&nbsp;&nbsp;&nbsp;수 입 금 액</td>
			    <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($sub_suip1); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($sub_suip2); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($sub_suip1 + $sub_suip2); ?>원&nbsp;</b></font></td>
		      </tr>
			  <tr>
			    <td align="center">─&nbsp;비 용 금 액</td>
			    <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($sub_jich1); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($sub_jich2); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($sub_jich1 + $sub_jich2); ?>원&nbsp;</b></font></td>
		      </tr>
			  <tr>
			    <td align="center">&nbsp;&nbsp;&nbsp;수 입 금 액</td>
			    <td align="right">&nbsp;&nbsp;<?php echo number_format($sub_sum_total1); ?>원&nbsp;</b></td>
			    <td align="right">&nbsp;&nbsp;<?php echo number_format($sub_sum_total2); ?>원&nbsp;</b></td>
			    <td align="right">&nbsp;&nbsp;<?php echo number_format($sub_sum_total1 + $sub_sum_total2); ?>원&nbsp;</b></td>
		      </tr>
		    </table></td>
			<td width="10">∽</td>
			<td align="center"><table width="100%" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black" bordercolor="#990066" style="background-color:#fff">
			  <tr>
			    <td align="center"><font color="green">전 체 합 계</font></td>
			    <td align="center">공 급 금 액</td>
			    <td align="center">부 가 세 액</td>
			    <td align="center">합 계</td>
		      </tr>
			  <tr>
			    <td align="center">&nbsp;&nbsp;&nbsp;수 입 금 액</td>
			    <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($suip1); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($suip2); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($suip1 + $suip2); ?>원&nbsp;</b></font></td>
		      </tr>
			  <tr>
			    <td align="center">─&nbsp;비 용 금 액</td>
			    <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($jich1); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($jich2); ?>원&nbsp;</b></font></td>
			    <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($jich1 + $jich2) ;?>원&nbsp;</b></font></td>
		      </tr>
			  <tr>
			    <td align="center">&nbsp;&nbsp;&nbsp;수 입 금 액</td>
			    <td align="right">&nbsp;&nbsp;<?php echo number_format($sum_total1)?>원&nbsp;</b></td>
			    <td align="right">&nbsp;&nbsp;<?php echo number_format($sum_total2)?>원&nbsp;</b></td>
			    <td align="right">&nbsp;&nbsp;<?php echo number_format($sum_total1 + $sum_total2);?>원&nbsp;</b></td>
		      </tr>
		    </table></td>
		</tr>
	</table>
</div>
	
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($is_checkbox) { ?>
            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_admin"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
            <?php } ?>
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01 btn"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>

    </form>
     
       <!-- 게시판 검색 시작 { -->
    <div style="margin:5px 0 0 5px;">
        <?php include "$board_skin_path/config.list_select.php"; ?>
    </div>
    <!-- } 게시판 검색 끝 -->
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>


<script language="JavaScript">
if ('<?php echo $sca?>') document.fcategory.sca.value = '<?php echo $sca?>';
if ('<?php echo $stx?>') {
    document.fsearch.sfl.value = '<?php echo $sfl?>';
    document.fsearch.sop.value = '<?php echo $sop?>';
}
</script>

<!-- 페이지 -->

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
