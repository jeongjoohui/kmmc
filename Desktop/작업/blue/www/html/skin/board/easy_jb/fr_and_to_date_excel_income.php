<?php
include_once("./_common.php");

if (!$is_admin) {
   exit;
}

	//if (!$fr_date)   $fr_date = substr(date("Ymd", time()),0,6)."01"; // 이번달검색
	if (!$fr_date)    $fr_date = date("Ymd", time());
	if (!$to_date) 	  $to_date = date("Ymd", time());
	if ($sort1 == "") $sort1 = "wr_1";
    if ($sort2 == "") $sort2 = "asc"; //desc

    $sql  = " select * from g5_write_$bo_table ";

	if ($fr_date && $to_date) {
		$sql .= " WHERE (wr_1 between '$fr_date' and '$to_date') ";
			}

	if ($gubun) { $sql .= " AND ca_name like '$gubun' "; }
	
 	$sql .= " order by $sort1 $sort2 "; 
	$result = sql_query($sql);
	$total_count = sql_num_rows($result);

	//$rows = $config[cf_page_rows];
	$rows = 5000; // 한화면에 나올 게시물수 합계를 보기위해 많이잡음.인쇄시 페이지 나눔.
    //$pagerows    = 30; // 페이지당 인쇄 라인수
    //$printpage   = ceil($total_count / $pagerows); //인쇄페이지수
    //$firstpage   =  0;

	//$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
	if ($page == "") { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
	$from_record = ($page - 1) * $rows; // 시작 열을 구함

	//$rank = ($page - 1) * $rows;

	$sql = $sql . " limit $from_record, $rows ";
	$result = sql_query($sql);

	$qstr = "page=$page&sort1=$sort1&sort2=$sort2";
	$qstr1 = "fr_date=$fr_date&to_date=$to_date&sel_ca_id=$sel_ca_id";
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<div id="noPrint1"> <? // 인쇄시 미포함 영역 1 ?>

<!-- 메인화면 최신글 시작 -->
<form name=flist>
<input type=hidden name=doc   	 value="<?=$doc?>">
<input type=hidden name=sort1 	 value="<?=$sort1?>">
<input type=hidden name=sort2 	 value="<?=$sort2?>">
<input type=hidden name=page  	 value="<?=$page?>">
<input type=hidden name=bo_table value="<?=$bo_table?>">

</div> <? // 인쇄시 미포함 영역 1 끝 ?>

<div id="startPrint"> <? // 인쇄영역 시작 ?>
<?php
    header('Content-Type: application/vnd.ms-excel');
    header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('content-transfer-encoding: binary');
    header( "Content-Disposition: attachment; filename=JB_".date('Ymd').".xls" );
	echo "<html><head>";
	echo "</head><body>";
    echo "<font style='font-weight:bold'>[ 소득세 ]</font>";
    echo "<table border=1 style='font-family:돋움; font-size:10pt;'>";
    echo "<tr align='center'><td>① 날짜</td><td>② 거래내용</td><td>③ 거래처</td><td colspan='2'>④ 수입</td><td colspan='2'>⑤ 비용</td><td colspan='2'>⑥ 고정자산 증감</td><td>⑦ 비고</td></tr><tr align='center'><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>금액</td><td>부가세</td><td>금액</td><td>부가세</td><td>금액</td><td>부가세</td><td>&nbsp;</td></tr>\n";
    for ($i=0; $row=sql_fetch_array($result); $i++) {
		echo "<tr>\n";
        echo "<td align=left>" . date("Y-m-d", strtotime($row[wr_1])) . "</td>\n";
        echo "<td align=left>" . $row[wr_2] . "</td>\n";
        echo "<td align=left>" . $row[wr_subject] . "</td>\n";
    if ($row[ca_name] == '매출') {
    	echo "<td align=right><font color='0000ff'>" . number_format($row[wr_3]) . "</font></td>\n";
    	echo "<td align=right><font color='0000ff'>" . number_format($row[wr_4]) . "</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
     	}
   	if ($row[ca_name] == '매입') {
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='ff0000'>" . number_format($row[wr_3]) . "</font></td>\n";
    	echo "<td align=right><font color='ff0000'>" . number_format($row[wr_4]) . "</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
     		}
   	if ($row[ca_name] == '자증') {
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='ff0000'>" . number_format($row[wr_3]) . "</font></td>\n";
    	echo "<td align=right><font color='ff0000'>" . number_format($row[wr_4]) . "</font></td>\n";
     		}
   	if ($row[ca_name] == '자감') {
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='cccccc'>0</font></td>\n";
    	echo "<td align=right><font color='0000ff'>" . number_format(-$row[wr_3]) . "</font></td>\n";
    	echo "<td align=right><font color='0000ff'>" . number_format(-$row[wr_4]) . "</font></td>\n";
     		}
        echo "<td align=center>" . $row[wr_8] . "</td>\n";
    }
	echo "</table>";
	echo "</body></html>";
    if ($i == 0)
        alert("자료가 없습니다.");
?>
</form>
</div> <!--  // 인쇄영역 끝 -->
