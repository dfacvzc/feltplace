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
		 <div class="alert-msg red">
			<p><img src="/images/common/noti.png" alt=""/>받은 알림은 30일 동안 보관됩니다.</p>
		</div>
		<div class="inbox  ">
			
			<div class="noti_list">
				 <ul>
					<li>
						<h5><em>2024-11-21 <span class="noti"></span></em> 
						<i class="fa-solid fa-angle-down trans"></i>
						</h5>
						<div class="trans close">
							[ 이용약관 변경] “콘텐츠”는 회사 사이트 내에 게재되어 있는 각종 사진,일러스트, 동영상, 템플릿, 아이콘, 편집디자인 소스 등 을 말합니다.“이용자”는 회사 사이트에 접속하여 본 약관과 “라이선스 규정”에 따라 회사가 제공하는 서비스를 이용하는 자(개인, 법인, 단체 등)를 통칭합니다.“
						</div>
					</li>
					<li>
						<h5><em>2024-11-21 <span class="noti"></span></em> 
						<i class="fa-solid fa-angle-down trans"></i>
						</h5>
						<div class="trans close">
							[ 이용약관 변경] “콘텐츠”는 회사 사이트 내에 게재되어 있는 각종 사진,일러스트, 동영상, 템플릿, 아이콘, 편집디자인 소스 등 을 말합니다.“이용자”는 회사 사이트에 접속하여 본 약관과 “라이선스 규정”에 따라 회사가 제공하는 서비스를 이용하는 자(개인, 법인, 단체 등)를 통칭합니다.“
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
 
