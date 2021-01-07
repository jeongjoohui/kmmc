<?php
include_once("./_common.php"); // 메뉴별 공통 변수, 상수, 코드, 라이브러리

$me_code = "30";

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/marketing_1.php');
    return;
}

include_once("./_head.php");	// 메뉴별 상단 정의
?>

		<!-- sub_content S -->
		<div class="contents">
			<div class="cnt_box cnt_box1">
				<h1>마케팅 <strong>상품</strong></h1><br>
				<dl>
					<dd>블루오션은 전문가들에 의한 마케팅 전문 집단입니다.<br>
					최고의 전문가들이 머리를 맞대고 당신의 블루오션을 만들어드립니다.</dd>
				</dl>
				<ul>
					<a href="product_01.php">
						<li class="bn1">
							<div class="box actionImg8">
								<span class="more">+</span>
								<i class="fa fa-desktop"></i>
								<P>블로그</P>
								<div class="back">
									<div class="back_inner">
										<span class="sub_tit">브랜드 블로그</span>
										<img src="../img/cnt_hr.png">
										<span class="desc">광고주가 주체가 되어<br>브랜드 공식 블로그를 운영하는 것을 말합니다.</span>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_02.php">
						<li class="bn2">
							<div class="box actionImg8">  
								<span class="more">+</span>
								<i class="fa fa-coffee "></i>
								<P>카페</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<span class="sub_tit">브랜드 카페</span>
										<span class="desc">브랜드 공식 카페를 운영하는 것을 말합니다.</span>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_03.php">
						<li class="bn3 margin-none">
							<div class="box actionImg8">  
								<span class="more">+</span>
								<i class="fa fa-weixin"></i>
								<P>지식IN</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<span class="sub_tit">지식인 마케팅</span>
										<span class="desc">지식인이란 홍보하고자 하는 내용을<br>질문과 답변을 통해 홍보하는 것을 말합니다.</span>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_04.php">
						<li class="bn4">
							<div class="box actionImg8">
								<span class="more">+</span>
								<i class="fa fa-mobile"></i>
								<P>모바일</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<div class="rong_txt">
											<span class="sub_tit">모바일 마케팅</span>
											<span class="desc">스마트폰 4천만시대, 파급력이 폭발적인<br>모바일을 통한 마케팅 전략 노출 홍보를 말합니다.</span>
										</div>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_05.php">
						<li class="bn5">
							<div class="box actionImg8"> 
								<span class="more">+</span>
								<i class="fa fa-area-chart"></i>
								<P>디스플레이</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<span class="sub_tit">디스플레이 마케팅 (리타겟팅)</span>
										<span class="desc">빅데이터 기반 사용자의 방문기록을 체크하여<br>광고효율을 높여주는 마케팅입니다.</span>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_06.php">
						<li class="bn6 margin-none">
							<div class="box actionImg8"> 
								<span class="more">+</span>
								<i class="fa fa-youtube-play"></i>
								<P>SNS, 유튜브</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<span class="sub_tit">SNS 마케팅</span>
										<span class="desc">페이스북/인스타그램/유튜브 등<br>다양한 SNS를 활용하는 광고입니다.</span>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_07.php">
						<li class="bn7">
							<div class="box actionImg8"> 
								<span class="more">+</span>
								<i class="fa fa-newspaper-o"></i>
								<P>언론보도</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<span class="sub_tit">언론보도 마케팅</span>
										<span class="desc">기업의 PR 홍보 브랜드 상품 서비스 재화 등의<br>내용을 언론 매체 특히, 기사의 형식으로<br>게재하는 마케팅 방법을 말합니다.</span>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_08.php">
						<li class="bn8">
							<div class="box actionImg8"> 
								<span class="more">+</span>
								<i class="fa fa-tags"></i>
								<P>PPL</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<span class="sub_tit">Product Placement</span>
										<span class="desc">특정 기업의 협찬을 대가로 영화나 드라마에서<br>해당 기업의 상품이나 브랜드 이미지를<br>끼워넣는 광고 기법을 말합니다.</span>
									</div>
								</div>
							</div>
						</li>
					</a>
					<a href="product_09.php">
						<li class="bn9 margin-none">
							<div class="box actionImg8"> 
								<span class="more">+</span>
								<i class="fa fa-subway"></i>
								<P>대중교통</P>
								<div class="back">
									<div class="back_inner">
										<img src="../img/cnt_hr.png">
										<span class="sub_tit">대중교통 마케팅</span>
										<span class="desc">지하철 광고, 버스 광고 등의<br>	대중교통을 이용한 마케팅 기법을 말합니다. </span>
									</div>
								</div>
							</div>
						</li>
					</a>
				</ul>
			</div> <!--cnt_box1-->
			<div style="margin-bottom:35px;">&nbsp;</div>
		</div>
		<!-- //sub_content E -->

<?php
include_once("./_tail.php");	// 메뉴별 하단 정의
?>