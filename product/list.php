<?php 
$css_file = 'product';
include "../head.sub.php";?>
 
<div class="wrap ">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				양모펠트
			</h3>
			<div class="h_btn">	
				<a href="/" class="home"><img src="/images/common/home.svg"/></a>
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
	<div class="sub_contents">
		<div class="pd_visual  swiper-container">
			<ul class="swiper-wrapper">
				<li class="swiper-slide">
					<img src="/images/pd/list.png" alt=""/>
					<h5>나의 사랑스런 반려동물을 부탁해! 동물 양모펠트</h5>
					<a href="#"></a>
				</li>
				<li class="swiper-slide">
					<img src="/images/pd/list2.png" alt=""/>
					<h5>나의 사랑스런 반려동물을 부탁해! 동물 양모펠트</h5>
					<a href="#"></a>
				</li>
			</ul>
			<div class="swiper-pagination"></div>
		</div>
		 <script>
			var swiper = new Swiper(".pd_visual", {
				slidesPerView: 'auto',
				loop:true,
				autoplay: {
					delay: 3000,
					disableOnInteraction: false,
				},
				 
				 speed:700,
				updateOnWindowResize: true,
			  pagination: {
				el: ".pd_visual .swiper-pagination",
				 
			  },
			  
			});
		</script>
		<div class="pd_category">
			<a href="#">전체</a>
			<a href="#">동물양모</a>
			<a href="#">캐릭터</a>
			<a href="#">소품</a>
			<a href="#">기타</a>
		
		</div>
		
		<div class="pd_category2 swiper-container">
			<div class="swiper-wrapper">
				<a href="#" class="swiper-slide on">전체</a>
			
				<a href="#" class="swiper-slide">동물양모</a>
				<a href="#" class="swiper-slide">캐릭터</a>
				<a href="#" class="swiper-slide">소품</a>
				<a href="#" class="swiper-slide">생활용품</a>
				<a href="#" class="swiper-slide">기타</a>
			</div>
		</div>
		 <script>
			var swiper2 = new Swiper(".pd_category2", {
				slidesPerView: 'auto',
				freemode:true
			});
		</script>
		
		<div class="new_list  basic_list">
			<div class="inbox">
				<div  class="main_tit">
					<h3>NEW! 새로 나온 상품</h3>
					 
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
					</ul>
				
				</div>
			</div>
		
		</div>
		<div class="section basic_list">
			<div class="inbox">
				<div  class="main_tit">
					<h3>전체상품</h3>
					
				</div>
				<div class="product_filter">
					<p>608개의 상품</p>
					<a href="#"><img src="/images/pd/filter.png" alt=""/> 추천순</a>
				</div>
				<div class="product_list">
					<ul>
						<li>
							<div class="pd_img">
								<a href="/product/view.php"><img src="/images/pd/thumb1.png" alt=""/></a>
								<button><span class="sound">좋아요</span></button>
								<div class="tag">
									<span>인기</span>
								</div>
							</div>
							<div class="pd_info">
								 <a href="/product/view.php">
								<h5>20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</a></h5>
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
								<a href="/product/view.php"><img src="/images/pd/thumb2.png" alt=""/></a>
								<button><span class="sound">좋아요</span></button>
								<div class="tag">
									<span>인기</span>
								</div>
							</div>
							<div class="pd_info">
								 <a href="/product/view.php">
								<h5>20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</a></h5>
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
					<a href="#" class="more">+ 더보기</a>
				</div>
			</div>
		
		</div>
	</div>
	<?php include "../tail.php";?>
 
</div>
<?php include "../tail.sub.php";?>
 
