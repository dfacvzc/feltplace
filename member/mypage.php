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
			 
				<a href="#" class="bell"><img src="/images/common/bell.png"/><span>2</span></a>
				<a href="#" class="setting"><img src="/images/common/setting.png"/></a>
			</div>
			
		
		</div>
		 
	</div>
	<div class="sub_contents">
		<div class="inbox  ">
			
			<div class="my_profile">
				 
				<div class="my_thumb">
					<a href="#" style="background:url(/images/common/user.png) no-repeat 50%"> 
						
					</a>
					
				</div>
				<div class="wt_pfbox padd">
					<h5 class="center"><a href="#">손님</a></h5>
					<a href="#" class="wt_email center">로그인을 진행해주세요</a>
					<div class="mb_btn">
						 <a href="#" class="btn btn2">로그인</a>
					</div>
				</div>
			
			</div>
			<div class="my_quick">
				<a href="#">
					<div>
						<img src="/images/member/quick1.png" alt=""/>
						나의주문
					</div>
				</a>
				<a href="#">
					<div>
						<img src="/images/member/quick2.png" alt=""/>
						리뷰
					</div>
				</a>
				<a href="#">
					<div>
						<img src="/images/member/quick3.png" alt=""/>
						찜
						<span class="noti"></span>
					</div>
				</a>
				<a href="#">
					<div>
						<img src="/images/member/quick4.png" alt=""/>
						쿠폰
						<span class="noti"></span>
					</div>
				</a>
				
			</div>
			<div class="mb_banner  swiper-container">
				<ul class="swiper-wrapper">
					<li class="swiper-slide"><a href="#"><img src="/images/member/banner.png" alt=""/></a></li>
					<li class="swiper-slide"><a href="#"><img src="/images/member/banner.png" alt=""/></a></li>
					 
				</ul>
				<div class="swiper-pagination"></div>
			</div>
			<div class="my_menu">
				<ul>
					<li>
						<a href="#"><img src="/images/member/mb_icon1.png" alt=""/> 장바구니 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<a href="#"><img src="/images/member/mb_icon2.png" alt=""/> 주문 내역 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<a href="#"><img src="/images/member/mb_icon3.png" alt=""/> 결제 내역 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<a href="#"><img src="/images/member/mb_icon4.png" alt=""/> 리뷰 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<a href="#"><img src="/images/member/mb_icon5.png" alt=""/> Q&A <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<a href="#"><img src="/images/member/mb_icon6.png" alt=""/> 공지사항 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<a href="#"><img src="/images/member/mb_icon7.png" alt=""/> 고객센터 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					
				</ul>
			
			</div>
			<div class="like bg_white mt0">
					<h5>관심 브랜드 <i class="fa-solid fa-angle-right"></i></h5>
					<p>내가 찜한 브랜드 보러가기</p>
					<a href="#"></a>
				</div>
			</div>
			<div class="my_btn">
				<a href="#" class="gray">비밀번호 변경하기</a>
				<a href="#" class="tbtn1">로그아웃</a>
				<a href="#" class="tbtn1">회원 탈퇴하기</a>
			
			</div>
		</div>
		 
	 
		 
	</div>
	 
</div>
 <script>
	var swiper = new Swiper(".mb_banner", {
		slidesPerView: 'auto',
		loop:true,
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		 
		 speed:700,
		updateOnWindowResize: true,
	  pagination: {
		el: ".mb_banner .swiper-pagination",
		 
	  },
	  
	});
</script>
<?php include "../tail.sub.php";?>
 
