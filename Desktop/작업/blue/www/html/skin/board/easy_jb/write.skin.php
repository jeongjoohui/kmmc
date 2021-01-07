<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
?>

<script type="text/javascript">
	$(function(){
		$("#wr_1, #wr_5").datepicker({
			changeMonth: true,
			changeYear: true,
            showButtonPanel: true,
            dateFormat: "yymmdd",
            yearRange: "c-15:c+10"
            	});
            });

	// [] <--문자 범위 [^] <--부정 [0-9] <-- 숫자
	// [0-9] => \d , [^0-9] => \D
	var rgx1 = /\D/g;  // /[^0-9]/g 와 같은 표현
	var rgx2 = /(\d+)(\d{3})/;
	function getNumber(obj) {
     	var num01;
    	var num02;
    	num01 = obj.value;
     	num02 = num01.replace(rgx1,"");
     	num01 = setComma(num02);
    	obj.value =  num01;
    	 }
	function setComma(inNum) {
    	var outNum;
     	outNum = inNum;
     	while (rgx2.test(outNum)) {
        outNum = outNum.replace(rgx2, '$1' + ',' + '$2');
      		}
    return outNum;
     }
</script>

<section id="bo_w">

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= PHP_EOL.'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html">html</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= PHP_EOL.'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret">공지</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }
    }

    echo $option_hidden;
    ?>

    <div class="bo_w_info write_div">
    <?php if ($is_name) { ?>
        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
        <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" placeholder="이름">
    <?php } ?>

    <?php if ($is_password) { ?>
        <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
        <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" placeholder="비밀번호">
    <?php } ?>
    </div>

    <div class="frm_input full_input">
        <label for="wr_1"><strong>· 회계날짜 : </strong> </label>
        <input type="text" name="wr_1" value="<?php echo $write['wr_1']; ?>" id="wr_1" required class="frm_input frm_input_2cl" size="11" maxlength="8" style="height:28px; text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="wr_subject"><strong> · 거래처 : </strong> </label>
        <input type="text" name="wr_subject" value="<?php echo $write['wr_subject']; ?>" id="wr_subject" required class="frm_input frm_input_2cr" style="height:28px;">&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="wr_2"><strong>· 거래내용 :</strong> </label>
        <input type="text" name="wr_2" value="<?php echo $write['wr_2']; ?>" id="wr_2" required class="frm_input frm_input_2cr" style="height:28px;">
    </div>
    <div class="frm_input full_input" style="margin:10px 0 10px 0">
		<label for="ca_name"><strong>· 거래분류 : </strong> </label>
        <select name="ca_name" id="ca_name" class="frm_input" style="height:28px;" required>
            <option value="">선택 하세요</option>
            <?php echo $category_option ?>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;
		<label for="wr_3"><strong>· 금&nbsp;&nbsp;&nbsp;액 :</strong> </label>
		<?php if($write['wr_3'] == "") { ?>
        <input type="text" name="wr_3"  onblur="getNumber(this);" onkeyup="getNumber(this);" style="text-align:right; padding-right:5px; height:28px;" value="<?php echo $write['wr_3']; ?>" id="wr_3" class="frm_input" maxlength="12" required>&nbsp;&nbsp;
            <?php } else { ?>
         <input type="text" name="wr_3"  onblur="getNumber(this);" onkeyup="getNumber(this);" style="text-align:right; padding-right:5px; height:28px;" value="<?php echo number_format($write['wr_3']); ?>" id="wr_3" class="frm_input" maxlength="12" required>&nbsp;
     <?php } ?>
     <?php if ($write['wr_4'] == "0") { ?>
		<input type="checkbox" name="wr_link2" value="1">
     <?php } else { ?>
     	 <input type="checkbox" name="wr_link2" value="1" checked="checked">
     <?php } ?> 부가세있음
    	<input type="hidden" name="wr_4" value="<?php echo $write['wr_4']; ?>" id="wr_4">
<script type="text/javascript">
function wrFunction() {
var wr_3 = document.getElementById("wr_3");
var wr_4 = document.getElementById("wr_4");
wr_4.value = wr_3.value;
}
</script>
	<?php if($write['wr_4'] > 0) { ?>
		<label for="wr_5"><strong style="margin-left:55px;">· 결제날짜 : </strong></label>
	<?php } else { ?>
		<label for="wr_5"><strong style="margin-left:50px;">· 결제날짜 : </strong></label>
	<?php } ?>
		<input type="text" name="wr_5" value="<?php echo $write['wr_5']; ?>" id="wr_5" class="frm_input frm_input_2cl" size="11" maxlength="8" style="height:28px; text-align:center;">
    </div>
  <?php if ($write[wr_8] == "") { ?>
	<div class="frm_input full_input" style="padding:10px 0 0 5px;">
        <label for="wr_8"><strong>· 영수종류 :&nbsp;&nbsp;</strong> </label>
        <input type="radio" name="wr_8" value="영수" <?php echo ($write['wr_8']=='영수')?'checked':'';?> required>영수증&nbsp;&nbsp;
        <input type="radio" name="wr_8" value="세계" <?php echo ($write['wr_8']=='세계')?'checked':'';?> required required checked="checked">세금계산서&nbsp;&nbsp;
        <input type="radio" name="wr_8" value="카드" <?php echo ($write['wr_8']=='카드')?'checked':'';?> required>신용카드/현금영수증 등&nbsp;&nbsp;
        <input type="radio" name="wr_8" value="영세" <?php echo ($write['wr_8']=='영세')?'checked':'';?> required>영세율(수출)
    </div>
  <?php } else { ?>
    <div class="frm_input full_input" style="padding:10px 0 0 5px;">
        <label for="wr_8"><strong>· 영수종류 :&nbsp;&nbsp;</strong> </label>
        <input type="radio" name="wr_8" value="영수" <?php echo ($write['wr_8']=='영수')?'checked':'';?> required>영수증&nbsp;&nbsp;
        <input type="radio" name="wr_8" value="세계" <?php echo ($write['wr_8']=='세계')?'checked':'';?> required required>세금계산서&nbsp;&nbsp;
        <input type="radio" name="wr_8" value="카드" <?php echo ($write['wr_8']=='카드')?'checked':'';?> required>신용카드/현금영수증 등&nbsp;&nbsp;
        <input type="radio" name="wr_8" value="영세" <?php echo ($write['wr_8']=='영세')?'checked':'';?> required>영세율(수출)
    </div>
  <?php } ?>
    <div class="write_div">
        <label for="wr_content" class="sound_only">기타내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <textarea id="wr_content" name="wr_content" class="tx" style="width:100%; word-break:break-all;" rows="6" itemname="기타내용" <? if ($write_min || $write_max) { ?> onkeyup="check_byte('wr_content', 'char_count');"<?}?>><?php echo $content; ?></textarea>
        </div>
        
    </div>

    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
        </div>
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
        <?php } ?>

        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <span class="file_del">
            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        </span>
        <?php } ?>
        
    </div>
    <?php } ?>

    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>

    <div class="btn_confirm write_div">
        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a>
        <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit btn">
    </div>
    </form>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터사 용시자 바스크립트에서 내용을 폼필드로 넣어주며 내용이입력됐음을 검사 ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->