<?php include "../inc/header.php" ?>
<!-- 모달 팝업 -->
<!-- 모달팝업 부모 앨리먼트 -->
<!-- 
    팝업의 그림자가 모든 팝업에 1개만 적용 되어야 하기 때문에  [f_modal_perant] 앨리먼트를 별도로 껏다켰다를 반복 해야 합니다.
    따라서 팝업이 1개 이상 보여져야 할 경우에는   [f_modal_perant] 앨리먼트에 [open] 클래스를 추가 합니다.
-->
<div class="f_modal_perant">

	<!-- 모달 팝업 우선순위 [z1 ~ z6]까지 클래스로 만들어 놓았습니다. [z6]이 가장 우선순위가 높습니다. -->
	<!-- 디자인상 팝업마다 그림자가 투명하게 들어가 있습니다. 때문에 팝업이 겹칠 경우에는  [f_modal_shadow]를 가장 하위 우선순위 팝업에만 적용 해야 합니다.-->
	
	<!-- 메시지 팝업 -->
	<div class="f_modal_layer small f_modal_shadow" style="display:none">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="f_modal_msg">
        				<span class="msg_mid">
        					수정되었습니다.<br>
        					메시지 내용이 길어질 경우에 여백을 일정 여백을 가지고 있습니다.
        					메시지 내용이 길어질 경우에 여백을 일정 여백을 가지고 있습니다.
    					</span>
        			</div>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_fbtn">
        				<a href="#" class="btn_ btn_xl_l1">확인</a>
        			</div>
        		</div>
    		</div>
		</div>
	</div>
	<!-- 나의 리스트에 추가 되었습니다. (하트 아이콘 있는 버전) -->
	<div class="f_modal_layer small f_modal_shadow" style="display:none">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="f_modal_msg">
        				<!-- 아이콘 -->
        				<i class="icon icon_heart"></i>
        				<span class="msg_mid">
        					나의 리스트에 추가 되었습니다.<br>
        					메시지 내용이 길어질 경우에 여백을 일정 여백을 가지고 있습니다.
        					메시지 내용이 길어질 경우에 여백을 일정 여백을 가지고 있습니다.
        				</span>
        			</div>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_fbtn">
        				<a href="#" class="btn_ btn_xl_l1">확인</a>
        			</div>
        		</div>
    		</div>
		</div>
	</div>
	<!-- 장바구니에 추가 -->
	<div class="f_modal_layer big f_modal_shadow">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>옵션변경</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
					<table class="prd_list_a">
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
										<dt>컬러 : </dt>
										<dd><strong>Green</strong></dd>
										<dt>사이즈 : </dt>
										<dd><strong>230</strong></dd>
										<dt>수량 : </dt>
										<dd>
											<!-- 수량 변경 버튼 -->
											<a href="#" class="icon_plus"></a>
											<strong>1</strong>개
											<a href="#" class="icon_minus"></a>
										</dd>
									</dl>
									<p class="price">
										<strong>184,000원</strong>
										<del>199,000원</del>
									</p>
								</td>
							  </tr>
						 </tbody>
					</table>  	
					<div class="f_modal_colx2">
						<h3 class="tit">사이즈 / 컬러 변경</h3>
						<div class="col">
							<h4 class="col_tit">
								<strong>사이즈</strong>
								<span>김하영님에게 <em>270</em> 사이즈 추천</span>
							</h4>
							<div class="check_opt_box">
									<ul class="x8">
    									<li><label class="check_opt_inp"><input type="checkbox" name="230" value="230"><span>230</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="235" value="235" disabled><span>235</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="240" value="240"><span>240</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="245" value="245"><span>245</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="250" value="250"><span>250</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="255" value="255" disabled><span>255</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="260" value="260" disabled><span>260</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="265" value="265" disabled><span>265</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="270" value="270"><span>270</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="275" value="275"><span>275</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="280" value="280"><span>280</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="285" value="285" disabled><span>285</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="290" value="290" disabled><span>290</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="295" value="295"><span>295</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="300" value="300"><span>300</span></label></li>
										<li><label class="check_opt_inp"><input type="checkbox" name="305" value="305" disabled><span>305</span></label></li>
									</ul>
							</div>
						</div>
						<div class="col">
							<h4 class="col_tit">
								<strong>컬러 : BLACK/RED</strong>
							</h4>
							<ul class="prd_sml_list x5">
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="" checked="checked" >
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
							</ul>
						</div>
					</div>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_xl_l2 btn_hover_a">취소</a>        			
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">바로구매</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 옵션 변경 -->
	<div class="f_modal_layer big f_modal_shadow" style="display:none">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>옵션변경</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
					<table class="prd_list_a">
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
										<dt>컬러 : </dt>
										<dd><strong>Green</strong></dd>
										<dt>사이즈 : </dt>
										<dd><strong>230</strong></dd>
										<dt>수량 : </dt>
										<dd>
											<!-- 수량 변경 버튼 -->
											<a href="#" class="icon_plus"></a>
											<strong>1</strong>개
											<a href="#" class="icon_minus"></a>
										</dd>
									</dl>
									<p class="price">
										<strong>184,000원</strong>
										<del>199,000원</del>
									</p>
								</td>
							  </tr>
						 </tbody>
					</table>  	
					<div class="f_modal_colx2">
						<h3 class="tit">사이즈 / 컬러 변경</h3>
						<div class="col">
							<h4 class="col_tit">
								<strong>사이즈</strong>
								<span>김하영님에게 <em>270</em> 사이즈 추천</span>
							</h4>
							<div class="check_opt_box">
									<ul class="x8">
    									<li><label class="check_opt_inp"><input type="checkbox" name="230" value="230"><span>230</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="235" value="235" disabled><span>235</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="240" value="240"><span>240</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="245" value="245"><span>245</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="250" value="250"><span>250</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="255" value="255" disabled><span>255</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="260" value="260" disabled><span>260</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="265" value="265" disabled><span>265</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="270" value="270"><span>270</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="275" value="275"><span>275</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="280" value="280"><span>280</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="285" value="285" disabled><span>285</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="290" value="290" disabled><span>290</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="295" value="295"><span>295</span></label></li>
    									<li><label class="check_opt_inp"><input type="checkbox" name="300" value="300"><span>300</span></label></li>
										<li><label class="check_opt_inp"><input type="checkbox" name="305" value="305" disabled><span>305</span></label></li>
									</ul>
							</div>
						</div>
						<div class="col">
							<h4 class="col_tit">
								<strong>컬러 : BLACK/RED</strong>
							</h4>
							<ul class="prd_sml_list x5">
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="" checked="checked" >
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
								<li>
									<label class="prd_sml_radio">
										<input type="radio" id="" name="prd_sml" value="">
										<img src="../img/prd_sml_sample.png" alt="나이키" class="thum">
									</label>
								</li>
							</ul>
						</div>
					</div>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_xl_l2 btn_hover_a">취소</a>        			
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">변경완료</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 상품이 장바구니에 추가되었습니다. -->
	<div class="f_modal_layer big f_modal_shadow" style="display:none;">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>상품이 장바구니에 추가되었습니다. </h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<table class="prd_list_a">
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
									<span class="brand v2"><img src="../img/nike_x34.png" alt="나이키" ></span>
									<strong class="name">Nike Metcon DSX Flyknit</strong>
									<dl class="opt">
										<dt>컬러 : </dt>
										<dd>Green</dd>
										<dt>사이즈 : </dt>
										<dd>230</dd>
										<dt>수량 : </dt>
										<dd>
										1개
										</dd>
									</dl>
									<p class="price">
										<strong>184,000원</strong>
										<del>199,000</del>
									</p>
									<p class="price_b">
										<em>
											장바구니 소계 : 184,000원
											<span>(1개 항목)</span>
										</em>
									</p>
								</td>
							  </tr>
						 </tbody>
					</table>
        		</div>
        		<div class="f_modal_foot">
    				<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_xl_l2 btn_hover_a">장바구니로 이동</a>        			
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">바로 구매</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 상품이 장바구니에 추가되었습니다.  -->
	<div class="f_modal_layer big f_modal_shadow" style="display:none;">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>
        				상품이 장바구니에 추가되었습니다. 
        				<em>
        					해당 상품은 이미 장바구니에 있었기 때문에 수량이 업데이트 되었습니다.<br>
							전부 구매를 원하지 않으시면 장바구니에서 수량을 변경하실 수 있습니다.
        				</em>
        			</h2>
        			<a href="#" class="btn_close vTop">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<table class="prd_list_a">
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
									<span class="brand v2"><img src="../img/nike_x34.png" alt="나이키" ></span>
									<strong class="name">Nike Metcon DSX Flyknit</strong>
									<dl class="opt">
										<dt>컬러 : </dt>
										<dd>Green</dd>
										<dt>사이즈 : </dt>
										<dd>230</dd>
										<dt>수량 : </dt>
										<dd>
										1개
										</dd>
									</dl>
									<p class="price">
										<strong>184,000원</strong>
									</p>
									<p class="count">
										<span class="default">기존 수량 : 1개</span>
										<span class="current">현재 수량 : 2개</span>
									</p>
									<p class="price_b">
										<em>
											장바구니 소계 : 184,000원
											<span>(1개 항목)</span>
										</em>
									</p>
								</td>
							  </tr>
						 </tbody>
					</table>
        		</div>
        		<div class="f_modal_foot">
    				<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_xl_l2 btn_hover_a">장바구니로 이동</a>        			
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">바로 구매</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 주소 찾기 -->
	<div class="f_modal_layer mid f_modal_shadow"  style="display:none;">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>주소 찾기</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="f_modal_addr">
        				<form action="">
            				<fieldset>
            					<legend class="blind">주소찾기</legend>
            					<div class="inp_sch_wrap">
            						<div class="search">
        					 	      	<input type="text" class="inp_nm_box" placeholder="도로명 , 건물명, 지번을 입력하세요 ">
        					 		</div>
        					       	<a href="#" class="btn_sch_icon btn_hover_shadow">주소찾기</a>
    					       	</div> 				
            				</fieldset>
        				</form>
        				<!-- 주소 찾기 검색 전 -->
        				<div class="addr_guide blind">
        					<strong class="addr_guide_tit">우편번호 통합검색 Tip</strong>
        					<ul>
        						<li>도로명 + 건물번호 (예: 송파대로 570)</li>
        						<li>동/읍/면/리 + 번지 (예: 신천동 7-30)</li>
        						<li>건물명, 아파트명 (예: 반포자이아파트)</li>
        					</ul>
        				</div>
        				<!-- 주소찾기 검색 후 -->
        				<div class="addr_result_wrap ">
        					<ul>
        						<li>
        							<div class="addr_road_name">
        								<a href="#">
            								<strong>도로명</strong>
            								<span>서울특별시 서초구 방배로22길 20</span>
        								</a>
        							</div>
        							<div class="addr_number_name">
        								<a href="#">
            								<strong>지번</strong>
            								<span>서울특별시 서초구 방배1동 901-10번지</span>
        								</a>
        							</div>
        							<em class="addr_number"><a href="#">[12218]</a></em>
        						</li>
        						<li>
        							<div class="addr_road_name">
        								<a href="#">
            								<strong>도로명</strong>
            								<span>서울특별시 서초구 방배로22길 20</span>
        								</a>
        							</div>
        							<div class="addr_number_name">
        								<a href="#">
            								<strong>지번</strong>
            								<span>서울특별시 서초구 방배1동 901-10번지</span>
        								</a>
        							</div>
        							<em class="addr_number"><a href="#">[12218]</a></em>
        						</li>
        					</ul>
        				</div>
        				<!-- 페이징 -->
						<div class="pager_type_a">
							<a href="#" class="pager_btn first"></a>
							<a href="#" class="pager_btn prev"></a>
							<ol>
			            		<li><a href="#">1</a></li>
			            		<li><a href="#" class="active">2</a></li>
			            		<li><a href="#">3</a></li>
			            		<li><a href="#">4</a></li>
			            		<li><a href="#">6</a></li>
			            		<li><a href="#">7</a></li>
			            		<li><a href="#">8</a></li>
			            		<li><a href="#">9</a></li>
			            		<li><a href="#">10</a></li>
			        		</ol>
			      			<a href="#" class="pager_btn next"></a>     
			      			<a href="#" class="pager_btn last"></a>     
						</div>
        			</div>
        		</div>
    		</div>
		</div>
	</div>
	<!-- 모달 팝업 그림자 -->
	<div class="f_modal_blind"></div>
