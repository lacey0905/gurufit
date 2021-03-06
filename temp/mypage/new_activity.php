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
	<div class="f_modal_layer f_modal_shadow big z3 blind">
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
	<!-- 상품평 등록 작성-->
	<div id="reviewWrite" class="f_modal_layer f_modal_shadow big z1">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>
        				상품평 등록
        				<span class="msg">이 상품을 이용해 보셨나요? 상품을 평가하고 정보를 공유해주세요.</span>
        			</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="modal_step">
            		<div class="f_modal_cont big">
            			<table class="prd_list_a mid modal_step_list step_on">
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
        									<dt>구입한 날짜</dt>
        									<dd>2017년 7월 14일</dd>
        								</dl>
        								<div class="rating raring_input">
        									<input type="hidden" class="rating_count" value="0">
            								<strong class="star_rating big">
            	    							<i class="star_off"></i>
            	    							<i class="star_off"></i>
            	    							<i class="star_off"></i>
            	    							<i class="star_off"></i>
            	    							<i class="star_off"></i>
            	   							</strong>
            	   							<span class="msg">별점 평가를 입력하세요.</span>
            	    					</div>
        							</td>
    							</tr>
        					 </tbody>
        				</table>
        				<div class="f_modal_contList modal_step_list t_line step_on">
        					<h3 class="tit">
        						<strong>착화감 평가</strong>
        						<span class="check">착화감 평가를 저장 했습니다.</span>
        					</h3>
        					<div class="contList_box step">
        						<div class="step_gauge">
    								<ul class="gauge_area">
    									<li class="inp opt_01">
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
    										<span class="msg">선택 해주세요</span>
    									</li>
    									<li class="inp opt_02">
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
    										<span class="msg">선택 해주세요</span>
    									</li>
    									<li class="inp opt_03">
    										<em>편안함</em>
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
    										<span class="msg">선택 해주세요</span>
    									</li>
    								</ul>
    							</div>
        					</div>
        				</div>
        				<div class="f_modal_contList modal_step_list step_on">
            				<h3 class="tit check">
            					<strong>상품평 입력</strong>
            					<span>리뷰를 20자 이상 남겨주세요</span>
            				</h3>
            				<textarea class="contList_text_box txtarea_b" placeholder="제품을 충분히 착용한 후 장단점, 착화 환경, 기능에 초점을 맞추어 구체적으로 작성해 주세요."></textarea>
            				<em class="textarea_hide_msg">베스트 상품평으로 선정되면 경험치 100xp를 추가로 받을 수 있습니다.</em>
        					<div class="tool_tip">
        						<div class="good_review_w">
        							<div class="good_review_c">
        								<div class="good_review_i">
        									<dl>
        										<dd>・가격, 프로모션 정보와 같이 자주 변경되는 정보</dd>
        										<dd>・제품 외적인 정보 (배송, 포장 등)</dd>
        										<dd>・욕설 등 부적절한 단어</dd>
        										<dd>・광고 등 상업적인 내용</dd>
        										<dd>・개인 정보</dd>
        									</dl>
        								</div>
        							</div>
        						</div>
        						<i class="material-icons">&#xE88E;</i>
        						<span class="msg_line">적합하지 않은 상품평</span>
        					</div>
        				</div>
            		</div>
            		<div class="f_modal_foot no_line modal_step_list step_on">
            			<div class="f_modal_btn btn_x2">
            				<a href="#" class="btn_ btn_xl_l2 btn_np btn_hover_a">취소</a>
            				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">저장</a>
            				<!-- 비활성화 버튼
            				<a href="#" class="btn_ btn_xl_l2 btn_disable">저장</a>
                            -->
            			</div>
            		</div>
        		</div>
        		<script>
        		
    				// 별점 기능 활성화
    				$(function(){
    					// 측면 변환 텍스트 목록
    					var starMsgArr = ["별점 평가를 입력하세요.","별로에요", "그저 그래요", "보통이에요", "좋아요", "마음에 들어요!"]
    					starRating($(".raring_input"), starMsgArr);
    				});
    				
    				// 착화감 기능
					var setReviewGauge = function(elem, msgArr, _start, _min, _max){
						if(elem.length > 0){
    						elem.slider({
                                min: _min,
                                max: _max,
                                value: _start,
                                slide: function( event, ui, handle, handleIndex) {
        							var msgElem = $(this).parent().parent().parent().find(".msg");
        							var inpElem = $(this).parent().find(".step_inp");
        							// 현제 스탭 번호 저장
        							inpElem.val(ui.value);
        							setGaugeHandle($(this), ui.value, _min, _max);
        							setGaugeMsg(msgElem, ui.value, msgArr);
                            	}
                        	});
    						setGaugeHandle(elem, _start, _min, _max)
    						setGaugeMsg(elem.parent().parent().parent().find(".msg"), _start, msgArr);
						}
					}

					// 게이지 메시지 셋팅
					var setGaugeMsg = function(_msgElem, _value, _msgArr){
						if(_value > 3){
							_msgElem.addClass("active");
						} else {
							_msgElem.removeClass("active");
						}
						_msgElem.text(_msgArr[_value]);
					}

					// 게이지 핸들러 셋팅
					var setGaugeHandle = function(_elem, _value, _min, _max){
						if(_value == _min) {
							_elem.find(".ui-slider-handle").addClass("step_first");
						} else if(_value == _max){
							_elem.find(".ui-slider-handle").addClass("step_last");
						} else {
							_elem.find(".ui-slider-handle").removeClass("step_first").removeClass("step_last");
    					}
					}
					
					var setGaugeStart = function(_elem, _msgArr){

						var gaugeClickCheck = false;
						var saveCount = 0;

						setReviewGauge(_elem.find(".slider-range-max"), _msgArr, 0, 1, 5);
						_elem.find(".ui-slider-handle").hide();
						
						_elem.find(".step_bar").bind({
							mousemove : function(e){
								_elem.find(".ui-slider-handle").show();
    							if(gaugeClickCheck == false){
    								var ofs = $(this).offset();
    								var result = ((event.pageX - ofs.left) / $(this).width() * 100) / 25;
    								var result = Math.round(result) + 1;
    								if(saveCount != result){
    									saveCount = result;
    									console.log(result);
    								}
    								setReviewGauge($(this).find(".slider-range-max"), _msgArr, result, 1, 5);
    							}
							},
							mouseleave : function(e){
								if(gaugeClickCheck == false){
    								$(this).find(".slider-range-max .ui-slider-handle").hide();
        							setGaugeMsg(_elem.find(".msg"), 0, _msgArr);
								}
							},
						});

						_elem.find(".ui-slider-handle").bind({
							click : function(event){
								var ofs = $(this).offset();
								var result = ((event.pageX - ofs.left) / $(this).width() * 100) / 25;
								var result = Math.round(result) + 1;
								setReviewGauge($(this).find(".slider-range-max"), _msgArr, result, 1, 5);
								$(this).unbind();
								gaugeClickCheck = true;

								console.log("click");
							},
						});
					}
    				
    				// 착화감 기능 설치
                    $(function() {

						// 상품평 입력 Focus 컨트롤
						$(".contList_text_box").focus(function(){
							$(this).parent().find(".textarea_hide_msg").show();
						});
						
						// 모달 팝업 Fix 활성화
                        setFixModal($("#reviewWrite"));
                        
                    	// 측면 변환 텍스트 목록
    					var gaugeMsgArr1 = ["선택 해주세요","작게 나왔어요", "작게 나온 편이에요", "평소 신는 사이즈가 딱 맞아요", "크게 나온 편이에요", "크게 나왔어요" ]; 
    					var gaugeMsgArr2 = ["선택 해주세요","좁게 나왔어요", "좁게 나온 편이에요", "잘 맞아요", "넓게 나온 편이에요", "넓게 나왔어요" ]; 
    					var gaugeMsgArr3 = ["선택 해주세요","잠시 신어도 불편해요", "불편해요", "보통이에요", "편해요", "하루종일 신어도 편해요" ]; 

    					setGaugeStart($(".step_gauge .opt_01"), gaugeMsgArr1);
    					setGaugeStart($(".step_gauge .opt_02"), gaugeMsgArr2);
    					setGaugeStart($(".step_gauge .opt_03"), gaugeMsgArr3);
						
                    });
                </script>
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
	<div class="f_modal_layer big f_modal_shadow blind">
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
        				<span class="msg loading"><i class="fa fa-spinner fa-pulse fa-fw"></i>로딩 중 입니다.</span>
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