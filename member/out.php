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
			<div class="set_list set_input">
				<h5>탈퇴하기 전 확인해주세요</h5>
				<p class="text black2">
				프차플래너 탈퇴 시 삭제/유지되는 정보를 확인하세요.
				한번 삭제된 정보는 복구가 불가능 합니다.
				</p>
				 <div class="alert-msg red">
					<p>
					· 계정 및 프로필 정보 삭제<br>
					· 포인트 삭제 (혜택포함)<br>
					· 내 정보 삭제<br>
					· 쿠폰 삭제
					</p>
				</div>
				<ul>
					<li>
						<h5>탈퇴사유</h5>
						<select class="disabled">
							<option>선택하세요</option>
							<option>직접입력</option>
						</select>
					</li>
					<li class="input_text">
						<h5>탈퇴 사유를 작성해주세요</h5>
						<textarea class="disabled"></textarea>
						<p class="byte"><span>34</span>/500</p>
					</li>
					 
					
				
				
				</ul> 
				
				<button class="btn6 fix_btn btn">탈퇴하기</button>
				<button class="btn2 fix_btn btn">탈퇴하기</button>
			</div>
		</div>
	</div>
	 
	<div class="alert_pop">
		 <div class="alert_popbox alert-center">
			<h5 class="alert-tit center">
				정말 탈퇴하시겠어요?
			</h5>
			<div class="alert-text">
				<p class="center">
				탈퇴하시면 더이상의 창업 성향과 <br>
창업리포트를 볼 수 없어요.
				</p>
			</div>
			<div class="alert_btn  ">
				<a href="#" class="cancel">취소</a>
				<a href="#" class="send">탈퇴하기</a>
			
			</div>
		
		</div>
	</div> 
</div>
 
<?php include "../tail.sub.php";?>
 
