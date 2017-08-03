<aside class="user_custom_filter">
	<dl class="user_info">
		<!-- 
		  ** 로그인 이후
		 -->
		<dt class="user_name"><strong>KimHayoung</strong>님을 위한 맞춤 리스트가 적용 중 입니다.</dt>
		<!-- 
		  **로그인 하기 전
		<dt class="user_join">
			<strong>회원가입</strong> 을 하시면<br>
			고객님께 <em>맞춤 상품 리스트</em>를 제공 받으실 수 있습니다.
			<a href="#" class="btn_join">회원가입</a>
		</dt>
		 -->
		<dd class="user_select_list">
			<span>성별 : <strong class="gender">남성</strong></span>
			<span>연령 : <strong class="age">30대</strong></span>
			<ul class="user_add_opt">
				<li>
					<a href="#">사이즈 : <strong class="size">270mm</strong></a>
				</li>
				<li>
					<a href="#">선호 브랜드</a>
					<ul class="child">
						<li><a href="#">나이키</a></li>
					</ul>
				</li>
			</ul>
			<a href="#" class="close_add_opt">내 맞춤 리스트 끄기</a>
			<a href="#" class="modify_add_opt"><i class="icon-pencil">수정</i></a>
		</dd>
	</dl>
	<dl>
		<dt class="filter_tit">성별</dt>
		<dd class="select_opt_list">
			<!-- 
			 [active] = 선택 된 항목
			-->
			<ul>
				<li class="active"><a href="#">남성 (272)</a></li>
				<li><a href="#">여성 (372)</a></li>
				<li><a href="#">유아동 (172)</a></li>
			</ul>
		</dd>
	</dl>
	<dl>
		<dt class="filter_tit">사이즈</dt>
		<dd class="check_opt_box">
			<!-- 
			    사이즈 리스트 
			  [active] = 선택 된 사이즈
			  [dis] = 재고가 없는 사이즈        
			-->
			<ul>
				<li class="active"><a href="#">230</a></li>
				<li class="dis"><a href="#">235</a></li>
				<li><a href="#">240</a></li>
				<li  class="dis"><a href="#">245</a></li>
				<li><a href="#">250</a></li>
				<li  class="dis"><a href="#">255</a></li>
				<li><a href="#">260</a></li>
				<li><a href="#">265</a></li>
				<li><a href="#">270</a></li>
				<li><a href="#">275</a></li>
				<li><a href="#">280</a></li>
				<li><a href="#">285</a></li>
				<li><a href="#">290</a></li>
				<li><a href="#">295</a></li>
				<li><a href="#">300</a></li>
				<li><a href="#">305</a></li>
			</ul>
		</dd>
	</dl>
	<dl>
		<dt class="filter_tit">브랜드</dt>
		<dd class="check_opt_list">
			<ul>
				<li class="custom_cbox cbox_a">
					<label>
    					<input type="checkbox" id="brand_01" name="brand_01" value="brand_01">
    					<span class="box"></span>
    					<span class="label">AMERICAN WEST (21)</span>
    				</label>
				</li>
				<li class="custom_cbox cbox_a">
					<label>
    					<input type="checkbox" id="brand_02" name="brand_02" value="brand_02">
    					<span class="box"></span>
    					<span class="label">AMERICAN WEST (21)</span>
    				</label>
				</li>
			</ul>
			<a href="#" class="more_text">+ 전체 브랜드 보기</a>
		</dd>
	</dl>
	<dl>
		<dt class="filter_tit">색상</dt>
		<dd class="check_color_list">
			<ul>
				<li class="custom_cbox cbox_color">
					<label>
    					<input type="checkbox" id="c_block" name="c_block" class="c_black">
    					<span class="box"></span>
    					<span class="label">검정 (21)</span>
    				</label>
				</li>
				<li class="custom_cbox cbox_color">
					<label>
    					<input type="checkbox" id="c_red" name="c_red" class="c_red"> 
    					<span class="box"></span>
    					<span class="label">빨강 (21)</span>
    				</label>
				</li>
				<li class="custom_cbox cbox_color">
					<label>
    					<input type="checkbox" id="c_blue" name="c_blue" class="c_blue"> 
    					<span class="box"></span>
    					<span class="label">파랑 (21)</span>
    				</label>
				</li>
				<li class="custom_cbox cbox_color">
					<label>
    					<input type="checkbox" id="c_yellow" name="c_yellow" class="c_yellow"> 
    					<span class="box"></span>
    					<span class="label">노랑 (21)</span>
    				</label>
				</li>
				<li class="custom_cbox cbox_color">
					<label>
    					<input type="checkbox" id="c_green" name="c_green" class="c_green"> 
    					<span class="box"></span>
    					<span class="label">녹색 (21)</span>
    				</label>
				</li>
				<li class="custom_cbox cbox_color">
					<label>
    					<input type="checkbox" id="c_white" name="c_white" class="c_white"> 
    					<span class="box"></span>
    					<span class="label">흰색 (21)</span>
    				</label>
				</li>
			</ul>
			<a href="#" class="more_text">+ 색상 전체 보기</a>
		</dd>
	</dl>
	<dl>
		<dt class="filter_tit">가격</dt>
		<dd class="range_select_list">
			<!-- 
			 [active] = 선택 된 가격
			-->
			<ul>
				<li class="active"><a href="#">3만원 이하 (24)</a></li>
				<li><a href="#">3만원 ~ 5만원 (32)</a></li>
				<li><a href="#">5만원 ~ 7만원 (123)</a></li>
				<li><a href="#">7만원 ~ 10만원 (87)</a></li>
				<li><a href="#">10만원 ~ 12만원 (45)</a></li>
				<li><a href="#">12만원 이상 (64)</a></li>
			</ul>
			<div class="ui_range_a">
				<div class="custom_range"></div>
				<span class="amount_min"></span>
				<span class="amount_max"></span>
				<input type="hidden" id="price_min" name="price_min" class="" value="" readonly> <!-- 최소 가격  -->
				<input type="hidden" id="price_max" name="price_max" class="" value="" readonly> <!-- 최대 가격  -->
			</div> 
		</dd>
	</dl>
	<dl>
		<dt class="filter_tit">사용자 평가</dt>
		<dd class="rating_select_list">
			<ul>
				<li>
					<a href="#">
						<strong class="star_rating">
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_off"></i>
						</strong>
						<span class="cnt">(1,234)</span>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="star_rating">
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_off"></i>
   							<i class="star_off"></i>
						</strong>
						<span class="cnt">(1,234)</span>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="star_rating">
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_off"></i>
   							<i class="star_off"></i>
						</strong>
						<span class="cnt">(1,234)</span>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="star_rating">
   							<i class="star_on"></i>
   							<i class="star_on"></i>
   							<i class="star_off"></i>
   							<i class="star_off"></i>
   							<i class="star_off"></i>
						</strong>
						<span class="cnt">(1,234)</span>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="star_rating">
   							<i class="star_on"></i>
   							<i class="star_off"></i>
   							<i class="star_off"></i>
   							<i class="star_off"></i>
   							<i class="star_off"></i>
						</strong>
						<span class="cnt">(1,234)</span>
					</a>
				</li>
			</ul>
		</dd>
	</dl>
</aside>
<script>
$(function(){
	// 가격 Range Bar 구현
	if($(".ui_range_a").length > 0){
		var range = $(".ui_range_a");
		range.find(".custom_range").slider({
			range: true,
			min: 0, // 최소 값
			max: 100000, // 최대 값
			values: [ 12000, 62000 ], // 페이지 로드 시 최초 값 지정
			slide: function( event, ui ) {
				range.find("#price_min").val(ui.values[0]);
				range.find("#price_max").val(ui.values[1]);
				range.find(".amount_min").text(m_iAddComma(ui.values[0]) + "원");
				range.find(".amount_max").text(m_iAddComma(ui.values[1]) + "원");
			}
		});
		range.find("#price_min").val(range.find(".custom_range").slider("values",0));
		range.find("#price_max").val(range.find(".custom_range").slider("values",1));
		range.find(".amount_min").text(m_iAddComma(range.find(".custom_range").slider("values",0)) + "원");
		range.find(".amount_max").text(m_iAddComma(range.find(".custom_range").slider("values",1)) + "원");
	}
});
</script>