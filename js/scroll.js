$(function(){
	$(".select").click(function(){
		var currenthref = $(this).attr('href');
		$("body, html").animate({"scrollTop":$(currenthref).offset().top}, 1000);
		//alert(currenthref);
		return false;
	});
})

$(function(){
	$(".brand").click(function(){
		$("body, html").animate({"scrollTop":0}, 1000);
		//alert(currenthref);
		return false;
	});
})