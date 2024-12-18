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
		<div class="info_text"> 
			<p class="text gray">
			- ﻿﻿국비지원 온라인 과정에 대해 궁금하시다면 고객센터를 이용해 주세요.<br>
			-﻿﻿ 국비지원/기업 강의는 별도로 안내된 학습 사이트를 이용해 주세요.<br>
			-﻿﻿ 온라인 강의는 오픈일 오후 5시 이후 수강이 가능하며, 당사 사정에 따라 오픈 시간이 조금 늦어질 수 있습니다
			
			</p>
		</div>
		<div class="my_list_wrap bg_white">
			<div class="inbox">
				<div class="lec_sch">
					 
					<a href="#" class="on">전체 <i class="fa-solid fa-angle-down"></i></a>
					<a href="#">수강 예정 <i class="fa-solid fa-angle-down"></i></a>
					<a href="#">수강 예정 <i class="fa-solid fa-angle-down"></i></a>
					<a href="#">수강 예정 <i class="fa-solid fa-angle-down"></i></a>
				</div>
				<div class="my_list">
					<ul>
						<li>
							<a href="/lecture/my_lecture_detail.php" class="my_thumb">
								<img src="/images/pd/thumb1.png" alt=""/>
							</a>
							<div class="my_lec_info">
								<h5><a href="/lecture/my_lecture_detail.php">푸들 비숑 말티푸 강아지 인형 만들기</a></h5>
								<div>
									<div class="gray">
										<span style="background-image:url(/images/lecture/teacher1.png)"></span>
										뜨개질 · 사라즈문
									</div>
									<a href="/lecture/my_lecture_detail.php">시간표 보기 <i class="fa-solid fa-angle-right"></i></a>
								</div>
							</div>
						</li>
						<li>
							<a href="/lecture/my_lecture_detail.php" class="my_thumb">
								<img src="/images/pd/thumb2.png" alt=""/>
							</a>
							<div class="my_lec_info">
								<h5><a href="/lecture/my_lecture_detail.php">시들지 않는 나만의 반려식물, 뜨개로 자유롭게 만들어 볼까요?</a></h5>
								<div>
									<div class="gray">
										<span style="background-image:url(/images/lecture/teacher2.png)"></span>
										뜨개질 · 사라즈문
									</div>
									<a href="/lecture/my_lecture_detail.php">시간표 보기 <i class="fa-solid fa-angle-right"></i></a>
								</div>
							</div>
						</li>
						<li>
							<a href="/lecture/my_lecture_detail.php" class="my_thumb">
								<img src="/images/pd/thumb1.png" alt=""/>
							</a>
							<div class="my_lec_info">
								<h5><a href="/lecture/my_lecture_detail.php">푸들 비숑 말티푸 강아지 인형 만들기</a></h5>
								<div>
									<div class="gray">
										<span style="background-image:url(/images/lecture/teacher1.png)"></span>
										뜨개질 · 사라즈문
									</div>
									<a href="/lecture/my_lecture_detail.php">시간표 보기 <i class="fa-solid fa-angle-right"></i></a>
								</div>
							</div>
						</li>
						<li>
							<a href="/lecture/my_lecture_detail.php" class="my_thumb">
								<img src="/images/pd/thumb2.png" alt=""/>
							</a>
							<div class="my_lec_info">
								<h5><a href="/lecture/my_lecture_detail.php">푸들 비숑 말티푸 강아지 인형 만들기</a></h5>
								<div>
									<div class="gray">
										<span style="background-image:url(/images/lecture/teacher2.png)"></span>
										뜨개질 · 사라즈문
									</div>
									<a href="/lecture/my_lecture_detail.php">시간표 보기 <i class="fa-solid fa-angle-right"></i></a>
								</div>
							</div>
						</li>
						
					</ul>
					
					
					
				
				
				</div>
			</div>
		
		</div>
		<div class="find_lec">
			<p class="center">더 많은 강의를 찾아볼까요?</p>
			<a href="/lecture/list.php" class="btn btn3">강의 찾아보기</a>
		</div>
	</div>
	 <?php include "../tail.php";?>
</div>
<?php include "../tail.sub.php";?>
 
