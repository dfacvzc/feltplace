<?php 
$css_file = 'member';
$css_file2 = 'product';
include "../head.sub.php";?>
 
<div class="wrap  ">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				알림설정  
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
						<div class="push_wrap">
				 			<h5>푸시알림</h5>
							<div class="push on">
								<input type="checkbox" checked value="1">
								<span class="trans"></span>
							</div>
						</div>
					</li>
					<li>
						<div class="push_wrap">
				 			<h5>마케팅 정보(광고) 동의</h5>
							<div class="push">
								<input type="checkbox"  value="1">
								<span class="trans"></span>
							</div>
						</div>
					</li>
					<li>
						<div class="push_wrap">
				 			<h5>이메일 수신</h5>
							<div class="push">
								<input type="checkbox"  value="1">
								<span class="trans"></span>
							</div>
						</div>
					</li>
					<li>
						<div class="push_wrap">
				 			<h5>알림/SMS 수신</h5>
							<div class="push">
								<input type="checkbox"  value="1">
								<span class="trans"></span>
							</div>
						</div>
					</li>
					<li>
						<div class="push_wrap">
				 			<h5>위치기반 약관 동의</h5>
							<div class="push">
								<input type="checkbox"  value="1">
								<span class="trans"></span>
							</div>
						</div>
					</li>
					
 
				</ul>
				 
			</div>
		</div>
	</div>
	 
</div>
<script>
jQuery(function($){
	
	
	
	$(".push").each(function(){
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
 
