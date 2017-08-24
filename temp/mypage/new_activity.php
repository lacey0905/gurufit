<?php include "../inc/header.php" ?>
<!-- 모달 팝업 -->
<!-- 모달팝업 부모 앨리먼트 -->
<!-- 
    팝업의 그림자가 모든 팝업에 1개만 적용 되어야 하기 때문에  [f_modal_perant] 앨리먼트를 별도로 껏다켰다를 반복 해야 합니다.
    따라서 팝업이 1개 이상 보여져야 할 경우에는   [f_modal_perant] 앨리먼트에 [open] 클래스를 추가 합니다.
-->
<div class="f_modal_perant open">

	<!-- 모달 팝업 우선순위 [z1 ~ z6]까지 클래스로 만들어 놓았습니다. [z6]이 가장 우선순위가 높습니다. -->
	<!-- 디자인상 팝업마다 그림자가 투명하게 들어가 있습니다. 때문에 팝업이 겹칠 경우에는  [f_modal_shadow]를 가장 하위 우선순위 팝업에만 적용 해야 합니다.-->
	
	<!-- 사진 등록 리스트 -->
	<div class="f_modal_layer f_modal_shadow big blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>
        				사진 등록
        				<span class="msg">사진을 등록할 상품을 선택해주세요.</span>
        			</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<table class="prd_list_a mid">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    					</colgroup>
    					<tbody>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating">
        								<strong class="star_rating big">
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">리뷰를 남겨주세요.</span>
        	    					</div>
    							</td>
							</tr>
							<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating">
        								<strong class="star_rating big">
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">리뷰를 남겨주세요.</span>
        	    					</div>
    							</td>
    						  </tr>
    					 </tbody>
    				</table>
        		</div>
    		</div>
		</div>
	</div>
	<!-- 리뷰 등록 작성-->
	<div class="f_modal_layer f_modal_shadow big blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>
        				리뷰등록
        				<span class="msg">리뷰할 상품에 별점을 남겨주세요.</span>
        			</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont big">
        			<table class="prd_list_a mid">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    					</colgroup>
    					<tbody>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating raring_input">
    									<input type="hidden" class="rating_count">
        								<strong class="star_rating big">
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">리뷰를 남겨주세요.</span>
        	    					</div>
        	    					<script>
        	    					// 별점 기능 활성화
									$(function(){
										// 측면 변환 텍스트 목록
										var starMsgArr = ["별로에요", "그저 그래요", "보통이에요", "좋아요", "마음에 들어요!"]
										starRating($(".raring_input"), starMsgArr);
									});
        	    					</script>
    							</td>
							</tr>
    					 </tbody>
    				</table>
    				<div class="f_modal_contList">
    					<h3 class="tit">
    						<strong>착화감 평가</strong>
    						<span class="check">착화감 평가를 저장 했습니다.</span>
    					</h3>
    					<div class="contList_box step">
    						<div class="step_gauge">
								<ul class="gauge_area">
									<li class="inp">
										<em>길이</em>
										<div class="gauge">
											<div class="step_bar">
												<div class="slider-range-max"></div>
												<span class="step_dot fir"></span>
												<span class="step_dot sec"></span>
												<input type="hidden" class="step_inp" value="1" readonly>
											</div>
											<span class="gauge_min">작은편</span>
											<span class="gauge_max">큰편</span>
										</div>
										<span class="msg">작아요</span>
									</li>
									<li class="inp">
										<em>폭</em>
										<div class="gauge">
											<div class="step_bar">
												<div class="slider-range-max"></div>
												<span class="step_dot fir"></span>
												<span class="step_dot sec"></span>
												<input type="hidden" class="step_inp" value="1" readonly>
											</div>
											<span class="gauge_min">좁은 편이에요</span>
											<span class="gauge_max">넉넉해요</span>
										</div>
										<span class="msg">작아요</span>
									</li>
									<li class="inp">
										<em>길이</em>
										<div class="gauge">
											<div class="step_bar">
												<div class="slider-range-max"></div>
												<span class="step_dot fir"></span>
												<span class="step_dot sec"></span>
												<input type="hidden" class="step_inp" value="1" readonly>
											</div>
											<span class="gauge_min">오래 신으면 불편해요</span>
											<span class="gauge_max">하루 종일 신어도 편해요</span>
										</div>
										<span class="msg">작아요</span>
									</li>
								</ul>
								<script>
								// 착화감 평가 기능
                                $(function() {
                                    $( ".slider-range-max").slider({
                                        min: 1,
                                        max: 5,
                                        value: 1,
                                        slide: function( event, ui, handle, handleIndex) {
                                            // 측면 변환 텍스트 목록
											var gaugeMsgArr = ["작은 편이에요", "조금 작은 편이에요", "보통이에요", "조금 큰 편이에요", "큰 편이에요" ]; 
											var msgElem = $(this).parent().parent().parent().find(".msg");
											var inpElem = $(this).parent().find(".step_inp");
											msgElem.text(gaugeMsgArr[ui.value-1]);
											if(ui.value > 3){
												msgElem.addClass("active");
											} else {
												msgElem.removeClass("active");
											}
											// 현제 스탭 번호 저장
											inpElem.val(ui.value);
                                    	}
                                	});
                                });
                                </script>
							</div>
    					</div>
    					<h3 class="tit check">
    						<strong>리뷰 입력</strong>
    						<span>리뷰를 20자 이상 남겨주세요</span>
    					</h3>
    					<textarea class="contList_text_box txtarea_b" placeholder="구입한 신발에 대한 리뷰를 남기기 시작했습니다…"></textarea>
    				</div>
        		</div>
        		<div class="f_modal_foot no_line">
        			<div class="f_modal_btn">
        				<span class="msg small">
        					<i class="icon_write"></i>
        					<a href="#">좋은 리뷰를 작성하는 방법</a>
    					</span>
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">등록 완료</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 리뷰 등록 리스트 -->
	<div class="f_modal_layer f_modal_shadow big blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>
        				리뷰등록
        				<span class="msg">리뷰할 상품에 별점을 남겨주세요.</span>
        			</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<table class="prd_list_a mid">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    					</colgroup>
    					<tbody>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating">
        								<strong class="star_rating big">
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">리뷰를 남겨주세요.</span>
        	    					</div>
    							</td>
							</tr>
							<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating">
        								<strong class="star_rating big">
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">리뷰를 남겨주세요.</span>
        	    					</div>
    							</td>
    						  </tr>
    					 </tbody>
    				</table>
        		</div>
    		</div>
		</div>
	</div>
	<!-- 사진 등록 완료 -->
	<div class="f_modal_layer big f_modal_shadow">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>사진 등록 완료</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="f_modal_service">
        				<i class="photo_icon"></i>
        				<h3><em>사진등록</em>을 마쳤습니다.</h3>
        				<p class="mid">
        					등록하신 사진은 적합성 확인 후<br>
							상품 페이지에 노출 됩니다.<br>
							<br>
							사진이 노출되면 경험치도 <strong>100px</strong> 올라갑니다!				
        				</p>
        			</div>
        		</div>
        		<div class="f_modal_foot no_line">
        			<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_xl_l2 btn_np btn_hover_a">닫기</a>
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">등록한 사진 보러 가기</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 태그 체크 -->
	<div class="f_modal_layer big f_modal_shadow blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>태그선택 <span>코디네이션을 설명하는 태그를 선택하세요. 3개까지 선택할 수 잇습니다.</span></h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="img_check_list">
        			<ul class="list">
        				<li><img src="../img/photo_check1.png" alt="" class="thum"></li>
        				<li><img src="../img/photo_check1.png" alt="" class="thum"></li>
        				<li><img src="../img/photo_check1.png" alt="" class="thum"></li>
        				<li><img src="../img/photo_check1.png" alt="" class="thum"></li>
        				<li><img src="../img/photo_check1.png" alt="" class="thum"></li>
        			</ul>
        			<ul class="tag_list">
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">스트릿 패션</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">캐주얼 패션</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">수트 패션</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">비즈니스 패션</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">치마</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">조거</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">데이트 룩</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">파티룩</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">캠퍼스룩</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">데일리 룩</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">청바지</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">슬랙스</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">스타킹</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">반바지</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">셔츠</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">스웻셔츠</span>
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="tag">반팔티</span>
        					</label>
        				</li>
        			</ul>
        			<div class="select_tag">
        				<strong class="select_tag_tit">선택한 태그</strong>
        				<ul class="select_tag_list">
        					<li>캐주얼 패션, 테이트 룩, 반팔티</li>
        				</ul>
        			</div>
        		</div>
        		<div class="f_modal_foot no_line">
        			<div class="f_modal_btn">
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">다음 단계</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 사진등록 리스트 -->
	<div class="f_modal_layer big f_modal_shadow blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>사진등록 <span>상품 착용 사진을 선택 하세요.한번에 5장을 등록할 수 있습니다.</span></h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="img_check_list">
        			<ul class="list">
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="chk"></span>
        						<img src="../img/photo_check1.png" alt="" class="thum">
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="chk"></span>
        						<img src="../img/photo_check1.png" alt="" class="thum">
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="chk"></span>
        						<img src="../img/photo_check1.png" alt="" class="thum">
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="chk"></span>
        						<img src="../img/photo_check1.png" alt="" class="thum">
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="chk"></span>
        						<img src="../img/photo_check1.png" alt="" class="thum">
        					</label>
        				</li>
        				<li>
        					<label>
        						<input type="checkbox" class="box">
        						<span class="chk"></span>
        						<img src="../img/photo_check1.png" alt="" class="thum">
        					</label>
        				</li>
        			</ul>
        		</div>
        		<div class="f_modal_foot no_line">
        			<div class="f_modal_btn">
        				<span class="msg"><em>5</em>장의 사진을 선택했습니다</span>
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">다음 단계</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 사진등록 -->
	<div class="f_modal_layer big f_modal_shadow blind">
		<div class="f_modal_wrap">
    		<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>사진 등록<span>사진을 등록할 상품을 선택해주세요.</span></h2>
        			<a href="#" class="btn_close">Close</a>       			
        		</div>
        		<div class="f_modal_cont big">
        			<table class="prd_list_a mid">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    					</colgroup>
    					<tbody>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating">
        								<strong class="star_rating big">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">마음에 들어요!</span>
        	    					</div>
    							</td>
    						  </tr>
    					 </tbody>
    				</table>
    				<div class="icon_link_list">
    					<strong class="icon"><img src="../img/photo-1.png" alt="샘플상품"></strong>
    					<p class="msg">
    						<em>신발과 함께 스타일을 보여줄 수 있는 사진을 등록 하세요.</em>
    						Tip : 사진이 등록되면 경험치 100xp가 올라 갑니다.
                    	</p>
                    	<ul class="link">
                    		<li class="btn_hover_a"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>페이스북 사진 가져오기</a></li>
                    		<li class="btn_hover_a"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>인스타그램 사진 가져오기</a></li>
                    		<li class="btn_hover_a"><a href="#"><i class="material-icons">&#xE2C6;</i>파일 선택</a></li>
                    	</ul>
    				</div>
        		</div>        		
    		</div>
		</div>
    	<!-- 모달 팝업 그림자 -->
	</div>
	<div class="f_modal_blind"></div>
