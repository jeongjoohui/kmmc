<?php
include_once("./_common.php"); // 메뉴별 공통 변수, 상수, 코드, 라이브러리

$me_code = "20";

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/page/consulting_1.php');
    return;
}

include_once("./_head.php");	// 메뉴별 상단 정의
?>

		<!-- sub_content S -->
		<div class="contents">
			<div class="consulting">
				<div class="number">01</div>
				<h1>마케팅 <strong>컨설팅</strong></h1>
				<div class="con01">
					<ul>
						<li>
							<p class="title">시장조사에서 전략수립까지 <strong>시장 상황에 맞는 전략</strong></p>                    
							마케팅 전략은 마케팅 정책에 따라 대상 시장 경쟁<br>
							업체 등 다양한 환경조건의 변동에 대응하여 마케팅<br>
							수단을 믹스하여 구성을 결정합니다.
							기존의 마케팅 자원을 효과적으로 운영하고
							관리할 수 있으며, <em>향후 기업의 로드맵과 비전을
							밝히는 방법입니다.</em>
						</li>
						<li>
							<p class="title">브랜드 인지도와 고객의 피드백을 높이는 <strong>온라인 IMC 전략</strong></p>
							온라인 마케팅 전략은 내/외적인 마케팅의 자원을 활용한 브랜드 관리를 
							위해 <em>컨셉 개발부터 고객과의 소통채널, 피드백까지 통합적인 쌍방향
							커뮤니케이션 기반의 마케팅 전략을 수립</em>할 수 있습니다.
						</li>
						<li>
							<p class="title">성공적인 신제품의 시장진입을 위한 <strong>차별화된 런칭전략</strong></p>
							신제품의 런칭 전략은, 제품 출시 전 소비자를 대상으로 테스트 기간을
							거침으로써 상품의 완성도를 높이는 필드 테스트부터, 시장 조사 및 분석을
							바탕으로 고객이 바라는 브랜드로 포지셔닝 하기 위한 전략을 수립하게 됩니다.
						</li>
					</ul>
				</div>
			</div>
			<div class="consulting">
				<div class="number"><span>02</span></div>
				<h1>사이트 <strong>분석</strong></h1>
				<div class="con02">
					<ul>
						<li>
							<p class="title">오랜 경험과 노하우를 바탕으로 한 <strong>쇼핑몰/웹페이지의 문제점을 정량적 정성적 분석</strong></p>                    
							<em>자체 개발한 마케팅 최적화 진단 시스템</em>을 통해 기업의 마케팅 경영에
							부족한 부분을 정량적 수치와 자체 전문가 집단에 의한 정성적 분석과
							<em>솔루션을 제공</em>합니다.                  
						</li>
						<li style="width:calc(50% -28px); border-bottom:1px solid #ececec; padding:0 0 66px 210px;">
							<p class="title">경쟁사의 쇼핑몰/웹페이지의 운영 상태와<br>마케팅 전략 등을 모니터링 하여, <strong>고객사의 전략 참조 제공</strong></p>
							<em>경쟁사 사이트의 현 마케팅 현황, 특징, 장단점, 성공 요인 등을 분석</em>하여
							프로모션 전략으로 삼고 직접 경쟁 또는 경쟁 회피 등의 다양한 방법의
							<em>4P 전략</em>을 통해 비교우위적인 수익 창출을 모색
						</li>
					</ul>
				</div>
			</div>
			<div class="consulting">
				<div class="number">03</div>
				<h1>마케팅 <strong>서베이</strong></h1>
				<div class="con03">
					<ul>
						<li>
							<p class="title">마케팅 전술의 경쟁력을 확보하기 위해,<br>상품 서비스에 대한 <strong>실제 이용후기, 개선점, 건의 등을 조사</strong></p>
							고객님의 상품 또는 재화가 소비자에게 전달되는 일련의 과정 등을 평가하여
							<em>서비스의 품질 수준을 전반적으로 개선하기 위한 마케팅 방법</em>이 필요합니다.
						</li>
						<li style="width:calc(50% -28px); border-bottom:1px solid #ececec; padding:0 0 62px 210px;">
							<p class="title">보유고객 / 대상고객을 대상으로<br>상품 및 사이트에 대한 <strong>고객만족도 조사</strong></p>
							고객의 만족도 및 충성도를 결정하는 이유를 아는 것은 매우 큰 성공 포인트입니다.
							<em>고객을 알아야 고객과의 관계를 강화하고 보다 양질의 상품/서비스를 제공 가능</em>합니다.
						</li>
					</ul>
				</div>
			</div>
			<div class="consulting">
				<div class="number">04</div>
				<h1>시장조사 <strong>분석</strong></h1>
				<div class="con04">
					<ul>
						<li>
							<p class="title">시장의 트렌드, 업종별 시장동향,<br>사회이슈, 시장 규모 등 <strong>외부환경적 요인 조사</strong></p>
							시장은 항상 변화하며 진화합니다. <em>시장의 흐름을 이해하고 대처하는 것</em>은
							기업의 승패를 결정짓습니다.
						</li>
						<li>
							<p class="title">경쟁사의 강/약점, 상품 및<br>가격 전략, 프로모션 방법 등의 <strong>특이사항 조사</strong></p>
							경쟁사의 생산 판매 유통 능력, 장점과 약점, 실행 프로모션 등을 분석하여 <em>4P전략을 수립</em>합니다.
						</li>
						<li>
							<p class="title">시장 진출에 앞서 현실적으로 시장 내 <strong>사업규모, 수요예측, 성장가능성 등의 분석</strong></p>
							사업타당성 분석은 사업계획서 작성 전 단계입니다. 현재 고려중인 사업의
							성공가능성을 분석하여 <em>시장의 진입여부, 초기 전략 및 나아가 경영방침</em>까지 결정하게 됩니다.
						</li>
					</ul>
				</div>
			</div>
			<div style="margin-bottom:60px;">&nbsp;</div>
			<div class="process">
				<h1>컨설팅 <strong>프로세스</strong></h1>
				<div class="process_img"><img src="../img/process_consulting.png"></div>
			</div>
		</div>
		<!-- //sub_content E -->

<?php
include_once("./_tail.php");	// 메뉴별 하단 정의
?>