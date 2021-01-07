<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<style>
/* 디바이스 981px 이상에서 적용*/
@media all and (min-width:981px)
{
#main_visual_re .main-txt .tit { position: absolute; top:19%; left:25%; width:50%; transform:translateX(-50%);}
.main-speedform{display:table-cell; position:absolute; top:50%; width:100%; margin:0 auto;}
/* form */
form {margin:0 auto; width:60%;}
fieldset ul {text-align:center; margin-left:-10px;}
fieldset ul li {display:inline-block; width:30%; margin-left:11px;}
fieldset ul li input{ height:42px; width:100%; background-color:#fff;padding-left:10px; border:none; opacity:0.7;}
.tex_area textarea{width:100%;height:150px; background-color:#fff;  text-align:center; padding-top:65px; border:none; opacity:0.7; position:relative; top:10px; left:0px;}
.checkbox {color:#fff;text-align:left; margin-left:163px; padding-top:20px;}
.btn-area {text-align:center; padding-top:10px;}
.btn-area a{font-size: 15px; font-weight: bold; color:#fff; position:relative; left:65px; top:-7px;}
.btn-area img {position:relative;left:-25px; margin-top:10px;}
}

@media all and (max-width:1100px)
{
}
/* 디바이스 980px 이하에서 적용*/
@media all and (max-width:980px)
{
#main_visual_re .main-txt .tit { position: absolute; top:22%; left:50%; transform:translateX(-50%);}
.main-speedform{display:table-cell; position:absolute; top:58%; width:100%; margin:0 auto;}

/* form */
form {margin:0 auto; width:80%;}
fieldset ul {text-align:center; margin-left:-10px;}
fieldset ul li {display:inline-block; width:31.7%; margin-left:11px;}
fieldset ul li input{ height:42px; width:100%; background-color:#fff;padding-left:10px; border:none; opacity:0.7;}
.tex_area textarea{width:100%;height:80px; background-color:#fff;  text-align:center; padding-top:6%; border:none; opacity:0.7; position:relative; top:10px; left:0px;}
.checkbox {color:#fff;text-align:left; padding-top:20px;}
.btn-area {text-align:center; padding-top:10px;}
}
/* 디바이스 850px 이하에서 적용*/
@media all and (max-width:850px)
{
#main_visual_re .main-txt .tit { position: absolute; top:22%; left:50%; transform:translateX(-50%);}
.main-speedform{display:table-cell; position:absolute; top:52%; width:100%; margin:0 auto;}
form {margin:0 auto; width:80%;}
fieldset ul {text-align:center; margin-left:-10px;}
fieldset ul li {display:inline-block; width:30.7%; margin-left:11px;}
fieldset ul li input{ height:42px; width:100%; background-color:#fff;padding-left:10px; border:none; opacity:0.7;}
.tex_area textarea{width:98%;height:80px; background-color:#fff;  text-align:center; padding-top:8%; border:none; opacity:0.7; position:relative; top:10px; left:0px;}
.checkbox {color:#fff;text-align:left; margin-left:3px; padding-top:20px;}
.btn-area {text-align:center; padding-top:10px;}
}

/* 디바이스 650px 이하에서 적용*/
@media all and (max-width:650px)
{
#main_visual_re .main-txt .tit { position: absolute; top:28%; left:50%; transform:translateX(-50%);}
.main-speedform{display:table-cell; position:absolute; top:55%; width:100%; margin:0 auto;}
form {margin:0 auto; width:80%;}
fieldset ul {text-align:center; margin-left:-10px;}
fieldset ul li {display:inline-block; width:30%; margin-left:7px;}
fieldset ul li input{ height:30px; width:100%; background-color:#fff;padding-left:10px; border:none; opacity:0.7;}
.tex_area textarea{width:98%;height:80px; background-color:#fff;  text-align:center; padding-top:10%; border:none; opacity:0.7; position:relative; top:10px; left:0px;}
.checkbox {color:#fff;text-align:left; margin-left:3px; padding-top:20px;}
.btn-area {text-align:center; padding-top:10px;}
}
/* 디바이스 420px 이하에서 적용*/
@media all and (max-width:420px)
{
#main_visual_re .main-txt .tit { position: absolute; top:28%; left:50%; transform:translateX(-50%);}
.main-speedform{display:table-cell; position:absolute; top:47%; width:100%; margin:0 auto;}
form {margin:0 auto; width:80%;}
fieldset ul {text-align:center; margin-left:-10px;}
fieldset ul li {display:inline-block; width:29%; margin-left:11px;}
fieldset ul li input{ height:30x; width:100%; background-color:#fff;padding-left:10px; border:none; opacity:0.7;}
.tex_area textarea{width:98%;height:80px; background-color:#fff;  text-align:center; padding-top:12%; border:none; opacity:0.7; position:relative; top:10px; left:0px;}
.checkbox {color:#fff;text-align:left; margin-left:3px; padding-top:20px;}
.btn-area {text-align:center; padding-top:10px;}
}

.btn-area .btn_consul {
	clear:both;
	font-size:15px;
	/*font-weight:bold;*/
	display:inline-block;
	padding:5px 50px;
	color:#ddd;
	border-radius:50px;
	text-align:center;
	margin:20px auto 0;
	background:#333;
	border:2px solid #444;
	-webkit-transition-duration: 0.2s;
	-webkit-transition-timing-function: ease;
	transition-duration: 0.2s;
	transition-timing-function: ease;	
}
.btn-area .btn_consul:hover{
	color:#fff;
	border:2px solid #000;
	background:#000;
	-webkit-transition-duration: 0.2s;
	-webkit-transition-timing-function: ease;
	transition-duration: 0.2s;
	transition-timing-function: ease;
}

</style>
				<div class="main-speedform">
					<form name="fwrite" method="post" onSubmit="return submitChk(this)"; > 
					<input type=hidden name="sca" value="" />
					<fieldset>
						<ul>
							<li><label for="wr_1"></label><input type="text" id="wr_1" name="wr_1" placeholder="업체명" title="업체명"  maxlength="30" required /></li>
							<li><label for="wr_name"></label><input type="text" id="wr_name" name="wr_name" placeholder="이름" title="성함"   maxlength="30" required /></li>
                            <!--<li><label for="wr_email"></label><input type="text" id="wr_email" name="wr_email" placeholder="이메일" title="이메일"   maxlength="30" required /></li>-->
							<li><label for="wr_3"></label><input type="text" id="wr_3" name="wr_3" placeholder="연락처" title="연락처"   maxlength="30" required /></li>
							<!-- <li class="tex_area"><label for="text"></label><textarea name="conts" id="text" placeholder="의뢰내용" title="의뢰내용"  ></textarea></li> -->
						</ul>
						<p class="tex_area"><label for="wr_content"></label><textarea name="wr_content" id="wr_content_id" placeholder="의뢰내용" title="의뢰내용"></textarea></p>
						<p class="checkbox"><input type="checkbox" name="chk" id="check" required /> <label for="check">개인정보보호정책에 동의합니다.</label></p>
					</fieldset>
					<p class="btn-area">
						<!--<a><input type="submit" value="상담의뢰" id="postBtn" accesskey="s" class="postBtn" style="background:none; border:none; color:#fff; "></a>-->
						<input type="submit" value="상 담 의 뢰" id="postBtn" accesskey="s" class="btn_consul">
						
					</p>
					</form>  
				</div><!-- class="main-speedform" -->
				<script language="javascript">
				function submitChk(f) {
					f.action = "<?php echo G5_URL ?>/_inc/form_ok.php";
					return true;
				}
				</script>