</div>
<!-- 모달 팝업 END -->
<!-- /////// -->
<section class="sub_layout">
	<div class="sub_locate">
		<div class="custom_inner">
			<dl class="locate_list">
				<dt><a href="#">홈</a></dt>
				<dd><a href="#">로그인</a></dd>
			</dl>
			<p class="locate_msg">나이키 플라이니트 최대~50% OFF</p>
		</div>
	</div>
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>My Page</h2>
			<div class="tab_active_type ">
				<ul>
					<li><a href="#">대시보드</a></li>
					<li><a href="#">멤버십</a></li>
					<li><a href="#">알림</a></li>
					<li class="active"><a href="#">새로운 활동</a></li>
					<li><a href="#">하트 리스트</a></li>
					<li><a href="#">히스토리</a></li>
					<li><a href="#">1:1문의</a></li>
					<li><a href="#">개인정보 설정</a></li>
					<li><a href="#">구매내역</a></li>										
				</ul>
			</div>
		</section>
				
		<section id="mypage">
			<h3 class="tit_head tit_sub_b line">활동 등록 할 상품<span>(2)</span></h3>
			<div class="prd_top_info">
				<!-- 구매내역 리스트  -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<tbody>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating">
	    								<strong class="star_rating big">
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">별점을 남겨주세요.</span>
        	    					</div>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li>
    										<div class="btn_opt_msg">
            									<img src="../img/review-1.png" alt="">
            									<span>
            										전문 리뷰어 배지를 모으세요!<br>
            										리뷰 1개만 더 작성하시면 됩니다.
            									</span>
            								</div>
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">리뷰 등록</a>
    									</li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">사진 등록</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">소셜 공유</a></li>
    								</ul>
    							</td>
						 	</tr>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating active">
	    								<strong class="star_rating big">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">마음에 들어요</span>
        	    					</div>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li>
    										<div class="btn_opt_msg">
            									<img src="../img/review-1.png" alt="">
            									<span>
            										전문 리뷰어 배지를 모으세요!<br>
            										리뷰 1개만 더 작성하시면 됩니다.
            									</span>
            								</div>
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">리뷰 등록</a>
    									</li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">사진 등록</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">소셜 공유</a></li>
    								</ul>
    							</td>
						 	</tr>
    					 </tbody>
    				</table> 
				</div>
			</div>
			<h3 class="tit_head tit_sub_b line">활동 등록 중인 상품 <span>(4)</span></h3>
			<div class="prd_top_info">
				<!-- 구매내역 리스트  -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<tbody>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating active">
	    								<strong class="star_rating big">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">별로에요...</span>
        	    					</div>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li>
    										<div class="btn_com_msg">
    											<span class="com_msg">리뷰 등록 완료</span>
												<a href="#">등록한 리뷰 보기</a>
    										</div>
    									</li>
    									<li>
    										<div class="btn_com_msg">
    											<span class="com_msg">리뷰 등록 완료</span>
												<a href="#">등록한 리뷰 보기</a>
    										</div>
    									</li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">소셜 공유</a></li>
    								</ul>
    							</td>
						 	</tr>
    					 </tbody>
    				</table> 
				</div>
			</div>
			<h3 class="tit_head tit_sub_b line">활동 완료 <span>(2)</span></h3>
			<div class="prd_top_info">
				<!-- 구매내역 리스트  -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<tbody>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<dl class="opt">
    									<dt>구입할 날짜</dt>
    									<dd>2017년 7월 14일</dd>
    								</dl>
    								<div class="rating active">
	    								<strong class="star_rating big">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	   							<span class="msg">별로에요...</span>
        	    					</div>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li>
    										<div class="btn_com_msg">
    											<span class="com_msg">리뷰 등록 완료</span>
												<a href="#">등록한 리뷰 보기</a>
    										</div>
    									</li>
    									<li>
    										<div class="btn_com_msg">
    											<span class="com_msg">리뷰 등록 완료<em class="count">(5)</em></span>
												<a href="#">등록한 리뷰 보기</a>
    										</div>
    									</li>
    									<li>
    										<div class="btn_com_msg">
    											<span class="com_msg">리뷰 등록 완료</span>
												<a href="#">등록한 리뷰 보기</a>
    										</div>
    									</li>
    								</ul>
    							</td>
						 	</tr>
    					 </tbody>
    				</table> 
				</div>
			</div>
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>