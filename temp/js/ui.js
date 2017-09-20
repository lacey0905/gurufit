(function(){
$(function(){
	
	// 상단 배너가 있을 경우
	if($(".btn_top_bnr").length > 0) {
		var TopBnr = $(".btn_top_bnr");
		$(".bnr_close").bind("click", function(){
			TopBnr.slideUp();
		});
	}
	
	// 셀렉트박스 디자인
	if($(".sel_custom").length > 0){
		$('.sel_custom').each(function(){
			var select = $(this).find("select").selectBox();
		});
	}
	
	// 셀렉트 박스 설치
	if($(".set_select").length > 0){
		$('.set_select').each(function(){
			setSelect($(this));
		});
	}
	
});
})(jQuery);

/*
	셀렉트 박스 사용 예시
	$("#test").find("a").each(function(){
		$(this).bind("click", function(){
			console.log($(this).data("value"));
		});
	});
*/

// 셀렉트박스 설치
var setSelect = function(elem){
	
	elem.find(".box").bind("click", function(){
		if(elem.hasClass("active")){
			elem.removeClass("active");
		} else {
			elem.addClass("active");
		}
	});
	
	elem.find(".select_list li").bind("click", function(){
		elem.find(".box").html($(this).find("a").html());
		//elem.find(".box").attr("data-value", $(this).find("a").data("value"));
		elem.removeClass("active");
		
	});
	
	$(document).mouseup(function(e){
		var container = elem;
		if( container.has(e.target).length === 0){
			elem.removeClass("active");
		}
	});
}

// 모달 팝업 화면 고정
var setFixModal = function(_modal){
	$("body").addClass("fix");
	_modal.addClass("modal_fix");
}

// 모달 팝업 화면 고정 해제
var delFixModal = function(){
	$("body").removeClass("fix");
}

//모달 팝업 Fix 활성화
//setFixModal($("#photoModal"));

// 측면 메뉴 토글
// ex) asdieToggle($(".user_custom_filter"));
var asdieToggle = function(elem){
	var aside = elem;
	aside.find(".filter_tit").bind("click", function(){
		$(this).toggleClass("close");
	});
}

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