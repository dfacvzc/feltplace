<?php 
$css_file = 'product';
include "../head.sub.php";?>
 
<div class="wrap">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				양모펠트
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
		<div class="pd_visual  swiper-container">
			<ul class="swiper-wrapper">
				<li class="swiper-slide">
					<img src="/images/pd/list.png" alt=""/>
					 
					<a href="#"></a>
				</li>
				<li class="swiper-slide">
					<img src="/images/pd/list2.png" alt=""/>
					 
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
		<div class="product_info">
			<div class="inbox">
				<div class="pd_tit">
					<span class="cate cate1">양모펠트</span>
					<h5>반려견 전신인형 35cm (24년 상반기 주문마감) 제작 가능</h5>
				</div>
				<div class="pd_price">
					<span class="sale">30%</span>
					<em>5,000</em>원 
					<a href="#" class="share"><img src="/images/pd/share.png" alt=""/></a>
				</div>
				<div class="pr_star">
					<i class="fa-solid fa-star"></i>
					<em>5.0</em> (152)
				</div>
				<div class="profile">
					<a href="#" class="pf_img"><img src="/images/pd/profile.png" alt=""/></a>
					<div>
						<h6><a href="#">빨간양모차차</a></h6>
						<div class="pr_star">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<em>5.0</em> (152)
						</div>
						<a href="#"><i class="fa-solid fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="product_view">
			<div class="tab">
				<a href="tab1" class="on">커리큘럼</a>
				<a href="tab2">후기</a>
				<a href="tab3">추천강의</a>
				<a href="tab4">Q&A</a>
			</div>
			<div class="best_review v_review swiper-container">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<a href="/product/review_detail.php">
						<div class="rv_writer">
							<div>
								<div class="pr_star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star "></i>
									<i class="fa-solid fa-star off"></i>
								</div>
								lee**********
							</div>
							<span class="date">2024.08.18</span>
						</div>
						<div class="rv_con">
							<p>
								
								와 캐릭터 너무 귀엽고 따뜻해요!<br>
								특징 잘 살려주시고 감사드립니다
								
							</p>
							<span class="rv_img"><img src="/images/pd/rv_img.png" alt=""/></span>
						</div>
						</a>
					</li>	
				</ul>
			</div>
			 <script>
			var swiper = new Swiper(".best_review", {
				slidesPerView: 'auto',
				loop:true,
				autoplay: {
					delay: 3000,
					disableOnInteraction: false,
				},
				 
				 speed:700,
				updateOnWindowResize: true,
			  
			  
			});
		  </script>
			<div class="tab1" id="tab1">
				<div class="info_box">
					<div  class="main_tit">
					<h3>강의 커리큘럼<span class="info"><i class="fa-solid fa-info"></i></span></h3>
					</div>
					<ul>
						<li>
							<span class="num">1</span>
							니들펠트와 본격 친해지기
							<p>
							1. 양모 간 차이점 이해하기<br>
							2. 니들펠트 바늘 간 차이점 이해하기<br>
							3. 니들펠트의 기본! 동글동글 양모볼 1단계
							</p>
						</li>
						<li>
							<span class="num">2</span>
							삐약 병아리를 만들어보자
							<p>
							1. 병아리 몸통 만들기 1단계<br>
							2. 파닥파닥 병아리 날개 만들어주기<br>
							3. 병아리 얼굴 만들기
							</p>
						</li>
						<li>
							<span class="num">3</span>
							폴짝 토끼 인형 1편-전체 구도 잡기
							<p>
							1. 빨간 모자 쓴 토끼 얼굴 만들기<br>
							2. 토끼 몸통 만들고 얼굴과 이어주기
							</p>
						</li>
					</ul>
				</div>
				<div class="clickbox">
					<h5>강의 정보제공 고시 <span><i class="fa-solid fa-angle-down"></i></span></h5>
					<div>
						<p>내용을 작성해주세요</p>
					
					</div>
				
				</div>
			 
				<div class="clickbox">
					<h5>강의 제보센터 <a href="#">제보하기</a></h5>
				</div>
			</div>
			<div class="tab2  "  id="tab2">
				<div class="inbox">
					<div class="v_rv_tit">
						<h5>리뷰 (969) </h5>
						<div class="star">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</div>
					</div>
					<div class="photo_review">
						<h5>사진후기(56)</h5>
						<ul>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a></li>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a></li>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a></li>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a></li>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a></li>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a></li>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a></li>
							<li><a href="#"><img src="/images/pd/rv_img.png" alt=""/></a>
								<a href="#" class="more">+ 더보기</a>
							
							</li>
						 
						</ul>
					</div>
					<div class="  v_review">
						<h5>최신순 <a href="#">후기작성</a></h5>
						<ul>
							<li>
								<div class="rv_writer">
									<div>
										<div class="pr_star black">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star "></i>
											<i class="fa-solid fa-star off"></i>
											4.0
											<span class="gray">(999+)</span>
										</div>
										lee**********
									</div>
									<span class="date">2024.08.18</span>
								</div>
								<div class="rv_con">
									<div class="rv_option">
										<span>선물리뷰</span>
										옵션 : [SIZE]ONE SIZE
									</div>
									<p>
										<a href="#">
										와 캐릭터 너무 귀엽고 따뜻해요! 
									 
										</a>
									</p>
									<a href="#" class="rv_img"><img src="/images/pd/rv_img.png" alt=""/></a>
								</div>
							</li>	
							<li>
								<div class="rv_writer">
									<div>
										<div class="pr_star black">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star "></i>
											<i class="fa-solid fa-star off"></i>
											4.0
											<span class="gray">(999+)</span>
										</div>
										lee**********
									</div>
									<span class="date">2024.08.18</span>
								</div>
								<div class="rv_con">
									<div class="rv_option">
										<span>선물리뷰</span>
										옵션 : [SIZE]ONE SIZE
									</div>
									<p>
										<a href="#">
										와 캐릭터 너무 귀엽고 따뜻해요! 
									 
										</a>
									</p>
									<a href="#" class="rv_img"><img src="/images/pd/rv_img.png" alt=""/></a>
								</div>
							</li>	
							<li>
								<div class="rv_writer">
									<div>
										<div class="pr_star black">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star "></i>
											<i class="fa-solid fa-star off"></i>
											4.0
											<span class="gray">(999+)</span>
										</div>
										lee**********
									</div>
									<span class="date">2024.08.18</span>
								</div>
								<div class="rv_con">
									<div class="rv_option">
										<span>선물리뷰</span>
										옵션 : [SIZE]ONE SIZE
									</div>
									<p>
										<a href="#">
										와 캐릭터 너무 귀엽고 따뜻해요! 
									 
										</a>
									</p>
									<a href="#" class="rv_img"><img src="/images/pd/rv_img.png" alt=""/></a>
								</div>
							</li>	
						</ul>
					</div>
				</div>
			
			
			</div>
			<div class="tab3 main_popular"  id="tab3">
				<div class="inbox">
					<h5 class="tab_tit">이 강의와 비슷한 추천 강의 </h5>
					<div class="product_list  swiper-container">
						<ul class="swiper-wrapper">
							<li class="swiper-slide">
								<div class="pd_img">
									<a href="#"><img src="/images/main/popular.png" alt=""/></a>
									<button><span class="sound">좋아요</span></button>
								</div>
								<div class="pd_info">
									<span class="pd_cate">강남 / 홍대</span>
									<h5><a href="#">20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</a></h5>
									<div class="pd_price">
										<span class="sale">30%</span>
										<em class="bold">5,000</em>원 <span class="option">/시간</span>
									</div>
									<div class="pr_star">
										<i class="fa-solid fa-star"></i>
										<em class="bold">5.0</em> (152)
									</div>
								
								</div>
							
							</li>
							<li class="swiper-slide">
								<div class="pd_img">
									<a href="#"><img src="/images/main/popular.png" alt=""/></a>
									<button><span class="sound">좋아요</span></button>
								</div>
								<div class="pd_info">
									<span class="pd_cate">강남 / 홍대</span>
									<h5><a href="#">20년 경력 선생님과 함꼐하는 왕초보도 쉽게 배우는 양모펠트 강의-초보자용</a></h5>
									<div class="pd_price">
										<span class="sale">30%</span>
										<em class="bold">5,000</em>원 <span class="option">/시간</span>
									</div>
									<div class="pr_star">
										<i class="fa-solid fa-star"></i>
										<em class="bold">5.0</em> (152)
									</div>
								
								</div>
							
							</li>
						</ul>
					
					</div>
				</div>
			</div>
			<div class="tab4"  id="tab4">
				<div class="inbox">
					<h5 class="tab_tit">상품 Q&A <a href="#">Q&A쓰기</a></h5>
					<div class="v_qna">
						<ul>
							<li>
								<div class="qa_writer">
									<div>
										 
										lee**********
									</div>
									<span class="date">2024.08.18</span>
								</div>
								<div class="qa_con">
									<div class="qa_option">
										[배송문의]
									</div>
									<p>
										<a href="#">
										<img src="/images/common/lock.png" alt=""/>
										비밀글입니다.
									 
										</a>
									</p>
									 <a href="#" class="state state1">No</a>
								</div>
							</li>
							<li>
								<div class="qa_writer">
									<div>
										 
										lee**********
									</div>
									<span class="date">2024.08.18</span>
								</div>
								<div class="qa_con">
									<div class="qa_option">
										[배송문의]
									</div>
									<p>
										<a href="#">
										<img src="/images/common/lock.png" alt=""/>
										비밀글입니다.
									 
										</a>
									</p>
									 <a href="#" class="state state2">YES</a>
								</div>
							</li>
						</ul>
					
					</div>
				</div>
			</div>
			
			 
			
			
			
		</div>
		<div class="product_btn">
			<button><img src="/images/common/heart1.svg" alt=""/> 1.4천</button>
			<a href="#" class="btn_submit btn">문의하기</a>
			<a href="#" class="f_cs"><img src="/images/common/cs.png" alt=""/></a>
		</div>
	</div>
