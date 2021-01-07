<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$currentYear  = date('Y');
$currentMonth = date('m');
$currentDay   = date('d');

$TODAY = date("Ymd",mktime(0,0,0,$currentMonth,$currentDay,$currentYear));

$YY     = substr($wr_1,0,4);
$YYMM   = substr($wr_1,0,6);

$WR_3CP  = $wr_3;
$WR_3CM  = str_replace(",","",$wr_3);

$WR_DAY1 = date("Y-m-d", strtotime($wr_1));

if ($wr_5 == "") {
	$WR_DAY2 = $wr_5;
  } else {
	$WR_DAY2 = date("Y-m-d", strtotime($wr_5));
  }

if ($wr_link2 > 0) {
	 $WR_VAT = round($WR_3CM * 0.1);
  } else {
 	 $WR_VAT ='0';
 	 }

$WR_VAT_3CP = number_format($WR_VAT);

if ($w == 'u' || $w == '') {
	
	$wr_7 = "$WR_DAY1 | $ca_name($wr_8) | $WR_3CP | $WR_VAT_3CP | $WR_DAY2 |";

    $update_sql = " update $write_table
              set   wr_3  = '$WR_3CM',
        			wr_4  = '$WR_VAT',
        			wr_6  = '$TODAY',
                    wr_7  = '$wr_7',
                    wr_9  = '$YY',
                    wr_10 = '$YYMM'
              where wr_id = '$wr_id' ";
    sql_query($update_sql);
}
?>
