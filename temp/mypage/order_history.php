
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
	
	<!-- 배송지 선택 -->
	<div class="f_modal_layer big blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>취소상세정보</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
    				<div class="choice_list_wrap">
						<ul class="choice_list">
							<li>
								<div class="choice_list_tit">
									<div class="custom_radio radio">
                						<label>
                							<input type="radio" checked="checked" name="addr">
                							<span class="box"></span>
                							<strong class="name">김미남</strong>
                    						<span class="tel">010-7777-7777</span>
                    						<span class="tel">010-7777-7777</span>
                							<span class="choice_list_cont">
            									<em class="addr">478-222</em>
            									서울시 서초구 방배로 22길 11 노블레스 빌딩 3층<br>
            									슈포래빗 1402동 1703호		
            								</span>
                						</label>  	
                					</div>	
								</div>
								<div class="custom_cbox cbox_d check">
                					<label>
                    					<input type="radio" id="d_addr" name="d_addr" value="">
                    					<span class="box"></span>
                    					<span class="label">기본 배송지</span>
                    				</label>
                				</div>	
							</li>
							<li>
								<div class="choice_list_tit">
									<div class="custom_radio radio">
                						<label>
                							<input type="radio" checked="checked" name="addr">
                							<span class="box"></span>
                							<strong class="name">김미남</strong>
                    						<span class="tel">010-7777-7777</span>
                    						<span class="tel">010-7777-7777</span>
                							<span class="choice_list_cont">
            									<em class="addr">478-222</em>
            									서울시 서초구 방배로 22길 11 노블레스 빌딩 3층<br>
            									슈포래빗 1402동 1703호		
            								</span>
                						</label>  	
                					</div>	
								</div>
								<div class="custom_cbox cbox_d check">
                					<label>
                    					<input type="radio" id="d_addr" name="d_addr" value="">
                    					<span class="box"></span>
                    					<span class="label">기본 배송지</span>
                    				</label>
                				</div>	
							</li>
							<li>
								<div class="choice_list_tit">
									<div class="custom_radio radio">
                						<label>
                							<input type="radio" checked="checked" name="addr">
                							<span class="box"></span>
                							<strong class="name">김미남</strong>
                    						<span class="tel">010-7777-7777</span>
                    						<span class="tel">010-7777-7777</span>
                							<span class="choice_list_cont">
            									<em class="addr">478-222</em>
            									서울시 서초구 방배로 22길 11 노블레스 빌딩 3층<br>
            									슈포래빗 1402동 1703호		
            								</span>
                						</label>  	
                					</div>	
								</div>
								<div class="custom_cbox cbox_d check">
                					<label>
                    					<input type="radio" id="d_addr" name="d_addr" value="">
                    					<span class="box"></span>
                    					<span class="label">기본 배송지</span>
                    				</label>
                				</div>	
							</li>
						</ul>
					</div>
				</div>
        		<div class="f_modal_foot sc_modal_foot">
        			<div class="f_modal_btn btn_x2 ">     			
        				<a href="#" class="btn_ btn_xl_l2 btn_hover_a">취소</a>
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">선택완료</a>
        			</div>		
        		</div>
    		</div>
		</div>
		<div class="f_modal_blind"></div>
	</div>
	
	<!-- 옵션변경 -->
	<div class="f_modal_layer big f_modal_shadow" style="display:none;">
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
										<dd>Green</dd>
										<dt>사이즈 : </dt>
										<dd>230</dd>
										<dt>수량 : </dt>
										<dd>1개</dd>
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
	<!-- 교환상세정보 -->
	<div class="f_modal_layer big f_modal_shadow blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>교환상세정보</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont cr_modal_cont">
					<table class="prd_list_a">
						<caption class="blind">장바구니</caption>
						<colgroup>
							<col class="col_thum">
							<col class="col_cont">
						</colgroup>
						<thead>
							<tr>
								<th colspan="2">
									<dl class="opt_tit_info">
										<dt>주문날짜</dt>
										<dd>2016.05.25</dd>
										<dt>주문번호</dt>
										<dd>2017021687496831</dd>
									</dl>
								</th>
							</tr>
						</thead>
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
										<dd>Green</dd>
										<dt>사이즈 : </dt>
										<dd>230</dd>
										<dt>수량 : </dt>
										<dd>1개</dd>
									</dl>
									<p class="price">
										<strong>184,000원</strong>
										<del>199,000원</del>
									</p>
								</td>
							  </tr>
						 </tbody>
					</table>  
					<div class="f_modal_step">
						<dl class="tit_list">
							<dt>취소사유</dt>
							<dd>구매의사취소</dd>
							<dt>상세사유</dt>
							<dd>와이프 미승인</dd>
						</dl>
						<ul class="step_list">
							<li>
								<img src="../img/modal_icon_sample_1.png" alt="">
								<span>1. 반품 신청</span>
							</li>
							<li>
								<img src="../img/modal_icon_sample_2.png" alt="">
								<span>2. 고객님 상품 발송</span>
							</li>
							<li>
								<img src="../img/modal_icon_sample_2.png" alt="">
								<span>3. 상품 확인</span>
							</li>
							<li>
								<img src="../img/modal_icon_sample_2.png" alt="">
								<span>4. 제품 환불</span>
							</li>
						</ul>
					</div>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn">
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">확인</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 반품신청 -->
	<div class="f_modal_layer big f_modal_shadow blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>반품신청</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont cr_modal_cont">
					<table class="prd_list_a">
						<caption class="blind">장바구니</caption>
						<colgroup>
							<col class="col_thum">
							<col class="col_cont">
						</colgroup>
						<thead>
							<tr>
								<th colspan="2">
									<dl class="opt_tit_info">
										<dt>주문날짜</dt>
										<dd>2016.05.25</dd>
										<dt>주문번호</dt>
										<dd>2017021687496831</dd>
									</dl>
								</th>
							</tr>
						</thead>
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
										<dd>Green</dd>
										<dt>사이즈 : </dt>
										<dd>230</dd>
										<dt>수량 : </dt>
										<dd>1개</dd>
									</dl>
									<p class="price">
										<strong>184,000원</strong>
										<del>199,000원</del>
									</p>
								</td>
							  </tr>
						 </tbody>
					</table>  	
					<div class="f_modal_list">
						<dl class="inp_list">
							<dt>반품사유</dt>
							<dd>
								<div class="sel_custom sel_nm_box gray sel_lar">
									<select>
										<option>등록순서</option>
									</select>
								</div>
							</dd>
							<dd>
								<textarea placeholder="반품 사유를 작성해 주세요." value="" class="txtarea_a txtarea_b"></textarea>
							</dd>
						</dl>
					</div>
        		</div>
        		<div class="f_modal_foot no_line">
        			<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_xl_l2 btn_hover_a">취소</a>        			
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">신청완료</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 교환신청 -->
	<div class="f_modal_layer big f_modal_shadow" style="display:none;">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>교환신청</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
					<table class="prd_list_a">
						<caption class="blind">장바구니</caption>
						<colgroup>
							<col class="col_thum">
							<col class="col_cont">
						</colgroup>
						<thead>
							<tr>
								<th colspan="2">
									<dl class="opt_tit_info">
										<dt>주문날짜</dt>
										<dd>2016.05.25</dd>
										<dt>주문번호</dt>
										<dd>2017021687496831</dd>
									</dl>
								</th>
							</tr>
						</thead>
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
        				<a href="#" class="btn_ btn_xl_l2 btn_cp btn_hover_shadow">신청완료</a>
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
				<dd><a href="#">로그인</a></dd>
			</dl>
			<p class="locate_msg">나이키 플라이니트 최대~50% OFF</p>
		</div>
	</div>
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>My Page</h2>
			<div class="tab_active_type">
				<ul>
					<li><a href="#">대시보드</a></li>
					<li><a href="#">멤버십</a></li>
					<li><a href="#">알림</a></li>
					<li><a href="#">새로운 활동</a></li>
					<li><a href="#">나의 리스트</a></li>
					<li><a href="#">히스토리</a></li>
					<li><a href="#">1:1문의</a></li>
					<li><a href="#">개인정보 설정</a></li>
					<li class="active"><a href="#">주문내역</a></li>										
				</ul>
			</div>
		</section>
		<!-- 구매내역 카운트 -->
		<div class="tit_sub_wrap">
			<h3 class="tit_head tit_sub_d">총 <span>6</span>건의 구매 내역이 있습니다.</h3>
			<dl class="tit_opt select">
				<dt class="blind">정렬</dt>
				<dd>
        			<div class="sel sel_custom sel_small_box sel_x1 sel_arr_rnd sel_arr_a">
						<select>
							<option>전체상태</option>
						</select>
					</div>
        			<div class="sel sel_custom sel_small_box sel_x1 sel_x1_long sel_arr_rnd sel_arr_a">
						<select>
							<option>최근 6개월간 주문하신 상품</option>
							<option>최근 1개월</option>
							<option>최근 3개월</option>
							<option>최근 6개월</option>
							<option>최근 3개월</option>
							<option>최근 1개월</option>
						</select>
					</div>
				</dd>
			</dl>
		</div>
		<section id="mypage">
			<div class="prd_top_info">
				<!-- 구매내역 리스트  -->
				<!-- 1 -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ deposit_wait">입금대기</strong>
    									<a href="#" class="state_add_btn rnd btn_hover_a">결제수단 변경</a>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">배송지 변경</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">사이즈 변경</a></li>
