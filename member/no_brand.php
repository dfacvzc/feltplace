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
		<div class="mb_tab tab x2">
			<a href="#" class="on">관심 브랜드</a>
			<a href="#">찜한 작품</a>
		 
			
		</div>
		<div class="find_lec no_lecture bg_white">
			<div>
			<h5 class="center">
				<img src="/images/common/box.png" alt=""/>
				관심 설정한 작품이 없습니다.
			</h5>
			<p class="center">성향테스트로 나에게 맞는 작품을 알아볼까요?</p>
			<a href="#" class="btn btn3">성향테스트 해보기</a>
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
 