</div>
<!-- 모달 팝업 END -->
<!-- /////// -->
<section class="sub_layout">
	<div class="sub_locate">
		<div class="custom_inner">
			<dl class="locate_list">
				<dt><a href="#">홈</a></dt>
				<dd><a href="#">스토어</a></dd>
				<dd><a href="#">남자</a></dd>
			</dl>
			<p class="locate_msg">나이키 플라이니트 최대~50% OFF</p>
		</div>
	</div>
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>Check out</h2>
			<div class="tab_step_arr">
				<ol>
					<li class="">01 장바구니</li>
					<li class="active">02 주문/결제</li>
					<li class="">03 주문완료</li>
				</ol>
			</div>
		</section>
		<!-- 장바구니 리스트 -->
		<h3 class="tit_sub_a">02 주문/결제</h3>
		<div class="prd_list_type">
			<table class="prd_list_a">
				<caption class="blind">장바구니</caption>
				<colgroup>
					<col class="col_check">
					<col class="col_thum">
					<col class="col_cont">
					<col class="col_price">
				</colgroup>
				<tbody>
					<tr>
						<td class="check">
							<div class="custom_cbox cbox_c">
    							<label>
    								<input type="checkbox">
    								<span class="box"></span>
    							</label>
    						</div>
						</td>
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
								<dt>컬러 : </dt>
								<dd>Green</dd>
								<dt>사이즈 : </dt>
								<dd>230</dd>
								<dt>수량 : </dt>
								<dd>1개</dd>
							</dl>
							<a href="#" class="btn_modify">편집</a>
							<div class="btn_del">
								<a href="#">상품 삭제</a>
							</div>
						</td>
						<td class="price">
							<del class="customer">99,000 원</del>
							<strong class="sell_price">89,100 원</strong>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="order_result_box">
				<dl class="result_box_a">
					<dt>총 상품 금액</dt>
					<dd class="price">184,000원</dd>
				</dl>
				<div class="ord_discount">
					<em>할인</em>
					<span class="ord_mem">멤버십 등급 할인:<strong>Gold II</strong>(3%)</span>
					<span>5,520원</span>
				</div>
				<div class="ord_coupon">
					<dl>
						<dt>쿠폰</dt>
						<dd>15,000</dd>
					</dl>
					<table class="ord_coupon_tab">
						<colgroup>
							<col width="252">
							<col width="356">
							<col width="96">
							<col width="215">
						</colgroup>
						<tr>
							<th>쿠폰 종류</th>
							<th>쿠폰 사용 정보</th>
							<th>유효기간</th>
							<th>할인 금액</th>
						</tr>
						<!-- 1열 -->
						<tr>
							<td>
					 			<div class="check_sort custom_cbox cbox_b ord_present_box coupone_select_list">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<em class="box"></em>
                            			<strong class="add_chk coupone_select_list ">	
                							<span><em>5,000원</em>가입 환영</span>
                    					</strong>
                					 </label>
                        		</div>						
							</td>
							<td class="cu_info">
								모든 상품 구입에 사용할 수 있습니다.<br>
								중복 사용이 가능합니다.
							</td>
							<td class="cu_data">
								없음
							</td>
							<td class="cu_price">
								5,000원
							</td>
						</tr>
						
						<!-- 2열 -->
						<tr>
							<td>
					 			<div class="check_sort custom_cbox cbox_b ord_present_box coupone_select_list">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<em class="box"></em>
                            			<strong class="add_chk coupone_select_list ">	
                							<span><em>5,000원</em>레벨업 - Silver III</span>
                    					</strong>
                					 </label>
                        		</div>						
							</td>
							<td class="cu_info">
								모든 상품 구입에 사용할 수 있습니다.<br>
								중복 사용이 가능합니다.
							</td>
							<td class="cu_data">
								없음
							</td>
							<td class="cu_price">
								&nbsp;
							</td>
						</tr>
						
						<!-- 3열 -->
						<tr>
							<td>
					 			<div class="check_sort custom_cbox cbox_b ord_present_box coupone_select_list">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<em class="box"></em>
                            			<strong class="add_chk coupone_select_list ">	
                							<span><em>5,000원</em>레벨업 - Gold I</span>
                    					</strong>
                					 </label>
                        		</div>						
							</td>
							<td class="cu_info">
								모든 상품 구입에 사용할 수 있습니다.<br>
								중복 사용이 가능합니다.
							</td>
							<td class="cu_data">
								없음
							</td>
							<td class="cu_price">
								&nbsp;
							</td>
						</tr>
						
						<!-- 4열 -->
						<tr>
							<td>
					 			<div class="check_sort custom_cbox cbox_b ord_present_box coupone_select_list">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<em class="box"></em>
                            			<strong class="add_chk coupone_select_list ">	
                							<span><em>10%</em>스니커즈 할인</span>
                    					</strong>
                					 </label>
                        		</div>						
							</td>
							<td class="cu_info">
								스니커즈에 한해 사용할 수 있습니다.3만원 이상,최대 1만원 할인<br>
								<span>다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.</span>
							</td>
							<td class="cu_data">
								2017년 10월 23일
							</td>
							<td class="cu_price">
								10,000원
							</td>
						</tr>
						
						<!-- 5열 -->
						<tr>
							<td>
					 			<div class="check_sort custom_cbox cbox_b ord_present_box coupone_select_list">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<em class="box"></em>
                            			<strong class="add_chk coupone_select_list ">	
                							<span><em>10%</em>2017년 여름 세일</span>
                    					</strong>
                					 </label>
                        		</div>						
							</td>
							<td class="cu_info">
								모든 상품 구입에 사용할 수 있습니다.<br>
								<span>다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.</span>
							</td>
							<td class="cu_data">
								2017년 10월 23일
							</td>
							<td class="cu_price">
							</td>
						</tr>																																																	
					</table>
				</div>
				
					<style>
                .ord_discount {
                    	background-color: #F9F9F9;
                    	border-top:1px solid #EBEBEB;
                    	border-bottom:1px solid #EBEBEB;
                    	padding:10px 0 10px 0;
                    }
                    .ord_discount > em {
                    	color: #8F8F8F;		
                    	font-size: 16px;	
                    	line-height: 40px;
                    	margin-left: 29px;	
                    }
                    .ord_discount .ord_mem {
                    	color: #8F8F8F;		
                    	font-size: 16px;	
                    	line-height: 40px;
                    	margin-left: 100px;	
                    }
                    .ord_discount .ord_mem > strong {
                    	font-size: 16px;	
                    	line-height: 40px;	
                    	color:#909090;
                    	margin-left:5px;	
                    }
                    .ord_discount span:last-child {
                    	color: #F5A623;		
                    	font-size: 16px;	
                    	line-height: 40px;	
                    	text-align: right;
                    	float:right;
                    	margin-right: 18px;	
                    }					
					     .order_result_box {
					       border-top:2px solid #4A4A4A;
					     }
					     .ord_coupon_tab {
					     }
					     .ord_coupon_tab th {
                            font-weight:500;
                            color: #747474;
                            font-size: 12px;	
                            line-height: 18px;
                            padding-bottom: 13px;
                            text-align:left;					     
					     }
					     .ord_coupon_tab th:nth-child(1){
					       padding-left:45px;
					     }
					     .ord_coupon_tab th:nth-child(4){
					       text-align:right;
					     }
					     .ord_coupon_tab td {
                            color: #747474;
                            font-size: 12px;	
                            line-height: 16px;
                            padding-bottom:8px;
					     }
					     .ord_coupon_tab .cu_info span {
                            color: #F5A623;	
                            font-size: 12px;	
                            line-height: 16px;
                            text-decoration:underline;					     
					     }
					     .ord_coupon_tab .cu_price {
                            color: #747474;
                            font-size: 16px;	
                            line-height: 40px;	
                            text-align: right;					               
					     }
					     .ord_present_box label{
					         display:inline-block;
					     }
				         .ord_present_box [type=checkbox]:checked + .box + .add_chk span {
                            background-color:#f8e71c;
                            border: 1px solid #BBBBBB;
				        }
				        .ord_coupon_tab .coupone_select_list label span {
				            height:42px;
				            width:180px;
				            border-radius: 3px;
				            line-height:16px;
				            padding-top:10px;
				        }
				        .ord_coupon_tab .coupone_select_list label span em {
				            display:block;
				        }
				        .coupone_select_list {
				            display:inline-block;
				            padding:0;
				            border:0;
				            vertical-align:middle;
				         }
				         .coupone_select_list [type="checkbox"] + .box {
				            vertical-align:middle;
				         }
				         .order_result_box .ord_free_color {
				            color:#F5A623 !important;
				         }
				         
				         .ord_coupon_box {
				            backround-color:red !important;
				            float:left;
				         }
				         .ord_coupon_box label {
			         	    backround-color:red;
				         }
				         .ord_coupon_box label .ord_coupon_select_list {
				            background-color:red;
				            display:inline-block;
				            float:left;
				         }
                        .ord_discount {
                        	background-color: #F9F9F9;
                        	border-top:1px solid #EBEBEB;
                        	border-bottom:1px solid #EBEBEB;
                        	padding:10px 0 10px 0;
                        }
                        .ord_discount > em {
                        	color: #8F8F8F;		
                        	font-size: 16px;	
                        	line-height: 40px;
                        	margin-left: 29px;	
                        }
                        .ord_discount .ord_mem {
                        	color: #8F8F8F;		
                        	font-size: 16px;	
                        	line-height: 40px;
                        	margin-left: 100px;	
                        }
                        .ord_discount .ord_mem > strong {
                        	font-size: 16px;	
                        	line-height: 40px;	
                        	color:#909090;
                        	margin-left:5px;	
                        }
                        .ord_discount span:last-child {
                        	color: #F5A623;		
                        	font-size: 16px;	
                        	line-height: 40px;	
                        	text-align: right;
                        	float:right;
                        	margin-right: 18px;	
                        }
					</style>
				
				<dl class="result_box_a">
					<dt>배송비</dt>
					<dd class="price ord_free ord_free_color">무료</dd>
				</dl>				
				<div class="total_price">
					<em class="tit">총 결제 금액</em>
					<strong class="total">171,480원</strong>
				</div>
			</div>
		</div>
		<script>
		/*
			$(document).ready(function(){
				$('.ord_present_box .box').click(function(){
						$('.coupone_select_list span').css({'background-color':'#000'});
						alert("sdfs");
					});
				});
		*/
		</script>
		<h3 class="tit_sub_a">
		배송지 정보
    		<span class="check_sort custom_cbox cbox_b ord_present_box">
    			<label>
    				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
    				<span class="box"></span>
    				<span class="label">선물인가요?</span>
    			</label>
    		</span>			
		</h3>
		<div class="addr_wrap">
			<table class="addr_inp_table">
				<caption class="blind">배송지정보</caption>
				<colgroup>
					<col class="tit">
					<col class="cont">
				</colgroup>
				<tbody>
					<tr>
						<th>배송지
						</th>
						<td class="radio">
							<div class="table_radio custom_radio">
								<label>
									<input type="radio" checked="checked" name="addr">
									<span class="box"></span>
									<span class="label">기본 배송지</span>
								</label>
							</div>
							<div class="table_radio custom_radio">
								<label>
									<input type="radio" name="addr">
									<span class="box"></span>
									<span class="label">새로운 배송지</span>
								</label>
							</div>
							<span class="ord_ship_list">배송지 목록 (3)</span>
						</td>
					</tr>
					<tr>
						<th>수령인</th>
						<td>
							<input type="text" class="inp_nm_box h_mid w_x3">
						</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td class="inline_btn_wrap">
							<div class="tel_inp_wrap">
    							<input type="text" class="inp_nm_box h_mid w_x1">
    							<span class="inp_hyphen"></span>
    							<input type="text" class="inp_nm_box h_mid w_x1">
    							<span class="inp_hyphen"></span>
    							<input type="text" class="inp_nm_box h_mid w_x1">
							</div>
							<a href="#" class="btn_inp_opt w_x3 btn_hover_a">휴대전화번호 인증</a>
						</td>
					</tr>
					<tr>
						<th class="tit_top">주소</th>
						<td>
							<div class="addr_inp_wrap">
								<a href="#" class="btn_inp_opt w_x3 btn_hover_a">주소찾기</a>
								<input type="text" class="inp_nm_box h_mid w_x2">
							</div>
							<div class="addr_inp_add">
								<input type="text" class="inp_nm_box h_mid w_xf">
								<input type="text" class="inp_nm_box h_mid w_xf">
							</div>
							<div class="addr_inp_check">
								<div class="custom_cbox cbox_d">
                					<label>
                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
                    					<span class="box"></span>
                    					<span class="label">기본 배송지로 저장</span>
                    				</label>
                				</div>	
							</div>
						</td>
					</tr>
					<tr>
						<th>배송시 요청사항</th>
						<td>
							<input type="text" class="inp_nm_box h_mid w_xf">
						</td>
					</tr>
					<tr>
						<th class="ord_pt_box_tit">선물 메세지</th>
						<td>
							<textarea class="ord_pt_box" name="textarea"></textarea>							
						</td>
					</tr>
				</tbody>
			</table>			
    		<div class="addr_result">
            	<dl>
            		<dt>주문인</dt>
            		<dd>김밀크</dd>
            		<dt>연락처</dt>
            		<dd>010-7777-7777</dd>
            		<dt>이메일</dt>
            		<dd>ma******@na***com</dd>
            	</dl>
            	<a href="#" class="btn_modify btn_inp_opt w_x2 btn_hover_a">개인 정보 변경</a>
    		</div>
		</div>
		<div class="addr_wrap addr_wrap_v2">
			<table class="addr_inp_table">
				<caption class="blind">배송지정보</caption>
				<colgroup>
					<col class="tit">
					<col class="cont">
				</colgroup>
				<tbody>
					<tr>
						<th>배송지
						</th>
						<td class="radio">
							<div class="table_radio custom_radio">
								<label>
									<input type="radio" checked="checked" name="addr">
									<span class="box"></span>
									<span class="label">기본 배송지</span>
								</label>
							</div>
							<div class="table_radio custom_radio">
								<label>
									<input type="radio" name="addr">
									<span class="box"></span>
									<span class="label">새로운 배송지</span>
								</label>
							</div>
							<span class="ord_ship_list">배송지 목록 (3)</span>
						</td>
					</tr>
					<tr>
						<th>수령인</th>
						<td>
							김하영
						</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>
							010 - 8888 - 7777
						</td>
					</tr>
					<tr>
						<th class="tit_top">주소</th>
						<td class="address">
							서울특별시 서초구 서초2동<br>
							732-1 하영빌딩 3층
							<div class="addr_inp_check">
								<div class="custom_cbox cbox_d">
                					<label>
                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
                    					<span class="box"></span>
                    					<span class="label ord_ship_list">기본 배송지로 저장</span>
                    				</label>
                				</div>	
							</div>
						</td>
					</tr>
					<tr>
						<th>배송시 요청사항</th>
						<td>
							<input type="text" class="inp_nm_box h_mid w_xf" placeholder="빠른 배송 부탁드립니다.">
						</td>
					</tr>
				</tbody>
			</table>			
    		<div class="addr_result">
            	<dl>
            		<dt>주문인</dt>
            		<dd>김밀크</dd>
            		<dt>연락처</dt>
            		<dd>010-7777-7777</dd>
            		<dt>이메일</dt>
            		<dd>ma******@na***com</dd>
            	</dl>
            	<a href="#" class="btn_modify btn_inp_opt w_x2 btn_hover_a">개인 정보 변경</a>
    		</div>
		</div>
		<style>
		   .addr_wrap_v2 {
		   }
		   .addr_wrap_v2 .address {
		      background-color;red;
		   }
		</style>   		    		
		<h3 class="tit_sub_a">결제정보</h3>
		<div class="payment_wrap">
			<h4 class="payment_tit">결제수단 선택</h4>
			<dl class="payment_list">
				<dt class="payment_nav">
					<strong class="payment_radio custom_radio">
    					<label>
    						<input type="radio" checked="checked" name="payment">
    						<span class="box"></span>
    						<span class="label">신용카드</span>
    					</label>
					</strong>
					<strong class="payment_radio custom_radio">
    					<label>
    						<input type="radio" name="payment">
    						<span class="box"></span>
    						<span class="label">실시간 계좌이체</span>
    					</label>
					</strong>
					<strong class="payment_radio custom_radio">
    					<label>
    						<input type="radio" name="payment">
    						<span class="box"></span>
    						<span class="label">무통장 입금 (가상계좌)</span>
    					</label>
					</strong>
				</dt>
				<dd class="payment_child">
					<!-- 신용카드 결제 정보 -->
					<div class="child">
    					<div class="tip_list">
    						<a href="#">무이자 할부혜택</a>
    						<a href="#">제휴/할인카드</a>
    					</div>
    					<div class="refund_account_info_register">
    						<em>환불 계좌 정보 등록</em>
    						<table class="bank_register">
    							<col width="">
    							<col width="">
    							<tr>
    								<td class="ord_bank">은행</td>
    								<td>
                    					<div class="sel_custom sel_nm_box sel_mid ord_sel_box">
                    						<select class="sel_mid">
                    							<option>신한은행</option>
                    						</select>
                    					</div>    								
    								</td>
    							</tr>
    							<tr>
    								<td>예금주</td>
    								<td>
    									<input type="text" class="inp_nm_box h_mid w_xf ord_ib_o">
    								</td>
    							</tr>
    							<tr>
    								<td>계좌번호</td>
    								<td>
										<input type="text" class="inp_nm_box h_mid w_xf ord_ib_t">    								
    								</td>
    							</tr>    						
    						</table>
    						<p>저장된 환불 계좌 정보는 마이 페이지>사용자 정보·환경 설정에서 변경할 수 있습니다.</p>
    					</div>
    					<ul class="tip_info_list">
    						<li>*  결제내역은 LG데이콤 (http://pgweb.dacom.net/pg/wmp/Home2009/index.jsp)을 통해 조회 및 전표조회가 가능합니다. (LG데이콤 고객센터1544 - 7772)</li>
                            <li>*  가상계좌는(무통장 입금)는 결제창에서 원하시는 은행을 선택하여 입금처리 하시면 됩니다.</li>
                            <li>*  가상계좌(무통장 입금)선택 시 결제 후 다음날 24시까지 입금하셔야 결제가 완료됩니다. (미 입금 시 자동 취소)</li>
                            <li>*  가상계좌(무통장 입금)는 고객님만을 위한 1회용 보안계좌입니다. 반드시 정확한 금액과 정보를 입력하셔야 입금처리 및 결제확인이 가능합니다.</li>
                            <li>*  실시간 계좌이체의 경우에는 실시간으로 자동이체 되기 때문에 현금영수증이 즉시 발행됩니다.</li>
                            <li>*  가상계좌(무통장 입금)의 경우에는 현금 영수증 발행이 필요하신 경우 주문/배송조회 에서 [현금영수증신청을]누르셔야 발행처리 됩니다.</li>
    					</ul>
					</div>
					<!-- 실시간 계좌이체 결제 정보 -->
					<div class="child"></div>
					<!-- 무통장 입금 (가상계좌) 결제 정보 -->
					<div class="child"></div>
				</dd>
			</dl>
		</div>
		<div class="btn_order_submit">
			<strong class="btn_head">
				<em class="user_level_x6">Gold<br>III</em>
				<span>
					Gold Ⅲ 멤버십까지 1,200xp가 남았습니다.<br>
					구매 후 리뷰를 작성하면 200xp경험치를 얻을 수 있습니다. 
				</span>
			</strong>
			<ul class="side_btn_list">
				<li class="btn_hover_a"><a href="#">취소</a></li>
				<li class="active"><a href="#">결제하기</a></li>
			</ul>
		</div>
		<script>
			// 결제 정보 탭
    		$(function(){
    			$(".payment_list .payment_child").sectionDisplay({
    				act : "click",
    				start:0,
    				nav : $('.payment_list .payment_nav'),
    				auto: false
    			});
    		});
		</script>
	</article>
</section>
<?php include "../inc/footer.php" ?>