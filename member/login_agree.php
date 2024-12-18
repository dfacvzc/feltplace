<?php 
$css_file = 'member';
include "../head.sub.php";?>
 
<div class="login">
	 <div class="agree  ">
	 
		<div class="agree_popbox  ">
			<div class="mem_profile">
				<span><img src="/images/pd/profile.png" alt=""/></span>
				펠트플레이스
			</div>
			<div class="ag_con">
				<div class="chk_box agree_chk">
					<input type="checkbox" id="agree" class="selec_chk">
					<label for="agree"><span><i class="fa-solid fa-check"></i></span>
					전체 동의하기
					</label>
					
				</div>
				<div class="privacy">
					<div>
						전체동의는 카카오 및 Backpackr의 서비스 동의를 포함하고 있습니다. 전체동의는 선택목적에 대한 동 의를 포함하고 있으며, 선택목적에 대한 동의를 거부 해도 서비스 이용이 가능합니다
					</div>
					<div>
						www.idus.com 서비스 제공을 위해 회원번호와 함 께 개인정보가 제공됩니다. 보다 자세한 개인정보 제 공항목은 동의 내용에서 확인하실 수 있습니다. 해당 정보는 동의 철회나 서비스 탈퇴 시 또는 제공 목적 달성 시 지체없이 파기됩니다
					</div>
				
				</div>
				
			
			</div>
			<button class="send">동의하고 계속하기</button>
			<a href="#" class="cancel">취소</a>
		
		
		</div>
	 </div>
</div>
<?php include "../tail.sub.php";?>
 
