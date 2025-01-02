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
				<ul>
					<li>
						<h5>기존 비밀번호</h5>
						<input type="text" class="disabled" value="***********"/>
					</li>
					<li>
						<h5>변경할 비밀번호</h5>
						<input type="text" value="************"/>
					</li>
					 
					<li class="input_error">
						<h5>변경할 비밀번호 확인</h5>
						<input type="text"   value="************"/>
						<button class="reset"><i class="fa-solid fa-circle-xmark"></i></button>
						<p>비밀번호를 다시 입력해주세요</p>
					</li>
					
				
				
				</ul> 
				
				<button class="btn6 fix_btn btn">저장하기</button>
				<button class="btn2 fix_btn btn">저장하기</button>
			</div>
		</div>
	</div>
	 
</div>
 
<?php include "../tail.sub.php";?>
 
