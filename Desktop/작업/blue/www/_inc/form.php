<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

				<!--<div class="hidden-xs main-speedform"  >-->
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
					f.action = "./_inc/form_ok.php";
					return true;
				}
				</script>

