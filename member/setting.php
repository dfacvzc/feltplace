           <?php 
$css_file = 'member';
$css_file2 = 'product';
include "../head.sub.php";?>
 
<div class="wrap  ">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				설정  
			</h3>
			<div class="h_btn">	
			 
				<a href="#"><img src="/images/common/close.png"/></a> 
			</div>
			
		
		</div>
		 
	</div>
	<div class="sub_contents">
		<div class="inbox">
			<div class="set_list">
				<ul>
					<li>
						<h5>계정관리</h5>
						<a href="#" class="set_btn">계정관리 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<h5>알림</h5>
						<a href="#" class="set_btn">알림 설정 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					<li>
						<h5>계정관리</h5>
						<a href="#" class="set_btn">서비스이용약관 <i class="fa-solid fa-angle-right"></i></a>
						<a href="#" class="set_btn">개인정보처리방침 <i class="fa-solid fa-angle-right"></i></a>
						<a href="#" class="set_btn">위치기반서비스 이용약관 <i class="fa-solid fa-angle-right"></i></a>
					</li>
					
				
				
				</ul>
				<button class="my_send btn btn5">로그아웃</button>
			</div>
		</div>
	</div>
	
	<div class="alert_pop">
		 <div class="alert_popbox alert-center">
			<h5 class="alert-tit center">
				로그아웃
			</h5>
			<div class="alert-text">
				<p class="center">
				로그아웃 하시겠습니까?
				</p>
			</div>
			<div class="alert_btn  ">
				<a href="#" class="cancel">취소</a>
				<a href="#" class="send">확인</a>
			
			</div>
		
		</div>
	</div>
		
</div>
 
<?php include "../tail.sub.php";?>
 
