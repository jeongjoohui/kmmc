<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/service_1.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = "서비스안내";
$gr_id ='board';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


<!-- 메인화면 최신글 시작 -->
<div class="contents">
   <div class="cnt_box cnt_box1">
       <h1>Our services</h1>
       <ul>
           <li class="bn1">
               <div class="box actionImg8">
					<span class="more">+</span>
                    <i class="fa fa-desktop"></i>
                    <P>Web site</P>
                    <div class="back">
                        <div class="back_inner">
                            <span class="sub_tit">웹사이트 신규 및 리뉴얼 구축 </span>
                            <img src="../img/cnt_hr.png">
                            <span class="desc">디자인 트렌드와 클라이언트 니즈간의<br />균형을 고려하여 최선의 웹사이트를 제작합니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
           <li class="bn2">
                <div class="box actionImg8">  
				    <span class="more">+</span>
                    <i class="fa fa-mobile"></i>
                    <P>Mobile site</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <span class="sub_tit">모바일사이트 신규 및 리뉴얼 구축 </span>
                            <span class="desc">모바일 기기에 최적화된 UX 설계를 통해<br />간결하고 편리한 모바일 웹사이트를 제작합니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
           <li class="bn3 margin-none">
                <div class="box actionImg8">  
				    <span class="more">+</span>
                    <i class="fa fa-window-maximize"></i>
                    <P>Responsive site</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <span class="sub_tit">반응형 웹사이트 신규 및 리뉴얼 구축 </span>
                            <span class="desc">스마트폰부터 태블릿PC까지 다양한 기기를 지원하며<br />웹표준을 준수하여 반응형 사이트를 제작합니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
           <li class="bn4">
                <div class="box actionImg8">
				    <span class="more">+</span>
                    <i class="fa fa-tags"></i>
                    <P>Shopping mall</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <div class="rong_txt">
                                <span class="sub_tit">쇼핑몰 솔루션 신규 및 리뉴얼 구축</span>
                                <span class="desc">상품에 따라 전략적 기획으로 접근하여<br />상품을 돋보이게 만드는 디자인으로<br/>소비자의 마음을 사로잡는 쇼핑몰을 제작합니다.
                                </span>
                            </div>
                        </div>
                    </div>
               </div>
           </li>
           <li class="bn5">
               <div class="box actionImg8"> 
			        <span class="more">+</span>
                    <i class="fa fa-picture-o"></i>
                    <P>Design</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <span class="sub_tit">웹 및 편집 디자인</span>
                            <span class="desc">웹디자인에서부터 패키지,편집,옥외광고물 디자인까지<br />감성을 담아 브랜드의 가치를 향상시킵니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
           <li class="bn6 margin-none">
                <div class="box actionImg8"> 
				    <span class="more">+</span>
                    <i class="fa fa-share-alt"></i>
                    <P>Marketing</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <span class="sub_tit">온라인 및 오프라인 마케팅</span>
                            <span class="desc">각 클라이언트마다 마케팅 전문가가 1:1로 배정되며<br />클라이언트가 원하는 방향을 정확히 분석하고 적용하여<br/>높은 광고효과를 기대할 수 있습니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
		   <li class="bn7">
                <div class="box actionImg8"> 
				    <span class="more">+</span>
                    <i class="fa fa-code"></i>
                    <P>Web Publishing</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <span class="sub_tit">웹퍼블리싱</span>
                            <span class="desc">PC는 물론 스마트폰부터 태블릿까지 다양한 모바일 기기를 지원하도록 웹표준을 준수하는 퍼블리싱 서비스를 제공합니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
		   <li class="bn8">
                <div class="box actionImg8"> 
				    <span class="more">+</span>
                    <i class="fa fa-cogs"></i>
                    <P>Web programming</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <span class="sub_tit">웹프로그래밍</span>
                            <span class="desc">PHP,ASP,JSP,JAVA 등 프로젝트 개발 환경에 맞는 언어와 프레임워크로<!-- <br /> -->가볍고 빠른 웹 프로그래밍 서비스를 제공합니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
		   <li class="bn9 margin-none">
                <div class="box actionImg8"> 
				    <span class="more">+</span>
                    <i class="fa fa-wrench"></i>
                    <P>Maintenance</P>
                    <div class="back">
                        <div class="back_inner">
                            <img src="../img/cnt_hr.png">
                            <span class="sub_tit">유지관리</span>
                            <span class="desc">웹사이트 운영 시 업데이트가 필요한 모든 부분을 신속하게 처리해 드립니다.
                            </span>
                        </div>
                    </div>
               </div>
           </li>
       </ul>
    </div> <!--cnt_box1-->
    <div class="cnt_box cnt_box2">
		<div class="cnt_box2_inner">
        <img src="../img/cnt_img.png">
        <dl>
            <dt>Plus services</dt>
            <dd>웹표준 준수</dd>
            <dd>크로스 브라우징</dd>
            <dd>웹마스터도구 사이트 등록대행</dd>
            <dd>구글애널리틱스 설치</dd>
            <dd>도메인호스팅 1년무료</dd>
        </dl>
		</div>
    </div> <!--cnt_box2-->
    <div class="cnt_box cnt_box3">
		<div class="box3_inner">
			<h1>제작 프로세스</h1>
			<ul>
				<li class="icon">
					<img src="../img/cnt_icon1.png">
					<p>견적문의</p>
				</li class="icon">
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon2.png">
					<p>진행결정</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				
				<li class="icon">
					<img src="../img/cnt_icon4.png">
					<p>진행계약</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>

				<li class="icon">
					<img src="../img/cnt_icon5.png">
					<p>계약금지급</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>

				<li class="icon">
					<img src="../img/cnt_icon3.png">
					<p>시안승인</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>


				
				<li class="icon">
					<img src="../img/cnt_icon6.png">
					<p>사이트제작</p>
				</li>
				<li class="arw2">
					<span><img  src="../img/cnt_arrow2.png"></span>
				</li>
				<li class="icon">
					<img src="../img/cnt_icon12.png">
					<p>사이트오픈</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon11.png">
					<p>사이트등록</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon10.png">
					<p>도메인연결</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon9.png">
					<p>제작완료</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon8.png">
					<p>추가수정</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon7.png">
					<p>사이트검수</p>
				</li>
			</ul>
		</div>
    </div>
	<div class="cnt_box t_cnt_box3">
		<div class="box3_inner t_box3_inner">
			<h1>제작 프로세스</h1>
			<ul>
				<li class="icon">
					<img src="../img/cnt_icon1.png">
					<p>견적문의</p>
				</li class="icon">
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon2.png">
					<p>진행결정</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon3.png">
					<p>시안승인</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon4.png">
					<p>진행계약</p>
				</li>
				<li class="arw2">
					<span><img  src="../img/cnt_arrow2.png"></span>
				</li>
				<li class="icon">
					<img src="../img/cnt_icon8.png">
					<p>추가수정</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon7.png">
					<p>사이트검수</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon6.png">
					<p>사이트제작</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon5.png">
					<p>계약금지급</p>
				</li>
				<li class="arw2_1">
					<span><img  src="../img/cnt_arrow2.png"></span>
				</li>
				<li class="icon">
					<img src="../img/cnt_icon9.png">
					<p>제작완료</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon10.png">
					<p>도메인연결</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon11.png">
					<p>사이트등록</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon12.png">
					<p>사이트오픈</p>
				</li>
				
			</ul>
		</div>
    </div>

	<div class="cnt_box m_cnt_box3">
		<div class="box3_inner m_box3_inner">
			<h1>제작 프로세스</h1>
			<ul>
				<li class="icon">
					<img src="../img/cnt_icon1.png">
					<p>견적문의</p>
				</li class="icon">
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon2.png">
					<p>진행결정</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon3.png">
					<p>시안승인</p>
				</li>
				<li class="arw2">
					<span><img  src="../img/cnt_arrow2.png"></span>
				</li>
				<li class="icon">
					<img src="../img/cnt_icon6.png">
					<p>사이트제작</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				</li>
				<li class="icon">
					<img src="../img/cnt_icon5.png">
					<p>계약금지급</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon4.png">
					<p>진행계약</p>
				</li>
				<li class="arw2_1">
					<span><img  src="../img/cnt_arrow2.png"></span>
				</li>
				<li class="icon">
					<img src="../img/cnt_icon7.png">
					<p>사이트검수</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon8.png">
					<p>추가수정</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon9.png">
					<p>제작완료</p>
				</li>
				<li class="arw2">
					<span><img  src="../img/cnt_arrow2.png"></span>
				</li>
				<li class="icon">
					<img src="../img/cnt_icon12.png">
					<p>사이트오픈</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon11.png">
					<p>사이트등록</p>
				</li>
				<li class="arw">
					<img src="../img/cnt_arrow3.png">
				</li>
				<li class="icon">
					<img src="../img/cnt_icon10.png">
					<p>도메인연결</p>
				</li>
				
				
				
			</ul>
		</div>
    </div>
</div> <!--container-->
<!-- 메인화면 최신글 끝 -->

<?php
include_once('./_tail.php');
?>
