<?php 
$css_file = 'member';
$css_file2 = 'product';
include "../head.sub.php";?>
 
<div class="wrap  ">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				알림  
			</h3>
			<div class="h_btn">	
			 
				<a href="#"><img src="/images/common/close.png"/></a> 
			</div>
			
		
		</div>
		 
	</div>
	<div class="sub_contents">
		<div class="mb_tab tab">
			<a href="#">전체</a>
			<a href="#">댓글</a>
			<a href="#">이벤트</a>
			<a href="#">시스템</a>
			
		</div>
	 
		<div class="inbox  ">
			
			<div class="noti_list faq">
				 <ul>
					<li>
						<h5><span>Q.</span><em>[주문/결제] 주문을 취소하고 싶어요.</em> 
						<i class="fa-solid fa-angle-down trans"></i>
						</h5>
						<div class="trans close">
							주문 취소는 주문내역에서 신청하실 수 있으며, 취소를 희망하시는 작품을 각각 선택하여 신청이 필요합니다.
주문건 전체 취소가 필요한 경우이더라도 각각의 작품을 선택하여 취소 신청해야 합니다.
						</div>
					</li>
					 <li>
						<h5><span>Q.</span><em>[주문/결제] 주문을 취소하고 싶어요.</em> 
						<i class="fa-solid fa-angle-down trans"></i>
						</h5>
						<div class="trans close">
							주문 취소는 주문내역에서 신청하실 수 있으며, 취소를 희망하시는 작품을 각각 선택하여 신청이 필요합니다.
주문건 전체 취소가 필요한 경우이더라도 각각의 작품을 선택하여 취소 신청해야 합니다.
						</div>
					</li>
					<li>
						<h5><span>Q.</span><em>[주문/결제] 주문을 취소하고 싶어요.</em> 
						<i class="fa-solid fa-angle-down trans"></i>
						</h5>
						<div class="trans close">
							주문 취소는 주문내역에서 신청하실 수 있으며, 취소를 희망하시는 작품을 각각 선택하여 신청이 필요합니다.
주문건 전체 취소가 필요한 경우이더라도 각각의 작품을 선택하여 취소 신청해야 합니다.
						</div>
					</li>
					<li>
						<h5><span>Q.</span><em>[주문/결제] 주문을 취소하고 싶어요.</em> 
						<i class="fa-solid fa-angle-down trans"></i>
						</h5>
						<div class="trans close">
							주문 취소는 주문내역에서 신청하실 수 있으며, 취소를 희망하시는 작품을 각각 선택하여 신청이 필요합니다.
주문건 전체 취소가 필요한 경우이더라도 각각의 작품을 선택하여 취소 신청해야 합니다.
						</div>
					</li>
					<li>
						<h5><span>Q.</span><em>[주문/결제] 주문을 취소하고 싶어요.</em> 
						<i class="fa-solid fa-angle-down trans"></i>
						</h5>
						<div class="trans close">
							주문 취소는 주문내역에서 신청하실 수 있으며, 취소를 희망하시는 작품을 각각 선택하여 신청이 필요합니다.
주문건 전체 취소가 필요한 경우이더라도 각각의 작품을 선택하여 취소 신청해야 합니다.
						</div>
					</li>
				 
				 </ul>
			</div>
			
			
		</div>
	</div>
	 
</div>
 <script>
jQuery(function($){
	$(".noti_list li ").click(function(){

		
		$(".noti_list h5 i").removeClass('fa-angle-up');
		$(".noti_list h5 i").addClass('fa-angle-down');
	 
		if($(this).find(">div").hasClass("open") == false){
			 $(this).find(">div").css('height','auto');
			 $(this).find(">div").addClass('open');
			 $(this).find(">div").removeClass('close');
			 $(this).find('i').addClass('fa-angle-up');
			 $(".noti_list li ").not(this).find('>div').removeClass('open');
			$(".noti_list li ").not(this).find('>div').addClass('close');
		}else{
			 $(".noti_list li ").find('>div').removeClass('open');
			$(".noti_list li ").find('>div').addClass('close');
		}
		
	
		
	   
		
	});
});
</script>
<?php include "../tail.sub.php";?>
 
