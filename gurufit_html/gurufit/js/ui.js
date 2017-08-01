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
		});
	}
	
	//
	if($(".user_custom_filter").length > 0){
		var aside = $(".user_custom_filter");
		aside.find("dt").bind("click", function(){
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
