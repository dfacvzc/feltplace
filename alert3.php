<?php 
$css_file = 'member';
include "head.sub.php";?>
 
<div class="login">
	<div class="alert_pop">
		 <div class="alert_select">
			<h5 class="alert-tit  ">
				선택
				<button class="close"><img src="/images/common/close.png" alt=""></button>
			</h5>
			<div class="alert-msg">
				<p>알림/전달 메시지가 있을때</p>
			</div>
			<div class="option_list">
				<ul>
					<li>
						<div class="chk_box  ">
							<input type="radio" id="chk1" class="selec_chk">
							<label for="chk1"><span><i class="fa-solid fa-circle"></i></span>
							OPTION
							</label>
						</div>
					</li>
					<li>
						<div class="chk_box  ">
							<input type="radio" id="chk2" class="selec_chk">
							<label for="chk2"><span><i class="fa-solid fa-circle"></i></span>
							OPTION
							</label>
						</div>
					</li>
					<li>
						<div class="chk_box  ">
							<input type="radio" id="chk3" class="selec_chk">
							<label for="chk3"><span><i class="fa-solid fa-circle"></i></span>
							OPTION
							</label>
						</div>
					</li>
					<li>
						<div class="chk_box  ">
							<input type="radio" id="chk4" class="selec_chk">
							<label for="chk4"><span><i class="fa-solid fa-circle"></i></span>
							OPTION
							</label>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="alert_btn  ">
				<a href="#" class="cancel">취소</a>
				<a href="#" class="send">확인</a>
			
			</div>
		
		</div>
	</div>
	
	
	
</div>
<?php include "tail.sub.php";?>
 
