$(function(){

$(".selectGlyphicon").click(function(){
		var currenthref = $(this).attr('href');
		$("body, html").animate({"scrollTop":$(currenthref).offset().top - $("#navbar").height()}, 01000);
		return false;	
		});

	$(".select").click(function(){
		var currenthref = $(this).attr('href');
		
		$("body, html").animate({"scrollTop":$(currenthref).offset().top}, 1000);
		return false;
	});
})

$(function(){
	$(".brand").click(function(){
		$("body, html").animate({"scrollTop":0}, 1000);
		return false;
	});
})