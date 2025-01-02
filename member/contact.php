<?php 
$css_file = 'member';
$css_file2 = 'product';
include "../head.sub.php";?>
 
<div class="wrap  ">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				1:1 문의하기  
			</h3>
			<div class="h_btn">	
			 
				<a href="#"><img src="/images/common/close.png"/></a> 
			</div>
			
		
		</div>
		 
	</div>
	<div class="sub_contents">
		<div class="inbox  ">
			<div class="set_list set_input">
				<ul>
					<li class="input_focus">
						<h5>기존 비밀번호</h5>
						<input type="text"  value="수강중인 강의 중도 해지"/>
						<button class="reset"><i class="fa-solid fa-circle-xmark"></i></button>
					</li>
					<li class="input_text input_focus">
						<h5>내용입력</h5>
						<textarea>어제 강의 신청한 강의를 중도에 해지하고 싶습니다. 절차 안내 부탁드립니다. 어제 강의 신청한 강의를 중도에 해지하고 싶습니다. 절차 안내 부탁드립니다.</textarea>
						<p class="byte"><span>34</span>/500</p>
					</li>
					
				
				
				</ul> 
				<div class="select_box">
					<div class="on">
						<input type="checkbox"   value="1" name="reply">
						메일로 답변 받기
					</div>
					<div>
						<input type="checkbox"  value="2" name="reply">
						문자로 답변 받기
					</div>
				
				</div>
				
				<button class="btn6 fix_btn btn">문의글 남기기</button>
				<button class="btn2 fix_btn btn">문의글 남기기</button>
			</div>
		 
			
		</div>
	</div>
	 
	<div class="alert_pop">
		 <div class="alert_popbox alert-center">
			<h5 class="alert-tit center">
				문의글 남기기
			</h5>
			<div class="alert-text">
				<p class="center">
				jsh1004@naver.com<br>
메일 주소로 답변드리겠습니다.<br>
문의글을 보낼까요?
				</p>
			</div>
			<div class="alert_btn  ">
				<a href="#" class="cancel">취소</a>
				<a href="#" class="send">확인</a>
			
			</div>
		
		</div>
	</div> 
</div> 
<script>
jQuery(function($){
	
	
	
	$(".select_box div").each(function(){
		if($(this).find('input').checked == true){
			$(this).addClass('on');
		}
		$(this).find('input').change(function(){
			if($(this).is(":checked")){
				$(this).parent().addClass('on');
			}else{
				$(this).parent().removeClass('on');
			}
		});
		
	});
	 
});
</script>
<?php include "../tail.sub.php";?>
 
