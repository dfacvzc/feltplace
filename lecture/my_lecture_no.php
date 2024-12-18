<?php 
$css_file = 'lecture';
$css_file2 = 'product';
include "../head.sub.php";?>
 
<div class="wrap bg_gray">
	<div class="header sub_header">
		<div class="inbox">
			<h3>
				<a href="#" class="back"><i class="fa-solid fa-angle-left"></i></a>
				내 강의 보기 
			</h3>
			<div class="h_btn">	
				<a href="#" class="home"><img src="/images/common/home.svg"/></a>
				<button><img src="/images/common/sch.svg"/></button>
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
	<div class="sub_contents ">
		<div class="find_lec no_lecture">
			<div>
			<h5>
				<img src="/images/lecture/add_lec.png" alt=""/>
				현재 수강중인 강의가 없습니다.
			</h5>
			<p class="center">강의를 찾아볼까요?</p>
			<a href="#" class="btn btn3">강의 찾아보기</a>
			</div>
		</div>
	</div>
	 
</div>
<?php include "../tail.sub.php";?>
 