<script>
jQuery(function($){
	$(".clickbox h5 ").click(function(){
		$(".clickbox>div").slideUp(200);
		$(".clickbox h5 i").removeClass('fa-angle-up');
		$(".clickbox h5 i").addClass('fa-angle-down');
 
		if($(this).parent().find(">div").css("display") != "block"){
			 $(this).parent().find(">div").slideDown(200);
			 $(this).find('i').addClass('fa-angle-up');
		}
	   
		
	});
	
	$('.tab a').click(function(e) {
		let winH = screen.height;
		let winH2 = window.innerHeight;
		var winR = winH - winH2;
		 sh = $(".tab").height(); 
		e.preventDefault();
		 
		  target = $(this).attr('href');
		 
		  
        $('html,body').animate({
            scrollTop: $("#" + target).offset().top - (sh+winR-10)
        }, 300);
		$('.tab a').removeClass('on');
		$(this).addClass('on');
    });   
  $( window ).scroll( function() {
	

	let winH = screen.height;
		let winH2 = window.innerHeight;
		var winR = winH - winH2;
	
	var sit_top = $( ".product_view").offset().top;
	var sit_H = $( ".product_view").offset().top + $( ".product_view").outerHeight();
	if ( $( document ).scrollTop() > sit_top && $( document ).scrollTop() < sit_H) {
		 $(".tab").addClass("fix");
	}else{
		 $(".tab").removeClass("fix");
	}
	
	fir_href = $(".tab a").eq(0).attr('href');
	sh =  $(".tab").outerHeight();
	 
	fir_target =$("#"+fir_href); 
	fir_h = fir_target.height();
	  
	fir_end =  fir_target.offset().top;
 
	 if (  $(this).scrollTop() <= fir_end) {
		 $(".tab a").removeClass("on");
		 $(".tab a").eq(0).addClass("on");
	 }
	 
	 
	len = $(".tab a").length;
	for (i = 0; i < len; i++) {
		href = $(".tab a").eq(i).attr('href');
	 
		target = $("#" + href);
		target_h = target.outerHeight();
		 
		target_end = target_h +target.offset().top;
	 
		if (  ($(this).scrollTop() >= (target.offset().top - (sh+winR)) && $(this).scrollTop() <= (target_end - (sh+winR)))) {
		  
			$(".tab a").removeClass("on");
			$(".tab a").eq(i).addClass("on");
			 
			 
			break;
		}
	}
		
		
	});
});
</script>
	<?php include "../tail.php";?> 
</div>
<?php include "../tail.sub.php";?>
 
