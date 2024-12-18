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
				<a href="tab1"  >작품정보</a>
				<a href="tab2">후기</a>
				<a href="tab3">Q&A</a>
				<a href="tab4">작가님정보</a>
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
					<h3>작품 특징<span class="info"><i class="fa-solid fa-info"></i></span></h3>
					</div>
					<ul>
						<li>
							<img src="/images/pd/char1.png" alt=""/>
							모든 과정이 핸드메이드예요
						</li>
						<li>
							<img src="/images/pd/char2.png" alt=""/>
							맞춤 제작 가능해요
						</li>
						<li>
							<img src="/images/pd/char3.png" alt=""/>
							선물 포장 가능해요
						</li>
					</ul>
				</div>
				<div class="clickbox">
					<h5>작품 특징 <span><i class="fa-solid fa-angle-down trans"></i></span></h5>
					<div>
						<p>내용을 작성해주세요</p>
					
					</div>
				
				</div>
				<div class="clickbox">
					<h5>제작 / 배송 <span><i class="fa-solid fa-angle-down trans"></i></span></h5>
					<div>
						<p>10일 이내</p>
					
					</div>
				
				</div>
				<div class="clickbox">
					<h5>교환 / 환불 / 반품 <span><i class="fa-solid fa-angle-down trans"></i></span></h5>
					<div>
						<p>10일 이내</p>
					
					</div>
				
				</div>
				<div class="clickbox">
					<h5>작품 제보센터 <a href="#">제보하기</a></h5>
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
			<div class="tab3"  id="tab3">
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
			
			
			<div class="tab4" id="tab4">
				<div class="inbox">
					<div  class="main_tit">
						<h3>작가님의 다른 작품 더보기</h3>
						<a href="/product/writer.php"><i class="fa-solid fa-angle-right"></i></a>
					</div>
					<div class="like">
						<h5>관심 브랜드 <i class="fa-solid fa-angle-right"></i></h5>
						<p>내가 찜한 브랜드 보러가기</p>
						<a href="#"></a>
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
  $( window ).scroll( function() {
	

	sh = $(".tab").height(); 
	$('.tab a').click(function(e) {
		let winH = screen.height;
		let winH2 = window.innerHeight;
		var winR = winH - winH2;
		 
		e.preventDefault();
		 
		  target = $(this).attr('href');
		 
		  
        $('html,body').animate({
            scrollTop: $("#" + target).offset().top - (sh+winR)
        }, 300);
		$('.tab a').removeClass('on');
		$(this).addClass('on');
    });   
	
	var sit_top = $( ".product_view").offset().top;
	var sit_H = $( ".product_view").offset().top + $( ".product_view").outerHeight();
	if ( $( document ).scrollTop() > sit_top && $( document ).scrollTop() < sit_H) {
		 $(".tab").addClass("fix");
	}else{
		 $(".tab").removeClass("fix");
	}
	
	fir_href = $(".tab a").eq(1).attr('href');
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
	 
		if (  ($(this).scrollTop() >= (target.offset().top - sh) && $(this).scrollTop() <= (target_end - sh))) {
		  
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
 
