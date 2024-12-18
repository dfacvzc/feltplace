<?php 
$css_file = 'member';
$css_file2 = 'product';
include "../head.sub.php";?>
 
<div class="wrap bg_gray">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				마이페이지 
			</h3>
			<div class="h_btn">	
				<a href="#" class="home"><img src="/images/common/home.svg"/></a>
				<button><img src="/images/common/sch.svg"/></button>
				<a href="#"><img src="/images/common/basket.svg"/><span>2</span></a>
			</div>
			
		
		</div>
		<div class="search">
			<div class="inbox">
				<input type="text" >
				<button><img src="/images/common/sch.svg"/></button>
			</div>
		</div>
	</div>
	<div class="sub_contents">
		<div class="inbox  ">
			
			<div class="my_profile">
				<div  class="main_tit my_tit">
					<h3>내 정보 관리 <img src="/images/member/pencil.png" alt=""/></h3>
				</div>
				<div class="my_thumb">
					<a href="#" style="background:url(/images/writer/profile.png) no-repeat 50%"> 
						<span><img src="/images/member/camera.png" alt=""/></span>
					</a>
					
				</div>
				<div class="wt_pfbox padd">
					<h5 class="center"><a href="#">빨간양모차차</a></h5>
					<a href="#" class="wt_email center">ms11@naver.com</a>
					<div>
						<div class="pr_star black center">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star "></i>
							<i class="fa-solid fa-star off"></i>
							4.0
							<span class="gray">(999+)</span>
						</div>
					</div>
				</div>
			
			</div>
			<div class="wt_info">
				<ul>
					<li>
						<h6>닉네임(별명)</h6>
						<p class="wt_name">빨간양모차차</p>
					
					</li>
					<li>
						<h6>프로필</h6>
						<p>빨간망토차차는 여러가지 즐겁게 만들 수 있는 것들을 만들어갑니다. 제가 행복하게 만든 작품들이 여러분께도 행복을 드리면 좋겠습니다.</p>
					
					</li>
					<li class="wt_email">
						<h6>이메일(로그인 ID)</h6>
						<p>ms11@naver.com</p>
						<a href="#" class="btn btn4">인증하기</a>
					
					</li>
					<li class="career">
						<div>
							<h5><img src="/images/writer/badge1.png" alt=""/> 자격증 보유현황</h5>
							<ul class="dot_list">
								<li>초상화 1급 / 초상화 2급</li>
								<li>양모펠트 1급 2급</li>
								<li>아트돌 2급</li>
								<li>양모 미니어처 1급 2급</li>
							</ul>
						
						</div>
					
					</li>
					<li class="career">
						<div>
							<h5><img src="/images/writer/badge2.png" alt=""/> 강의현황</h5>
							<ul class="dot_list">
								<li>초상화 1급 / 초상화 2급</li>
								<li>양모펠트 1급 2급</li>
								<li>아트돌 2급</li>
								<li>양모 미니어처 1급 2급</li>
							</ul>
						
						</div>
					
					</li>
				</ul>
				<button class="my_send btn btn2">저장하기</button>
			</div>
			<div class="my_btn">
				<a href="#" class="gray">비밀번호 변경하기</a>
				<a href="#" class="tbtn1">로그아웃</a>
				<a href="#" class="tbtn1">회원 탈퇴하기</a>
			
			</div>
		</div>
		 
	 
		 
	</div>
	 
</div>
<?php include "../tail.sub.php";?>
 
