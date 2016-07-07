//$("#category-stair a").click(function(){
		//$("#category-stair").css({"-webkit-animation":"mymove 0.4s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
		//$("#category-stair").addClass("shousuo");
		//$("#secondary").css({"-webkit-animation":"selectmove 0.4s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
		//$("#secondary").addClass("search-page1");
		//$(".search-page1 a li p").css("display","none");
	//});
$(function(){
	$("#category-stair a").each(function(index){
		$("#category-stair a").click(function(){
			$("#category-stair a").removeClass("int");
			$(this).addClass("int");
		});
		/*var Ind=index;//显示对应二级栏目
		var x=$(".search_mine ul").get(Ind);
		$(x, this).show();*/
	});
	$(".search-page1 a li p").each(function(){
		$(".search-page1 a li p").hover(function(){
			$(this).parent().css("color","transparent");
			$(this).parent().css({"-webkit-animation":"degmove 0.2s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
			$(this).css({"-webkit-animation":"degmovep 0.2s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
			$(this).children(".list-top").css({"-webkit-animation":"list-topmove 0.2s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
			$(this).children(".list-bottom").css({"-webkit-animation":"list-bottommove 0.2s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
		},
		function(){
			$(this).parent().css("color","#fff");
			$(this).children(".list-top").css({"-webkit-animation":"list-topmoved 0.1s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
			$(this).children(".list-bottom").css({"-webkit-animation":"list-bottommoved 0.1s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
			$(this).parent().css({"-webkit-animation":"degmoved 0.2s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
			$(this).css({"-webkit-animation":"degmovepd 0.2s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
		})
	});
	$(".search-page1 .list-bottom").click(function(){
		$("#category-stair").css({"-webkit-animation":"mymove 0.4s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
		//$("#category-stair").addClass("shousuo");
		/*if($("#category-stair").css({"animation": "mymove 0.4s 1 forwards", "font-family": "微软雅黑"){
		var transthight=$("#category-stair")[0].scrollHeight;
		console.log(transthight);
		}*/
		$("#secondary").css({"-webkit-animation":"selectmove 0.4s infinite","-webkit-animation-iteration-count":"1","animation-fill-mode":"forwards"});
		$(".search-page1").css("font-family","微软雅黑");
		$(".search-page1 a").css({"min-width":"60px","border-left":"1px solid #ccc","border-right":"1px solid #ccc","border-bottom":"1px solid #ccc"});
		$(".search-page1 a li").css("margin","0");
		//$("#secondary").addClass("search-page1");
		$(".search-page1 a li p").css("display","none");
	});
})