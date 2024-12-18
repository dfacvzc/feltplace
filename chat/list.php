<?php 
$css_file = 'talk';
include "../head.sub.php";?>
 
<div class="wrap ">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				채팅
			</h3>
			<div class="h_btn">	
				<a href="#" class="home"><img src="/images/common/home.svg"/></a>
				<button class="sch_btn"><img src="/images/common/sch.svg"/></button>
				<a href="#"><img src="/images/common/basket.svg"/><span>2</span></a>
			</div>
			
		
		</div>
		<div class="search">
			<div class="inbox">
				<input type="text" >
				<button><img src="/images/common/sch.svg"/></button>
			</div>
		</div>
	</div>
	<div class="sub_contents">
		<div class="talk_list">
			<div class="inbox">
				<ul>
					<li>
						<a href="/chat/view.php">
							<div class="talk_thumb th2">
								<span><img src="/images/pd/profile.png" alt=""/></span>
								<span><img src="/images/talk/pf1.png" alt=""/></span>
								 
							</div>
							<div class="talk_tit">
								<h5>위니위니차니차니.....<span>영천동 1일전</span></h5>
								<p>
									와 캐릭터 너무 귀역고 따뜻해요!~
								
								</p>
								<span class="count">1</span>
							</div>
						</a>
					</li>
					<li>
						<a href="/chat/view.php">
							<div class="talk_thumb  ">
								<span><img src="/images/pd/profile.png" alt=""/></span>
								 
							</div>
							<div class="talk_tit">
								<h5>망고<span>목동 10일전</span></h5>
								<p>
									와 캐릭터 너무 귀역고 따뜻해요!~
								
								</p>
								<span class="count">22</span>
							</div>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</div>
<?php include "../tail.sub.php";?>
 
