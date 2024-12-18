<?php 
define('_INDEX_', true);
$css_file = 'main2';
include "head.sub.php";?>
 
<div class="wrap ">
	<div class="header black">
		<div class="inbox">
			<h1><a href="/"><img src="/images/common/logo.svg" alt="펠트플레이스"/></a></h1>
			<div class="h_btn">
				<button class="sch_btn"><img src="/images/common/sch.svg"/></button>
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
	<div class="visual swiper-container">
		<ul class="swiper-wrapper">
			<li class="swiper-slide"><a href="#"><img src="/images/main/visual2.png" alt=""/></a></li>
			<li class="swiper-slide"><a href="#"><img src="/images/main/visual2.png" alt=""/></a></li>
		</ul>	
		 <div class="swiper-pagination"></div>
	</div>
	 <script>
    var swiper = new Swiper(".visual", {
		slidesPerView: 'auto',
		loop:true,
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		 
		 speed:700,
		updateOnWindowResize: true,
      pagination: {
        el: ".visual .swiper-pagination",
        type: "fraction",
      },
      
    });
  </script>
	<div class="contents">
		<div class="  main_icon">
			<div class="inbox">
				<ul>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon1.png" alt=""/>
							NEW
						</a>
					</li>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon2.png" alt=""/>
							양모펠트
						</a>
					</li>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon3.png" alt=""/>
							초상화
						</a>
					</li>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon4.png" alt=""/>
							아트돌
						</a>
					</li>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon5.png" alt=""/>
							액자
						</a>
					</li>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon6.png" alt=""/>
							키링
						</a>
					</li>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon7.png" alt=""/>
							의류
						</a>
					</li>
					<li>
						<a href="/product/list.php"><img src="/images/main/icon8.png" alt=""/>
							봉제인형
						</a>
					</li>
					
					
				</ul>
			</div>
		</div>
		<div class="section main_popular">
			<div class="inbox">
				<div  class="main_tit">
					<h3>실시간 인기 클래스</h3>
					<a href="/product/list.php"><i class="fa-solid fa-angle-right"></i></a>
				</div>
				<div class="product_list  swiper-container">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<div class="pd_img">
								<a href="/product/view.php"><img src="/images/main/popular.png" alt=""/></a>
								<button><span class="sound">좋아요</span></button>
							</div>
							<div class="pd_info">
								<a href="/product/view.php">
									<span class="pd_cate">강남 / 홍대</span>
									<h5>20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</h5>
									<div class="pd_price">
										<span class="sale">30%</span>
										<em class="bold">5,000</em>원 <span class="option">/시간</span>
									</div>
									<div class="pr_star">
										<i class="fa-solid fa-star"></i>
										<em class="bold">5.0</em> (152)
									</div>
								</a>
							</div>
						
						</li>
						<li class="swiper-slide">
							<div class="pd_img">
								<a href="/product/view.php"><img src="/images/main/popular.png" alt=""/></a>
								<button><span class="sound">좋아요</span></button>
							</div>
							<div class="pd_info">
								<a href="/product/view.php">
									<span class="pd_cate">강남 / 홍대</span>
									<h5>20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</h5>
									<div class="pd_price">
										<span class="sale">30%</span>
										<em class="bold">5,000</em>원 <span class="option">/시간</span>
									</div>
									<div class="pr_star">
										<i class="fa-solid fa-star"></i>
										<em class="bold">5.0</em> (152)
									</div>
								</a>
							</div>
						
						</li>
					</ul>
				
				</div>
			</div>
		
		</div>
		<div class="  main_lecture">
			<div class="inbox">
				<div  class="main_tit">
					<h3>실시간 인기 클래스</h3>
					<a href="/lecture/list.php"><i class="fa-solid fa-angle-right"></i></a>
				</div>
				<div class="lecture_list">
					<ul>
						<li>
							<a href="/lecture/view.php"><img src="/images/main/lecture.png" alt=""/></a>
							<div>
								<a href="/lecture/view.php">
								<h5>시들지 않는 나만의 반려식물, 뜨개로 자유롭게 만들어 볼까요?</h5>
								<span>드로잉 · 쫌언니</span>
								</a>
							</div>
						</li>
					
					
					</ul>
				</div>
			</div>
		</div>
		<div class="section basic_list">
			<div class="inbox">
				<div  class="main_tit">
					<h3>NEW! 새로 나온 상품</h3>
					<a href="/product/list.php"><i class="fa-solid fa-angle-right"></i></a>
				</div>
				<div class="product_list">
					<ul>
						<li>
							<div class="pd_img">
								<a href="/product/view.php"><img src="/images/main/new.png" alt=""/></a>
								<button><span class="sound">좋아요</span></button>
								<div class="tag">
									<span>인기</span>
								</div>
							</div>
							<div class="pd_info">
								<a href="/product/view.php">
								<h5>20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</h5>
								<div class="pd_price">
									<span class="sale">30%</span>
									<em>5,000</em>원<span class="option">/시간</span>
								</div>
								<div class="pr_star">
									<i class="fa-solid fa-star"></i>
									<em>5.0</em> (152)
								</div>
								</a>
							</div>
						
						</li>
						<li>
							<div class="pd_img">
								<a href="/product/view.php"><img src="/images/main/new.png" alt=""/></a>
								<button><span class="sound">좋아요</span></button>
								<div class="tag">
									<span>인기</span>
								</div>
							</div>
							<div class="pd_info">
								 <a href="/product/view.php">
								<h5><a href="#">20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</a></h5>
								<div class="pd_price">
									<span class="sale">30%</span>
									<em>5,000</em>원<span class="option">/시간</span>
								</div>
								<div class="pr_star">
									<i class="fa-solid fa-star"></i>
									<em>5.0</em> (152)
								</div>
								</a>
							</div>
						
						</li>
					</ul>
				
				</div>
			</div>
		
		</div>
		<div class="  main_review">
			<div class="inbox">
				<div  class="main_tit">
					<h3>수강생 후기를 확인하세요!</h3>
					<a href="/product/review.php"><i class="fa-solid fa-angle-right"></i></a>
				</div>
				<div class="rev_list swiper-container">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<img src="/images/main/review.png" alt=""/>
							<div>
								
								<h5>이 강의를 듣고 똥손이 금손이 되는 마법을 경험했습니다.</h5>
								<div class="pr_star">
									<i class="fa-solid fa-star"></i>
									<em>5.0</em> (152)
								</div>
								<p class="rev_tag">
									푸들 비숑 말티푸 강아지 인형 만들기
								</p>
								
							</div>
							<a href="/product/review_detail.php"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="section basic_list">
			<div class="inbox">
				<div  class="main_tit">
					<h3>전체상품</h3>
					<a href="/product/list.php"><i class="fa-solid fa-angle-right"></i></a>
				</div>
				<div class="product_list">
					<ul>
						<li>
							<div class="pd_img">
								<a href="/product/view.php"><img src="/images/main/new.png" alt=""/></a>
								<button><span class="sound">좋아요</span></button>
								<div class="tag">
									<span>인기</span>
								</div>
							</div>
							<div class="pd_info">
								<a href="/product/view.php">
								<h5> 20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</h5>
								<div class="pd_price">
									<span class="sale">30%</span>
									<em>5,000</em>원<span class="option">/시간</span>
								</div>
								<div class="pr_star">
									<i class="fa-solid fa-star"></i>
									<em>5.0</em> (152)
								</div>
								</a>
							</div>
						
						</li>
					</ul>
				
				</div>
			</div>
		</div>
	</div>
	<?php include "tail.php";?>
</div>
<?php include "tail.sub.php";?>
 
