 
$(document).ready( function(){
 
	$('.header .sch_btn').click(function(e){
		   e.stopPropagation();
		$('.search').fadeIn(300);
		$('.search').addClass('on');
	});
	$(document).on("click", function (e) {
        if(!$(e.target).closest('.search.on').length) {
            $(".search").fadeOut(300);
			$('.search').removeClass('on');
        }
    });
});