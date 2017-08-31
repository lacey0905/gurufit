(function(){
$(function(){
	
	// 상단 배너가 있을 경우
	if($(".btn_top_bnr").length > 0) {
		var TopBnr = $(".btn_top_bnr");
		$(".bnr_close").bind("click", function(){
			TopBnr.slideUp();
		});
	}
	
	// 페이지에서 모달 팝업이 1개 이상 있을 경우에 Toggle Event를 설치 함
	if($(".madal_popup_area").length > 0) {
		$(".madal_popup_area").each(function(){
			var this_popup = $(this);
			this_popup.find(".modal_btn").bind("click", function(){
				// 팝업은 1개만 띄어 질 수 있도 록 팝업 오픈 시에 다른 팝업을 클릭하면 기존 팝업은 Hide 됨
				$(".madal_popup_area").not(this_popup).find(".modal_popup").fadeOut();
				this_popup.find(".modal_popup").fadeToggle("fast");
			});
			/*
			$("body").find("*").not.bind("click", function(){
				// 팝업은 1개만 띄어 질 수 있도 록 팝업 오픈 시에 다른 팝업을 클릭하면 기존 팝업은 Hide 됨
				$(".madal_popup_area").not(this_popup).find(".modal_popup").fadeOut();
				this_popup.find(".modal_popup").fadeToggle("fast");
			})
			;*/
		});
	}
	
	// 측면 메뉴 닫기 버튼 활성화
	if($(".user_custom_filter").length > 0){
		var aside = $(".user_custom_filter");
		aside.find(".filter_tit").bind("click", function(){
			$(this).toggleClass("close");
		});
	}
	
});
})(jQuery);

//천 단위 콤마찍기
var m_iAddComma = function(str) {
  str = String(str);
  return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
}

//게시판 토글 기능
var toggleListActive = function(elem){
	elem.children("li").bind("click", function(){
		if($(this).hasClass("reply")){
			elem.children("li").not($(this)).removeClass("active");
			$(this).toggleClass("active");
		}
	});
}

//별 점 기능 
var starRating = function(elem, msgArr){
	var countElem = $(this).find(".rating_count");
	if(elem.length > 0){
		elem.find(".star_rating > i").each(function(){
			$(this).bind("click", function(){
				
				var idx = $(this).index() + 1; // 클릭한 별 점 인덱스 저장
				countElem.val(idx); // 별점 Input 저장
				
				for(var i=0; i < $(this).parent().find("i").length; i++){
					if(i<idx){
						$(this).parent().find("i").eq(i).addClass("star_on");
					} else {
						$(this).parent().find("i").eq(i).removeClass("star_on");
					}
				}
				elem.addClass("active").find(".msg").html(msgArr[idx-1]);
			});
		});
	}
}



























