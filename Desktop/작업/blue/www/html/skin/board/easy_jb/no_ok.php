<?php
include_once("./_common.php");

if (!$is_admin) {
   exit;
}
include_once(G5_PATH.'/head.sub.php');
$g5['title'] = "미결제 내역 조회";

include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
?>

<script>
	$(function(){
		$("#fr_date, #to_date").datepicker({ // 달력 실행 할 필드 ("#wr_1, #wr_2, #wr_3")
			changeMonth: true,
			changeYear: true,
            showButtonPanel: true,
            dateFormat: "yymmdd", // 년월일 표시형식 (yy-mm-dd)
            yearRange: "c-15:c+2" // 년도 선택 범위 (c-전몇년:c+후몇년)
            	});
            });
 </script> 

<? // 이하 프린트 제어관련 스크립터 ?>
<script language="javascript">
// 인쇄보기/페이지설정/인쇄대화상자/인쇄하기 버튼제어
function ieExecWB( intOLEcmd, intOLEparam ){
     var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 classID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';

document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
if ( ( ! intOLEparam ) || ( intOLEparam < -1 )  || (intOLEparam > 1 ) )
        intOLEparam = 1;
        WebBrowser1.ExecWB( intOLEcmd, intOLEparam );
        WebBrowser1.outerHTML = "";
}
</script>

<script language=javascript>
// 인쇄 시작전에 실행되는 함수
// 'no'으로 시작하는 div 태그 제거
function window.onbeforeprint()
{
    var divs = document.all.tags("div")
    for (i=0;i<divs.length;i++)
    {
        if (divs[i].id.substring(0,2)== "no") {
        divs[i].style.display = "none";
        }
    }
}

function window.onafterprint()
//인쇄가 종료되면 실행되는 부분
//모든 div 태그를 재생
{
    var divs = document.all.tags("div")
    for (i=0;i<divs.length;i++)
    {
        divs[i].style.display = "inline"
    }
}
</script>

