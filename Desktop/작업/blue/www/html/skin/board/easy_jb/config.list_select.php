<script language="JavaScript"> 
<!-- 
    var sojaeji = new Array(); 

    sojaeji['대분류'] = '매출,매입,자증,자감';

    sojaeji['매출'] = '2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025,2026,2027,2028,2029,2030';
    sojaeji['매출->2012'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2013'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2014'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2015'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2016'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2017'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2018'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2019'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2020'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2021'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2022'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2023'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2024'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2025'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2026'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2027'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2028'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2029'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매출->2030'] = '01,02,03,04,05,06,07,08,09,10,11,12';
 
    sojaeji['매입'] = '2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025,2026,2027,2028,2029,2030';
    sojaeji['매입->2012'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2013'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2014'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2015'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2016'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2017'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2018'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2019'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2020'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2021'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2022'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2023'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2024'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2025'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2026'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2027'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2028'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2029'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['매입->2030'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    
    sojaeji['자증'] = '2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025,2026,2027,2028,2029,2030';
    sojaeji['자증->2012'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2013'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2014'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2015'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2016'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2017'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2018'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2019'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2020'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2021'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2022'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2023'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2024'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2025'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2026'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2027'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2028'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2029'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자증->2030'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    
    sojaeji['자감'] = '2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024,2025,2026,2027,2028,2029,2030';
    sojaeji['자감->2012'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2013'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2014'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2015'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2016'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2017'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2018'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2019'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2020'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2021'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2022'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2023'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2024'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2025'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2026'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2027'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2028'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2029'] = '01,02,03,04,05,06,07,08,09,10,11,12';
    sojaeji['자감->2030'] = '01,02,03,04,05,06,07,08,09,10,11,12';

    function sidochange()
    {
        var f = document.fsearch_area;

        gugunview(f.sido.value);
        dongview(f.sido.value, f.gugun.value);
    }

    function gugunchange()
    { 
        var f = document.fsearch_area;

        dongview(f.sido.value, f.gugun.value);
    }

    function dongview(sido, gugun)
    {
        var f = document.fsearch_area;

        f.dong.options.length = 1;
        f.dong.options[0].text = "월별";
        f.dong.options[0].selected = true;
        if (!sido || !gugun) {
            return;
        }

        sojae = sojaeji[sido+"->"+gugun].split(",");
        f.dong.options.length = sojae.length+1;
        for (i=0; i<sojae.length; i++) {
            f.dong.options[i+1].value = sojae[i];
            f.dong.options[i+1].text = sojae[i];
        }
    }

    function gugunview(sido)
    {
        var f = document.fsearch_area;

        f.gugun.options.length = 1;
        f.gugun.options[0].text = "년도";
        f.gugun.options[0].selected = true;
        if (!sido) {
            return;
        }

        sojae = sojaeji[sido].split(",");
        f.gugun.options.length = sojae.length+1;
        for (i=0; i<sojae.length; i++) {
            f.gugun.options[i+1].value = sojae[i];
            f.gugun.options[i+1].text = sojae[i];
        }
    }

    function sidoview()
    {
        var f = document.fsearch_area;

        f.sido.options.length = 1;
        f.sido.options[0].text = "분류";
        sojae = sojaeji["대분류"].split(",");
        f.sido.options.length = sojae.length+1;
        for (i=0; i<sojae.length; i++) {
            f.sido.options[i+1].value = sojae[i];
            f.sido.options[i+1].text = sojae[i];
        }
    }
function onChangeKey() {
var sido = document.fsearch_area.sido.value;
var gugun = document.fsearch_area.gugun.value;
var dong = document.fsearch_area.dong.value;

if (sido == "분류" && gugun == "년도" && dong == "월별") {
alert("분류를 선택하세요.");
return false;
	} else if (sido != "" && gugun == "년도" && dong == "월별") {
		document.fsearch_area.stx.value = sido;
	} else if (sido != "" && gugun != "" && dong == "월별") {
		document.fsearch_area.stx.value = sido + " " + gugun;
	} else {
		document.fsearch_area.stx.value = sido + " " + gugun + " " + dong;
	}
document.fsearch_area.submit();
}
//-->
</script>

<!--script language="JavaScript" src='./sojaeji.js'></script-->
<table cellpadding="0" cellspacing="0" border="0">
<form name="fsearch_area" method="get">
<input type="hidden" name="bo_table" value="<?php echo $bo_table?>">
<input type="hidden" name="sca" value="<?php echo $sca?>">
<input type="hidden" name="sfl" value="ca_name||wr_10">
<tr>
    <td><i class="fa fa-search" aria-hidden="true"></i> 분류검색 : 

<select name="sido" onchange="sidochange()"></select>

<select name="gugun" onchange="gugunchange()"></select>

<select name=dong></select>
<input type="image" src="<?php echo $board_skin_url ?>/img/btn_search.png" border="0" align="absmiddle" onClick="onChangeKey();return false;">
<input type="hidden" name="sop" value="and">
<input type="hidden" name="stx" value="">
    </td>
</tr>
</form>
</table>
<?php
 if ($srch_type != "") { $stx = ""; }
?> 
<script language="JavaScript">
<!--
    sidoview();
    gugunview("");
    dongview("", "");
//-->
</script>