<!--     									<li>
    										<div class="btn_opt_msg">
            									<img src="../img/review-1.png" alt="">
            									<span>
            										전문 리뷰어 배지를 모으세요!<br>
            										리뷰 1개만 더 작성하시면 됩니다.
            									</span>
            								</div>
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">상품 리뷰 작성</a>
    									</li> -->
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table> 
				</div>
				<!-- 2 -->				
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ state_delivery">결제완료</strong>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">교환신청</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">반품/환불 신청</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">반품/환불 신청</a></li>
                                        <!--     									
                                        <li>
    										<div class="btn_opt_msg">
            									<img src="../img/review-1.png" alt="">
            									<span>
            										전문 리뷰어 배지를 모으세요!<br>
            										리뷰 1개만 더 작성하시면 됩니다.
            									</span>
            								</div>
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">상품 리뷰 작성</a>
    									</li> -->
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table> 
				</div>
				<!-- 3 -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ state_delivery">배송중</strong>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li>
     										<div class="btn_opt_msg">
            									<span class="ord_h_ship_date">
            										배송 예정일은<br>
            										<em>2017년 10월 28일</em> 입니다.
            									</span>
            								</div>   									
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_np2 ord_h_ship_ing">배송중</a>
    									</li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">교환 신청</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">반품/환불 신청</a></li>
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>

    				</table> 
				</div>
				<!-- 4 -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ trade">배송완료</strong>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li>
     										<div class="btn_opt_msg">
            									<span class="ord_h_acquire">
            										XP 100획득
            									</span>
            								</div>   									
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 ord_h_com">배송완료</a>
    									</li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">교환 신청</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">반품/환불 신청</a></li>
  										<li>
    										<div class="btn_opt_msg">
            									<img src="../img/review-1.png" alt="">
            									<span>
            										전문 리뷰어 배지를 모으세요!<br>
            										리뷰 1개만 더 작성하시면 됩니다.
            									</span>
            								</div>
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">상품 리뷰 작성</a>
    									</li>   									
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table> 
				</div>				
				<!-- 5 -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ state_wait">입금대기중</strong>
    									<a href="#" class="state_add_btn rnd btn_hover_a">주문 전체 취소</a>
    									<a href="#" class="state_add_btn rnd btn_hover_a">배송지 변경</a>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">사이즈 변경</a></li>
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
    									<dt>컬러 : </dt>
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">사이즈 변경</a></li>
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table> 
				</div>
				<!-- 5-2 -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ state_cancel">취소완료</strong>
    									<span class="state_msg">XP 100 획득!</span>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">취소상세정보</a></li>
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table> 
				</div>
				<!-- 6 -->
				<div class="prd_top_list">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ trade">교환완료</strong>
    									<span class="state_msg">XP 100 획득!</span>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">교환상세정보</a></li>
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table> 
				</div>
				<!-- 마지막  -->
				<div class="prd_top_list prd_top_list_last">
    				<table class="prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<thead>
    						<tr>
    							<th colspan="3">
    								<dl class="prd_order_info">
    									<dt>주문날짜</dt>
    									<dd>2016.05.25</dd>
    									<dt>주문번호</dt>
    									<dd><a href="#">2017021687496831</a></dd>
    								</dl>
    								<div class="state_icon">
    									<strong class="state_ state_delivery">배송중</strong>
    								</div>
    								<div class="total_order_price">
    									총 결제 금액 : <strong>89,100<span>원</span></strong>
    								</div>
    							</th>
    						</tr>
    					</thead>
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
    									<dd>Green</dd>
    									<dt>사이즈 : </dt>
    									<dd>230</dd>
    									<dt>수량 : </dt>
    									<dd>1개</dd>
    								</dl>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li>
     										<div class="btn_opt_msg">
            									<span class="ord_h_ship_date">
            										배송 예정일은<br>
            										<em>2017년 10월 28일</em> 입니다.
            									</span>
            								</div>   									
    										<a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2 ord_h_ship_ing">배송중</a>
    									</li>
    								</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table> 
				</div>				
			</div>
			<div class="btn_order_submit">
				<strong class="btn_head">
					<em class="user_level_x6">
						<img src="../img/user_level_bg.png" alt="레벨">
					</em>
					<span>
						Gold Ⅲ 멤버십까지 1,200xp가 남았습니다.<br>
						구매 후 리뷰를 작성하면 200xp경험치를 얻을 수 있습니다. 
					</span>
				</strong>
				<ul class="side_btn_list">
					<li class="btn_hover_a"><a href="#">구매내역보기</a></li>
					<li class="active"><a href="#">쇼핑계속하기</a></li>
				</ul>
			</div>		
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>