<? // 페이지 넘김/다음페이지로 ?>
<style type="text/css">
body {margin:0;padding:0;font-size:0.75em;font-family:dotum;background:#fff}
.break {page-break-before: always;}
</style>

<? /* 
인쇄 버튼 누를 필요없이 자동으로 인쇄.
------------------------------
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function printPage() {
window.print();
}
// print -->
</script>
<body OnLoad="printPage()">
-------------------------------
*/ ?>

<? // 여기까지 프린터 제어 관련 스크립터 ?>

<? /*
인쇄 버튼 누를 필요없이 자동으로 인쇄.
------------------------------
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function printPage() {
window.print();
}
// print -->
</script>
<body OnLoad="printPage()">
-------------------------------
*/ ?>

<? // 여기까지 프린터 제어 관련 스크립터 ?>

<?php
	$migyeol = "미결제";
   	//if (!$fr_date)    $fr_date = "00000000"; // 처음부터 검색
	//if (!$fr_date)    $fr_date = substr(date("Ymd", time()),0,6)."01"; // 이번달부터 검색
	if (!$fr_date)    $fr_date = substr(date("Ymd", strtotime("-1 month", time())),0,6)."01"; // 전번달부터 검색
	if (!$to_date) 	  $to_date = date("Ymd", time());
	if ($sort1 == "") $sort1 = "wr_1";
	if ($sort2 == "") $sort2 = "desc"; //asc 올림차순, desc 내림차순
    
    $sql  = " select * from g5_write_$bo_table ";

	if ($fr_date && $to_date) {
	  	$sql .= " WHERE (wr_1 between '$fr_date' and '$to_date') ";
	  		}

	if ($gubun) { $sql .= " AND ca_name like '$gubun' "; } 
	//if ($migyeol) { $sql .= " AND ca_name like '$migyeol' "; }

	$sql .= " AND  wr_5 = '' "; // 결제일이 00000000 인 레코드 -> 결제일이 NULL 이면 미결제처리

 	$sql .= " order by $sort1 $sort2 "; 
	$result = sql_query($sql);
	$total_count = sql_num_rows($result);

	//$rows = $config[cf_page_rows];
	$rows = 500; // 한화면에 나올 게시물수 합계를 보기위해 많이잡음 인쇄시 페이지나눔.
	             // 한화면을 넘으면 합계는 현 페이지합계
	$pagerows    = 35; // 페이지당 인쇄 라인수
	$printpage   = ceil($total_count / $pagerows); //인쇄페이지수
	$firstpage	 =  0;

	$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
	if ($page == "") { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
	$from_record = ($page - 1) * $rows; // 시작 열을 구함

	$rank = ($page - 1) * $rows;

	$sql = $sql . " limit $from_record, $rows ";
	$result = sql_query($sql);

	$qstr = "page=$page&sort1=$sort1&sort2=$sort2";
	$qstr1 = "fr_date=$fr_date&to_date=$to_date&sel_ca_id=$sel_ca_id";

?>

<div id="noPrint1"> <? // 인쇄시 미포함 영역 1 ?>

<!-- 메인화면 최신글 시작 -->
<table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
<form name=flist>
<input type='hidden' name='doc' value='<?php echo $doc?>'>
<input type='hidden' name='sort1' value='<?php echo $sort1?>'>
<input type='hidden' name='sort2' value='<?php echo $sort2?>'>
<input type='hidden' name='page' value='<?php echo $page?>'>
<input type='hidden' name='bo_table' value='<?php echo $bo_table?>'>

<tr><td colspan="3" height="15" ></td></tr>
<tr>
    <td colspan="3">
        <img src="./img/title_migyeol.png" width="147" height="26" />
	</td>
</tr>
<tr>
	<td colspan=3 align=right>
        <!--input type=button value="인쇄보기" onclick="window.ieExecWB(7)">
        <input type=button value="Page설정" onclick="window.ieExecWB(8)">
        <input type=button value="대화상자" onclick="window.ieExecWB(6)">
        <input type=button value="인쇄하기" onclick="window.ieExecWB(6, -1)"-->
		<a href="<?php echo $board_skin_url ?>/fr_and_to_date.php?bo_table=<?php echo $bo_table?>"><img src="./img/bt_gigan.png" width="77" height="18" border="0" /></a>&nbsp; <a href="<?php echo $board_skin_url ?>/fr_and_to_date_excel_vat.php?bo_table=<?php echo $bo_table?>&fr_date=<?php echo $fr_date?>&to_date=<?php echo $to_date?>&gubun=<?php echo $gubun?>&migyeol=<?php echo $migyeol?>"><img src="./img/excel_print.png" width="99" height="18" border="0" /></a>&nbsp; <a href="#"><img src="./img/bt_print.png" width="49" height="18" border="0" onclick="window.print()" /></a>
        <!--input type=button value="프린트" onclick="window.print()">
		<input type=button value="창닫기" onclick="javaScript:self.close()"-->
	</td>
</tr>
<tr><td colspan="3" height="10"></td></tr>
<tr>
    <td width="10%">
        <a href='<?php echo $_SERVER[PHP_SELF]?>?bo_table=<?php echo $bo_table?>'>처음</a>
    </td>
    <td width="70%"align="center">
        검색기간 :  <input class="ed" type="text" id="fr_date" name="fr_date" class="frm_input" size="8" maxlength="8" minlength="8" itemname="기간시작" required value="<?php echo $fr_date; ?>"> ~
                    <input class="ed" type="text" id="to_date" name="to_date" size="8" maxlength="8" minlength="8" itemname="기간끝" required value="<?php echo $to_date; ?>">
        			<input class="ed" type="text" id="migyeol" name="migyeol" class="frm_input" size="5" maxlength="3" minlength="3" itemname="미결제" required readonly value="<?php echo $migyeol; ?>">
        <select name="gubun">
			<option value="">전체</option>
            <option value="매출">매출</option>
            <option value="매입">매입</option>
            <option value="자감">자감</option>
            <option value="자증">자증</option>
        </select>
        <script> document.flist.gubun.value = "<?php echo $gubun?>";</script>
        <input type="image" src="./img/btn_search.png" border="0" align="absmiddle">
    </td>
 	<td width="20%" align="right">건수 : <? echo $total_count ?>&nbsp;</td>
</tr>
<tr><td colspan="3" height="1" bgcolor="#cccccc"></td></tr>
</table>

</div> <? // 인쇄시 미포함 영역 1 끝 ?>

<div id="startPrint"> <? // 인쇄 영역 시작 ?>

<table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
<?php
for ($i=0; $row=sql_fetch_array($result); $i++) {
	$num = $rank + $i + 1;

  	if($i % 35 == 0) {
		$subpage  = $subpage + 1;

		if($firstpage) {
		echo "
            <tr>
                <td colspan='12'>
                    <h6 class='break' style='margin:2px 0 3px 0;'>
					미결제내역 : [$fr_date~$to_date] Page $subpage/$printpage
                    </h6>
                </td>
            </tr>
		";
		} else {
        echo"
            <tr>
                <td colspan='12'>
    				<h6 style='margin:2px 0 3px 0;'>
    				미결제내역 : [$fr_date~$to_date] Page $subpage/$printpage
    				</h6>
                </td>
            </tr>
		";
		}

		$firstpage = 1;

	echo "
	<tr><td colspan='12' height='3' bgcolor='#1c1c1c'></td></tr>
	<tr bgcolor='#f8f8f9' height='30' align='center'>
    	<td width='60' style='padding-left:2px'><font color='#466c8a'>번호</font></td>
    	<td width='60'><font color='#466c8a'>분류</font></td>
    	<td width='5'>&nbsp;</td>
    	<td width='70'><font color='#466c8a'>회계날짜</font></td>
    	<td width='250' align='left' style='padding-left:10px'><font color='#466c8a'>거래내용</font></td>
    	<td width='250' align='left' style='padding-left:5px'><font color='#466c8a'>거래처</font></td>
    	<td width='100' align='right'><font color='blue'>수입금액</font></td>
    	<td width='100' align='right'><font color='blue'>부가세</font></td>
    	<td width='100' align='right'><font color='red'>비용금액</font></td>
    	<td width='100' align='right'><font color='red'>부가세</font></td>
    	<td width='80' style='padding-left:5px'><font color='#466c8a'>결제일</td>
    	<td width='110'><font color='#466c8a'>비고</td>
	</tr>
	<tr><td colspan='12' height='1' bgcolor='#cccccc'></td></tr>
	";
	}

    $list = $i%2;
	$row[wr_1] = substr($row[wr_1],2,6);

    // 00000000 날짜를 년월일만 취해서 000000으로 표시
    $row[wr_5] = substr($row[wr_5],2,6);

    // 검색내역총계(페이지합)
    if ($row[ca_name] == "매출" || $row[ca_name] == "자감") {
            $sub_suip1 += $row[wr_3];
            $sub_suip2 += $row[wr_4];
                }
    if ($row[ca_name] == "매입" || $row[ca_name] == "자증") {
            $sub_jich1 += $row[wr_3];
            $sub_jich2 += $row[wr_4];
                }
    $sub_sum_total1 = $sub_suip1 - $sub_jich1;
    $sub_sum_total2 = $sub_suip2 - $sub_jich2;

    // 천단위 기호 사용 시작
    $row[wr_3]=number_format($row[wr_3]);
    $row[wr_4]=number_format($row[wr_4]);
    // 천단위 기호 사용 끝
    
    echo "
    <tr class='list$list center'>
        <td height='25' align='center' style='padding-left:2px'>$num</td>
        <td align='center'>$row[ca_name]</td>
        <td width='5'>&nbsp;</td>
        <td align='center'><font color=green>$row[wr_1]</font></td>
        <td align='left' style='padding-left:10px'>$row[wr_2]</td>
        <td align='left' style='padding-left:5px'>$row[wr_subject]</td>
	";
    	if ($row[ca_name] == '매출') {
		echo "
        	<td align='right'><font color=blue>$row[wr_3]</font></td>
        	<td align='right'><font color=blue>$row[wr_4]</font></td>
        	<td align='right'><font color='#cccccc'>0</font></td>
        	<td align='right'><font color='#cccccc'>0</font></td>
		";
		
     	}
    	if ($row[ca_name] == '매입') {
		echo "
        	<td align='right'><font color='#cccccc'>0</font></td>
        	<td align='right'><font color='#cccccc'>0</font></td>
        	<td align='right'><font color=red>$row[wr_3]</font></td>
        	<td align='right'><font color=red>$row[wr_4]</font></td>
		";
    	}
    	if ($row[ca_name] == '자증') {
		echo "
        	<td align='right'><font color='#cccccc'>0</font></td>
        	<td align='right'><font color='#cccccc'>0</font></td>
        	<td align='right'><font color=red>$row[wr_3]</font></td>
        	<td align='right'><font color=red>$row[wr_4]</font></td>
		";
    	}
    	if ($row[ca_name] == '자감') {
		echo "
        	<td align='right'><font color=blue>$row[wr_3]</font></td>
        	<td align='right'><font color=blue>$row[wr_4]</font></td>
        	<td align='right'><font color='#cccccc'>0</font></td>
        	<td align='right'><font color='#cccccc'>0</font></td>
		";
     	}
        if ($row[wr_5] == '') {
        echo "<td align='center'>";
        echo "<font color='#cccccc'>";
        } else {
        echo "<td align='center' style='padding-left:10px'>";
        echo "<font color=#AE5700>";
        }
        echo "$row[wr_5]</font></td>";

        if($row[wr_8])  echo "<td align='center'>$row[wr_8]</td>";
        else  echo "<td align='center'></td>";

		echo "
    </tr>
	<tr><td colspan='12' height='1' bgcolor='#f5f5f5'></td></tr>";
	// 라인사이 공백
}

if ($i == 0) {
    echo "<tr><td colspan='12' align='center' height='100' bgcolor='#ffffff'><span class='point'>자료가 한건도 없습니다.</span></td></tr>\n";
}

?>
<tr><td colspan="12" height="1" bgcolor="#1c1c1c"></td></tr>

</table>

<table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
<tr><td>
	<h5 class="break" style="margin:2px 0 -10px 0;">
    미결제 내역 합계 : [<?php echo $fr_date?> ~ <?php echo $to_date?>]
	</h5>
</td></tr>
<tr>
    <td width="50%">&nbsp;</td>
    <td width="50%" align="right"><?php echo get_paging($config[cf_write_pages], $page, $total_page, "$_SERVER[PHP_SELF]?bo_table=$bo_table&$qstr1&page=");?></td>
</tr>
</table>

<table width="750" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black" bordercolor="#990066" align="center">
    <tr>
        <td align="center"><font color=green>기간별 내역 합계</font></td>
        <td align="center">공 급 금 액</td>
        <td align="center">부 가 세 액</td>
        <td align="center">합 계</td>
    </tr>
    <tr>
        <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;수 입 금 액</td>
        <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($sub_suip1)?>원&nbsp;</font></td>
        <td align="right"><font color="blue">&nbsp;&nbsp;<?php echo number_format($sub_suip2)?>원&nbsp;</font></td>
        <td align="right">&nbsp;&nbsp;<font color="blue"><?php echo number_format($sub_suip1 + $sub_suip2)?>원&nbsp;</font></td>
    </tr>
    <tr>
        <td align="center">─&nbsp;비 용 금 액</td>
        <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($sub_jich1)?>원&nbsp;</font></td>
        <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($sub_jich2)?>원&nbsp;</font></td>
        <td align="right"><font color="red">&nbsp;&nbsp;<?php echo number_format($sub_jich1 + $sub_jich2)?>원&nbsp;</font></td>
    </tr>
    <tr>
        <td align="center">〓&nbsp;회 계 금 액</td>
        <td align="right">&nbsp;&nbsp;<?php echo number_format($sub_sum_total1)?>원&nbsp;</td>
        <td align="right">&nbsp;&nbsp;<?php echo number_format($sub_sum_total2)?>원&nbsp;</td>
        <td align="right">&nbsp;&nbsp;<?php echo number_format($sub_sum_total1 + $sub_sum_total2)?>원&nbsp;</td>
    </tr>
</table>
<br>
<!-- 메인화면 최신글 끝 -->

</div>

<?php
include_once(G5_PATH."/tail.sub.php");
?>
